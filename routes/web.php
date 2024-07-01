<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;//追記
use App\Http\Middleware\RedirectIfNotAuthenticated;//追記

use App\Http\Controllers\PersonController;//追記
use App\Http\Controllers\PhotoController;//追記
use App\Http\Controllers\TemperatureController;
use App\Http\Controllers\BloodpressureController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ToiletController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SpeechController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SpreadsheetController; // Qiitaの記事
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DompdfController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AmiVoiceController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\MeetingController;
// use Google\Cloud\Speech\V1p1beta1\StreamingRecognitionConfig;
// use Google\Cloud\Speech\V1p1beta1\StreamingRecognizeRequest;



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
    return view('auth.login');
})->middleware([Authenticate::class]); // Authenticate ミドルウェアを適用



Route::middleware([RedirectIfNotAuthenticated::class])->group(function () {
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// プレミア会員用のルーティング
//Route::group(['middleware' => ['auth', 'can:company']], function () {
	// Item用の一括ルーティング
  //Route::resource('people', PersonController::class);
  
//});
// Book用の一括ルーティング　本来使ってたルーティング↓
Route::resource('people', PersonController::class);

// 中間テーブルのリレーションのための追記↓
//Route::get('people', [PersonController::class, 'index'])->name('people.show');

Route::view('/register', 'register');

Route::get('peopleregister', [PersonController::class, 'create']);
Route::post('peopleregister', [PersonController::class, 'store']);
// Route::get('peopleregister', [PersonController::class, 'create']); 
//   Route::resource('/photos', 'App\Http\Controllers\PhotoController')->only(['create','store']);

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('temperaturelist', [PersonController::class, 'showtemperature'])->name('temperaturelist.edit');

Route::get('temperature/{people_id}/edit', [TemperatureController::class, 'edit'])->name('temperature.edit');
// Route::resource('temperature/{people_id}/edit', [TemperatureController::class])->name('temperature.edit');
// Route::resource('temperature/{people_id}/edit', TemperatureController::class);

// Route::post('temperature/{people_id}/edit', [TemperatureController::class,'store'])->name('temperature.post');

// プルダウンで登録させるバージョン↓
Route::post('temperatures/{people_id}', [TemperatureController::class, 'store'])->name('temperatures.store');
Route::get('temperatures/{people_id}', [TemperatureController::class, 'show'])->name('temperatures.show');
// Route::get('temperatures/{people_id}', [PersonController::class, 'index'])->name('temperatures.show');
Route::get('temperature/{people_id}/edit', [TemperatureController::class, 'edit'])->name('temperature.edit');

// 体温編集↓
Route::get('temperaturechange/{people_id}', [TemperatureController::class, 'change'])->name('temperature.change');
Route::post('temperaturechange/{people_id}',[TemperatureController::class,'update'])->name('temperature_update');
// プルダウンで登録させるバージョン↓
Route::post('bloodpressures/{people_id}', [BloodpressureController::class, 'store'])->name('bloodpressures.store');
Route::get('bloodpressures/{people_id}', [BloodpressureController::class, 'show'])->name('bloodpressures.show');
// Route::get('bloodpressure/{people_id}', [BloodpressureController::class, 'edit'])->name('bloodpressure.edit');

Route::get('bloodpressures/{people_id}/edit', [BloodpressureController::class, 'edit'])->name('bloodpressures.edit');

// 血圧編集↓
Route::get('bloodpressurechange/{people_id}', [BloodpressureController::class, 'change'])->name('bloodpressure.change');
Route::post('bloodpressurechange/{people_id}',[BloodpressureController::class,'update'])->name('bloodpressure_update');

Route::get('foods/{id}', 'FoodController@show')->name('foods.show');
// Route::get('foods/{id}', 'FoodController@showAmountFood')->name('foods.show');
// Route::get('people/{id}', 'FoodController@show')->name('people.show');
Route::get('food/{people_id}/edit', [FoodController::class, 'edit'])->name('food.edit');
Route::post('food/{people_id}/edit', [FoodController::class,'store'])->name('food.post');

//本：更新画面
Route::get('foodchange/{people_id}',[FoodController::class,'change'])->name('food.change'); //通常
// Route::post('/booksedit/{book}',[BookController::class,'edit'])->name('book_edit'); //通常
// Route::get('/booksedit/{book}', [BookController::class,'edit'])->name('edit');      //Validationエラーありの場合

//本：更新画面
// Route::post('foods/update',[FoodController::class,'update'])->name('food_update');
Route::post('foodchange/{people_id}',[FoodController::class,'update'])->name('food_update');

Route::get('toilets/{id}', [ToiletController::class, 'show'])->name('toilets.show');
// Route::get('toilets/{id}', 'ToiletController@show')->name('toilets.show');
Route::get('toilet/{people_id}/edit', [ToiletController::class, 'edit'])->name('toilet.edit');
Route::post('toilet/{people_id}/edit', [ToiletController::class,'store'])->name('toilet.post');

// プルダウンで登録させるバージョン↓
// Route::post('toilets/{people_id}', [ToiletController::class,'store'])->name('toilet.store');
// トイレ編集↓
Route::get('toiletchange/{people_id}', [ToiletController::class, 'change'])->name('toilet.change');
Route::post('toiletchange/{people_id}',[ToiletController::class,'update'])->name('toilet_update');


// Route::get('speeches/{id}', 'SpeechController@show')->name('speeches.show');
// Route::get('speech/{people_id}/edit', [SpeechController::class, 'edit'])->name('speech.edit');
Route::get('morningspeech/{people_id}/edit', [SpeechController::class, 'show'])->name('morningspeech.show');
Route::post('morningspeech/{people_id}/edit', [SpeechController::class,'store'])->name('morningspeech.post');

// 午前の活動編集↓
Route::get('morningspeechchange/{people_id}', [SpeechController::class, 'change'])->name('morningspeech.change');
Route::post('morningspeechchange/{people_id}',[SpeechController::class,'update'])->name('morningspeech_update');

// SpeechControllerにshowメソッド・storeメソッドが重複するためedit createで書いた↓
Route::get('afternoonspeech/{people_id}/edit', [SpeechController::class, 'edit'])->name('afternoonspeech.show');
Route::post('afternoonspeech/{people_id}/edit', [SpeechController::class,'create'])->name('afternoonspeech.post');

// 午後の活動編集↓
Route::get('afternoonspeechchange/{people_id}', [SpeechController::class, 'PMchange'])->name('afternoonspeech.PMchange');
Route::post('afternoonspeechchange/{people_id}',[SpeechController::class,'PMupdate'])->name('afternoonspeech_PMupdate');


// プルダウンで登録させるバージョン↓
Route::post('speeches/{people_id}', [SpeechController::class,'store'])->name('speech.store');
// Route::post('/speech', 'SpeechController@store')->name('speech.store');
Route::get('speeches/{people_id}', [SpeechController::class,'show'])->name('speech.show');
Route::get('/speech/{id}/edit', 'SpeechController@edit')->name('speech.edit');

Route::get('record/{people_id}/edit', [RecordController::class, 'show'])->name('record.edit');

Route::get('notification/{people_id}/edit', [NotificationController::class, 'show'])->name('notification.show');
Route::post('notification/{people_id}/edit', [NotificationController::class,'store'])->name('notification.post');

// 連絡事項の編集↓
Route::get('notificationchange/{people_id}', [NotificationController::class, 'change'])->name('notification.change');
Route::post('notificationchange/{people_id}',[NotificationController::class,'update'])->name('notification_update');

// 連絡帳機能
Route::get('chat/{people_id}', [ChatController::class, 'show'])->name('chat.show');
Route::post('chat/{people_id}', [ChatController::class, 'store'])->name('chat.store');


// 議事録
Route::get('meeting', [MeetingController::class, 'show'])->name('meeting.show');
Route::post('meeting/edit', [MeetingController::class,'store'])->name('meeting.post');
Route::get('meetingresult', [MeetingController::class, 'edit'])->name('meeting.edit');
Route::get('meetingchange/{id}', [MeetingController::class, 'change'])->name('meeting.change');
Route::post('meetingchange/{id}',[MeetingController::class,'update'])->name('meeting.update');
Route::post('meetingresult/{id}',[MeetingController::class,'destroy'])->name('meeting.delete');


Route::get('people/{id}/edit', [PersonController::class, 'edit'])->name('people.edit');

Route::get('/download',[SpreadsheetController::class,'chart'])->name('chart');

Route::resource('/upload',UploadController::class);

Route::delete('/delete/{fileName}',[UploadController::class,'delete'])->name('upload.delete');

// Route::delete('/delete/{fileName}', function ($fileName) {
//     // ファイルを削除
//     Storage::delete('storage/images/' . $fileName);
    
//     return response()->json(['message' => 'ファイルが削除されました']);
// });

// Route::post('/read-pdf', 'UploadController@readPdf');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.edit');
// Route::get('/convert-pdf-to-image', 'PdfToImageController@convertPdfToImage');
// Route::get('/convert-pdf-to-image',  [UploadController::class, 'convertPdfToImage'])->name('convert.edit');

// Route::get('/upload', function () {
//     return view('upload');
// });

// Route::get('/convert-pdf', [UploadController::class, 'convert'])->name('convert.edit');
Route::post('/convert-pdf', [UploadController::class, 'convertPDFsToPNG'])->name('convert.edit');
Route::post('/readPNG', [UploadController::class, 'readPNG'])->name('readPNG.edit');

Route::get('chart/{id}/edit', [ChartController::class, 'show'])->name('chart.edit');
// Route::get('food/{people_id}/edit', [FoodController::class, 'edit'])->name('food.edit');

Route::get('/chartjs', function () {
    return view('chartjs');
});

// PDFでダウンロードする↓


Route::get('record/{id}/edit', [DompdfController::class, 'record'])->name('record');
Route::get('pdf/{people_id}/edit', [DompdfController::class, 'pdf'])->name('pdf');



// マニュアル動画↓
Route::post('videos/{people_id}', [VideoController::class, 'store'])->name('videos.store');
Route::get('videos/{people_id}', [VideoController::class, 'show'])->name('videos.show');
Route::get('videos/{people_id}/edit', [VideoController::class, 'edit'])->name('videos.edit');

// Qiitaの記事↓
// Route::get('/index', [SpreadsheetController::class, 'index']);
// Route::post('/download', [SpreadsheetController::class, 'download']);

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/photo/upload', PhotoController::class, 'uploadForm')->name('photo.upload.form');

// Route::post('/photo/upload', PhotoController::class, 'upload')->name('photo.upload');



Route::get('businesscard', 'BusinessCardController@index');
Route::post('businesscard/extract', 'BusinessCardController@extract');

// Route::get('message', 'MessageController@index');
Route::get('/message', [MessageController::class, 'index']);
Route::get('ajax/message', 'Ajax\MessageController@index'); 
Route::post('ajax/message', 'Ajax\MessageController@create'); 

// 音声認識テスト↓
Route::view('/speechsample', 'speechsample');
Route::view('/speechsample2', 'speechsample2');
Route::view('/speechsample3', 'speechsample3');
Route::view('/speechsamplehrp', 'speechsamplehrp');
require __DIR__.'/auth.php';

});