<?php
require_once 'utils/WechatObj.php';

$wechatObj = new WechatObj();

$res = file_get_contents('utils/access_token.json');
$result = json_decode($res);
$access_token = $result->access_token; //获取access_token

//查询用户tag
$url = "https://api.weixin.qq.com/cgi-bin/tags/get?access_token=$access_token";
$resp = $wechatObj->requestHttp($url);

var_dump($resp);