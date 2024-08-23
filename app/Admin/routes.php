<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('admissions', AdmissionController::class);
    $router->resource('messages', messageController::class);
    $router->resource('governors', governorsController::class);
    $router->resource('directors', directorsController::class);
    $router->resource('coporate_teams', coporate_teamController::class);
    $router->resource('lecturers', lecturersController::class);
    $router->resource('clients', clientsController::class);
    $router->resource('g_affiliations', g_affiliationsController::class);
    $router->resource('l_affiliations', l_affiliationsController::class);
    $router->resource('locations', locationsController::class);
    $router->resource('contacts', contactsController::class);
    $router->resource('testimonials', testimonialsController::class);
    $router->resource('upcoming_programs', upcoming_programsController::class);

});
