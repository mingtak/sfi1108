<?php
if (!sizeof($_COOKIE)) exit;
if ($_COOKIE['game'] != 7) header('location:index.html');
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

<body onload="MM_preloadImages('images/btn-01b.png','images/btn-05b.png','images/btn-03b.png','images/btn-04b.png','images/btn-in-go-b.png')">
<div id="all" align="center">
<div id="bg-shadow">
<div id="wrapper">
<!--main-->
<div id="in-box-03-1">
<div id="in-tai"><a href="index.html"><img src="images/in-tai.png" style="border-radius:15px 15px 0 0;" /></a></div>
<!--<div id="btn-go"><a href="q01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','images/btn-in-go-b.png',1)"><img src="images/btn-in-go.png" id="Image10" /></a></div>-->
<div id="in-data">
  <div style="width:90%; height:150px; border:1px #CCCCCC solid; margin:40px 0 0 5%; overflow:auto; font-size:12px; float:left;">
  <p class="word-red"><strong>主辦單位告知事項</strong></p>
  <p>本行銷推廣活動，擬蒐集參加者之個人資料，為保障您的權益，謹依個人資料保護法第八條規定，告知下列事項：</p>
  <p>1.蒐集之目的：參加活動所蒐集之個資資料將使用於中獎通知、獎項寄送及所得稅扣繳，不另用於其他事宜。</p>
  <p>2.當事人得行使權利及方式：您可以透過書面申請方式，行使個人資料保護法第三條規定，當事人得行使權利：</p>
  <p>(1)查詢或請求閱覽</p>
  <p>(2)請求製給複製本</p>
  <p>(3)請求補充或更正</p>
  <p>(4)請求停止蒐集、處理或利用</p>
  <p>(5)請求刪除</p>
  <p>主辦單位依個人資料保護法第13條規定，得於15或30日內為當事人申請准駁之決定，並以書面將原因通知當事人。另依個人資料保護法第14條規定，主辦單位得酌收行政作業費用。</p>
  <p>3.當事人得自由選擇提供個人資料時，不提供將對其權益之影響：基於以上特定目的，您需提供相關之個人資料予主辦單位，若您未能或無法 提供，主辦單位將無法提供您相關業務之服務，請您見諒！</p>
</div>

<form name="f" method="POST" action="submit.php">
<div style="width:90%; margin:10px 0 10px 5%; font-size:12px; clear:both; float:left;">
  <input type="checkbox" name="checkbox" id="checkbox" value="1" />
  <label for="checkbox"></label>
  同意以上條款 </div>
<ul>
<li>姓　　名：
  <label for="textfield"></label>
  <input type="text" name="name" id="textfield" style="width:400px;" />
</li>
<li>連絡電話：
  <label for="textfield"></label>
  <input type="text" name="phone" id="textfield" style="width:400px;" />
</li>
<li>電子信箱：
  <label for="textfield"></label>
  <input type="text" name="email" id="textfield" style="width:400px;" />
</li>
</ul>
</form>

<div style="width:100%; text-align:center; margin-top:15px; clear:both; float:left;">
<a href="#" onClick="f.submit()"><img src="images/btn-06.png" /></a>　<a href="#" onClick="f.reset()"><img src="images/btn-07.png" /></a>
</div>
</div>
</div>
<!--<div id="prize"><img src="images/prize.png" usemap="#Map" border="0" />
  <map name="Map" id="Map">
    <area shape="rect" coords="91,114,147,168" href="../sfi-wiki/index.html" />
    <area shape="rect" coords="158,114,209,168" href="index.html" />
  </map>
</div>-->
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
