<?php

get('/', 'HomeController@index');

get('rate', 'RateController@index');

get('download', 'DownloadController@index');

get('support', 'SupportController@index');
get('support/faq/{slug?}', 'SupportController@faq');

get('privacy', 'PrivacyController@index');

get('artists/{slug?}', 'ArtistsController@index');

get('contact', 'ContactController@index');
get('contact/subscribe', 'ContactController@subscribe');
get('contact/subscribe-success', 'ContactController@subscribe_success');
get('contact/unsubscribe', 'ContactController@unsubscribe');
get('contact/unsubscribe-success', 'ContactController@unsubscribe_success');