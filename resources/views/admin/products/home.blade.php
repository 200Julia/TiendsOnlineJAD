@extends('admin.master')
@section('title','Productos')

@section('breadcrumb')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/admin/productos')}}"><i class="fas fa-boxes"></i>Productos</a></li>
</nav>
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel shadow ">
		<div class="header">
			<h2 class="title"><i class="fas fa-boxes" ></i>Productos</h2>
			<ul>
				@if(kvfj(Auth::user()->permissions,'products_add'))
		    	<li>
		    		<a href="{{ url('/admin/productos/add') }}" ><i class="fas fa-plus"></i> Agregar Productos </a>
			    </li>
			    @endif
			    <div class="row">
                    <div class="col-md-2 offset-md-10">
				      <div class="dropdown">
					  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%;">
						<i class="fas fa-filter"></i>Filtrar
					</button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="{{url('/admin/productos/1')}}" ><i class="fas fa-globe-americas"></i>Público</a>

						<a class="dropdown-item" href="{{url('/admin/productos/0')}}" ><i class="fas fa-eraser"></i>Borradores</a>
						
						<a class="dropdown-item" href="{{url('/admin/productos/trash')}}" ><i class="fas fa-trash"></i>Papelera</a>

						<a class="dropdown-item" href="{{url('/admin/productos/all')}}" ><i class="fas fa-list-ul"></i>Todos</a>
					</div>
				</div>
			</div>
           </div>
			   
			    <li>
			    	<a href="#" id="btn_search">
			    		<i class="fas fa-search"></i> Buscar
			    	</a>
			    </li>
			</ul>
		</div>

		<div class="inside ">
			<div class="form_search" id="form_search">	
			   {!! Form::open (['url' => '/admin/productos/search']) !!}
			   <div class="row">
			   <div class="col-md-4">
			    {!! Form::text('search',null,['class' => 'form-control','placeholder' =>'Ingrese su busqueda']) !!}
			    </div>
			    <div class="col-md-4">
			    {!! Form::select('filter',['0' => 'Nombre del producto ','1' =>'Código'],0,['class' => 'form-control']) !!}
			    </div>
			      <div class="col-md-2">
			    {!! Form::select('status',['0' => 'Borrador ','1' =>'Públicos'],0,['class' => 'form-control']) !!}
			    </div>
			    <div class="col-md-2 ">
			    {!! Form::submit('Buscar',['class' => ' btn btn-primary']) !!}
			    </div>
			    </div>
			    {!!Form::close() !!}
			</div>
	    </div>

	     <div class="inside">
	        <table class="table table-striped ">
	        	<thead> 
	        		<tr>
	        			<td>ID</td>
					    <td></td>
					    <td>Nombre</td>
					    <td>Categoria</td>
					    <td>Precio</td>
					    <td></td>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($products as $p)
			    	<tr>
			    		<td width="50">{{  $p->id }}</td>
					    <td width="64">
					    	<a href="{{url('/uploads/'.$p->file_path.'/'.$p->image)}}" data-fancybox ="gallery">
							<img src="{{url('/uploads/'.$p->file_path.'/t_'.$p->image)}}" width="64">
						    </a>
						</td>

					    <td>{{ $p->name }}  @if($p->status == "0" ) <i class="fas fa-eraser"  data-toggle="tooltip" data-placement="top" title ="Estado: Borrador"></i> @endif </td>
					    <td>{{ $p->cat->name }}</td>
					    <td>{{  $p->price }}</td>
					    <td>{{ $p->status }}</td>
					    <td>


						    <div class="opts">
						    	@if(kvfj(Auth::user()->permissions,'products_edit'))

						    	<a href="{{url ('/admin/productos/'.$p->id.'/edit')}}" data-toggle="tooltip" data-placement="top" title ="Editar">
								<i class="fas fa-edit"> </i>
						        </a>
						        @endif
                                @if(kvfj(Auth::user()->permissions,'products_delete'))
						        <a href="{{url ('/admin/productos/'.$p->id.'/delete')}}" data-toggle="tooltip" data-placement="top" title ="Eliminar">
								<i class="fas fa-trash-alt"> </i>
						        </a>
						        @endif
					         </div>
					    </td>
				    </tr>
				    @endforeach

				    <tr>
				    	<td colspan="7">{!! $products->render() !!}</td>
				    </tr>
			    </tbody>
		    </table>
        </div>

	</div>
</div>

@endsection 