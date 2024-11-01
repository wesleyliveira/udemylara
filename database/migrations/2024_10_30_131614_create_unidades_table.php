<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //RELACIONAMENTO 1 PARA MUITOS
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string( 'unidade',5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //O DROP COMEÇA TIRANDO A CHAVE ESTRANGEIRA E DEPOIS A COLUNA, SEMPRE DE TRÁS PRA FRENTE
        Schema::table('produto_detalhes', function (Blueprint $table) {

             
            $table->dropForeign('produto_detalhes_unidade_id_foreign');

            $table->dropColumn('unidade_id');
        });
        Schema::table('produtos', function (Blueprint $table) {

             
            $table->dropForeign('produtos_unidade_id_foreign');

            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
};
