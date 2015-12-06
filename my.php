<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="i_bootstrap.css">
<title>Bootstrap Test</title>
</head>

<?php
include('simple_html_dom.php');
$b = 1;
if ($_GET['b'] != null){
	global $b;
	$b = $_GET['b'] + 1;
}
	

$srcFind = file_get_html('http://keet.dididown.me/bbs/archiver/fid-15-page-5.html');
$srcFind = $srcFind->find('.altbg2',0);
$srcFindArr = $srcFind->find('a');
$srcTid = 'http://keet.dididown.me/bbs/'.$srcFindArr[$b]->href;
$srcTidTitle = $srcFindArr[$b]->innertext;


//prinHtml($srcTid,$srcTidTitle);


//function prinHtml($srcTid, $srcTidTitle){
$Mys = file_get_html($srcTid);
$Mys = $Mys->find('.t_msg',0);
$arrs = explode('[img]',$Mys);
/*foreach($arrs as $arr){
	$imgsrc = stristr($arr,'[/img]',true);
	echo '<img src="'.$imgsrc.'" border="0" alt="" /><br />';
	}
}*/

?>
<script>
$(document).ready(function() {
   $('.glyphicon-forward').click(function(){
	   var aJava = document.getElementById('nav').innerHTML;
//var aUrl = 'http://192.168.1.10/~huangdong/php/test3.php?b='+aJava;
       aUrl = 'http://'+location.host+'/~huangdong/bootstrap/my.php?b='+aJava

       document.location.replace(aUrl);
	   
	   });
   
   $('.dropdown').on('show.bs.dropdown', function(){
	   var x = $("#i_title").attr("data-title-id");
	   $(".list-group-item").removeClass("active");
       $(".list-group-item:nth-child("+x+")").addClass("active");
	   $('.dropdown-menu').css('height', screen.availHeight-200);
	   });
   $(".list-group-item").click(function(){
	   $(".list-group-item").removeClass("active");
	   $(this).addClass("active");
	   });
   
});

</script>
<body>
  <div id="a">
    <?php echo '<h1 id="nav">'.$b.'</h1>' ?>
    <h1>Example Page Header</h1>
  </div>
  <nav data-spy="affix" data-offset-top="150">
    <div class="container-fluid i_header_bgstyle">
      <div class="i_header i_header_iconsize">
        <ul class="i_header_ul">
          <li class="dropdown">
            <a id="menu1" class="dropdown-toggle" data-toggle="dropdown" href="#">
              <span class="glyphicon glyphicon-menu-hamburger"></span>
            </a>
            <ul id="iul" class="dropdown-menu" style="margin:0; overflow:scroll; overflow-x:hidden; width:200px;">
            
              <div class="list-group">
                <a href="#" class="list-group-item">
                 
                  
                  <p class="list-group-item-text">[11-25] <span class="badge">45</span> P</p>
                  
                </a>
                <a href="#" class="list-group-item">
                  <h5 class="list-group-item-heading">First List Group Item Heading</h5>
                  <p class="list-group-item-text">List Group Item Text</p>
                </a>
                <a href="#" class="list-group-item">
                  <h5 class="list-group-item-heading">First List Group Item Heading</h5>
                  <p class="list-group-item-text">List Group Item Text</p>
                </a>
                <a href="#" class="list-group-item">
                  <h5 class="list-group-item-heading">First List Group Item Heading</h5>
                  <p class="list-group-item-text">List Group Item Text</p>
                </a>
                <a href="#" class="list-group-item">
                  <h5 class="list-group-item-heading">First List Group Item Heading</h5>
                  <p class="list-group-item-text">List Group Item Text</p>
                </a>
                <a href="#" class="list-group-item">
                  <h5 class="list-group-item-heading">First List Group Item Heading</h5>
                  <p class="list-group-item-text">List Group Item Text</p>
                </a>
              </div>
            </ul>
            
          </li>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-home"></span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="glyphicon glyphicon-user"></span>
            </a>
          </li> 
        </ul>
      </div>
      <div class="i_header_right i_header_iconsize">
        <ul class="i_header_ul">
          <li><a href="#"><span class="glyphicon glyphicon-backward"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-forward"></span></a></li> 
        </ul>
      </div>
    <div style="clear:both"></div>
    </div>
  </nav>
<div class="container">
<?php 
   echo '<div id="i_title" class="well" data-title-id="2" style="margin-top:10px; font-size:1.5em;">'.$srcTidTitle.'</div>';
   foreach($arrs as $arr ) {
	  $imgsrc = stristr($arr,'[/img]',true);
	  echo '<img src="'.$imgsrc.'" class="img-thumbnail img-responsive" style="min-width: 100%">';
	  }
  ?>   
</div>



</body>

</html>
