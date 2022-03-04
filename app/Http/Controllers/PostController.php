<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    public function __construct()
    {
        $json = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $this->posts = collect($json);
    }

    public function index()
    {
        $posts = $this->posts;

        //$posts = Http::get("https://jsonplaceholder.typicode.com/posts");
        //return $posts;
        //return json_decode($posts);

        return view("posts", [
            //"posts" => json_decode($posts)
            "posts" => json_decode($posts)
        ]);
    }

    public function fetchJson()
    {

        $collection = collect($this->posts);
        $uniqueUserIds=$collection->unique('userId');
        $countUnique=$collection->countBy('userId');

        return view('list.post',[
            'uniqueUserIds'=>$uniqueUserIds,
            'countUnique'=>$countUnique
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $collections=collect($this->posts)->where('userId', $id);

        return view('show',[
            'collections'=>$collections,
            'id'=>$id
        ]);
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
