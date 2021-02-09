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

Route::get('/lang/{slug}', 'FrontendController@setLanguage');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();


//Route::get('/this','PhotoController@photo')->name('photo');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('setting', 'SettingController@index')->name('setting.index');
    Route::put('setting/update', 'SettingController@update')->name('setting.update');

    /*
        |--------------------------------------------------------------------------
        | Backend Menu CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'home.', 'prefix' => 'home'], function () {
        Route::get('', 'HomeController@index')->name('home');
        Route::get('create', 'HomeController@create')->name('create');
        Route::post('', 'HomeController@store')->name('store');
    });

    Route::group(['as' => 'menu.', 'prefix' => 'menu'], function () {
        Route::get('', 'MenuController@index')->name('index');
        Route::get('/indexnp', 'MenuController@indexnp')->name('indexnp');
        Route::post('', 'MenuController@store')->name('store');
        Route::put('', 'MenuController@update')->name('update');
        Route::delete('{menu}', 'MenuController@destroy')->name('destroy');

        Route::group(['as' => 'subMenu.'], function () {
            Route::post('{menu}/subMenu', 'MenuController@storeSubMenu')->name('store');
            Route::delete('{menu}/subMenu/{subMenu}', 'MenuController@destroySubMenu')->name('destroy');
            Route::get('{menu}/subMenuModal', 'MenuController@subMenuModal')->name('component.modal');

            Route::group(['as' => 'childsubMenu.'], function () {
                Route::post('{subMenu}/subMenu/childsubMenu', 'MenuController@storeChildSubMenu')->name('store');
                Route::delete('{menu}/subMenu/{subMenu}/childsubMenu/{childSubMenu}', 'MenuController@destroyChildSubMenu')->name('destroy');
                Route::get('{subMenu}/subMenu/childsubMenuModal', 'MenuController@childsubMenuModal')->name('component.modal');
            });
        });
    });

    /*
        |--------------------------------------------------------------------------
        | Page CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'page.', 'prefix' => 'page'], function () {
        Route::get('', 'PageController@index')->name('index');
        Route::get('create', 'PageController@create')->name('create');
        Route::post('', 'PageController@store')->name('store');
        Route::get('{page}', 'PageController@show')->name('show');
        Route::get('{page}/edit', 'PageController@edit')->name('edit');
        Route::put('{page}', 'PageController@update')->name('update');
        Route::delete('{page}', 'PageController@destroy')->name('destroy');
    });

    /*
     |--------------------------------------------------------------------------
     | Image Controller
     |--------------------------------------------------------------------------
      */
    Route::group(['as' => 'photo.', 'prefix' => 'photo'], function () {
        Route::get('', 'PhotoController@index')->name('index');
        Route::get('create', 'PhotoController@create')->name('create');
        Route::post('', 'PhotoController@store')->name('store');
        Route::put('{photo}', 'PhotoController@update')->name('update');
        Route::get('{photo}/edit', 'PhotoController@edit')->name('edit');
        Route::delete('{photo}', 'PhotoController@delete')->name('destroy');
    });


    /*
        |--------------------------------------------------------------------------
        | Homepage Slider CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'slider.', 'prefix' => 'slider'], function () {
        Route::get('', 'SliderController@index')->name('index');
        Route::get('create', 'SliderController@create')->name('create');
        Route::post('', 'SliderController@store')->name('store');
        Route::put('/update', 'SliderController@update')->name('update');
        Route::delete('{id}', 'SliderController@destroy')->name('destroy');

    });

    /*
        |--------------------------------------------------------------------------
        | Shop CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'shop.', 'prefix' => 'shop'], function () {
        Route::get('', 'ShopController@index')->name('index');
        Route::get('create', 'ShopController@create')->name('create');
        Route::post('', 'ShopController@store')->name('store');
        Route::get('{shops}/edit', 'ShopController@edit')->name('edit');
        Route::put('{shops}', 'ShopController@update')->name('update');
        Route::delete('{shop}', 'ShopController@destroy')->name('destroy');
    });

    /*
        |--------------------------------------------------------------------------
        | Food CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'food.', 'prefix' => 'food'], function () {
        Route::get('', 'FoodController@index')->name('index');
        Route::get('create', 'FoodController@create')->name('create');
        Route::post('', 'FoodController@store')->name('store');
        Route::get('{foods}/edit', 'FoodController@edit')->name('edit');
        Route::put('{foods}', 'FoodController@update')->name('update');
        Route::delete('{food}', 'FoodController@destroy')->name('destroy');
    });


    /*
        |--------------------------------------------------------------------------
        | News CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'news.', 'prefix' => 'news'], function () {
        Route::get('', 'NewsController@index')->name('index');
        Route::get('create', 'NewsController@create')->name('create');
        Route::post('', 'NewsController@store')->name('store');
        Route::get('{news}/edit', 'NewsController@edit')->name('edit');
        Route::put('{news}', 'NewsController@update')->name('update');
        Route::delete('{news}', 'NewsController@destroy')->name('destroy');
    });

    /*
        |--------------------------------------------------------------------------
        | Event CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'event.', 'prefix' => 'event'], function () {
        Route::get('', 'EventController@index')->name('index');
        Route::get('create', 'EventController@create')->name('create');
        Route::post('', 'EventController@store')->name('store');
        Route::get('{event}/edit', 'EventController@edit')->name('edit');
        Route::put('{event}', 'EventController@update')->name('update');
        Route::delete('{event}', 'EventController@destroy')->name('destroy');
    });

    /*
        |--------------------------------------------------------------------------
        | Service CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'service.', 'prefix' => 'service'], function () {
        Route::get('', 'ServiceController@index')->name('index');
        Route::get('create', 'ServiceController@create')->name('create');
        Route::post('', 'ServiceController@store')->name('store');
        Route::get('{services}/edit', 'ServiceController@edit')->name('edit');
        Route::put('{services}', 'ServiceController@update')->name('update');
        Route::delete('{service}', 'ServiceController@destroy')->name('destroy');
    });

    /*
    |--------------------------------------------------------------------------
    | Floor Info CRUD Routes
    |--------------------------------------------------------------------------
    */
    Route::group(['as' => 'floorinfo.', 'prefix' => 'floorinfo'], function () {
        Route::get('', 'FloorInfoController@index')->name('index');
        Route::get('create', 'FloorInfoController@create')->name('create');
        Route::post('', 'FloorInfoController@store')->name('store');
        Route::get('{floorinfos}/edit', 'FloorInfoController@edit')->name('edit');
        Route::put('{floorinfos}', 'FloorInfoController@update')->name('update');
        Route::delete('{floorinfo}', 'FloorInfoController@destroy')->name('destroy');
    });


    /*
        |--------------------------------------------------------------------------
        | Homepage Pop-up images CRUD Routes
        |--------------------------------------------------------------------------
        */
    Route::group(['as' => 'gallery.', 'prefix' => 'gallery'], function () {
        Route::get('', 'GalleryController@index')->name('index');
        Route::get('create', 'GalleryController@create')->name('create');
        Route::post('', 'GalleryController@store')->name('store');
        Route::get('{gallery}/edit', 'GalleryController@edit')->name('edit');
        Route::put('{gallery}', 'GalleryController@update')->name('update');
        Route::delete('{gallery}', 'GalleryController@destroy')->name('destroy');
    });

    /*
    |--------------------------------------------------------------------------
    |  Album Controller
    |--------------------------------------------------------------------------
    */
    Route::group([ 'as' => 'album.', 'prefix' => 'album' ], function () {
        Route::get('/', array('as' => 'index','uses' => 'AlbumController@getlist'));
        Route::get('/createalbum', array('as' => 'createalbum','uses' => 'AlbumController@getForm'));
        Route::post('/createalbum', array('as' => 'create_album','uses' => 'AlbumController@postCreate'));
        Route::get('/deletealbum/{id}', array('as' => 'delete_album','uses' => 'AlbumController@getDelete'));
        Route::get('/album/{id}', array('as' => 'show_album','uses' => 'AlbumController@getAlbum'));
        Route::get('/addimage/{id}', array('as' => 'add_image','uses' => 'ImageController@getForm'));
        Route::post('/addimage', array('as' => 'add_image_to_album','uses' => 'ImageController@postAdd'));
        Route::get('/deleteimage/{id}', array('as' => 'delete_image','uses' => 'ImageController@getDelete'));
        Route::post('/moveimage', array('as' => 'move_image', 'uses' => 'ImageController@postMove'));
    });


    Route::post('ckeditor/upload', 'CkeditorController@upload')->name('ckeditor.upload');


});

/*
   |--------------------------------------------------------------------------
   | Frontend Routes
   |--------------------------------------------------------------------------
   */
Route::get('/', 'FrontendController@homepage')->name('homepage');
Route::get('/about-us', 'FrontendController@aboutUs')->name('about-us');
Route::get('/shops/{slug?}', 'FrontendController@shopList')->name('shop.list');
Route::get('/food/{slug?}', 'FrontendController@foodList')->name('food.list');
Route::get('/floor-info', 'FrontendController@floorinfo')->name('floor-info');
Route::get('/parking', 'FrontendController@parking')->name('parking');
Route::get('/view-report', 'FrontendController@viewReport')->name('viewReport');
Route::get('/viewreport-data', 'FrontendController@getAllData')->name('viewReport.data');
Route::get('/contact-us', 'FrontendController@contact')->name('contact-us');
Route::post('/inquiry', 'FrontendController@inquiry')->name('contact.inquiry');
Route::get('{any}', 'FrontendController@page');
