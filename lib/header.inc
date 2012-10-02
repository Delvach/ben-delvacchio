<?
if(!isset($PAGE_ID)) {
    $PAGE_ID = 'home';
}


?>
<!DOCTYPE html>
<html>
    <head>
    <title>Ben Del Vacchio</title>

    <link rel="stylesheet" href="/css/default.css" type="text/css" />
    
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>-->
    
    
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

<header>
    
    <h1>Ben Del Vacchio</h1>
    
    <nav>
        <ul id="nav_container"></ul>
    </nav>

</header>

