<?php
use App\Http\Livewire\AboutusComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\BlogSingleComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PortfolioComponent;
use App\Http\Livewire\PricingComponent;
use App\Http\Livewire\ServiceComponent;
use App\Http\Livewire\TeamComponent;
use App\Http\Livewire\TestimonialsComponent;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class);
Route::get('/about', AboutusComponent::class);
Route::get('/blog', BlogComponent::class);
Route::get('/blog-single', BlogSingleComponent::class);
Route::get('/contact', ContactComponent::class);
Route::get('/pricing', PricingComponent::class);
Route::get('/portfolio', PortfolioComponent::class);
Route::get('/service', ServiceComponent::class);
Route::get('/team', TeamComponent::class);
Route::get('/testimonials', TestimonialsComponent::class);


