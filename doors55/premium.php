<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Премиум - орех - двери модерн | ТОО Российские Двери</title>
<meta name="Description" content="межкомнатные двери Премиум, купить современные двери в Алматы, двери из России, двери орех, двери в японском стиле, стильные двери ">
<meta name="Keywords" content="дери, межкомнатные, деревянные двери, магазин дверей, купить, орех">
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="jquery-1.2.1.pack.js"></script>
	<script type="text/javascript" src="jMyCarousel.js"></script>
	<!-- Optional -->
	<script type="text/javascript" src="jquery.mousewheel.js"></script>
	<script type="text/javascript">
		$(function() {
		    $(".jMyCarousel").jMyCarousel({
		        visible: '10'
				
		    });
		});
	</script>
    <script type="text/javascript">
get=window.location.search.substring(1);
</script>
<script type="text/javascript">function DM_ExtensionEvent(event){
  event.preventDefault();
  var element = event.target; 
  var ev = document.createEvent("Events");
  ev.initEvent("DMasterExtensionEvent", true, false);
  element.dispatchEvent(ev);
};
function convertLinksToDM()
{
  var re = /(?:.([^.]+))?$/;
  var extensions = "EXE,ZIP,RAR,ARJ,Z,GZ,LZH,GZIP,TAR,MP3,AVI,MPG,MPEG,QT,PLJ,ASF,WMA,WMV,MOV,TIF,TIFF,BIN,ACE,ISO,WAV,VQF,OGG,MPE,MPA,RAM,7Z,DOC,PDF,PPT,XLS,DJVU,MSI".split(",");
  for (var i=0;i<document.links.length;i++) {
    var ext = re.exec(document.links[i].href)[1].toUpperCase();
    if (ext.indexOf("?")>0) { ext = ext.split("?")[0] }
    try {
    if (extensions.indexOf(ext) >= 0) {
      document.links[i].addEventListener("click", function (e) { DM_ExtensionEvent(e); }, false);
    }
   } catch(e) { alert("error"); }
  }
};
convertLinksToDM();
</script>
</head>
<body onload="pageload()">
<script type="text/javascript">
 nalich = 'void';
  p_nal = '_doors_img_/nalichnik/';
 p_door = '_doors_img_/premium/';
 
    pic = new Array()
 pic[0] = "premium_glass.jpg";
 pic[1] = "premium.jpg";

///////////////////////////////////////////////////////////////////////////////////////////////
function work(){
			 
	// варианты полотна
	var radio = document.getElementsByName("polotno");
	for (var i = 0; i< radio.length; i++){
    if (radio[i].checked) 
		{num=i}};	
	//
	document.door.src = p_door+pic[num];
}	
///////////////////////////////////////////////////////////////////////////////////////////////
function nalichnik(){
	// наличники
	var radio2 = document.getElementsByName("nal");
	for(var i = 0; i< radio2.length; i++){
	  if(radio2[i].checked){
		if(i==0){//без наличника
		  voids();};
		
		if(i==1){//угловое соединение
		  oreh_ugol();}
				
	  };
	};
}
///
function voids(){		  
	document.nal_vert_1.src = p_nal+'empty_vert.gif';
	document.nal_vert_2.src = p_nal+'empty_vert.gif';
	document.nal_vert_left.src = p_nal+'empty_left_verh.gif';
	document.nal_vert_right.src = p_nal+'empty_right_verh.gif';
	document.nal_hor.src = p_nal+'empty_hor.gif';}

///
function oreh_ugol(){
	document.nal_vert_1.src = p_nal+'g_oreh_vert.jpg';
	document.nal_vert_2.src = p_nal+'g_oreh_vert.jpg';
	document.nal_vert_left.src = p_nal+'g_oreh_vert_left_ugol.jpg';
	document.nal_vert_right.src = p_nal+'g_oreh_vert_right_ugol.jpg';
	document.nal_hor.src = p_nal+'g_oreh_hor.jpg';};

///
function tablecolor(obj){
		  document.getElementById('fonback').style.background = obj.style.background;}
///
function pageload(){
	if(get!="")document.door.src=('_doors_img_/premium/'+pic[get]);
	document.getElementsByName("polotno")[get].checked="checked";}
</script>
<!-- header -->
<?php include("blocks/top.php"); ?>
<?php include("blocks/header.php"); ?>
<!-- end header -->



 <!-- main -->
 <table width="1000" border="0" align="center" bgcolor="#fcedc3">
  <tr>
    <td align="center"><br />

