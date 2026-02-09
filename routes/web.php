<?php


use App\Http\Controllers\BackEnd\BrandsController;
use App\Http\Controllers\BackEnd\ModelsController;
use App\Http\Controllers\BackEnd\OrdersController;
use App\Http\Controllers\BackEnd\SellerController;
use App\Http\Controllers\BackEnd\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend.home.index');
// });
// FrontEnd Veiws
Route::get('/', [App\Http\Controllers\FrontEndController::class, 'index'])->name('index');
Route::get('/show/all-car', [App\Http\Controllers\FrontEnd\CarController::class, 'index'])->name('car.index');
Route::get('/search', [App\Http\Controllers\QueryController::class, 'search'])->name('search');
Route::post('model/query/by/brand', [App\Http\Controllers\QueryController::class, 'model_query_by_brand'])->name('model.query.by.brand');
Route::get('/query/by/category/{id}', [App\Http\Controllers\QueryController::class, 'query_by_category'])->name('query.by.category');
Route::get('/query/by/brand/{id}', [App\Http\Controllers\QueryController::class, 'query_by_brand'])->name('query.by.brand');
Route::get('/query/by/model/{id}', [App\Http\Controllers\QueryController::class, 'query_by_model'])->name('query.by.model');
Route::get('/query/by/condition/{condition}', [App\Http\Controllers\QueryController::class, 'query_by_condition'])->name('query.by.condition');

// Exports Car Page
Route::get('/car/exports', [App\Http\Controllers\FrontEnd\ExportController::class, 'index'])->name('exports.index');

// News/Article page view
Route::get('/articles', [App\Http\Controllers\FrontEnd\ArticleController::class, 'index'])->name('article.index');
Route::get('dashboard/articles', [App\Http\Controllers\BackEnd\ArticleController::class, 'index'])->name('dashboard.article.index');


// Contact Page view
Route::get('/contact', [App\Http\Controllers\FrontEnd\ContactController::class, 'index'])->name('contact.page');
Route::post('/contact/message/send', [App\Http\Controllers\MessagesController::class, 'message_store'])->name('message.store');

//About page view
Route::get('/about', [App\Http\Controllers\FrontEnd\AboutController::class, 'index'])->name('about.index');

// Messages
Route::get('/dashboard/messages', [App\Http\Controllers\MessagesController::class, 'index'])->name('messages')->middleware('auth');

Auth::routes();
// Dashboard Home
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('filter/users', [UserController::class, 'query'])->name('users.query');
    Route::get('models/filter', [ModelsController::class, 'query'])->name('models.query');

});

// Users
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('seller', SellerController::class);
    Route::resource('roles', App\Http\Controllers\BackEnd\RoleController::class);
    Route::resource('permissions', App\Http\Controllers\BackEnd\PermissionController::class);
});

// Status Update for Roles
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/roles/update/status/{id}', [App\Http\Controllers\BackEnd\RoleController::class, 'update_status'])->name('roles.update.status');
});


// Permissions


// Listing
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/listing', [App\Http\Controllers\ListingController::class, 'index'])->name('listing');
    Route::get('/dashboard/car/add-by-lang/{lang}', [App\Http\Controllers\ListingController::class, 'add_car_by_lang'])->name('add.car.by.lang');
    Route::get('/dashboard/car/add', [App\Http\Controllers\ListingController::class, 'add_listing'])->name('add.listing');
    Route::post('/dashboard/car/add', [App\Http\Controllers\ListingController::class, 'store'])->name('store.listing');
    Route::get('/dashboard/car/sold/{id}', [App\Http\Controllers\ListingController::class, 'sold'])->name('sold.listing');
    Route::get('/dashboard/car/convert/lang/{id}/{lang}', [App\Http\Controllers\ListingController::class, 'convert_lang'])->name('lang.convert');
    Route::post('/dashboard/car/convert/listing/{id}', [App\Http\Controllers\ListingController::class, 'convert_listing'])->name('listing.convert');
    Route::get('/dashboard/car/destroy/{id}', [App\Http\Controllers\ListingController::class, 'destroy'])->name('destroy.listing');
    Route::get('/dashboard/car/edit/{id}', [App\Http\Controllers\ListingController::class, 'edit'])->name('edit.listing');
    Route::post('/dashboard/car/update/{id}', [App\Http\Controllers\ListingController::class, 'update'])->name('update.listing');
});

//Orders
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::resource('orders', OrdersController::class);
});

