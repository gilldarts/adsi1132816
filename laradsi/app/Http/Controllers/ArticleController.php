<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['listarticles']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();
        return view('articles.index')->with('articles', $articles);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories=Category::all();
        return view('articles.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        
        $art= new Article();
        $art->name=$request->get('name');
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'),$file);

        }
        $art->image='imgs/'.$file;
        $art->content=$request->get('content');
        $art->category_id=$request->get('category_id');

        if ($art->save()){
            return redirect('article')->with('status', 'Los Articulos <strong>'.$art->name.','.$art->image.' y '.$art->content.'</strong> fueron adicionados con exito');
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        //return view('articles.show', ['article'=>Article::find($id)]);
        return view('articles.show')->with('article', Article::find($id));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $art=Article::find($id);
        $categories=Category::all();
        return view('articles.edit', compact('art','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticLeRequest $request, $id)
    {
        $art= Article::find($id);
        $art->name=$request->get('name');
        if ($request->hasFile('image')) {
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('imgs'),$file);

            $art->image='imgs/'.$file;
        }
        $art->content=$request->get('content');
        $art->category_id=$request->get('category_id');
        if ($art->save()){
            return redirect('article')->with('status', 'Los Articulos fueron modificados con exito');
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect('article')->with('status', 'El Articulo fue eliminado con exito');
    }

    public function listarticles(){
        $arts=Article::all();
        return view('welcome')->with('arts', $arts);

    }
    public function search(Request $request){
        $query=Article::name($request->get('name'))->orderBy('id','ASC')->get();
        return view('articles.ajax')->with('articles',$query);
        
    }
    public function pdf(){
        $articles=Article::all();

        $view= \View::make('articles.pdf', compact('articles'))->render();
        $pdf= \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('lista-articulos.pdf');
    }
    public function excel()
    {
     \Excel:: create('articlesfile' , function($excel) {
     $excel->sheet('List' , function($sheet) {
     $articles = Article:: all();
     $sheet->loadView('articles.excel' , array('articles' => $articles));
     });
     })->download('xls' );
    }
}
