<?php

namespace App\Http\Controllers;

use Corcel\Model\Post;
use Illuminate\Http\Request;


class TendenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::published()->get();
        $posts = Post::where('post_type', 'post')
        ->where('post_status', 'publish')
        ->orderBy('post_date', 'desc')
        ->get();
// dd($posts);
        $postsRecientes = $posts = Post::where('post_type', 'post')
        ->where('post_status', 'publish')
        ->orderBy('post_date', 'desc')
        ->paginate(5);

        return view('tendencias', compact('posts', 'postsRecientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        return view('tendenciaid', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
