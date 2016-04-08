<?php

return array(
    'db' => array(
        'table' => 'tb_tree',
        'order' => array(
            'id' => 'ASC',
        ),
        'pagination' => array(
            'per_page' => 1,
            'uri' => '/admin/tree',
        ),
    ),
    'options' => array(
        'caption' => '',
        'form_width' => '920px',
        'ident' => 'settings-container',
        'form_ident' => 'about-form',
        'table_ident' => 'about-table',
        'action_url' => 'werwer',
        'not_found' => 'NOT FOUND',
        'model' => 'Tree',
    ),
    'position' => array(
        'tabs' => array(
            'Общая'     => array(
                'id',
                'title',
                'slug',
                'description',
                /*  'picture',
                  'picture2',*/
                'map',
                'show_in_menu',
                'created_at',
                'updated_at',
            ),
            'SEO'    => array(
                'seo_title',
                'seo_description',
                'seo_keywords',
            ),
        )
    ),
    'fields' => array(
        'id' => array(
            'caption' => '#',
            'type' => 'readonly',
            'class' => 'col-id',
            'width' => '1%',
            'hide' => true,
            'is_sorting' => true
        ),
        'title' => array(
            'caption' => 'Название',
            'type' => 'text',
        ),
        'description' => array(
            'caption' => 'Текст',
            'type'    => 'wysiwyg',
            'wysiwyg' => 'redactor',
            'editor-options' => array(
                'lang' => 'ru-RU',
            ),
        ),
        'show_in_menu' => array(
            'caption' => 'Показывать в меню',
            'type' => 'checkbox',
            'options' => array(
                1 => 'Да',
                0 => 'Нет',
            ),
            'field' => 'tinyInteger',
        ),
        'map' => array(
            'caption' => 'Карта',
            'type' => 'textarea',
        ),
        'created_at' => array(
            'caption' => 'Дата создания',
            'type' => 'datetime',
            'hide' => true,
        ),
        'updated_at' => array(
            'caption' => 'Дата обновления',
            'type' => 'datetime',
            'hide' => true,
        ),
        'seo_title' => array(
            'caption' => 'SEO title',
            'type' => 'text',
        ),
        'seo_description' => array(
            'caption' => 'SEO description',
            'type' => 'textarea',
            'rows' => '2',
        ),
        'seo_keywords' => array(
            'caption' => 'SEO keywords',
            'type' => 'text',
        ),
        'slug' => array(
            'caption' => 'Url',
            'type' => 'text'
        ),
        /*  'picture' => array(
              'caption' => 'Иконка',
              'type' => 'image',
              'storage_type' => 'image', // image|tag|gallery
              'img_height' => '50px',
              'is_upload' => true,
              'is_null' => true,
              'is_remote' => false,
              'hide_list' => true,
              'field' => 'string',
          ),
          'picture2' => array(
              'caption' => 'Иконка222',
              'type' => 'image',
              'storage_type' => 'image', // image|tag|gallery
              'img_height' => '50px',
              'is_upload' => true,
              'is_null' => true,
              'is_remote' => false,
              'hide_list' => true,
              'field' => 'string',
          ),*/
    ),

    'filters' => array(
    ),

   
);