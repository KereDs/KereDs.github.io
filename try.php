<?php
#http://localhost:3000/try.php?page=resume

if(isset($_GET['page']) AND !empty($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "main";
}

include('header.php'); // 載入共用的頁首
switch($page){  // 依照 GET 參數載入共用的內容
    case "main";
      include('index.php');
    break;
    case "article1";
      include('article1.php');
    break;
    case "resume";
      include('resume.php');
    break;
}
include('footer.php'); // 載入共用的頁尾
?>