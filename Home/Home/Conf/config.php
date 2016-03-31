<?php
$config =   require './config.inc.php';
$config_home   = array(
    //'配置项'=>'配置值'
    'DEFAULT_THEME' =>  'Default',
    'URL_HTML_SUFFIX'   =>  '',
);
return array_merge($config,$config_home);