<?php

use App\Events\PostCreated;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('post', function () {

    $user = User::first();

    $post = $user->posts()->create([
        'title' => 'Hoje é domingo frio',
        'body' => 'O dia hoje ta muito frio ta doido'
    ]);

    return 'ok';

    // event(new PostCreated($post));
});
