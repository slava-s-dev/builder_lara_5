<?php

Route::group(array('prefix' => Config::get('builder.admin.uri'), 'before' => array('auth_admin', 'check_permissions')), function() {

    Route::any('translations_cms/phrases', array(
            'as' => 'phrases_all',
            'uses' => 'Vis\TranslationsCMS\TranslateController@fetchIndex')
    );
    Route::get('translations_cms/generate', array(
            'as' => 'phrases_all',
            'uses' => 'Vis\TranslationsCMS\GenerateController@getIndex')
    );

    if (Request::ajax()) {

        Route::post('translations_cms/create_pop', array(
                'as' => 'create_pop',
                'uses' => 'Vis\TranslationsCMS\TranslateController@fetchCreate')
        );
        Route::post('translations_cms/translate', array(
                'as' => 'translate',
                'uses' => 'Vis\TranslationsCMS\TranslateController@doTranslate')
        );
        Route::post('translations_cms/add_record', array(
                'as' => 'add_record',
                'uses' => 'Vis\TranslationsCMS\TranslateController@doSaveTranslate')
        );
        Route::post('translations_cms/change_text_lang', array(
                'as' => 'change_text_lang',
                'uses' => 'Vis\TranslationsCMS\TranslateController@doSavePhrase')
        );
        Route::post('translations_cms/del_record', array(
                'as' => 'del_record',
                'uses' => 'Vis\TranslationsCMS\TranslateController@doDelelePhrase')
        );
    }

});


