YII2百度上传扩展
==========
WebUploader是由Baidu WebFE(FEX)团队开发的一个简单的以HTML5为主，FLASH为辅的现代文件上传组件。

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist wdteam/yii2-webuploader "*"
```

or add

```
"wdteam/yii2-webuploader": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \wdteam\webuploader\Webuploader::widget(); ?>```