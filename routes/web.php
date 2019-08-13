<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportarController;

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    $routes = [
        ['module' => 'customers', 'controller' => 'CustomerController'],
        ['module' => 'products', 'controller' => 'ProductController'],
        ['module' => 'categories', 'controller' => 'CategoryController'],
        ['module' => 'tags', 'controller' => 'TagController'],
        ['module' => 'orders', 'controller' => 'OrderController'],
        ['module' => 'payment-methods', 'controller' => 'PaymentMethodController'],
        ['module' => 'user', 'controller' => 'UserController'],
        ['module' => 'role', 'controller' => 'RoleController'],
        ['module' => 'permission', 'controller' => 'PermissionController'],
        ['module' => 'usuarios', 'controller' => 'UsuariosController'],
        ['module' => 'grados', 'controller' => 'GradosController'],
        ['module' => 'carreras', 'controller' => 'CarrerasController'],
        ['module' => 'paises', 'controller' => 'PaisesController'],
        ['module' => 'escuelas', 'controller' => 'EscuelasController'],
        ['module' => 'titulos', 'controller' => 'TitulosController'],
        ['module' => 'idiomas', 'controller' => 'IdiomasController'],
        ['module' => 'direccionesgenerales', 'controller' => 'DireccionesGeneralesController'],
        ['module' => 'direccionesareas', 'controller' => 'DireccionesAreasController'],
        ['module' => 'codigos', 'controller' => 'CodigosController'],
        ['module' => 'niveles', 'controller' => 'NivelesController'],
    ];

    foreach ($routes as $route) {
        Route::group(['prefix' => $route['module']], function () use ($route) {
            Route::get('/', "{$route['controller']}@index")->middleware("permission:read-{$route['module']}")->name("{$route['module']}.index");
            Route::get('/lista', "{$route['controller']}@listaAdmin")->middleware("permission:read-usuariosAdmin")->name("{$route['module']}.indexLista");
            Route::get('/json', "{$route['controller']}@json")->middleware("permission:read-{$route['module']}")->name("{$route['module']}.json");
            Route::get('/json/admin', "{$route['controller']}@jsonAdmin")->middleware("permission:read-usuariosAdmin")->name("{$route['module']}.jsonAdmin");
            Route::get('/create', "{$route['controller']}@create")->middleware("permission:create-{$route['module']}")->name("{$route['module']}.create");
            Route::post('/store', "{$route['controller']}@store")->middleware("permission:create-{$route['module']}")->name("{$route['module']}.store");
            Route::get('/edit/{id}', "{$route['controller']}@edit")->middleware("permission:update-{$route['module']}")->name("{$route['module']}.edit");
            Route::put('/update/{id}', "{$route['controller']}@update")->middleware("permission:update-{$route['module']}")->name("{$route['module']}.update");
            Route::delete('/destroy/{id}', "{$route['controller']}@destroy")->middleware("permission:delete-{$route['module']}")->name("{$route['module']}.destroy");


            Route::get('/cards', 'UsuariosController@cards')->name('cards');
            Route::get('/card/action', 'UsuariosController@cardsAction')->name('card.action');
            // Route::get('/show/{id}', 'UsuariosController@show')->name('show');
            Route::get('/show/{id}', "{$route['controller']}@show")->middleware("permission:show-{$route['module']}")->name("{$route['module']}.show");
            Route::get('/desactivar/{id}', "{$route['controller']}@desactivar")->middleware("permission:desactivar-{$route['module']}")->name("{$route['module']}.desactivar");
            Route::get('/activar/{id}', "{$route['controller']}@activar")->middleware("permission:activar-{$route['module']}")->name("{$route['module']}.activar");


            //estados
            Route::get('/estados/{id}', 'UsuariosController@estados');
             //colonias
             Route::get('/municipios/{id}', 'UsuariosController@municipios');
             Route::get('/colonias/{id}', 'UsuariosController@colonias');
             Route::get('/cp/{id}', 'UsuariosController@cp');

        });
    }


    Route::get('/charts', 'ChartController@index')->middleware('permission:read-charts');

    //importar
    Route::get('/importar','ImportarController@importar');
});


