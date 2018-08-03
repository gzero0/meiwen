
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <title>每日一文</title>
  <link rel="stylesheet" href="assets/mdui-v0.2.1/css/mdui.min.css"/>
  <link rel="stylesheet" href="assets/highlight-9.11.0/styles/github-gist.css"/>
  <link rel="stylesheet" href="assets/highlight-9.11.0/styles/railscasts.css"/>
  <link rel="stylesheet" href="assets/docs/css/docs.css"/>
  <script>
  var _hmt = _hmt || [];
  (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?33d719afc3e48d8a2fbdd886b164d2e4";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
  })();
</script></head>
<body class="mdui-drawer-body-left mdui-appbar-with-toolbar  mdui-theme-primary-deep-orange mdui-theme-accent-pink">
<header class="mdui-appbar mdui-appbar-fixed">
  <div class="mdui-toolbar mdui-color-theme">
    <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer'}"><i class="mdui-icon material-icons">&#xe5d2;</i></span>
    <a href="index.php" class="mdui-typo-headline mdui-hidden-xs">每日一文</a>
          <a href="index.php" class="mdui-typo-title">每日一文</a>
        <div class="mdui-toolbar-spacer"></div>
    <a href="mqqwpa://im/chat?chat_type=wpa&uin=1223623801@qq.com&version=1" target="_blank" class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content: '联系站长'}">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" enable-background="new 0 0 36 36" xml:space="preserve" class="mdui-icon" style="width: 24px;height:24px;">
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="M18,1.4C9,1.4,1.7,8.7,1.7,17.7c0,7.2,4.7,13.3,11.1,15.5
	c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1
	c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4
	c-0.2-0.4-0.7-2.1,0.2-4.3c0,0,1.4-0.4,4.5,1.7c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7
	c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5
	c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5C34.3,8.7,27,1.4,18,1.4z"></path>
      </svg>
    </a>
  </div>
</header>

<div class="mdui-drawer" id="main-drawer">
  <div class="mdui-card">
  <div class="mdui-card-media">
    <img src="assets/img/drawer_bg.png"/>
    <div class="mdui-card-media-covered">
      <div class="mdui-card-primary">
        <div class="mdui-card-primary-title">美文</div>
        <div class="mdui-card-primary-subtitle">腹有诗书气自华，读书万卷始神通</div>
      </div>
    </div>
    </div>
  </div>
  <div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">
  <ul class="mdui-list">
  <a href="index.php">
  <li class="mdui-list-item mdui-ripple">
    <i class="mdui-list-item-icon mdui-icon material-icons">&#xe167;</i>
    <div class="mdui-list-item-content">每日一文</div>
  </li>
  </a>
  <a href="index.php?random=random">
  <li class="mdui-list-item mdui-ripple">
    <i class="mdui-list-item-icon mdui-icon material-icons">&#xe236;</i>
    <div class="mdui-list-item-content">随机一篇</div>
  </li>
  </a>
</ul>
  
  </div>
</div>



<?php
   
   if(empty($_GET['random'])){
$adress="https://meiriyiwen.com/";
$con=getHTTPS($adress);
$con=str_replace("<div class=\"article_text\">",'<content>',$con);
$con=str_replace("<!-- Baidu Button BEGIN -->","</content>",$con);
preg_match("/<h1>(.*)<\/h1>/i",$con,$tt);
$title = $tt[1];
preg_match("/<span>(.*)<\/span><\/p>/i",$con,$zz);
$author=$zz[1];
preg_match("!<content>(.*)<\/content>!isU",$con,$cc);
$content=$cc[1];
}else{
$adress="https://meiriyiwen.com/".$_GET['random']."/iphone/index.html";
$con=getHTTPS($adress);
$con=str_replace("<div class=\"article_text\">",'<content>',$con);
$con=str_replace("<!-- Baidu Button BEGIN -->","</content>",$con);
preg_match("!<h2 class=\"articleTitle\">(.*)<\/h2>!isU",$con,$tt);
$title = $tt[1];
preg_match("!<div class=\"articleAuthorName\">(.*)<\/div>!isU",$con,$zz);
$author=$zz[1];
preg_match("!<div class=\"articleContent\">(.*)<div class=\"randomBox\">!isU",$con,$cc);
$content=$cc[1];
}

 
  
 function getHTTPS($url) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_REFERER, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $result = curl_exec($ch);
  curl_close($ch);
  return $result;
}


?>

<a id="anchor-top"></a>
<div class="mdui-container doc-container doc-no-cover">
  <h1 class="doc-title mdui-text-color-theme"><?php echo $title; ?></h1>

  <div class="doc-chapter">
    <div class="mdui-typo">
      <p><?php echo $author; ?></p>
      <h4 class="doc-article-title"><?php echo $content; ?></h4>
    </div>   </div>
  
    



<div class="doc-footer-nav mdui-color-theme">
  <div class="mdui-container">
    <div class="mdui-row">
            <div class="mdui-col-xs-2 mdui-col-sm-6 doc-footer-nav-left"></div>
      
            <a href="index.php?random=random" class="mdui-ripple mdui-color-theme mdui-col-xs-10 mdui-col-sm-6 doc-footer-nav-right">
        <div class="doc-footer-nav-text">
          <i class="mdui-icon material-icons">&#xe5c8;</i>
          <span class="doc-footer-nav-direction">Next</span>
          <div class="doc-footer-nav-chapter">下一篇</div>
        </div>
      </a>
          </div>
  </div>
</div>

</div>

</div>

</div>



<script src="assets/jquery-3.2.1/jquery-3.2.1.min.js"></script>
<script src="assets/holder-2.9.4/holder.min.js"></script>
<script src="assets/highlight-9.11.0/highlight.pack.js"></script>
<script src="assets/mdui-v0.2.1/js/mdui.min.js"></script>
<script src="assets/docs/js/docs.js"></script>
