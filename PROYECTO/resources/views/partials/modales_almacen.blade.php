<!-- MODAL CREATE NUEVO PRODUCTO -->
  <!-- Modal -->
  <div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content fw-bold">
        
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-dark fw-bold " id="staticBackdropLabel">Registrar producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
        </div>

        <div class="modal-body text-primary">

            <form method="POST" action="{{route('producto.store')}}">
                @csrf               
                @if(session()->has ('confirmacion'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('confirmacion')}} </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@if($errors->any())
@foreach($errors->all() as $error)
@endforeach
@endif
                <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_nproducto" value="{{old('_nproducto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nproducto')}} </p>
                        <label>Nombre producto</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="" name="_nserie" value="{{old('_nserie')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nserie')}} </p>
                        <label>No. Serie</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id=""  name="_marca" value="{{old('_marca')}}" >
                        <p class="text-danger fst-italic">{{$errors->first('_marca')}} </p>
                        <label>Marca</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="" name="_cantidad" value="{{old('_cantidad')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_cantidad')}} </p>
                        <label>Cantidad</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="" name="_costoCompra" value="{{old('_costoCompra')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_costoCompra')}} </p>
                        <label>Costo compra</label>
                    </div>

                    <div class="form-floating">
                        <input type="file" class="form-control" id="" name="_foto" value="{{old('_foto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_foto')}} </p>
                        <label> Imagen del producto </label>
                    </div>
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"> <i class="bi bi-floppy"></i> Guardar </button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <i class="bi bi-x-square"></i> Cancelar</button>
        </div>

      </div>
    </div>
  </div>
  




<!-- MODAL ACTUALIZAR -->


<!-- Modal -->
<div class="modal fade" id="editar{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar información</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" action="/producto/{{$item->id}}/confirm" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" name="_nproducto" value="{{$item->nombre}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nproducto')}} </p>
                        <label for="floatingPassword">Nombre producto</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" name="_nserie" value="{{$item->num_serie}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nserie')}} </p>
                        <label for="floatingPassword">No. Serie</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword"  name="_marca" value="{{$item->marca}}" >
                        <p class="text-danger fst-italic">{{$errors->first('_marca')}} </p>
                        <label for="floatingPassword">Marca</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" name="_cantidad" value="{{$item->cantidad}}">
                        <p class="text-danger fst-italic">{{$errors->first('_cantidad')}} </p>
                        <label for="floatingPassword">Cantidad</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="email" name="_costoCompra" value="{{$item->costo_compra}}">
                        <p class="text-danger fst-italic">{{$errors->first('_costoCompra')}} </p>
                        <label for="floatingPassword">Costo compra</label>
                    </div>

                    <div class="form-floating">
                        <input type="file" class="form-control" id="email" name="_foto" value="{{$item->foto}}">
                        <p class="text-danger fst-italic">{{$errors->first('_foto')}} </p>
                        <label for="floatingPassword">Imagen</label>
                    </div>

                </div>

<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
</div>
</form>


<!-- MODAL ELIMINAR -->


<div class="modal fade" id="destroy{{$item->id}}"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <div class="modal-header">
          <h1 class="modal-title fs-4 fw-semibold fw-bold" id="staticBackdropLabel">Eliminar producto </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
        </div>

        <div class="modal-body">

            <form method="POST" action="{{route('producto.destroy',$item->id)}}">
                @csrf 
                @method('DELETE')   
                <div class="text-danger fs-4 fw-semibold">
                  ¿Seguro que desea eliminar '{{$item->nombre}}'?
                </div>           

   
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-danger"> <i class="bi bi-trash"></i> Sí </button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        </div>

      </div>
    </div>
  </div>




  

<!-- MODAL PDF -->


<!-- Modal -->
<div class="modal fade" id="pdf{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar información</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form method="post" action="/reporte/{{$item->id}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" name="_nproducto" value="{{$item->nombre}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nproducto')}} </p>
                        <label for="floatingPassword">Nombre producto</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" name="_nserie" value="{{$item->num_serie}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nserie')}} </p>
                        <label for="floatingPassword">No. Serie</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword"  name="_marca" value="{{$item->marca}}" >
                        <p class="text-danger fst-italic">{{$errors->first('_marca')}} </p>
                        <label for="floatingPassword">Marca</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" name="_cantidad" value="{{$item->cantidad}}">
                        <p class="text-danger fst-italic">{{$errors->first('_cantidad')}} </p>
                        <label for="floatingPassword">Cantidad</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="email" name="_costoCompra" value="{{$item->costo_compra}}">
                        <p class="text-danger fst-italic">{{$errors->first('_costoCompra')}} </p>
                        <label for="floatingPassword">Costo compra</label>
                    </div>

                    <div class="form-floating">
                        <input type="file" class="form-control" id="email" name="_foto" value="{{$item->foto}}">
                        <p class="text-danger fst-italic">{{$errors->first('_foto')}} </p>
                        <label for="floatingPassword">Imagen</label>
                    </div>

                </div>

<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
</div>
</form>

