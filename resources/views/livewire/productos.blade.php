
<h2>Productos</h2>
<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <button wire:click="crear()" class="btn btn-success">Nuevo</button>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalLive">Launch demo modal</button>

    {{-- @if($modal) --}}
        @include('livewire.crear')
    {{-- @endif --}}

    <table class="table table-striped">
        <thead class="table-primary">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Descripci&oacute;n</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->descripcion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
