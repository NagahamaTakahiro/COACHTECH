<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\FinishController;

Route::get('/', [IndexController::class, 'index']);
Route::post('/', [IndexController::class, 'post']);
Route::get('/finish', [FinishController::class, 'index']);
以上で全てのファイルのが揃いました。

http://localhost:8000にアクセスし、以下のようになっていれば成功です。

前の章へ
           
次の章へ
カリキュラム一覧へ
目次