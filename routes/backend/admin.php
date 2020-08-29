<?php


//Dashboard route
Route::group(['namespace' => 'Dashboard','as' => 'admin.'], function () {
  Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['namespace' => 'Article','as' => 'admin.'], function () {
  /*
 * subscribe routes
 */
  Route::resource('/articles','ArticleController', ['names' => [
      'index'     => 'article.index',
      'create'    => 'article.create',
      'store'     => 'article.store',
      'edit'      => 'article.edit',
      'update'    => 'article.update',
      'show'      => 'article.show',
      'destroy'   => 'article.destroy'
  ]]);

//
 });


//
// Route::group(['namespace' => 'Career','as' => 'admin.'], function () {
//
//     /*
//    * company job routes
//    */
//
//     Route::resource('career/jobs', 'CompanyJobController', ['names' => [
//         'index'     => 'career.job.index',
//         'create'    => 'career.job.create',
//         'store'     => 'career.job.store',
//         'edit'      => 'career.job.edit',
//         'update'    => 'career.job.update',
//         'show'      => 'career.job.show',
//         'destroy'   => 'career.job.destroy'
//     ]]);
//
// });

//compny route
