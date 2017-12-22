<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
       <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>x</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->

        <!--
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'MENU', 'options' => ['class' => 'header']],
					
					['label' => 'Master Web',  'url' => '#', 'icon' => 'maxcdn' ,
                                'items' => [ ['label' => 'New User', 'icon' => '#', 'url' => ['/admin/user/signup'], 'icon' => 'spinner', ],
											['label' => 'New Route', 'icon' => '#', 'url' => ['/admin/route'],'icon' => 'spinner', ],
											['label' => 'New Permission', 'icon' => '#', 'url' => ['/admin/permission'],'icon' => 'spinner', ],
											['label' => 'New Role', 'icon' => '#', 'url' => ['/admin/role'],'icon' => 'spinner', ],
											['label' => 'New Rule', 'icon' => '#', 'url' => ['/admin/rule'],'icon' => 'spinner', ],
											['label' => 'New Menu', 'icon' => '#', 'url' => ['/admin/menu'],'icon' => 'spinner', ],
											['label' => 'Paging User', 'icon' => '#', 'url' => ['/admin/user'],'icon' => 'spinner', ],
											['label' => 'Assignment', 'icon' => '#', 'url' => ['/admin/assignment'],'icon' => 'spinner', ],
											
											
                                           

                    ]],
					
					['label' => 'Administrator',  'url' => '#', 'icon' => 'buysellads',
                                'items' => [ ['label' => 'Change Password', 'icon' => '#', 'url' => '#', 'icon' => 'spinner',],
										   

                    ]],
					
                    ['label' => 'Master',  'url' => '#', 'icon' => 'medium',
                                'items' => [ ['label' => 'Cabang', 'icon' => '#', 'url' => ['/master/mst-cabang'], 'icon' => 'spinner',  ],
                                           ['label' => 'User', 'icon' => '#', 'url' => ['/master/mst-usr'],  'icon' => 'spinner',  ],
                                           ['label' => 'Satuan', 'icon' => '#', 'url' => ['/master/mst-satuan'],  'icon' => 'spinner', ],
										   ['label' => 'Menu', 'icon' => '#', 'url' => ['/master/mst-menu'],  'icon' => 'spinner',],
										   ['label' => 'Group', 'icon' => '#', 'url' => ['/master/mst-group'], 'icon' => 'spinner',],
										   ['label' => 'User Privilages', 'icon' => '#', 'url' => ['/master/mst-usr-privilages'], 'icon' => 'spinner',],
										   ['label' => 'Customer Type', 'icon' => '#', 'url' => ['/master/mst-cust-type'], 'icon' => 'spinner',],
										   

                    ]],
					
					['label' => 'Timbangan',  'url' => '#', 'icon' => 'text-width',
                                'items' => [['label' => 'Timbangan', 'icon' => '#', 'url' => ['/timbangan/tr-timbangan/create'],  'icon' => 'spinner',  ], 
                                            ['label' => 'List Timbangan Opr', 'icon' => '#', 'url' => ['/timbangan/tr-timbangan'],  'icon' => 'spinner',  ], 
                                           
                                          
										   

                    ]],
					
					['label' => 'Proyek',  'url' => '#',  'icon' => 'paypal',
                                'items' => [ ['label' => 'Customer', 'icon' => '#', 'url' => ['/proyek/mst-customer-pas'], 'icon' => 'spinner',],
                                           ['label' => 'Mapping Lokasi Proyek', 'icon' => '#', 'url' => ['/mst-map-lokasi-project'],'icon' => 'spinner',],
										   ['label' => 'Paket Proyek', 'icon' => '#', 'url' => ['/mst-packet-project'],'icon' => 'spinner',],
                                          
										   

                    ]],
					
                    /* ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']], */
                   /*  ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest], */
                  
				  
					['label' => 'Material & Product',  'url' => '#', 'icon' => 'maxcdn' ,
                                            
                                          'items' => [ ['label' => 'Item Location', 'icon' => '#', 'url' => ['/material/mst-lokasi-item'], 'icon' => 'spinner',],
                                           ['label' => 'Data Soure', 'icon' => '#', 'url' => ['/material/mst-source-item'],'icon' => 'spinner',],
                    ['label' => 'Item Type', 'icon' => '#', 'url' => ['/material/mst-type-item'],'icon' => 'spinner',],
                                              ['label' => 'Supplier', 'icon' => '#', 'url' => ['/material/mst-supplier'],'icon' => 'spinner',],
                                          
										   
                                            
                                            ]],
					/* ['label' => 'Transaksi',  'url' => '#', ], */
                ],
            ]
        ) ?>

    </section>

</aside>
