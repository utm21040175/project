@extends('layouts.app')
@section('contenido')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('imagen.store') }}" method="POST"
                        class="dropzone border border-2 d-flex
                    align-items-center justify-content-center rounded w-100"
                        style="height: 350px" enctype="multipart/form-data" id="dropzone">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h5 class="card-tittle">Agregar un Articulo</h5>
            <form style="width: 26rem;" action="{{ route('addContenido') }}" method="POST">
                <!-- Name input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="name" id="form4Example1" class="form-control" />
                    <label class="form-label" for="form4Example1">Nombre</label>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="precio"id="form4Example2" class="form-control" />
                    <label class="form-label" for="form4Example2">Precio</label>
                </div>

                <!-- Message input -->
                <div data-mdb-input-init class="form-outline mb-4">
                    <textarea class="form-control" name="descripcion" id="form4Example3" rows="4"></textarea>
                    <label class="form-label" for="form4Example3">Descripcion</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                    <label class="form-check-label" for="form4Example4">
                        Agrega la descripcion de tu producto.
                    </label>
                </div>

                <!-- Submit button -->
                <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </div>
    </div>
@endsection
