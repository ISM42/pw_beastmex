  <!-- Modal -->
  <div class="modal fade" id="createCli" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content fw-bold">
        
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-dark fw-bold " id="staticBackdropLabel">Datos del cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body text-primary">

            <form method="POST" action="{{route('clientes.store')}}">
                @csrf               
                <div style="text-align:center;">
                    <img class="mb-4" src="https://w7.pngwing.com/pngs/106/157/png-transparent-export-import-product-marketing-e-commerce-eagle-on-a-globe-furniture-globe-text.png" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal"></h1>
                </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_nombrecliente" value="{{old('_nombrecliente')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nombrecliente')}} </p>
                        <label>Nombre cliente</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_apcliente" value="{{old('_apcliente')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_apcliente')}} </p>
                        <label>Apellido paterno</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id=""  name="_amcliente" value="{{old('_amcliente')}}" >
                        <p class="text-danger fst-italic">{{$errors->first('_amcliente')}} </p>
                        <label>Apellido materno</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_emailcliente" value="{{old('_emailcliente')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_emailcliente')}} </p>
                        <label>Email</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="" name="_telcliente" value="{{old('_telcliente')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_telcliente')}} </p>
                        <label>Teléfono</label>
                    </div>
   
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-primary"> <i class="bi bi-floppy"></i> Registrar </button>
        
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> <i class="bi bi-x-square"></i> Cancelar</button>
        </div>
        </form>
      </div>
    </div>
  </div>