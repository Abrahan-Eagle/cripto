<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\Blog\AuthorController;
use App\Http\Controllers\Dashboard\Blog\SponsorController;
use App\Http\Controllers\Dashboard\Blog\CategoryController;
use App\Http\Controllers\Dashboard\Blog\PostController;
use App\Http\Controllers\Dashboard\Blog\TagController;
use App\Http\Controllers\Dashboard\CountryStateCityController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\DonationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\NewsletterController;
use App\Http\Controllers\Front\ProjectsController;
use App\Http\Controllers\RolePermission\RoleController;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dashboard\LightDark;

Auth::routes();

Route::get('/clear', function() {
Artisan::call('cache:clear');
Artisan::call('route:clear');
Artisan::call('config:clear');
Artisan::call('view:clear');
return "Cache is cleared";
});

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


//************************************ FRONT PAGES ******************************** */

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/services', [IndexController::class, 'services'])->name('services');

Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.submit');


// //STATE COUNTRY CITY
// Route::post('/get-states-by-country', [CountryStateCityController::class, 'getState']);
// Route::post('/get-cities-by-state', [CountryStateCityController::class, 'getCity']);


//PROJECTS-VIEW-FRONT
Route::get('projects', [ProjectsController::class, 'blog'])->name('project.index');
Route::get('post-projects/{slug}', [ProjectsController::class, 'post'])->name('project.post');
Route::get('category-projects/{slug}', [ProjectsController::class, 'category'])->name('project.category');
Route::get('tag-project/{slug}', [ProjectsController::class, 'tag'])->name('project.tag');
Route::post('comment-projects/{post_id}', [ProjectsController::class, 'comment'])->name('comment.submit');
Route::get('reply-projects', [ProjectsController::class, 'reply'])->name('reply.submit');
Route::get('like-projects/{slug}', [ProjectsController::class, 'like'])->name('project.like');
Route::get('dislike-projects/{slug}', [ProjectsController::class, 'dislike'])->name('project.dislike');
/*********************** */
//estar pendiente para quedar claro
Route::get('categorie-projects/{slug}', [ProjectsController::class, 'categories'])->name('project.categories');
Route::get('tag-projects/{slug}', [ProjectsController::class, 'tag'])->name('project.tags');
//******************************** */
/*Route::get('/projects/details/{id}', [ProjectsController::class, 'viewdetails'])
-> name('projects.details');
*/




//BLOG-VIEW-FRONT
Route::get('/blog', [BlogController::class, 'blog'])->name('blog.index');
Route::get('/post/{slug}', [BlogController::class, 'post'])->name('blog.post');
Route::get('/category/{slug}', [BlogController::class, 'category'])->name('blog.category');
Route::get('/tag-{slug}', [BlogController::class, 'tag'])->name('blog.tag');
Route::post('/comment/{post_id}', [BlogController::class, 'comment'])->name('comment.submit');
Route::get('/reply', [BlogController::class, 'reply'])->name('reply.submit');
Route::get('/like/{slug}', [BlogController::class, 'like'])->name('blog.like');
Route::get('/dislike/{slug}', [BlogController::class, 'dislike'])->name('blog.dislike');


//estar pendiente para quedar claro
Route::get('/categorie/{slug}', [BlogController::class, 'categories'])->name('blog.categories');
Route::get('/tag/{slug}', [BlogController::class, 'tag'])->name('blog.tags');
//******************************** */

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.submit');




//DASHBOARD
Route::get('/light', [HomeController::class, 'update'])->name('update.light');

