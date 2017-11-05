<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'MENU', 'options' => ['class' => 'header']],
					
					['label' => 'Administrator',  'url' => '#', 
                                'items' => [ ['label' => 'Change Password', 'icon' => '#', 'url' => '#',],
										   

                    ]],
					
                    ['label' => 'Master',  'url' => '#', 
                                'items' => [ ['label' => 'Cabang', 'icon' => '#', 'url' => ['/mst-cabang'],],
                                           ['label' => 'User', 'icon' => '#', 'url' => ['/mst-usr'],],
                                           ['label' => 'Satuan', 'icon' => '#', 'url' => ['/mst-satuan'],],
										   ['label' => 'Menu', 'icon' => '#', 'url' => ['/mst-menu'],],
										   ['label' => 'Group', 'icon' => '#', 'url' => ['/mst-group'],],
										   ['label' => 'User Privilages', 'icon' => '#', 'url' => ['/mst-usr-privilages'],],
										   ['label' => 'Customer Type', 'icon' => '#', 'url' => ['/mst-cust-type'],],
										   

                    ]],
					
					['label' => 'Proyek',  'url' => '#', 
                                'items' => [ ['label' => 'Customer', 'icon' => '#', 'url' => ['/mst-customer-pas'],],
                                           ['label' => 'Mapping Lokasi Proyek', 'icon' => '#', 'url' => ['/mst-map-lokasi-project'],],
										   ['label' => 'Paket Proyek', 'icon' => '#', 'url' => ['/mst-packet-project'],],
                                          
										   

                    ]],
					
                    /* ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']], */
                   /*  ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest], */
                  
				  
					['label' => 'Material & Product',  'url' => '#', ],
					['label' => 'Transaksi',  'url' => '#', ],
                ],
            ]
        ) ?>

    </section>

</aside>
