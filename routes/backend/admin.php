<?php


//Dashboard route
Route::group(['namespace' => 'Dashboard','as' => 'admin.'], function () {
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::get('/activity', 'DashboardController@activity')->name('activity');
});

;
//
// Route::group(['namespace' => 'Subscriber','as' => 'admin.'], function () {
//   /*
//  * subscribe routes
//  */
//   Route::get('/user/subscribers/list/{param}','SubscriberController@paramWiseList');
//   Route::resource('/user/subscribers', 'SubscriberController', ['names' => [
//       'index'     => 'user.subscriber.index',
//       'create'    => 'user.subscriber.create',
//       'store'     => 'user.subscriber.store',
//       'edit'      => 'user.subscriber.edit',
//       'update'    => 'user.subscriber.update',
//       'show'      => 'user.subscriber.show',
//       'destroy'   => 'user.subscriber.destroy'
//   ]]);
//
//
// });


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
