<?php

namespace wdteam\webuploader;
use Yii;
use yii\base\InvalidCallException;
use yii\helpers\FileHelper;

/**
 * This is just an example.
 */
class Webuploader extends \yii\base\Widget
{

    public $model;
    public $attribute;
    public $prefixUrl;       // 图片前缀部分
    public $savePath = "@webroot/webuploader";      // 图片存储路径
    public $callback;       // 回调函数 只有basic和multiple模式可以自己设置
    public $params = array();

    public function init()
    {
        parent::init();

        $savePath =  Yii::getAlias($this->savePath);
        if(!is_dir($savePath))
        {
            if(!FileHelper::createDirectory($savePath))
            {
                throw new InvalidCallException("上传目录无法创建！");
            };
        }


    }

    public function run()
    {
        $asset = WebuploaderAsset::register($this->view);

        return "Hello WindsDeng!";
    }



}
