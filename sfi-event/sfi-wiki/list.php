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
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>
</head>

<body>
<div id="all" align="center">
<div id="bg-shadow">
<div id="wrapper">
<!--main-->
<div id="in-box-02" style="background:#fff8b6; height:auto; padding-bottom:20px;">
<div id="in-tai"><img src="images/in-tai.png" usemap="#Map" style="border-radius:15px 15px 0 0;" border="0" />
    <map name="Map" id="Map">
      <area shape="poly" coords="705,73,865,91,864,119,687,105" href="#" onclick="MM_showHideLayers('info-01','','show')" />
      <area shape="poly" coords="698,149,800,162,799,191,699,183" href="#" onclick="MM_showHideLayers('info-02','','show')" />
      <area shape="poly" coords="828,46,943,46,945,80,823,79" href="wk.html" />
      <area shape="rect" coords="65,26,631,240" href="index.html" />
    </map>
</div>

<?php
require('../config/config.php');
require('../modules/DBmySQL.php');
require('../modules/Lib.php');

$DB->Connect();
//$DB->Select('core_marketing');
$DB->Select('sfievent');

/******************************************************************/
// Paging unit
/******************************************************************/
$_dataPerPage = 5;

$_pageNo = (empty($_GET['page'])) ? 1 : $_GET['page'];
$_queryCount = $DB->Num($DB->Query("SELECT * FROM sfievent_wiki WHERE sfievent_wikiHide = 0;"));

$_pageTotal = ceil($_queryCount / $_dataPerPage);
$_pageStart = ($_pageNo * $_dataPerPage) - $_dataPerPage;
$_pageFirst = intval ($_pageNo / 10) * 10 + 1;
$_pageLast = $_pageFirst + 9;

if ($_pageNo < $_pageFirst)
{
	$_pageFirst = $_pageFirst - 10;
	$_pageLast = $_pageLast - 10;
}
if ($_pageLast > $_pageTotal)
{
	$_pageLast = $_pageTotal;
}

$pre = ($_pageNo == 1) ? 1 : ($_pageNo - 1);
$next = ($_pageNo == $_pageTotal) ? $_pageTotal : ($_pageNo + 1);

$dbQuery = $DB->Query("SELECT * FROM sfievent_wiki WHERE sfievent_wikiHide = 0 ORDER BY sfievent_wikiNo DESC LIMIT ".$_pageStart.",".$_dataPerPage.";");

$xx = 0;
while ($dbArray = $DB->Arrays($dbQuery))
{
	++$xx;
	$x = ($xx % 2) ? 'left' : 'right';

	mb_internal_encoding('UTF-8');
	$n = $dbArray['sfievent_wikiName'];
	$n = (mb_strlen($n) >= 3) ? mb_substr($n, 0, 1) . '*' . mb_substr($n, 2, mb_strlen($n) - 2) : mb_substr($n, 0, 1) . '*';
	
	$e = $dbArray['sfievent_wikiPhone'];
	$e = (mb_strlen($e) >= 3) ? mb_substr($e, 0, 4) . '***' . mb_substr($e, 7) : mb_substr($e, 0, 1) . '*';

?>

<!--01-->
<div id="in-data-01" style="background:none; ">
<div style="width:45px; height:79px; float:<?php echo $x?>;"><img src="images/icon-man-<?php echo substr($x,0,1)?>.png" /></div>
<div style="width:23px; height:47px; float:<?php echo $x?>; margin-top:10px;"><img src="images/dialog-l.png" /></div>
<div style="width:700px; border-radius:15px; padding:8px 10px 8px 10px; float:<?php echo $x?>; background:#FFF; margin-top:5px; box-shadow:2px 3px 0 #d2ca95; height:80px; overflow:hidden;">
  <p><span class="word-big-red"><?php echo $e?>：</span><span class="word-gray"><?php echo $dbArray['sfievent_wikiDT'];?></span></p>
  <p><?php echo $dbArray['sfievent_wikiWord'];?></p>
</div>
</div>
<!--01 end-->

<?php
}
?>

<div style="width:80%; clear:both; float:left; margin:20px 0 20px 10%;">
  <table width="280" border="0" align="right" cellpadding="0" cellspacing="0">
    <tr>
      <td width="50" align="center"><a href="?page=1">第1頁</a></td>
      <td width="15" align="center"><a href="?page=<?php echo $pre?>">＜</a></td>
      <td width="80" align="center"><span class="word-red"><?php echo $_pageNo?></span> / <?php echo $_pageTotal?></td>
      <td width="15" align="center"><a href="?page=<?php echo $next?>">＞</a></td>
      <td width="50" align="center"><a href="?page=<?php echo $_pageTotal?>">最末頁</a></td>
      <td><label for="select"></label>
        <select name="select" id="select" onChange="if(this.value){window.location.href='?page='+this.value};">
          <option>請選擇</option>
		  <?php
		  for($i = 1; $i <= $_pageTotal; $i++)
		  {
			echo '<option>'.$i.'</option>';
		  }
		  ?>
        </select></td>
    </tr>
  </table>
  
