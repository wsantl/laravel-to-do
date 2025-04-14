<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;

// Rotas protegidas por autenticação
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('tasks', TaskController::class);
});

// Rota de login para obter token
Route::post('/login', function (Request $request) {
    if (auth()->attempt($request->only('email', 'password'))) {
        return auth()->user()->createToken('auth_token')->plainTextToken;
    }
    return response()->json(['error' => 'Unauthorized'], 401);
});

// Rota de registro (opcional, para testes)
Route::post('/register', function (Request $request) {
    $user = \App\Models\User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);
    return response()->json($user, 201);
});