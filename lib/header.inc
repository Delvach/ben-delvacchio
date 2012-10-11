<?
if(!isset($PAGE_ID)) {
    $PAGE_ID = 'home';
}

if(!isset($TEMPLATE_ID)) {
    $TEMPLATE_ID = 'basic1';
}

if(!isset($KEYWORDS)) {
    $KEYWORDS = '';
}


?>
<!DOCTYPE html>
<html>
    <head>
    <title>Ben Del Vacchio</title>
    <meta name="keywords" content="<? echo $KEYWORDS; ?>">
    <? /* <link rel="stylesheet" href="/css/default.css" type="text/css" /> */ ?>
    <link rel="stylesheet" href="/css/<? echo $TEMPLATE_ID; ?>.css" type="text/css" />
    
    
    <script src="/distributions/jquery-1.8.2.min.js"></script>
    <script src="/distributions/jquery.xml2json.js"></script>
    
    <!-- HTML5 shiv (https://github.com/aFarkas/html5shiv) -->
    <!--[if lt IE 9]>
        <script src="/distributions/html5shiv.js"></script>
    <![endif]-->
    
    <script>
// Using a single top-level object to store global variables to keep our namespace tidy
var data = {
    page:{id:'<? echo $PAGE_ID; ?>'},
    files:{nav:'/config/nav.xml'},
    nav:{} // 
};

    </script>

  
    <script src="/js/default.js"></script>
    
</head>
<body class="page-<? echo $PAGE_ID; ?>">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
    
    
    
    <h1>Ben Del Vacchio</h1>
    
    <nav>
        <ul id="nav_container"></ul>
    </nav>
    <!--
    <div id="fb_container_outer">
        <div class="fb-like" data-href="http://ben.delvacchio.com<? echo $_SERVER['PHP_SELF']; ?>" data-send="true" data-width="200" data-show-faces="false"></div>
    </div>
    -->
</header>

