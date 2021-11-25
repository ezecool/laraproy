{{--
<div class="modal-dialog modal-dialog-centered">
    <form>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="email" class="form-control" id="descripcion" wire:model="descripcion">
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" wire:model="cantidad">
        </div>

        <button type="button" class="btn btn-primary" wire:click.prevent="guardar()">Guardar</button>
        <button type="button" class="btn btn-danger" wire:click.prevent="cerrarModal()">Cancelar</button>

    </form>
</div> --}}

<div class="modal" tabindex="-1">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>

    </div>

  </div>

</div>
