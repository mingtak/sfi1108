<?php
if (!sizeof($_COOKIE)) exit;
require('__game.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>財團法人中華民國證券暨期貨市場發展基金會-金融知識闖通關</title>
<link href="web.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onload="MM_preloadImages('images/btn-01b.png','images/btn-05b.png','images/btn-03b.png','images/btn-04b.png')">
<div id="all" align="center">
<div id="bg-shadow">
<div id="wrapper">
<!--main-->
<div id="in-box-01">
<div id="in-tai"><a href="index.html"><img src="images/in-tai.png" style="border-radius:15px 15px 0 0;" /></a></div>
<!--q-->
<div id="in-q-tai"><img src="images/q1.gif" /></div>
<div id="in-q"><?php echo $q[$_COOKIE['q'.$_COOKIE['game']]]['q']?></div>
<!--q end-->
<!--a-->
<div id="in-a-tai"><img src="images/a.gif" /></div>
<div id="in-q-cup">
<ul>
<li><a href="answer.php?ans=1"><?php echo $q[$_COOKIE['q'.$_COOKIE['game']]]['1']?></a></li>
<li><a href="answer.php?ans=2"><?php echo $q[$_COOKIE['q'.$_COOKIE['game']]]['2']?></a></li>
<li><a href="answer.php?ans=3"><?php echo $q[$_COOKIE['q'.$_COOKIE['game']]]['3']?></a></li>
<li><a href="answer.php?ans=4"><?php echo $q[$_COOKIE['q'.$_COOKIE['game']]]['4']?></a></li>
</ul>
</div>
<!--a end-->
</div>
<!--main end-->
<!--btn-->
<div id="in-btn">
<ul>
<li><a href="p01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/btn-01b.png',1)"><img src="images/btn-01.png" id="Image3" /></a></li>
<li><a href="p02.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/btn-05b.png',1)"><img src="images/btn-05.png" id="Image4" /></a></li>
<li><a href="p03.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/btn-03b.png',1)"><img src="images/btn-03.png" id="Image5" /></a></li>
<!--<li><a href="p04.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/btn-04b.png',1)"><img src="images/btn-04.png" id="Image6" /></a></li>-->
</ul>
</div>
<!--btn end-->
<!--footer-->
<div id="footer">主辦單位：<a href="http://www.tfsr.org.tw/" target="_blank" class="white-link">台灣金融服務業聯合總會</a>　　承辦單位：<a href="http://www.sfi.org.tw/" target="_blank" class="white-link">(財)中華民國證券暨期貨市場發展基金會</a>　　協辦單位：<a href="https://www.tsfvm.com.tw/web/index.aspx" target="_blank" class="white-link">臺灣證券期貨虛擬博物館</a></div>
<!--footer end-->
</div>
</div>
</div>
</body>
</html>