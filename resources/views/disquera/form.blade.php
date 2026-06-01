

<div class="mb-3">
  <label for="identificacion" class="form-label">identificacion</label>
  <input type="text" class="form-control"value="{{isset($disquera->identificacion)?$disquera->identificacion:''}}" id="identificacion" name="identificacion" placeholder="ingrese identificacion">
</div>
<div class="mb-3">
  <label for="nombreDisquera" class="form-label">nombre</label>
  <input type="text" class="form-control"value="{{isset($disquera->nombreDisquera)?$disquera->nombreDisquera:''}}" id="nombreDisquera" name="nombreDisquera" placeholder="ingrese nombre">
</div>
<div class="mb-3">
  <label for="telefonoDisquera" class="form-label">telefono</label>
  <input type="text" class="form-control"  value="{{isset($disquera->telefonoDisquera)?$disquera->telefonoDisquera:''}}"id="telefonoDisquera" name="telefonoDisquera"placeholder="ingrese apellido">
</div>

<div class="mb-3">
  <label for="direccion" class="form-label">Dirreccion</label>
  <input type="text" class="form-control" value="{{isset($disquera->direccion)?$disquera->direccion:''}}" id="direccion" name="direccion" placeholder="ingrese dirreccion">
</div>
<div class="mb-3">
  <label for="estadoDisquera" class="form-label">estado</label>
  <input type="text" class="form-control" value="{{isset($disquera->estadoDisquera)?$disquera->estadoDisquera:''}}" id="estadoDisquera" name="estadoDisquera" placeholder="ingrese telefono">
</div>
<div class="col-md-6 offset-md-4"> 
  <button type="submit" class="btn btn-primary">
Guardar datos </button>
 </div>
