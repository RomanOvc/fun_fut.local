<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {


        //$blogs = Blog::select(['id','name_blog','text_blog','authore_id','photo_id'])->get();
        $blogs = Blog::select(['blogs.id','name_blog','content','users.name','photo_m'])
            ->join('users','blogs.author_id','=','users.id')
            ->get();

         return view('welcome')->with(['blogs' => $blogs ]);
        //return view('blog',[
          //  'blogs' => Blog::all()]);
   }
    public function index()
    {


        //$blogs = Blog::select(['id','name_blog','text_blog','authore_id','photo_id'])->get();
        $blogs = Blog::select(['blogs.id','name_blog','content','users.name','photo_m'])
            ->join('users','blogs.author_id','=','users.id')
            ->get();

        return view('blog')->with(['blogs' => $blogs ]);
        //return view('blog',[
        //  'blogs' => Blog::all()]);
    }
    public function index2()
    {


        //$blogs = Blog::select(['id','name_blog','text_blog','authore_id','photo_id'])->get();
        $blogs = Blog::select(['blogs.id','name_blog','content','users.name','photo_m'])
            ->join('users','blogs.author_id','=','users.id')
            ->get();

        return view('home')->with(['blogs' => $blogs ]);
        //return view('blog',[
        //  'blogs' => Blog::all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function validatorblog(array $data)
    {
        return Validator::make([
            'name_blog'=>'required|string|max:20',
            'content'=>'string|max:200',

        ]);
    }
    protected function blogsCreate(array $data){
        return Blog::create([
            'name_blog' => $data['name_blog'],
            'content' => $data['content'],

            'photo_m' => $data['photo_m']
        ]);
    }

    public function create()
    {
        return view('blogCreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request->all());
      Blog::create($request->all());
      return redirect()->route('blog.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.show',['blogs' => $blog ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
          return view('blogEdit',['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {

$blog->update($request->all());
return redirect()->route('blog.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blogs = Blog::where('id',$blog->id)->firstOrFail();
        $blogs->delete();
        return redirect()->route('blog.index')->with(['message'=> 'Wrong ID!!']);
    }
}
