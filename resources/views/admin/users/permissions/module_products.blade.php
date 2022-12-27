
<div class="col-md-4  d-flex">
    <div class="panel shadow">
	    <div class="header">
			<h2 class="title"><i class="fas fa-boxes"></i>Módulo Productos</h2>
	    </div>

	         <div class="inside">
	         	
	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="products" @if(kvfj($u->permissions,'products')) checked  @endif> <label form="products"> Puede ver el listado de productos. </label>
	         	</div>

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="products_add" @if(kvfj($u->permissions,'products_add')) checked  @endif> <label form="products_add"> Puede agregar nuevos productos. </label>
	         	</div>

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="products_edit" @if(kvfj($u->permissions,'products_edit')) checked  @endif> <label form="products_edit"> Puede editar productos. </label>
	    	    </div>

	    	    <div class= "form-check">
	         		<input type="checkbox" values="true" name="products_search" @if(kvfj($u->permissions,'products_search')) checked  @endif> <label form="products_search"> Puede buscar productos. </label>
	    	    </div>

	    	    <div class= "form-check">
	         		<input type="checkbox" values="true" name="products_delete" @if(kvfj($u->permissions,'products_delete')) checked  @endif> <label form="products_delete"> Puede eliminar productos. </label>
	    	    </div>

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="products_gallery_add" @if(kvfj($u->permissions,'products_gallery_add')) checked  @endif> <label form="products_gallery_add"> Puede agregar imágenes a la galería. </label>
	    	    </div>
	    	    <div class= "form-check">
	         		<input type="checkbox" values="true" name="products_gallery_delete" @if(kvfj($u->permissions,'products_gallery_delete')) checked  @endif> <label form="products_gallery_delete"> Puede eliminar imágenes de la galería. </label>
	    	    </div>
		
	    </div>
    </div>
</div>