<div class="card p-5">

    <div class="d-flex justify-content-between mb-3">
        <div>
            <h3>CONTATOS</h3>
        </div>

        <div class="d-flex gap-2 align-items-center">
            <input type="text" class="form-control" placeholder="Pesquisar" wire:model.live="search">
        </div>

    </div>


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