// Listing Details
Route::get('/car/details/{id}', [App\Http\Controllers\FrontEnd\CarController::class, 'listing_details'])->name('listing.details');
// Categories
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard/categories', [App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('categories.index');
    Route::get('dashboard/categories/create', [App\Http\Controllers\Backend\CategoryController::class, 'create'])->name('categories.create');
    Route::post('dashboard/categories/store', [App\Http\Controllers\Backend\CategoryController::class, 'store'])->name('categories.store');
    Route::get('dashboard/categories/edit/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('dashboard/categories/update/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'update'])->name('categories.update');
    Route::get('dashboard/categories/update/status/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'update_status'])->name('categories.update.status');
    Route::get('dashboard/categories/destroy/{id}', [App\Http\Controllers\Backend\CategoryController::class, 'destroy'])->name('categories.destroy');
});
// Export Listing
Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard/car/export', [App\Http\Controllers\BackEnd\ExportController::class, 'index'])->name('dashboard.export.index');
    Route::get('dashboard/car/export/add', [App\Http\Controllers\BackEnd\ExportController::class, 'add'])->name('dashboard.export.add');
    Route::post('dashboard/car/export/store', [App\Http\Controllers\BackEnd\ExportController::class, 'store'])->name('dashboard.export.store');
    Route::get('dashboard/car/export/edit/{id}', [App\Http\Controllers\BackEnd\ExportController::class, 'edit'])->name('dashboard.export.edit');
    Route::post('dashboard/car/export/update/{id}', [App\Http\Controllers\BackEnd\ExportController::class, 'update'])->name('dashboard.export.update');
});

// My Brands
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::resource('brands', BrandsController::class);

    // custom status toggle
    // Route::get('car/brands/update/status/{id}', [App\Http\Controllers\BackEnd\BrandsController::class, 'update_status'])->name('dashboard.brands.update.status');
});
// Car Models
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    // models filter/search (must be registered before the resource to avoid being matched by the {model} route)
    Route::resource('models', ModelsController::class);
});

// CAR Features
Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::resource('car/features', App\Http\Controllers\BackEnd\FeaturesController::class, ['as' => 'dashboard']);
    // custom status toggle
    Route::get('car/features/update/status/{id}', [App\Http\Controllers\BackEnd\FeaturesController::class, 'update_status'])->name('dashboard.features.update.status');
});

// Trash Listing
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard/car/trash', [App\Http\Controllers\BackEnd\TrashController::class, 'index'])->name('trash.index');
    Route::get('/car/trash/{id}', [App\Http\Controllers\BackEnd\TrashController::class, 'trash_listing'])->name('trash.listing');
});


// Favorite
// Route::get('/dashboard/favorite', [App\Http\Controllers\FavoriteController::class, 'index'])->name('favorite');
Route::get('/dashboard/favorite', [App\Http\Controllers\BackEnd\FavoriteController::class, 'index'])->name('favorite.index');
Route::get('/dashboard/favorite/store/{id}', [App\Http\Controllers\BackEnd\FavoriteController::class, 'store'])->name('favorite.store');
Route::get('/dashboard/favorite/destroy/{id}', [App\Http\Controllers\BackEnd\FavoriteController::class, 'destroy'])->name('favorite.destroy');


// Review
Route::get('/dashboard/reviews', [App\Http\Controllers\BackEnd\ReviewController::class, 'index'])->name('reviews.index')->middleware('auth');
Route::post('/review/store', [\App\Http\Controllers\BackEnd\ReviewController::class, 'store'])->name('review.store');
Route::get('/review/update/status/{id}', [\App\Http\Controllers\BackEnd\ReviewController::class, 'review_status_update'])->name('review.status.update');
Route::get('/review/update/testimonial/{id}', [\App\Http\Controllers\BackEnd\ReviewController::class, 'review_testimonial_update'])->name('review.testimonial.update');
Route::get('/review/destroy/{id}', [\App\Http\Controllers\BackEnd\ReviewController::class, 'review_destroy'])->name('review.destroy');

// Profile
Route::get('/dashboard/edit/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::post('/profile/update', [App\Http\Controllers\ProfileController::class, 'profile_update'])->name('profile.update');
Route::post('/profile/update/image', [App\Http\Controllers\ProfileController::class, 'profile_update_image'])->name('profile.update.image');
Route::post('/profile/update/lang', [App\Http\Controllers\ProfileController::class, 'language'])->name('lang.update');

// Password
Route::get('/dashboard/edit/password', [App\Http\Controllers\PasswordController::class, 'index'])->name('password');
Route::post('profile/update/password', [App\Http\Controllers\PasswordController::class, 'profile_update_password'])->name('profile.update.password');

