<?php

namespace maxyc\inspinia\widgets;

/**
 * Class Panel
 *
 * @package maxyc\inspinia\widgets
 */
class Panel extends \yii\base\Widget
{
    public $title = '';
    public $description = '';
    public $footer = '';

    public $toolbar = [];

    public $collapse_button = true;
    public $close_button    = true;

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        return $this->render('panel', [
            'content'=>$content,
            'title'=>$this->title,
            'description'=>$this->description,
            'toolbar'=>$this->toolbar,
            'footer'=>$this->footer,
            'collapse_button'=>$this->collapse_button,
            'close_button'=>$this->close_button,
        ]);
    }
}
