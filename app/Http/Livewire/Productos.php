<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;

class Productos extends Component
{
    public $productos, $descripcion, $cantidad, $id_producto;
    public $modal = false;

    public function render()
    {
        //return 'Productos';
        $this->productos = Producto::all();
        return view('livewire.productos');
    }

    public function crear() {

        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal() {
        $this->modal = true;
    }

    public function cerrarModal() {
        $this->modal = false;
    }

    public function limpiarCampos() {
        $this->descripcion = '';
        $this->cantidad = '';
        $this->id_producto = '';
    }
}
