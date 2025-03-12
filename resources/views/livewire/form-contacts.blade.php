<div class="card p-5">
    <h3 class="text-center">NOVO CONTATO</h3>
    <hr>
    <form wire:submit="newContact">
        <div class="mb-3">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" wire:model="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" wire:model="email">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="phone">Telefone</label>
            <input type="phone" class="form-control" id="phone" wire:model="phone">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="text-end">
            <button class="btn btn-secondary px-5">Salvar</button>
        </div>

        @if ($error)
            <div class="alert alert-danger text-center mt-3"
                x-data="{show: true}"
                x-show="show"
                x-init="setTimeout(() => show = false, 3000)"
            >
                {{ $error }}
            </div>
        @endif
        @if ($success)
            <div class="alert alert-success text-center mt-3"
                x-data="{show: true}"
                x-show="show"
                x-init="setTimeout(() => show = false, 3000)"
            >
                {{ $success }}
            </div>
        @endif
            
    </form>
</div>
