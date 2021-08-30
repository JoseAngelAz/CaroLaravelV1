<div class="card bg-warning">
	<form>
		<div class="card-header">Crear/Actualizar Producto</div>
	<div class="card-body">

		
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="nombre">
  <label for="floatingInput">Nombre del Producto</label>
</div>

<!--Descripcion del producto-->		
<div class="form-group">	
  <div class="form-floating">
  <textarea class="form-control" placeholder="Escribe la descripcion aqui" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Descripcion</label>
</div>
		</div>
<!-- Precio -->
<div class="form-floating mb-3">
  <div class="input-group mb-3">  	
  <span class="input-group-text">Precio $</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-text">.00</span>
  </div>

</div>
<!--Foto del producto-->
<div class="form-floating">
  <input type="file" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Imagen</label>
<!--Boton guardar-->		
	</div>
	<div class="card-footer">
		<button class="btn btn-success text-uppercase btn-block">Guardar</button>
	</div>
	</form>
</div>