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
	return View::make('url-report');
});

Route::post('/', 'UrlReportController@createReportURL');

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

Route::get('/messageReceived', 'TwilioController@receiveMessage');

Route::get('/replyMessage', 'TwilioController@replyMessage');

