
<div class="col-md-4  d-flex">
    <div class="panel shadow">
	    <div class="header">
			<h2 class="title"><i class="fas fa-folder-open"></i>Módulo Categorias</h2>
	    </div>

	         <div class="inside">

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="categories" @if(kvfj($u->permissions,'categories')) checked  @endif> <label form="categories"> Puede ver la lista de categorías. </label>
	         	</div>

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="category_add" @if(kvfj($u->permissions,'category_add')) checked  @endif> <label form="category_add"> Puede crear nuevas categorías. </label>
	         	</div>

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="category_edit" @if(kvfj($u->permissions,'category_edit')) checked  @endif> <label form="category_edit"> Puede editar categorías. </label>
	    	    </div>

	    	    <div class= "form-check">
	         		<input type="checkbox" values="true" name="category_delete" @if(kvfj($u->permissions,'category_delete')) checked  @endif> <label form="category_delete"> Puede eliminar categorías. </label>
	    	    </div>


	    	 </div>
		
	</div>
</div>
