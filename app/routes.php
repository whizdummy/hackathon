<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::post('/', 'ImageReportController@reportImage');

Route::get('/report-image', function(){

	return View::make('image-report');

});

Route::post('/report-image', 'ImageReportController@reportImage');

Route::get('/send-message', 'TwilioController@sendMessage');

Route::post('/test-connection', function() {
	DB::table('tblReport')
	->insert([
		'strFullName' => Request::input('strFullName'),
		'strUrlReport' => Request::input('strUrlReport'),
		'strRemarks' => Request::input('strRemarks'),
		'dtmReport' => DB::raw('NOW()')
	]);

	return "Success";
});

Route::post('/messageReceived', 'TwilioController@receiveMessage');

Route::post('/replyMessage', 'TwilioController@replyMessage');

Route::post('/messageVerification', function(){
	return View::make('messageVerification');
});

Route::get('/try', function(){
	return View::make('try');
});

