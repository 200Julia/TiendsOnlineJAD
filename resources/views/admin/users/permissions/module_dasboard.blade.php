
<div class="col-md-4  d-flex">
    <div class="panel shadow">
	    <div class="header">
			<h2 class="title"><i class="fas fa-home"></i>Módulo Dashbord</h2>
	    </div>

	         <div class="inside">
	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="dashboard" @if(kvfj($u->permissions,'dashboard')) checked  @endif> <label form="dashboard"> Puede ver el dashboard. </label>
	         	</div>

	         	<div class= "form-check">
	         		<input type="checkbox" values="true" name="dashboard_small_stats" @if(kvfj($u->permissions,'dashboard_small_stats')) checked  @endif> <label form="dashboard_small_stats"> Puede ver las estadísticas rápidas. </label>
	         	</div>

	         		<div class= "form-check">
	         		<input type="checkbox" values="true" name="dashboard_sell_today" @if(kvfj($u->permissions,'dashboard_sell_today')) checked  @endif> <label form="dashboard_sell_today"> Puede ver las facturas de hoy. </label>
	         	</div>
	    	 </div>
		
	</div>
</div>