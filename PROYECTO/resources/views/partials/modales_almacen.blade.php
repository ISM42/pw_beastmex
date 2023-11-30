<!-- MODAL ACTUALIZAR -->


<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar información</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      
      <div class="modal-body">
        <form method="post" action="/producto/{{$item->id}}/confirm">
            @csrf
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
      </div>
</form>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL ELIMINAR -->

<!-- Modal -->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar registro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <div class="modal-body">
        ...
      </div>
      
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Eliminar</button>
      </div>
    </div>
  </div>
</div>