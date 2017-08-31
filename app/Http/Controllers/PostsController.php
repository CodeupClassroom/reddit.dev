<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Log;
use DB;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'testBuilder']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('q')) {
            $q = $request->q;
            $posts = Post::search($q);            
        } else {
            $posts = Post::with('user')->get();
        }

        $data['posts'] = $posts;

        Log::info('A user just visited the index page.');

        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, Post::$rules);

        $post = new Post();
        $post->title = $request->title;
        $post->url = $request->url;
        $post->content = $request->content;
        $post->created_by = 1;
        $post->save();

        $request->session()->flash("successMessage", "Your post was saved successfully");

        Log::info($post);

        return \Redirect::action('PostsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $data['post'] = $post;

        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $data['post'] = $post;

        return view('posts.edit', $data);
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

        $this->validate($request, Post::$rules);

        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->url = $request->url;
        $post->created_by = 1;

        $post->save();

        $request->session()->flash("successMessage", "Your post was updated successfully");

        return \Redirect::action('PostsController@show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        $request->session()->flash("successMessage", "Your post was successfully destroyed.");

        return \Redirect::action('PostsController@index');
    }

    public function testBuilder()
    {

        /*        

            THIS BIT OF SYNTAX: DB::table('posts')->   
            ALMOST THE SAME AS: Post::    
            
            - Both approuches will return a Builder object depending on the method used
            - When a result set is retrieved, the former approuch will return stdClass object(s)
            - When a result set is retrieved, the latter approuch will return Post model object(s)
            - Remember to type "use DB;" at the top to use the DB class

        */


        // Demonstrating result sets (arrays of objects)...

            // var_dump(DB::table('posts')->get());
            // var_dump(Post::get());
            // var_dump(Post::all());


        // Getting individual object property values...

            // var_dump(DB::table('posts')->get()[0]->title);
            // var_dump(Post::get()[0]->title);
            // var_dump(Post::all()[0]->title);


        // First object...

            // var_dump(DB::table('posts')->first()->title);
            // var_dump(Post::first()->get()->title);


        /*
            The where() method takes two or three arguments

            With two arguments: where('someAttributeNameGoesHere', 'someExpectedValueHere')
            - Equality between the attribute and value is assumed

            With three arguments: where('someAttributeNameGoesHere', 'operator', 'someExpectedValueHere')
            - Any valid SQL operator can be used here as the second argument
        */


        // Returning another Builder object that is chainable...

            // var_dump(DB::table('posts')->where('id', 6));


        // Adding method to retrieve a result set...

            // var_dump(Post::where('id', 6)->get());
            // var_dump(Post::where('id', 6)->first());
            // var_dump(Post::where('id', 6)->paginate());


        // Other operators...

            // $posts = Post::where('id', '<', 10)->get();
            // foreach($posts as $post) {
            //     echo $post->id . "<br>";
            // }

            // $timePosts = Post::where('title', 'like', '%time%')->get();
            // foreach($timePosts as $timePost) {
            //     echo $timePost->title . '<br>';
            // }


        // Chaining where methods...

            // $posts = Post::where('id', '>', 6)->where('id', '<', 40)->get();
            // foreach($posts as $post) {
            //     echo $post->id . "<br>";
            // }


        // Other methods that return a Builder object...

            // default()
            // orderBy()
            // orWhere()
            // whereBetween()
            // whereNotBetween()
            // whereIn()
            // whereNotIn()
            // whereNull()
            // whereNotNull()
            // groupBy()
            // take() same as LIMIT
            // skip() same as OFFSET


        // Aggregate methods...

            // count()
            // max()
            // sum()


        // Select() method...

            // must be the first method after the DB::table('someTable')-> or SomeModel::

            // var_dump(Post::select('title', 'content')->get());

        
    }

}







