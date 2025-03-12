<div class="card p-5">
    <p class="mb-3">Contatos</p>
    
    @if ($contacts->count() === 0)
        <div class="opacity-50">Não há Contatos</div>
    @else
    
        @foreach ($contacts as $contact)
            <div class="card bg-dark p-3 mb-1">
                <div class="row">
                    <div class="col">Nome: {{ $contact->name }}</div>
                    <div class="col">E-mail: {{ $contact->email }}</div>
                    <div class="col">Telefone: {{ $contact->phone }}</div>
                    <div class="col">
                        <a class="btn btn-sm btn-danger" href="{{ route('contacts.delete', ['id' => $contact->id]) }}">Deletar</a>
                    </div>
                </div>
            </div>
        @endforeach
        
    @endif
</div>
