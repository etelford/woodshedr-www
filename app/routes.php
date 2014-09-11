<?php

Route::get('/', 'HomeController@index');

Route::get('rate', 'RateController@index');

Route::get('download', 'DownloadController@index');

Route::get('support', 'SupportController@index');
Route::get('support/faq/{slug?}', 'SupportController@faq');

Route::get('privacy', 'PrivacyController@index');

Route::get('artists/{slug?}', 'ArtistsController@index');

Route::get('contact', 'ContactController@index');
Route::get('contact/subscribe', 'ContactController@subscribe');
Route::get('contact/subscribe-success', 'ContactController@subscribe_success');
Route::get('contact/unsubscribe', 'ContactController@unsubscribe');
Route::get('contact/unsubscribe-success', 'ContactController@unsubscribe_success');