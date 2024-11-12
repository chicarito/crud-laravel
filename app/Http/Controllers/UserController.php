<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->get();
        return view('index', compact('posts'));
    }
    public function post($id)
    {
        $post = Post::find($id);
        return view('post', compact('post'));
    }
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(['username' => 'required', 'password' => 'required']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index');
        }
        return back()->with('error', 'Login gagal');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
