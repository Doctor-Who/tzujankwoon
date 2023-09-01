<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/badwolf/Website/tzujankwoon/grav-wushu/user/config/site.yaml',
    'modified' => 1693586349,
    'size' => 360,
    'data' => [
        'title' => 'Tzu Jan Kwoon Wushu Academie',
        'default_lang' => 'fr',
        'author' => [
            'name' => 'Wushu Master',
            'email' => 'nrochard@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
