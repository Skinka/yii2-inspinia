<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5><?=$title?> <?=$description ? '<small class="m-l-sm">'.$description.'</small>' : ''?></h5>


        <div class="ibox-tools">
            <?php if($collapse_button):?>
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
            <?php endif?>
            
            <?php if(!empty($toolbar)):?>
                <?php foreach($toolbar as $item):?>
                    <?php if(isset($item['items'])):?>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <?=$item['icon']?'<i class="fa fa-'.$item['icon'].'"></i>':''?>
                            <?=$item['title']?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach($item['items'] as $sub_item):?>
                            <li>
                                <a href="<?=$sub_item['link']?>">
                                    <?=$sub_item['icon']?'<i class="fa fa-fw fa-'.$sub_item['icon'].'"></i> ':''?>
                                    <?=$sub_item['title']?>
                                </a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    <?php else:?>
                        <a href="<?=$item['link']?>">
                            <?=$item['icon']?'<i class="fa fa-'.$item['icon'].'"></i>':''?>
                            <?=$item['title']?>
                        </a>
                    <?php endif?>
                <?php endforeach?>

            <?php endif?>

            <?php if($close_button):?>
            <a class="close-link">
                <i class="fa fa-times"></i>
            </a>
            <?php endif?>
        </div>

    </div>
    <div class="ibox-content">
        <?=$content?>
    </div>
    <?php if($footer):?>
        <div class="ibox-footer">
            <?=$footer?>
        </div>
    <?php endif?>
</div>