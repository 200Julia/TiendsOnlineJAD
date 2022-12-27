<?php  
Route::prefix('/admin')->group(function(){ 
	Route::get('/','Admin\DashboardController@getDashboard')->name('dashboard');

	//modulo usuarios
	Route::get('/users/{status}','Admin\UserController@getUsers')->name('user_list');
	Route::get('/user/{id}/edit','Admin\UserController@getUserEdit')->name('user_edit');
	Route::post('/user/{id}/edit','Admin\UserController@postUserEdit')->name('user_edit');
	Route::get('/user/{id}/banned','Admin\UserController@getUserBanned')->name('user_banned');
	Route::get('/user/{id}/permissions','Admin\UserController@getUserPermissions')->name('user_permissions');
	Route::post('/user/{id}/permissions','Admin\UserController@postUserPermissions')->name('user_permissions');

	//modulos

	Route::get ('/productos/{status}','Admin\ProductController@getHome')->name('products');
	Route::get ('/productos/add','Admin\ProductController@getProductAdd')->name('products_add');
	Route::get ('/productos/{id}/edit','Admin\ProductController@getProductEdit')->name('products_edit');
	Route::post('/productos/add','Admin\ProductController@postProductAdd')->name('products_add');
	Route::post('/productos/search','Admin\ProductController@postProductSearch')->name('products_search');
	Route::post ('/productos/{id}/edit','Admin\ProductController@postProductEdit')->name('products_edit');
	Route::post ('/productos/{id}/gallery/add','Admin\ProductController@postProductGalleryAdd')->name('products_gallery_add');
	Route::get ('/productos/{id}/gallery/{gid}/delete','Admin\ProductController@getProductGalleryDelete')->name('products_gallery_delete');

	//categories
	Route::get ('/categories/{module}','Admin\CategoriesController@getHome')->name('categories');
	Route::post('/category/add', 'Admin\CategoriesController@postCategoryAdd')->name('category_add');
	Route::get ('/category/{id}/edit','Admin\CategoriesController@getCategoryEdit')->name('category_edit');
	Route::post ('/category/{id}/edit','Admin\CategoriesController@postCategoryEdit')->name('category_edit');
	Route::get ('/category/{id}/delete','Admin\CategoriesController@getCategoryDelete')->name('category_delete');

});


