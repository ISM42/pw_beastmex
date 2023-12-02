<!-- MODAL CREATE NUEVO PROVEEDOR -->
  <!-- Modal -->
  <div class="modal fade" id="create" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content fw-bold">
        
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-dark fw-bold " id="staticBackdropLabel">Registrar proveedor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
        </div>

        <div class="modal-body text-primary">

            <form method="POST" action="/proveedor">
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
                        <input type="text" class="form-control" id="" name="_nempresa" value="{{old('_nempresa')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nempresa')}} </p>
                        <label>Nombre empresa</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_ncontacto" value="{{old('_ncontacto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_ncontacto')}} </p>
                        <label>Nombre contacto</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_apcontacto" value="{{old('_apcontacto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_apcontacto')}} </p>
                        <label>Apellido paterno</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_amcontacto" value="{{old('_amcontacto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_amcontacto')}} </p>
                        <label>Apellido materno</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_emailcontacto" value="{{old('_emailcontacto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_emailcontacto')}} </p>
                        <label> Email </label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="" name="_telcontacto" value="{{old('_telcontacto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_telcontacto')}} </p>
                        <label>Teléfono</label>
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

            <div class="modal-body text-primary">

            <form method="POST" action="/proveedor/{{$item->id}}/confirm">
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
                        <input type="text" class="form-control" id="" name="_nempresa" value="{{$item->nombre_empresa}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nempresa')}} </p>
                        <label>Nombre empresa</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_ncontacto" value="{{$item->nombre_contacto}}">
                        <p class="text-danger fst-italic">{{$errors->first('_ncontacto')}} </p>
                        <label>Nombre contacto</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_apcontacto" value="{{$item->ap_contacto}}">
                        <p class="text-danger fst-italic">{{$errors->first('_apcontacto')}} </p>
                        <label>Apellido paterno</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_amcontacto" value="{{$item->am_contacto}}">
                        <p class="text-danger fst-italic">{{$errors->first('_amcontacto')}} </p>
                        <label>Apellido materno</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_emailcontacto" value="{{$item->email_contacto}}">
                        <p class="text-danger fst-italic">{{$errors->first('_emailcontacto')}} </p>
                        <label> Email </label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="" name="_telcontacto" value="{{$item->tel_contacto}}">
                        <p class="text-danger fst-italic">{{$errors->first('_telcontacto')}} </p>
                        <label>Teléfono</label>
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
          <h1 class="modal-title fs-4 fw-semibold fw-bold" id="staticBackdropLabel">Eliminar proveedor </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cancelar"></button>
        </div>

        <div class="modal-body">

            <form method="POST" action="{{route('proveedor.destroy',$item->id)}}">
                @csrf 
                @method('DELETE')   
                <div class="text-danger fs-4 fw-semibold">
                  ¿Seguro que desea eliminar '{{$item->nombre_empresa}}'?
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


