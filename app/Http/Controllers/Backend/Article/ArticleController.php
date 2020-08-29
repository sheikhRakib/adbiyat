<?php

namespace App\Http\Controllers\Backend\Article;

use App\DataTables\ArticleDataTable;
use App\Models\User;
use App\Models\Article;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Libraries\Encryption;
use Auth;
class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(ArticleDataTable $dataTable)
     {
       return $dataTable->render("backend.article.index");
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $data['authors'] = User::where('status',1)->pluck('firstname','id');
      return view("backend.article.create",$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'title'       => 'required',
          'slug'        => 'required',
          'body'        => 'required',
          'author_id'   => 'required',
          'status'      => 'required',
      ]);

      $article  = new Article();
      $article->title      = $request->input('title');
      $article->slug       = $request->input('slug');
      $article->author_id  = $request->input('author_id');;
      $article->body       = $request->input('body');;
      $article->status     = $request->input('status');
      $article->save();
      return redirect(route('backend.admin.article.index'))->with('flash_success','Article created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Id
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
      $decodedId          = Encryption::decodeId($Id);
      $data['article']    = Article::getArticleInfo($decodedId);
      return view("backend.article.view",$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
      $decodedId          = Encryption::decodeId($Id);
      $data['authors'] = User::where('status',1)->pluck('firstname','id');
      $data['article']    = Article::find($decodedId);
      return view("backend.article.edit",$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $Id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$Id)
    {
      $decodedId  = Encryption::decodeId($Id);
      $this->validate($request, [
          'title'       => 'required',
          'slug'        => 'required',
          'body'        => 'required',
          'author_id'   => 'required',
          'status'      => 'required',
      ]);

      $article = Article::find($decodedId);
      $article->title      = $request->input('title');
      $article->slug       = $request->input('slug');
      $article->author_id  = $request->input('author_id');;
      $article->body       = $request->input('body');;
      $article->status     = $request->input('status');
      $article->updated_by = Auth :: user()->id;
      $article->save();
      return redirect(route('backend.admin.article.index'))->with('flash_success','Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
      if(request()->ajax())
      {
        $decodedId  = Encryption::decodeId($Id);
        $article = Article::find($decodedId);
        $article->deleted_by  = auth()->user()->id;
        $article->deleted_at  = Carbon::now();
        $article->save();
        return response()->json($article);
      }
    }
}
