<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      $posts = DB::table('posts')->latest('name')->get();
      //$posts = DB::table('posts')->oldest()->get();
      //$posts = DB::table('posts')->whereFullText('description', 'qui');
       dd($posts);
      /*  DB::transaction(function () {
            DB::table('users')->where('id',1)->decrement('balance', 20);
            DB::table('users')->where('id',2)->increment('balance', 20);
        });*/
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
        //
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
