<div class="form-group row">
    <label for="Nombre" class="col-lg-3 col-form-label requerido">Nombre</label>
    <div class="col-lg-8">
        <input type="text" name="Nombre" id="Nombre" class="form-control" value="{{old('Nombre')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="Url" class="col-lg-3 col-form-label requerido">Url</label>
    <div class="col-lg-8">
        <input type="text" name="Url" id="Url" class="form-control" value="{{old('Url')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="icono" class="col-lg-3 col-form-label">Icono</label>
    <div class="col-lg-8">
        <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono')}}"/>
    </div>
    <div class="col-lg-1">
        <span id="mostrar-icono" class="fas {{old("icono")}}"></span>
    </div>
</div>