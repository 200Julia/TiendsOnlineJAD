
<div class="col-md-4  d-flex">
    <div class="panel shadow">
	    <div class="header">
			<h2 class="title"><i class="fas fa-user-friends"></i>Módulo Usuarios</h2>
	    </div>

	         <div class="inside">

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="user_list" @if(kvfj($u->permissions,'user_list')) checked  @endif> <label form="user_list"> Puede ver la lista de usuarios. </label>
	         	</div>

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="user_edit" @if(kvfj($u->permissions,'user_edit')) checked  @endif> <label form="user_edit"> Puede editar. </label>
	         	</div>

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="user_banned" @if(kvfj($u->permissions,'user_banned')) checked  @endif> <label form="user_banned"> Puede banear usuarios. </label>
	         	</div>

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="user_permissions" @if(kvfj($u->permissions,'user_permissions')) checked  @endif> <label form="user_permissions"> Puede administrar permisos de usuario. </label>
	         	</div>


	    	 </div>
		
	</div>
</div>