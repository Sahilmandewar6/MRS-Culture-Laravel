<?php

use Illuminate\Support\Facades\Route;
use Livewire\LivewireComponentsFinder;
use App\Http\Controllers\loginform;
use App\Http\Controllers\webtest;

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


// Auth::routes();


Auth::routes(['verify' => true]);
//home page
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//This for verification, below line start with 29 but end on
Route::group(['middleware' => ['auth', 'verified']], function(){
//Destination
Route::get('destination page', [App\Http\Controllers\HomeController::class, 'destpage'])->name('destination page');


//Cruises
Route::get('/cruises', [App\Http\Controllers\HomeController::class, 'cruises'])->name('cruises');

//Hotel
Route::get('/hotel', [App\Http\Controllers\HomeController::class, 'hotel'])->name('hotel');
//form route of hotel
Route::post('fetchdata', [App\Http\Controllers\HotelController::class, 'getdata'])->name('hotel booking');
//view hotel route to hotel form my hotel
Route::get('/hotelbooking', [App\Http\Controllers\HotelController::class, 'index']);




//Flight below routh
Route::get('/flight', [App\Http\Controllers\HomeController::class, 'flight'])->name('flight');
//view flight route to flight view my flight
Route::get('/flightbooking', [App\Http\Controllers\HomeController::class, 'fview']);

//booking form for flight
Route::get('flight-booking', [App\Http\Controllers\HomeController::class, 'book'])->name('book');
//fetch data

Route::post('fetch', [App\Http\Controllers\BookController::class, 'dataget'])->name('dataget');

//view flight all booking details
Route::get('/flightbooking', [App\Http\Controllers\BookController::class, 'index']);


//Edit Flight this route for open a normal form, Below both line for edit and update
// Route::get('/book-flight/{id}', [App\Http\Controllers\HomeController::class, 'book'])->name('book');

//booking form for flight
// Route::get('flight-booking', [App\Http\Controllers\BookController::class, 'book'])->name('book');

//Update Flight dont comment out below line.

// Route::put('/bookflight', [App\Http\Controllers\HomeController::class, 'bookingflight'])->name('bookingflight');

//Update Flight.

// Route::put('/bookflight', [App\Http\Controllers\HomeController::class, 'bookingflight'])->name('bookingflight');


//Blog
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');

//dress
Route::get('/dress', [App\Http\Controllers\HomeController::class, 'dress'])->name('dress');

//dress photo
Route::get('/photo', [App\Http\Controllers\HomeController::class, 'photo'])->name('photo');

//About
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

//contact
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('contact', [App\Http\Controllers\ContactController::class, 'getdata']);

//services
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');





Route::get('/Agra ', [App\Http\Controllers\PageController::class, 'Agra'])->name(' Agra ');
Route::get('/Ahmedabad ', [App\Http\Controllers\PageController::class, 'Ahmedabad'])->name(' Ahmedabad ');
Route::get('/Allahabad ', [App\Http\Controllers\PageController::class, 'Allahabad'])->name(' Allahabad ');
Route::get('/Amritsar ', [App\Http\Controllers\PageController::class, 'Amritsar'])->name(' Amritsar ');
Route::get('/Bangalore ', [App\Http\Controllers\PageController::class, 'Bangalore'])->name(' Bangalore ');
Route::get('/Bhopal ', [App\Http\Controllers\PageController::class, 'Bhopal'])->name(' Bhopal ');
Route::get('/Bhubaneswar ', [App\Http\Controllers\PageController::class, 'Bhubaneswar'])->name(' Bhubaneswar ');
Route::get('/Chandigarh ', [App\Http\Controllers\PageController::class, 'Chandigarh'])->name(' Chandigarh ');
Route::get('/Chennai ', [App\Http\Controllers\PageController::class, 'Chennai'])->name(' Chennai ');
Route::get('/Darjeeling ', [App\Http\Controllers\PageController::class, 'Darjeeling'])->name(' Darjeeling ');
Route::get('/Delhi ', [App\Http\Controllers\PageController::class, 'Delhi'])->name(' Delhi ');
Route::get('/Dharamshala ', [App\Http\Controllers\PageController::class, 'Dharamshala'])->name(' Dharamshala ');
Route::get('/Gangtok ', [App\Http\Controllers\PageController::class, 'Gangtok'])->name(' Gangtok ');
Route::get('/Goa ', [App\Http\Controllers\PageController::class, 'Goa'])->name(' Goa ');
Route::get('/Gokarna ', [App\Http\Controllers\PageController::class, 'Gokarna'])->name(' Gokarna ');
Route::get('/Gulmarg ', [App\Http\Controllers\PageController::class, 'Gulmarg'])->name(' Gulmarg ');
Route::get('/Gurugram ', [App\Http\Controllers\PageController::class, 'Gurugram'])->name(' Gurugram ');
Route::get('/Gwalior ', [App\Http\Controllers\PageController::class, 'Gwalior'])->name(' Gwalior ');
Route::get('/Hampi ', [App\Http\Controllers\PageController::class, 'Hampi'])->name(' Hampi ');
Route::get('/Hyderabad ', [App\Http\Controllers\PageController::class, 'Hyderabad'])->name(' Hyderabad ');
Route::get('/Indore ', [App\Http\Controllers\PageController::class, 'Indore'])->name(' Indore ');
Route::get('/Jaipur ', [App\Http\Controllers\PageController::class, 'Jaipur'])->name(' Jaipur ');
Route::get('/Jaisalmer ', [App\Http\Controllers\PageController::class, 'Jaisalmer'])->name(' Jaisalmer ');
Route::get('/Jodhpur ', [App\Http\Controllers\PageController::class, 'Jodhpur'])->name(' Jodhpur ');
Route::get('/Kochi ', [App\Http\Controllers\PageController::class, 'Kochi'])->name(' Kochi ');
Route::get('/Kodaikanal ', [App\Http\Controllers\PageController::class, 'Kodaikanal'])->name(' Kodaikanal ');
Route::get('/Kolkata ', [App\Http\Controllers\PageController::class, 'Kolkata'])->name(' Kolkata ');
Route::get('/Kozhikode ', [App\Http\Controllers\PageController::class, 'Kozhikode'])->name(' Kozhikode ');
Route::get('/Leh ', [App\Http\Controllers\PageController::class, 'Leh'])->name(' Leh ');
Route::get('/Lonavala ', [App\Http\Controllers\PageController::class, 'Lonavala'])->name(' Lonavala ');
Route::get('/Lucknow ', [App\Http\Controllers\PageController::class, 'Lucknow'])->name(' Lucknow ');
Route::get('/Madurai ', [App\Http\Controllers\PageController::class, 'Madurai'])->name(' Madurai ');
Route::get('/Mahabaleshwar ', [App\Http\Controllers\PageController::class, 'Mahabaleshwar'])->name(' Mahabaleshwar ');
Route::get('/Manali ', [App\Http\Controllers\PageController::class, 'Manali'])->name(' Manali ');
Route::get('/Mangalore ', [App\Http\Controllers\PageController::class, 'Mangalore'])->name(' Mangalore ');
Route::get('/Mumbai ', [App\Http\Controllers\PageController::class, 'Mumbai'])->name(' Mumbai ');
Route::get('/Munnar ', [App\Http\Controllers\PageController::class, 'Munnar'])->name(' Munnar ');
Route::get('/Mussoorie ', [App\Http\Controllers\PageController::class, 'Mussoorie'])->name(' Mussoorie ');
Route::get('/Mysore ', [App\Http\Controllers\PageController::class, 'Mysore'])->name(' Mysore ');
Route::get('/Nainital ', [App\Http\Controllers\PageController::class, 'Nainital'])->name(' Nainital ');
Route::get('/Nashik ', [App\Http\Controllers\PageController::class, 'Nashik'])->name(' Nashik ');
Route::get('/Nagpur ', [App\Http\Controllers\PageController::class, 'Nagpur'])->name(' Nagpur ');
Route::get('/Ooty ', [App\Http\Controllers\PageController::class, 'Ooty'])->name(' Ooty ');
Route::get('/Patna ', [App\Http\Controllers\PageController::class, 'Patna'])->name(' Patna ');
Route::get('/Pondicherry ', [App\Http\Controllers\PageController::class, 'Pondicherry'])->name(' Pondicherry ');
Route::get('/Pune ', [App\Http\Controllers\PageController::class, 'Pune'])->name(' Pune ');
Route::get('/Puri ', [App\Http\Controllers\PageController::class, 'Puri'])->name(' Puri ');
Route::get('/Rishikesh ', [App\Http\Controllers\PageController::class, 'Rishikesh'])->name(' Rishikesh ');
Route::get('/Shillong ', [App\Http\Controllers\PageController::class, 'Shillong'])->name(' Shillong ');
Route::get('/Shimla ', [App\Http\Controllers\PageController::class, 'Shimla'])->name(' Shimla ');
Route::get('/Srinagar ', [App\Http\Controllers\PageController::class, 'Srinagar'])->name(' Srinagar ');
Route::get('/Surat ', [App\Http\Controllers\PageController::class, 'Surat'])->name(' Surat ');
Route::get('/Thiruvananthapuram ', [App\Http\Controllers\PageController::class, 'Thiruvananthapuram'])->name(' Thiruvananthapuram ');
Route::get('/Varanasi ', [App\Http\Controllers\PageController::class, 'Varanasi'])->name(' Varanasi ');
Route::get('/Visakhapatnam ', [App\Http\Controllers\PageController::class, 'Visakhapatnam'])->name(' Visakhapatnam ');










});






















//this below line for add flight
Route::get('add-flight', [App\Http\Controllers\FlightController::class, 'add'])->name('add');
// filght form fetch this is for add flight
Route::post('flightdata', [App\Http\Controllers\FlightController::class, 'flightdata']);