//AUTHOR SPONSOR-DASHBOARD
Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('authors/store', [AuthorController::class, 'store'])->name('authors.store');
Route::get('authors/show/{id}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('authors/edit/{id}', [AuthorController::class, 'edit'])->name('authors.edit');
Route::post('authors/update/{id}', [AuthorController::class, 'update'])->name('authors.update');
Route::post('authors/delete/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');

Route::get('sponsors', [SponsorController::class, 'index'])->name('sponsors.index');
Route::get('sponsors/create', [SponsorController::class, 'create'])->name('sponsors.create');
Route::post('sponsors/store', [SponsorController::class, 'store'])->name('sponsors.store');
Route::get('sponsors/show/{id}', [SponsorController::class, 'show'])->name('sponsors.show');
Route::get('sponsors/edit/{id}', [SponsorController::class, 'edit'])->name('sponsors.edit');
Route::post('sponsors/update/{id}', [SponsorController::class, 'update'])->name('sponsors.update');
Route::post('sponsors/delete/{id}', [SponsorController::class, 'destroy'])->name('sponsors.destroy');
















//BLOG-DASHBOARD
Route::get('tags_{level}', [TagController::class, 'index'])->name('tags.index');
Route::get('tags_{level}/create', [TagController::class, 'create'])->name('tags.create');
Route::post('tags_blog/store', [TagController::class, 'store'])->name('tags.store');
Route::get('tags_{level}/{id}', [TagController::class, 'show'])->name('tags.show');
Route::get('tags_{level}/edit/{id}', [TagController::class, 'edit'])->name('tags.edit');
Route::post('tags_blog/update/{id}', [TagController::class, 'update'])->name('tags.update');
Route::post('tags_{level}/delete/{id}', [TagController::class, 'destroy'])->name('tags.destroy');

Route::get('categories/{level}', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create/{level}', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/show/{level}/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories/edit/{level}/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::post('categories/delete/{level}/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('posts/{level}', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create/{level}', [PostController::class, 'create'])->name('posts.create');
Route::post('posts/store/', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/show/{level}/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/edit/{level}/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::post('posts/update/{id}', [PostController::class, 'update'])->name('posts.update');
Route::post('posts/delete/{level}/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


// //Project-DASHBOARD
Route::get('tags-{level}', [TagController::class, 'index'])->name('tags-project.index');
Route::get('tags-{level}/create', [TagController::class, 'create'])->name('tags-project.create');
Route::post('tags-project/store', [TagController::class, 'store'])->name('tags-project.store');
Route::get('tags-{level}/{id}', [TagController::class, 'show'])->name('tags-project.show');
Route::get('tags-{level}/edit/{id}', [TagController::class, 'edit'])->name('tags-project.edit');
Route::post('tags-project/update/{id}', [TagController::class, 'update'])->name('tags-project.update');
Route::post('tags-{level}/delete/{id}', [TagController::class, 'destroy'])->name('tags-project.destroy');

Route::get('categories-{level}', [CategoryController::class, 'index'])->name('categories-project.index');
Route::get('categories-{level}/create', [CategoryController::class, 'create'])->name('categories-project.create');
Route::post('categories-project/store', [CategoryController::class, 'store'])->name('categories-project.store');
Route::get('categories-{level}/{id}', [CategoryController::class, 'show'])->name('categories-project.show');
Route::get('categories-{level}/edit/{id}', [CategoryController::class, 'edit'])->name('categories-project.edit');
Route::post('categories-project/update/{id}', [CategoryController::class, 'update'])->name('categories-project.update');
Route::post('categories-{level}/delete/{id}', [CategoryController::class, 'destroy'])->name('categories-project.destroy');

Route::get('posts-{level}', [PostController::class, 'index'])->name('posts-project.index');
Route::get('posts-{level}/create', [PostController::class, 'create'])->name('posts-project.create');
Route::post('posts-project/store', [PostController::class, 'store'])->name('posts-project.store');
Route::get('posts-{level}/{id}', [PostController::class, 'show'])->name('posts-project.show');
Route::get('posts-{level}/edit/{id}', [PostController::class, 'edit'])->name('posts-project.edit');
Route::post('posts-project/update/{id}', [PostController::class, 'update'])->name('posts-project.update');
Route::post('posts-{level}/delete/{id}', [PostController::class, 'destroy'])->name('posts-project.destroy');


