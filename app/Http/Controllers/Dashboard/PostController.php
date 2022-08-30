<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* sirve para mostrar e ir a algo (echo) */
        echo('Hola');   
        echo('Adios');

/*         $datos['empleados']=Empleados::paginate(5);
        return view(); */
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.post.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {

/*         $request->validate([
            'title'=> 'required|min:5|Max:500',
            'slug'=> 'required|min:5|Max:500',
            'content'=> 'required|min:5'
        ]); */

/*     dd($request->validated());*/

        echo "El titulo trae  ".$request->title;
        post::create($request->validated());
         return back()->with('status','EL Post Fue Creado Con Exito :D'); 
        /* Regresa a una pagina anterior por el back */ 


/*         return redirect('dashboar.post.create')->with('status','Post created');  
 */        /* redireccionar hacia cualquier lado */ 
        /* status nos dira si estamos conectado o inactivos (EN LIGAR DE PÒST CREATED)*/

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        
    }
}
