<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/home/badwolf/Website/tzujankwoon/grav-wushu/user/pages/01.home/default.md',
    'modified' => 1693651311,
    'size' => 514,
    'data' => [
        'header' => [
            'title' => 'Accueil',
            'body_classes' => 'title-center title-h1h2',
            'media_order' => 'pexels-rdne-stock-project-7045635.jpg',
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'leading' => 0,
                'columns' => 2,
                'limit' => 5,
                'order' => [
                    'by' => 'date',
                    'dir' => 'desc'
                ],
                'show_date' => false,
                'pagination' => true,
                'url_taxonomy_filters' => true
            ]
        ],
        'frontmatter' => 'title: Accueil
body_classes: \'title-center title-h1h2\'
media_order: pexels-rdne-stock-project-7045635.jpg
content:
    items:
        - \'@self.children\'
    leading: 0
    columns: 2
    limit: 5
    order:
        by: date
        dir: desc
    show_date: false
    pagination: true
    url_taxonomy_filters: true',
        'markdown' => '## Ne pas éditer ici !

Le contenu de la page d\'accueil se modifie via l\'admin Gantry5 : http://localhost:3000/admin/gantry/configurations/home/layout?nonce=881b7cc6dbc19b2694c96ea2e3063191'
    ]
];
