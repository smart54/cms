<?php
use App\Model\Page;
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
$pages = Page::all();
if($pages == null){
    Route::get('/',function(){
        return view('default.index');
    });
}else{
    foreach($pages as $page){
        Route::get('/','PageController@index');

    }
}








Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
