<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('site.index');

Route::prefix('jogos')
    ->group(function(){
        Route::get('/', [\App\Http\Controllers\JogoController::class,'viewJogos'])->name('site.jogos');

        Route::get('/cadastro', [\App\Http\Controllers\JogoController::class,'viewCadastroJogos'])->name('site.cadastroJogos');
        Route::post('/cadastro', [\App\Http\Controllers\JogoController::class,'store']);

        Route::get('/atualizar/{id}', [\App\Http\Controllers\JogoController::class,'viewAtualizarJogos'])->name('site.atualizarJogos');
        Route::post('/atualizar/{id}', [\App\Http\Controllers\JogoController::class,'update']);

        Route::post('/excluir/{id}', [\App\Http\Controllers\JogoController::class,'destroy']);
    }
);

Route::prefix('consoles')
    ->group(function(){
        Route::get('/', [\App\Http\Controllers\ConsoleController::class,'viewConsoles'])->name('site.consoles');
        
        Route::get('/cadastro', [\App\Http\Controllers\ConsoleController::class,'viewCadastroConsoles'])->name('site.cadastroConsoles');
        Route::post('/cadastro', [\App\Http\Controllers\ConsoleController::class,'store']);

        Route::get('/atualizar/{id}', [\App\Http\Controllers\ConsoleController::class,'viewAtualizarConsoles'])->name('site.atualizarConsoles');
        Route::post('/atualizar/{id}', [\App\Http\Controllers\ConsoleController::class,'update']);

        Route::post('/excluir/{id}', [\App\Http\Controllers\ConsoleController::class,'destroy']);
    }
);

Route::prefix('videos')
    ->group(function(){
        Route::get('/', [\App\Http\Controllers\VideoController::class,'viewVideos'])->name('site.videos');
    }
);
