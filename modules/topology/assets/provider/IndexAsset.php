<?php
/**
 * @copyright Copyright (c) 2012-2016 RNP
 * @license http://github.com/ufrgs-hyman/meican2#license
 */

namespace meican\topology\assets\provider;

use yii\web\AssetBundle;

class IndexAsset extends AssetBundle
{
    public $sourcePath = '@meican/topology/assets/provider/public';

    public $js = [
    	'provider.js',
    ];

    public $depends = [
		'meican\base\assets\layout\Asset',
    ];
}
