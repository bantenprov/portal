<?php

Route::group(['prefix' => 'portal'], function() {
    Route::get('demo', 'Bantenprov\Portal\Http\Controllers\PortalController@demo');
});
