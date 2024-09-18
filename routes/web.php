<?php

use App\Http\Controllers\AccredetationController;
use App\Http\Controllers\ArticleController;

use App\Http\Controllers\Auth\SocialLoginController;
use App\Http\Controllers\BotManChatController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\ProductServicesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TrainersController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


require __DIR__.'/auth.php';


Route::get('/',[HomeController::class,'index2'])->name('home_page');
Route::get('pages/{slug}',[PageController::class,'index'])->name('pages');
Route::get('assessments/{slug}',[PageController::class,'assessments'])->name('assessments');

Route::get('qualifications/{slug}',[PageController::class,'qualifications'])->name('qualifications');
Route::get('executive_education/{slug}',[PageController::class,'executive_education'])->name('executive_education');


Route::POST('become_acc', [AccredetationController::class, 'store'])->name('become_acc');
Route::POST('corporate_acc', [AccredetationController::class, 'corporate_store'])->name('corporate_acc');
Route::POST('become_acc_trainer', [AccredetationController::class, 'trainer_store'])->name('become_acc_trainer');
Route::POST('reviews', [ReviewsController::class, 'store'])->name('reviews');
Route::get('get/{filename}', [FileController::class, 'download'])->name('getFile');
Route::POST('custom_training', [AccredetationController::class, 'custom_training'])->name('custom_training');

Route::get('/mailable', function () {
    $invoice = App\Models\CorporateAccreditation::find(4);
    return new App\Mail\notification($invoice);
});




Route::POST('/news',[PageController::class,'news'])->name('news');
Route::POST('/',[HomeController::class,'version'])->name('version');
Route::resource('/ContactUs' , ContactusController::class);
Route::get('/regional-provider',[AccredetationController::class,'regional_provider'])->name('regional-provider');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/products&profile', function () {
    return view('pages.promotions');
});



Route::get('/profile', function () {
    return view('dashboard');
  

});


 Route::get('/certifications',[ExamController::class,'index'])->name('certifications');
 
 
Route::get('/dashboard', function () {
    return view('dashboard');

})->middleware(['auth', 'verified'])->name('dashboard');

    Route::POST('shop', [ShopController::class, 'type'])->name('shopType');
    Route::get('shop', [ShopController::class, 'index'])->name('shop');
    
    Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('accredetation/{type}',[AccredetationController::class,'index'])->name('accredetation');
   
    Route::get('shoppingCart', [ShopController::class, 'cart'])->name('shoppingCart');
 
    Route::resource('cart' , CartController::class);
    
    Route::get('/custom_training_form', function () {
    return view('pages.custom_training_form');
    })->name('accredetation');


    // routes Demo exams
    Route::get('/Demo/Exmas',[DemoController::class,'index'])->name('Demo.Index');
    Route::get('/Demo/Exam/{id}',[DemoController::class,'examLogin'])->name('Demo.Exam');
    Route::get('/Demo/UpdateData', [DemoController::class ,'ExamUpdate'])->name('Demo.ExamUpdateData');
    Route::post('/Demo/EditData', [DemoController::class,'Editdata'])->name('Demo.DemoExamData');
    Route::get('/Demo/Question/{question_number}', [DemoController::class ,'Exampage'])->name('Demo.ExamPage');
    Route::get('Demo/CheckTimer', [DemoController::class , 'check_timer'])->name('Demo.DemoTimer');
    Route::get('Demo/Finish', [DemoController::class , 'FinishExam'])->name('Demo.FinishExam');
    Route::post('/Demo/UpdateDuestion', [DemoController::class , 'UpdateExamQuestion'])->name('Demo.UpdateExamQuestion');
    Route::get('Demo/submit', [DemoController::class , 'submit'])->name('Demo.submit');
    

});
Route::get('/profile', function () {
    return redirect('/dashboard');

});

// Auth::routes(['verify' => true]);


Route::match(['get', 'post'], 'botman', [BotManChatController::class ,'invoke']);

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
 
    return "Cache cleared successfully";
 });

 Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');



Route::get('handle-payment', [PayPalController::class, 'handlePayment'])->name('make.payment');
Route::get('cancel-payment', [PayPalController::class, 'paymentCancel'])->name('cancel.payment');
Route::get('payment-success', [PayPalController::class, 'paymentSuccess'])->name('success.payment');

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});


// socialite routes
Route::get('auth/{provider}/redirect',[SocialLoginController::class,'redirect' ])->name('auth.Socialite.redirect');
Route::get('auth/{provider}/callback',[SocialLoginController::class,'callback'])->name('auth.Socialite.callback');


//Ibdl blog
Route::name('Article')->group(function(){
Route::get('Article/index',[ArticleController::class,'index']);
Route::get('Articles/show/{id}',[ArticleController::class,'show']);


    // Route::get('try_image',[ArticleController::class,'image']);
    // Route::post('test/store',[ArticleController::class,'storeImage']);


});
Route::post('comment/store',[CommentController::class,'store'])->middleware('auth');
// Route::get('comment/index',[CommentController::class,"index"]);

