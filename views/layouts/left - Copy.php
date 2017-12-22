<?php
use mdm\admin\components\MenuHelper;
$callback = function($menu){
    $data = eval($menu['data']); 
    //if have syntax error, unexpected 'fa' (T_STRING)  Errorexception,can use
   //$data = $menu['data'];
    return [
        'label' => $menu['name'],
        'url' => [$menu['route']],
        'option' => $data,
        'icon' => $menu['data'], 
        'items' => $menu['children'],
    ];
};

$items = MenuHelper::getAssignedMenu(Yii::$app->user->id, null, $callback, true);
 ?>
<aside class="main-sidebar">
    <section class="sidebar">
        <?php echo  dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => $items
            ]
        ) ?>
    </section>
</aside>