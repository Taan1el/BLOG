<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(User $user): View
    {
        $posts = $user->posts()
            ->with('images', 'user', 'tags')
            ->withCount('comments', 'likes')
            ->latest()
            ->paginate(16);

        return view('users.show', compact('user', 'posts'));
    }
}

