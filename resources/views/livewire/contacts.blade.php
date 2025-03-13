<div class="card p-5">
    <h3 class="text-center">CONTATOS</h3>

    <hr>
    
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
                        <a class="btn btn-sm btn-success" href="{{ route('contacts.edit', ['id' => $contact->id]) }}">Editar</a>
                        <a class="btn btn-sm btn-danger" href="{{ route('contacts.delete', ['id' => $contact->id]) }}">Deletar</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div>
            {{ $contacts->links() }}
        </div>
    @endif
</div>
