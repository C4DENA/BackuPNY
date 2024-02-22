<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SedeController;


Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function() {return view('home');})->name('home')->middleware('auth');

Route::get('area', [AreaController::class, 'index']);
Route::get('/empleado/index', [EmployeeController::class, 'index'])->name('empleado.index');
Route::get('/sede/index', [SedeController::class, 'index'])->name('sede.index');

/* Rutas de Departamento */
Route::get('/departamento/index', [DepartmentController::class, 'index'])->name('departamento.index');
Route::post('/departamento/create', [DepartmentController::class, 'creardepartamento'])->name('departamento.creardepartamento');
Route::get('/departamento/{id}/editar', [DepartmentController::class, 'edit'])->name('departamento.editar');
Route::get('/departamento/{id}/detalle', [DepartmentController::class, 'detalle'])->name('departamento.detalle');
Route::put('/departamento/{id}/update', [DepartmentController::class, 'update'])->name('departamento.update');
Route::delete('/departamento/{departamento}', [DepartmentController::class, 'delete'])->name('departamento.delete');

/* Rutas de Áreas */
Route::get('/area/index', [AreaController::class, 'index'])->name('area.index');
Route::post('/area/create', [AreaController::class, 'creararea'])->name('area.creararea');
Route::get('/area/{id}/detalle', [AreaController::class, 'detalle'])->name('area.detalle');
Route::put('/area/{id}/update', [AreaController::class, 'update'])->name('area.update');
Route::delete('/area/{area}', [AreaController::class, 'delete'])->name('area.delete');

/* Rutas de Cargos */
Route::post('/cargo/create', [PositionController::class, 'crearCargo'])->name('cargo.crearCargo');
Route::get('/cargo/index', [PositionController::class, 'index'])->name('cargo.index');
Route::get('/cargo/{id}/detalle', [PositionController::class, 'detalle'])->name('cargo.detalle');
Route::put('/cargo/{id}/update', [PositionController::class, 'update'])->name('cargo.update');
Route::delete('/cargo/{position}', [PositionController::class, 'delete'])->name('cargo.delete');

Route::post('/sede/create', [SedeController::class, 'crearsede'])->name('sede.crearsede');
Route::get('/sede/index', [SedeController::class, 'index'])->name('sede.index');
Route::get('/sede/{id}/detalle', [SedeController::class, 'detalle'])->name('sede.detalle');
Route::put('/sede/{id}/update', [SedeController::class, 'update'])->name('sede.update');
Route::delete('/sede/{sede}', [SedeController::class, 'delete'])->name('sede.delete');
