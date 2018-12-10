<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\dauster\\public\\web/templates/rt_kraken/particles/promoimage.yaml',
    'modified' => 1541184822,
    'data' => [
        'name' => 'Promo Image',
        'description' => 'Display promo image.',
        'type' => 'particle',
        'icon' => 'fa-camera',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particles.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Promo Image',
                    'description' => 'Select desired promo image.'
                ],
                'promoimagetitle' => [
                    'type' => 'input.text',
                    'label' => 'Promo Image Title',
                    'description' => 'Customize the promo image title text.',
                    'placeholder' => 'Enter the promo image title'
                ],
                'desc' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ],
                'iconbutton' => [
                    'type' => 'input.icon',
                    'label' => 'Icon Button'
                ],
                'promoimageicons' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Icons',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'skip' => true
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
