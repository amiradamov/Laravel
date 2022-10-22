<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\User;
use App\Models\Role;
use App\Models\Photo;
use App\Models\Country;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

// Route::get('/about', function () {
//     return "About Page";
// });

// Route::get('/contact', function () {
//     return "Contact Page";
// });

// Route::get('/post/{id}', function ($id) {
//     return "This is post number ".$id;
// });

// Route::get('admin/posts/example', array('as' => 'admin.home', function () {
//     $url = route('admin.home');
//     return "this url is ".$url;
// }));

Route::get('/post/{id}', [PostsController::class, 'index']);

// Route::resource('posts', PostsController::class);
 
Route::get('/contact', [PostsController::class, 'contact']);

// Route::get('post/{id}', [PostsController::class, 'show_post']);


/*
|--------------------------------------------------------------------------
DATABASE RAW SQL QUERIES
|--------------------------------------------------------------------------
*/
// Route::get('/insert', function(){
//     DB::insert('insert into posts (title, body) values (?, ?)', ['PHP with Laravel', 'Let see what you made of']);
// });

// Route::get('/read', function() {
//     $results = DB::select('select * from posts where id = ?', [1]);

//     foreach($results as $result){
//         return $result->body;
//     }
// });

// Route::get('/update', function() {
//     $update = DB::update('update posts set title = "Update Title" where id = ?', [1]);

//     return $update;
// });

// Route::get('/delete', function() {
//     $deleted = DB::delete('delete from posts where id = ?', [1]);

//   return $deleted;
// });


/*
|--------------------------------------------------------------------------
ELOQUENT
|--------------------------------------------------------------------------
*/

// Route::get('/read', function() {
//   $posts = Post::all();

//   foreach($posts as $post) {
//     return $post->title;
//   }
// });

// Route::get('/findwhere', function() {
//   $posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
//   return $posts;
// });

// Route::get('/findmore', function() {
//   // $posts = Post::findorFail(1);
//   // return $posts;

//   $posts = Post::where('')
// });

// Route::get('/basicinsert', function() {
//   $post = new Post;

//   $post->title = 'New Eloquent title insert';
//   $post->body = 'Okay that is pretty cool';

//   $post->save();
// });

// Route::get('/update', function() {
//   $post = Post::find(2);

//   $post->title = 'Im tired';
//   $post->body = 'Okay that is pretty sad';

//   $post->save();
// });

// Route::get('/create', function() {
//   Post::create(['user_id' => 1, 'title' => 'Im tired', 'body' => 'bad thing gonna happen']);
// });

// Route::get('/update', function() {
//   Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'New PHP title', 'body'=>'New PHP body']);
// });
Route::get('newuser', function() {
  User::create(['name' =>'Naum Adamov', 'email' => 'naum@adamov.net.ru', 'password' => 'naum202']);
});
// Route::get('/newrole', function() {
//   Role::create(['name' => "subscriber"]);
// });

// Route::get('/delete', function () {
//   $post = Post::find(1);
//   $post->delete();
// });

// Route::get('/delete', function() {
//   // Post::destroy(3);
//   // Post::destroy([3, 5]);
//   Post::where('is_admin', 4)->delete();
// });

// Route::get('/softdelete', function() {
//   Post::find(3)->delete();
// });

////////////////////////////////////////READ DELETED RECORDS
// Route::get('/read', function() {
//   // $post = Post::find(3);
//   // return $post;
//   $post = Post::withTrashed()->where('id', 3)->get();
//   return $post;
// });
// Route::get('/readsoftdelete', function() {
//   // $post = Post::find(1);
//   // return $post;

//   // $post = Post::withTrashed()->where('id', 1)->get();
//   // return $post;

//   $post = Post::onlyTrashed()->get();
//   return $post;
// }); 

// Route::get('/restore', function() {
//   Post::withTrashed()->where('is_admin', 0)->restore();
// });

// Route::get('/forcedelete', function() {
//   Post::withTrashed()->where('is_admin', 2)->restore();
// });

// Route::get('/create', function() {
//   Post::create(['title' => 'Title_2', 'body' => 'text_2']);
// });


// Route::get('/create', function() {
//   User::create(['name' => 'Megomed Adamov', 'email' => 'megomed@adamov.net.ru', 'password' => 'megomed1997', 'country_id' => 4]);
// });
// Route::get('/create', function() {
//   Role::create(['name' => 'User']);
// });
// Route::get('/create', function() {
//   Photo::create(['path' => 'magomed.jpg', 'imageable_id' => '1', 'imageable_type' => 'App\Models\Post']);
// });
// Route::get('/create', function() {
//   $countries = ['Ukraine', 'Azerbaijan', 'Dagestan', 'Georgia', 'Turkey'];
//   foreach($countries as $country){
//     Country::create(['name' => $country]); 
//   }
// });
/*
|--------------------------------------------------------------------------
ELOQUENT Relationship 
|--------------------------------------------------------------------------
*/
// One to One relationship
// Route::get('/user/{id}/post', function($id) {
//   // return User::find($id)->post;
//   return User::find($id)->post;
// });

// Route::get('/post/{id}/user', function($id) {
//   return Post::find($id)->user->email;
// });

// One to many relationship
// Route::get('/posts', function() {
//   $user = User::find(2);
//   foreach($user->posts as $post) {
//     //return will return one record
//     echo $post->body . "<br>";
//   }
// });

// Many to many relationship

// Route::get('/user/{id}/role', function($id) {
//   // $user = User::find($id);
//   $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//   return $user;
//   // foreach($user->roles as $role){
//   //   return $role->name;
//   // }
// });

// Route::get('/user/country', function() {
//   $country = Country::find(4);
//   foreach($country->posts as $post) {
//     echo $post->body . " heyyy";
//   }

// });


/*
|--------------------------------------------------------------------------
Polymorphic Relationship 
|--------------------------------------------------------------------------
*/

// Route::get('user/photo', function() {
//   $user = Post::find(1);

//   foreach($user->photos as $photo) {
//     echo "$photo->path" . '<br>';
//   }
// });

// Route::get('user/{$id}/post', function($id) {
//   $photo = Photo::findOrFail($id);

//   return $photo->imageable;
// });