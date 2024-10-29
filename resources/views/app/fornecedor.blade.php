<h3>Fornecedor</h3>

@isset($fornecedores)
    @forelse($fornecedores as $indice => $fornecedor)
        Interação atual: {{@$loop->iteration}}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if ($loop->first)
            Primeira iteração
        @endif
        @if ($loop->last)
            Ultima iteração
            <br> 
            Total de registros: {{$loop->count}}
        @endif
        
        <hr>
    @empty
        Não existem fornecedores cadastrados
    @endforelse

@endisset
