

<div class="mb-3">
  <label for="identificacion" class="form-label">identificacion</label>
  <input type="text" class="form-control" value="{{isset($cliente->identificacion)?$cliente->identificacion:''}}" id="identificacion" name="identificacion" placeholder="ingrese identificacion">
</div>
<div class="mb-3">
  <label for="nombre" class="form-label">nombre</label>
  <input type="text" class="form-control"  value="{{isset($cliente->nombre)?$cliente->nombre:''}}" id="nombre" name="nombre" placeholder="ingrese nombre">
</div>
<div class="mb-3">
  <label for="apellido" class="form-label">apellido</label>
  <input type="text" class="form-control" value="{{isset($cliente->apellido)?$cliente->apellido:''}}" id="apellido" name="apellido" placeholder="ingrese apellido">
</div>
<div class="mb-3">
  <label for="email" class="form-label">email</label>
  <input type="email" class="form-control" value="{{isset($cliente->email)?$cliente->email:''}}" id="email" name="email" placeholder="ingrese correo">
</div>
<div class="mb-3">
  <label for="direccion" class="form-label">Dirreccion</label>
  <input type="text" class="form-control" value="{{ isset($cliente->direccion)?$cliente->direccion:''}}" id="direccion" name="direccion" placeholder="ingrese dirreccion">
</div>
<!--<div class="mb-3">
  <label for="foto" class="form-label">Foto</label>
  <input type="text" class="form-control" value="{{ isset($cliente->foto)?$cliente->foto:''}}" id="foto" name="direccion">
</div> -->
<div class="mb-3">
  <label for="telefono" class="form-label">telefono</label>
  <input type="text" class="form-control"  value="{{ isset($cliente->telefono) ?$cliente->telefono:''}}"id="telefono" name="telefono" placeholder="ingrese telefono">
</div>
<div class="col-md-6 offset-md-4"> 
  <button type="submit" class="btn btn-primary">
Guardar datos </button>
 </div>
