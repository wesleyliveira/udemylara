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
        //CRIANDO TABELA 
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('filial',30);
            $table->timestamps();
        });
        //CRIANDO TABELA
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->timestamps();
            //CHAVE ESTRANGEIRA
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');

        });
            //REMOVE AS COLUNAS DE PRODUTOS (PARA NÃO HAVER DUPLICAÇÃO)
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn(['preco_venda', 'estoque_minimo','estoque_maximo']);
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //REVERTE ADICIONANDO COLUNAS NOVAMENTE
        Schema::table('produtos', function (Blueprint $table) {
            $table->decimal('preco_venda',8,2);
            $table->integer('estoque_minimo',);
            $table->integer('estoque_maximo',);
        });
        //REMOVENDO TABELAS
        Schema::dropIfExists('produto_filiais');
        
        Schema::dropIfExists('filiais');
    } 
};
