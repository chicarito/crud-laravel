<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Auth::user()->posts; //menampilkan data berdasarkan user yang login
        return view('admin.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:png,jpg',
            'body' => 'required',
        ]);
        $validate['image'] = $request->file('image')->store('image', 'public');
        $validate['user_id'] = Auth::id();
        Post::create($validate);
        return redirect()->route('admin.index')->with('status', 'berhasil tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title' => 'nullable',
            'image' => 'nullable',
            'body' => 'nullable',
        ]);

        $post = Post::find($id);

        if ($request->has('image')) {
            Storage::disk('public')->delete($post->image); // menghapus gambar lama
            $validate['image'] = $request->file('image')->store('image', 'public');
        }

        $post->update($validate);

        return redirect()->route('admin.index')->with('status', 'berhasil edit post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        Storage::disk('public')->delete($posts->image); // menghapus gambar lama
        $posts->delete();
        return back()->with('status', 'berhasil hapus data');
    }
}
