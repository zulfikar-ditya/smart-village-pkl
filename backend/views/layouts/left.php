<aside class="main-sidebar">

    <section class="sidebar">
        <?php if(Yii::$app->user->identity->roles_id == 1) {?>
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => [
                            'class' => 'sidebar-menu tree text-capitalize', 
                            'data-widget'=> 'tree',
                            ],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'fas fa-tachometer-alt', 'url' => ['/']],
                    [
                        'label' => 'Master Desa',
                        'icon' => 'fas fa-university',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Dusun', 'icon' => 'fas fa-map-marker-alt', 'url' => ['/dusun']],
                            ['label' => 'Rt/rw', 'icon' => 'fas fa-street-view', 'url' => ['/rt-rw']],
                        ],
                    ],

                    [
                        'label' => 'Master Penduduk',
                        'icon' => 'fas fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Agama', 'icon' => 'fas fa-kaaba', 'url' => ['/agama']],
                            ['label' => 'pendidikan', 'icon' => 'fas fa-graduation-cap', 'url' => ['/pendidikan']],
                            ['label' => 'pekerjaan', 'icon' => 'fas fa-hard-hat', 'url' => ['/pekerjaan']],
                            ['label' => 'penduduk', 'icon' => 'fas fa-user', 'url' => ['/penduduk']],
                        ]
                    ],

                    [
                        'label' => 'Master pembangunan',
                        'icon' => 'fas fa-tools',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Pembangunan', 'icon' => 'far fa-list-alt', 'url' => ['/pembangunan']],
                            ['label' => 'Kategori Pembangunan', 'icon' => 'far fa-list-alt', 'url' => ['/kategori-pembangunan']],
                            ['label' => 'lapor progress', 'icon' => 'fas fa-tasks', 'url' => ['/lapor-progress']],
                            ['label' => 'request pembangunan', 'icon' => 'fas fa-search-plus', 'url' => ['/request-pembangunan']],
                            ['label' => 'Sumber Dana', 'icon' => 'fas fa-money-check-alt', 'url' => ['/sumber-dana-pembangunan',]],
                            ['label' => 'Status Pembangunan', 'icon' => 'fas fa-spinner', 'url' => ['/status-pembangunan',]],
                            ['label' => 'mitra', 'icon' => 'fas fa-praying-hands', 'url' => ['/mitra']],
                        ]
                    ],

                    [
                        'label' => 'Master User',
                        'icon' => 'fas fa-users',
                        'url' => '#',
                        'items' => [
                            ['label' => 'User', 'icon' => 'fas fa-users', 'url' => ['/user']],
                            ['label' => 'role', 'icon' => 'fas fa-user-tag', 'url' => ['/roles']],
                        ],
                    ],

                    ['label' => 'Lapor Aduan', 'icon' => 'far fa-flag', 'url' => ['/lapor-aduan']],
                    ['label' => 'pengumuman', 'icon' => 'far fa-envelope', 'url' => ['/pengumuman']],
                ],
            ]
        ) ?>
        <?php } else if (Yii::$app->user->identity->roles_id == 7){ ?>
            <?= dmstr\widgets\Menu::widget(
            [
                'options' => [
                            'class' => 'sidebar-menu tree text-capitalize', 
                            'data-widget'=> 'tree',
                            ],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'fas fa-tachometer-alt', 'url' => ['/']],
                    [
                        'label' => 'Master pembangunan',
                        'icon' => 'fas fa-tools',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Pembangunan', 'icon' => 'far fa-list-alt', 'url' => ['/pembangunan']],
                            ['label' => 'Kategori Pembangunan', 'icon' => 'far fa-list-alt', 'url' => ['/kategori-pembangunan']],
                            ['label' => 'Sumber Dana', 'icon' => 'fas fa-money-check-alt', 'url' => ['/sumber-dana-pembangunan',]],
                            ['label' => 'mitra', 'icon' => 'fas fa-praying-hands', 'url' => ['/mitra']],
                        ]
                    ],
                    ['label' => 'request pembangunan', 'icon' => 'fas fa-search-plus', 'url' => ['/request-pembangunan']],
                    ['label' => 'penduduk', 'icon' => 'fas fa-user', 'url' => ['/penduduk']],
                    ['label' => 'Lapor Aduan', 'icon' => 'far fa-flag', 'url' => ['/lapor-aduan']],
                    ['label' => 'report', 'icon' => 'fas fa-tasks', 'url' => ['/lapor-progress']],
                    
                ],
            ]
        ) ?>
        <?php } else {?>
            <?= dmstr\widgets\Menu::widget(
            [
                'options' => [
                            'class' => 'sidebar-menu tree text-capitalize', 
                            'data-widget'=> 'tree',
                            ],
                'items' => [
                    ['label' => 'Access Denied', 'icon' => 'fas fa-user-times', 'url' => ['/']],
                ]
            ]
            ) ?>

        <?php } ?>

        

    </section>

</aside>