</div>
</div>
<!--main end-->
<!--footer-->
<div id="footer">主辦單位：<a href="http://www.tfsr.org.tw/" target="_blank">台灣金融服務業聯合總會</a>　　承辦單位：<a href="http://www.sfi.org.tw/" target="_blank">(財)中華民國證券暨期貨市場發展基金會</a>　　協辦單位：<a href="https://www.tsfvm.com.tw/web/index.aspx" target="_blank">臺灣證券期貨虛擬博物館</a></div>
<!--footer end-->
</div>
</div>
<!--info-01-->
<div id="info-01">
<div id="info-words">
  <img src="images/prize.png" align="right" /><p class="word-big-red" style="border-bottom:1px #FF0000 dashed;">活動時間與獎項</p>
  <p>&nbsp;</p>
  <p>於2016/11/16~2017/1/15可線上參加「金融知識Wiki百科創作」活動，參加者只要藉由簡單、溫馨、感性的創作，提出金融、投資理財相關的認知與心得，字數限80字以內，還可以繼續加碼挑戰「金融知識疊疊樂」，與朋友比比看誰先完成疊杯喔，歡迎兩項遊戲一起參加。</p>
  <p>&nbsp;</p>
  <p>主辦單位將於2017/2/10公布得獎的參賽者，第一名獎品為Dyson V8 fluffy SV10 無線吸塵器一台，第二名獎品為SONY Xperia XZ智慧型手機一台，第三名獎品為Canon EOS M10 15-45mm STM單鏡組相機一台，另外再抽威秀影城雙人套票共50個名額。 </p>
  <p style="text-align:center;"><a href="#" class="blue-link" onclick="MM_showHideLayers('info-01','','hide')">關閉視窗</a></p>
</div>
</div>
<!--info-01 end-->
<!--info-02-->
<div id="info-02">
<div id="info-words">
  <p class="word-big-red" style="border-bottom:1px #FF0000 dashed;">注意事項</p>
  <p>&nbsp;</p>
  <ol>
  <li>投稿作品須為投稿者本人之創作，請勿抄襲。若有任何第三者主張著作財產權益受侵害，由投稿者自負責任，與主辦與承辦單位無涉。同時， 主辦及承辦單位將取消該參賽者入選及抽獎資格。</li>
  <li>投稿內容請勿使用無意義的符號，以免系統無法讀取或出現亂碼；同時請勿以謾罵及不雅文字投稿，主辦單位保留刪稿權利，不另通知。</li>
  <li>如出現投稿內容高度相似，且均獲入選優秀作品，則以較先投稿者為獲獎者。</li>
  <li>投稿作品之著作權歸屬原創作人所有，但投稿者需同意授權主辦與承辦單位無償使用其投稿作品之權利，包括以下列方法運用：廣播、電視、電信平台、及網路平台等公開播送。</li>
  <li>投稿者個人資料欄位若填寫不完整，將不具抽獎資格，主辦與承辦單位不另行通知。</li>
  <li>得獎名單預定於2017年2月10日公布，並以電子郵件通知，若未收到中獎確認書請於2017年2月20日前向承辦單位反應。</li>
  <li>投稿者若以惡意電腦程式或其他違反活動公平性之方式，意圖影響本活動結果者，一經察覺，將取消其抽獎、入選及中獎資格，並將追回獎品。</li>
  <li>獎品運送範圍，限於台灣本島、澎湖、金門、馬祖地區，得獎者不得要求折換現金、挑選顏色或轉讓得獎權利。獎品之保固和維修，以其原廠商之服務條款為主，主辦及承辦單位不負任何維護或保固責任。</li>
  <li>依中華民國稅法規定，機會中獎之給予價值超過新臺幣1,000元(含)以上者，須申報主管機關並列入中獎者年度所得，主辦單位將開立扣繳憑單予中獎者。中獎者應配合繳交身分證明文件影本供作為申報依據；若機會中獎之給予價值超過新臺幣20,000元者，須先繳納10%稅金；非中華民國境內居住之個人，依法扣繳獎品價值20%稅金，中獎者若無法配合，視同放棄得獎資格。</li>
  <li>抽獎獎項之每位得獎者至多獲得一項獎品，若有重複中獎將僅保留抽中獎品價值最高者。</li>
  <li>對活動有任何疑問可來信活動小組洽詢 cola@core-integrated.com.tw，服務電話：02-2718-9028#17 林小姐。</li>
  <li>主辦單位保留活動內容修改及終止之權利。</li>
  </ol>
  <p style="text-align:center;"><a href="#" class="blue-link" onclick="MM_showHideLayers('info-02','','hide')">關閉視窗</a></p>
</div>
</div>
<!--info-02 end-->
</div>
</body>
</html>
