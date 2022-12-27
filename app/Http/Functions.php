<?php 

//Key Value From Json 
function kvfj($json, $key){
	if($json ==null):
		return null;
	else:
		$json =$json;
		$json = json_decode($json,true);
		if(array_key_exists($key, $json)):
			return $json[$key];
		else:
			return null;
		endif;
	endif;
}




function getModulesArray(){ 
$a= [ 
  '0'=>'Productos',
  '1'=>'Blog'
];
return $a;
}

function getRoleUserArray($mode,$id){ 
$roles = ['0'=> 'Usuario normal', '1' => 'Administrador'];
if(!is_null($mode)):
	return $roles;
else:
return $roles[$id];
endif;
}

function getUserStatusArray($mode,$id){ 
$status = ['0'=> 'Registrado', '1' => 'Verficado', '100'=> 'Suspendido'];
if(!is_null($mode)):
	return $status;
else:
return $status[$id];
endif;
}

function user_permissions(){
	$p = [
		'dashboard' => [
			'icon' => '<i class="fas fa-home"></i>',
			'title' => 'Módulo de Dashboard',
			'keys' => [
				'dashboard' =>'Puede ver el dashboard.',
				'dashboard_small_stats'=> 'Puede ver las estadísticas rápidas.',
				'dashboard_sell_today'=> 'Puede ver las facturas de hoy.',
			]
		],

		'products'=> [
			'icon' => '<i class="fas fa-boxes"></i>',
			'title' => 'Módulo Productos',
			'keys' => [
				'products' =>'Puede ver el listado de productos.',
				'products_add' =>'Puede agregar nuevos productos.',
				'products_edit' =>'Puede editar productos. ',
				'products_search' =>'Puede buscar productos.',
				'products_delete' =>'Puede eliminar productos. ',
				'products_gallery_add' =>'Puede agregar imágenes a la galería.',
				'products_gallery_delete' =>'Puede eliminar imágenes de la galería.',
		    ]
		],

		'categories'=> [
			'icon' => '<i class="fas fa-folder-open"></i>',
			'title' => 'Módulo Categorias',
			'keys' => [
				'categories' =>'Puede ver la lista de categorías.',
				'category_add' =>'Puede crear nuevas categorías.',
				'category_edit' =>'Puede editar categorías.',
				'category_delete' =>'Puede eliminar categorías.',
				
		    ]
		],

        'users'=> [
			'icon' => '<i class="fas fa-user-friends"></i>',
			'title' => 'Módulo Usuarios',
			'keys' => [
				'user_list' =>'Puede ver la lista de usuarios.',
				'user_edit' =>'Puede editar.',
				'user_banned' =>'Puede banear usuarios.',
				'user_permissions' =>'Puede administrar permisos de usuario.',
				
		    ]
		]

	];

	return $p;

}




?>