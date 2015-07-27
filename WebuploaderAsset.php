<?php
/**
 *
 * User: winds
 * Date: 15-7-27
 * Time: 下午1:50
 */

namespace wdteam\webuploader;

use yii\web\AssetBundle;

class WebuploaderAsset extends AssetBundle
{
    public $sourcePath = '@bower/webuploader/dist';

    public $css = [
        'webuploader.css',
    ];

    public $js = [
      'webuploader.min.js',
    ];

}