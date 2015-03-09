<?php

/**
 * InfiniteScroll Asset
 * @author xjflyttp <xjflyttp@gmail.com>
 */

namespace xj\infinitescroll;

use yii\web\AssetBundle;

class InfiniteScrollAsset extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-infinitescroll-widget/assets';
    public $css = [];
    public $js = ['jquery.infinitescroll.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
