<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
  use SoftDeletes;

  protected $table = 'articles';
  protected $fillable = [
      'id',
      'title',
      'slug',
      'author_id',
      'body',
      'status',
      'created_by',
      'updated_by',
      'deleted_by',
      'deleted_at',
      'created_at',
      'updated_at',
  ];

  protected $dispatchesEvents = [
     'created' => ArticleCreated::class,
     'updated' => ArticleUpdated::class,
     'deleted' => ArticleDeleted::class,
 ];


  public static function getArticleList()
  {
      return $query = Article :: orderBy('id','desc');
  }

  public static function getArticleInfo($articleId)
  {
    return Article::join('users','users.id','=','articles.created_by')
    ->where('articles.id',$articleId)
    ->select('articles.*','users.firstname as first_name','users.lastname as last_name')
    ->first();
  }

  public static function boot()
  {
      parent::boot();
      static::creating(function($data){
        if(auth()->check())
        {
          $data->created_by = auth()->user()->id;
          $data->updated_by = auth()->user()->id;
        }
      });
  }

}