<table><tbody><tr>
<td colspan="3" align="left" height="40" width="600" valign="middle">
  
  <strong class="doors_name">Модель "Премиум" </strong><span class="doors_description_t">торговый дом "Бекар" Москва</span><br /><br />


  <table width="500" border="0" class="catalog_table_x">
    <tr><td></td></tr></table>

    </td></tr> <tr>
    <td colspan="3" align="left" valign="bottom"><div class="doors_back">
        <div class="doors_img" id="fonback">
          <table class="doors-back" style="background: url(&quot;_doors_img_/nalichnik/transpar_back.png&quot;) repeat scroll 0% 0% transparent;" border="0" cellpadding="0" cellspacing="0" width="500">
            <tbody><tr valign="bottom">
              <td align="right" height="80"><img src="b_dveri_premium_files/empty_left_verh.gif" name="nal_vert_left" id="nal_vert_left" height="15" width="15"></td>
              <td align="center" height="80" width="160"><img src="b_dveri_premium_files/empty_hor.gif" name="nal_hor" id="nal_hor" height="15" width="160"></td>
              <td align="left" height="80"><img src="b_dveri_premium_files/empty_premium_verh.gif" name="nal_vert_right" id="nal_vert_right" height="15" width="15"></td>
            </tr>
            <tr>
              <td align="right" height="420" valign="bottom"><table border="0" cellpadding="0" cellspacing="0" width="15">
                  <tbody><tr>
                    <td height="420"><img src="b_dveri_premium_files/empty_vert.gif" name="nal_vert_1" id="nal_vert_1" border="0" height="420" width="15"></td>
                  </tr>
                  
                </tbody></table></td>
              <td height="420"><img src="b_dveri_premium_files/premium_glass.jpg" name="door" id="door" border="0" height="420" width="160"></td>
              <!-- <img src="_doors_img_/kantri/kantri_glass.jpg" name="door" width="160" height="420" border="0" id="door" /> -->
              <td align="left" height="420" valign="bottom"><table border="0" cellpadding="0" cellspacing="0" width="15">
                  <tbody><tr>
                    <td height="420"><img src="b_dveri_premium_files/empty_vert.gif" name="nal_vert_2" id="nal_vert_2" border="0" height="420" width="15"></td>
                  </tr>
                  
                </tbody></table></td>
            </tr>
          </tbody></table>
        </div>
        <div class="doors_property">
          <dl>
            <dd style="margin-left: 48px;">Варианты полотна</dd>
            <dt style="margin-left: 48px;">
              <label>
                <input name="polotno" id="radio3" value="3glass" checked="checked" onclick="work()" type="radio">
                Остеклённая</label>
            </dt>
            <dt class="doors_property_text" style="margin-left: 48px;">
              <label>
                <input name="polotno" id="radio4" value="2glass" onclick="work()" type="radio">
                Глухая </label>
            </dt>
          </dl>
          <dl>
            <dd style="margin-left: 48px;">Дополнения</dd>
            <dt style="margin-left: 48px;">
              <label>
                <input name="nal" id="nal" onclick="nalichnik()" value="checkbox" checked="checked" type="radio">
                Без наличника</label>
            </dt>
          
            <dt style="margin-left: 48px;">
              <label>
                <input name="nal" id="nal2" onclick="nalichnik()" value="checkbox" type="radio">
                Наличник (соединение под углом)</label>
            </dt>
            
          </dl>
          <dl>
            <dd style="margin-left: 48px; padding-bottom: 5px;">Цвет фона стены</dd>
            <dt style="margin-left: 48px; width: 240px; height: 20px;"> <a style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(246, 238, 245);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(253, 248, 216);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(244, 225, 210);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(255, 254, 247);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(215, 239, 247);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(254, 250, 240);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(246, 216, 191);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(234, 232, 240);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(221, 237, 250);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(252, 247, 250);" onclick="tablecolor(this)"></a> </dt>
            <dt style="margin-left: 48px; width: 240px; height: 20px;"> <a style="background: none repeat scroll 0% 0% rgb(205, 132, 144);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(242, 223, 222);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(201, 172, 201);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(252, 247, 233);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(248, 244, 217);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(246, 215, 231);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(248, 249, 212);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(213, 57, 68);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(221, 234, 205);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(211, 236, 227);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(181, 54, 57);" onclick="tablecolor(this)"></a> </dt>
            <dt style="margin-left: 48px; width: 240px; height: 20px;"> <a style="background: none repeat scroll 0% 0% rgb(231, 222, 233);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(207, 207, 230);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(248, 168, 32);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(45, 97, 171);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(216, 238, 244);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(182, 227, 239);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(216, 125, 50);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(71, 86, 155);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(238, 238, 238);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(204, 204, 204);" onclick="tablecolor(this)"></a> <a style="background: none repeat scroll 0% 0% rgb(119, 119, 119);" onclick="tablecolor(this)"></a> </dt>
          </dl>
         </div>   <div class="doors_description">
        <table width="310" height="2" border="0" class="catalog_table_x">
  <tr>
    <td width="310">&nbsp;</td>
  </tr>
</table>
<strong class="doors_description_t">Описание</strong><br />
          • Цвет - орех <br />

• Варианты полотна: глухое / полное остекление <br />

• Филенчатое полотно с искусственным шпоном, который покрыт синтетическим лаком<br />
• Штапик – МДФ ламинированный <br />
• Стекло рифленое <br />

• Упаковка: картон, полиэтилен<br />

• Размеры: 600/700/800/900 х 2000мм<br />

• Толщина полотна: 35мм

<br />

<br />

</div>
        </div>
      </div></td>
  </tr> </tbody> </table>   
    
    </td>
  </tr>
</table>

<!-- end main -->
<!-- carousel -->
<?php include("blocks/carousel.php"); ?>
<!-- end carousel -->
<!-- footer -->
<?php include("blocks/footer.php"); ?>
<!-- end footer -->
</body>
</html>
