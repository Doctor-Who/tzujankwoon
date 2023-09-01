<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/badwolf/Website/tzujankwoon/grav-wushu/user/themes/g5_helium/blueprints/styles/footer.yaml',
    'modified' => 1693585682,
    'data' => [
        'name' => 'Footer Styles',
        'description' => 'Footer section styles for the Helium theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#312f38'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
