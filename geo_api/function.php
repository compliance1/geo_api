<?php

// デバイス判定
$user_a = $_SERVER['HTTP_USER_AGENT'];
if(strpos($user_a, "iPhone") !== false){
  $user_d = "iPhone";
}elseif(strpos($user_a, "iPod") !== false){
  $user_d = "iPod";
}elseif(strpos($user_a, "Android") !== false){
  $user_d = "Android";
}else{
  $user_d = "PC";
}

// ユーザーIP取得
$user_i = $_SERVER["REMOTE_ADDR"];

// 自分のURL
$site_url = (empty($_SERVER["HTTPS"]) ? "http://": "https://").$_SERVER["HTTP_HOST"]."/area_api/";

// 今の日時
$today_date = date("Y-m-d H:i:s");

// コピーライトの年数
$copy_date = (date("Y") == "2017") ? "2017": "2017 ～ ".date("Y");

// APIバージョン
$api_version = "1.0.0";
