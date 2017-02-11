<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Стандарт - двери из Белорусии в Алматы | ТОО Российские Двери</title>
<meta name="Description" content="межкомнатные двери Стандарт, купить двери в Алматы, двери из Белорусии ">
<meta name="Keywords" content="дери, межкомнатные, деревянные двери, магазин дверей, купить двери в Алматы, качественные межкомнатные двери ">
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
<!-- header -->
<?php include("blocks/top.php"); ?>
<?php include("blocks/header.php"); ?>
<!-- end header -->
<script type="text/javascript">
pic = new Array()
// по умолчанию
polotno='beldub';
nalich='void';
//
pic[0] = "standart-beldub.jpg";
pic[1] = "standart-dub.jpg";
///////////////////////////////////////////////////////////////////////////////////////////////
function work(){	 
	// цвет полотна
	var radio = document.getElementsByName("color");
	for (i = 0; i< radio.length; i++){
    if (radio[i].checked) 
		{num=i
		 if(i==0){// беленый дуб
			polotno='beldub';
			if(nalich=='void')voids();
			if(nalich=='nalich')beldub();
			if(nalich=='ugol')beldub_ugol();};
		
		 if(i==1){// дуб
			polotno='dub';
			if(nalich=='void')voids();
		 	if(nalich=='nalich')dub();
			if(nalich=='ugol')dub_ugol();};
		 }};
	//
	document.door.src = '_doors_img_/standart/'+pic[num];
}	
///////////////////////////////////////////////////////////////////////////////////////////////
function nalichnik(){
	// наличники
	var radio2 = document.getElementsByName("nal");
	for(var i = 0; i< radio2.length; i++){
	  if(radio2[i].checked){
		if(i==0){//без наличника
		  nalich='void';
		  voids()};
		if(i==1){//прямое соединение
		  nalich='nalich';
		  if(polotno=='beldub')beldub();
		  if(polotno=='dub')dub();}	
		if(i==2){//угловое соединение
		  nalich='ugol';
		  if(polotno=='beldub')beldub_ugol();
		  if(polotno=='dub')dub_ugol();}
	  };
	};
	
}
///
function voids(){
		  document.getElementById('nal_vert1').src = '_doors_img_/nalichnik/empty_vert.gif';
		  document.getElementById('nal_vert2').src = '_doors_img_/nalichnik/empty_vert.gif';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/empty_left_verh.gif';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/empty_right_verh.gif';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/empty_hor.gif';};
///
function beldub(){
	      document.getElementById('nal_vert1').src = '_doors_img_/nalichnik/beldub_vert.jpg';
		  document.getElementById('nal_vert2').src = '_doors_img_/nalichnik/beldub_vert.jpg';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/beldub_vert_left.jpg';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/beldub_vert_right.jpg';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/beldub_hor.jpg' };
///
function beldub_ugol(){
	      document.getElementById('nal_vert1').src = '_doors_img_/nalichnik/beldub_vert.jpg';
		  document.getElementById('nal_vert2').src = '_doors_img_/nalichnik/beldub_vert.jpg';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/beldub_vert_left_ugol.jpg';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/beldub_vert_right_ugol.jpg';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/beldub_hor.jpg' };


///
function dub(){
	      document.getElementById('nal_vert1').src = '_doors_img_/nalichnik/kapri_vert_380.jpg';
		  document.getElementById('nal_vert2').src = '_doors_img_/nalichnik/kapri_vert_380.jpg';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/kapri_vert_priam.jpg';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/kapri_vert_priam.jpg';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/kapri_hor.jpg' };
///
function dub_ugol(){
	      document.getElementById('nal_vert1').src = '_doors_img_/nalichnik/kapri_vert_380.jpg';
		  document.getElementById('nal_vert2').src = '_doors_img_/nalichnik/kapri_vert_380.jpg';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/kapri_vert_left.jpg';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/kapri_vert_right.jpg';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/kapri_hor.jpg' };
		  
////////////////////////////////////////////////////////////////////////////////////////////////////////////
function tablecolor(obj){
	document.getElementById('fonback').style.background = obj.style.background;}
///
function pageload(){
	if(get!="")document.door.src='_doors_img_/standart/'+pic[get];
	switch (get){
	case '0': document.getElementsByName("color")[0].checked="checked"; polotno='beldub'; break; 
	
	case '1': document.getElementsByName("color")[1].checked="checked"; polotno='dub'; break;
	default:  document.door.src='_doors_img_/standart/'+pic[0]};}
</script>


 <!-- main -->
<table width="1000" border="0" align="center" bgcolor="#fcedc3"><tr> <td align="center"><br />
<table><tbody><tr>
<td colspan="3" align="left" height="40" width="600" valign="middle">
  
  <strong class="doors_name">Модель "Стандарт" </strong><span class="doors_description_t">производитель компания "Халес" Беларусь, г. Смаргонь</span><br /><br />


  <table width="500" border="0" class="catalog_table_x">
    <tr><td></td></tr></table>

    </td></tr>
  <tr>
    <td colspan="3" valign="bottom" align="left"><div class="doors_back">
        <div class="doors_img" id="fonback">
          <table class="doors-back" style="background: url(&quot;_doors_img_/nalichnik/transpar_back.png&quot;) repeat scroll 0% 0% transparent;" width="500" border="0" cellpadding="0" cellspacing="0">
            <tbody><tr valign="bottom">
              <td align="right" height="80"><img src="b_dveri_standart_files/empty_left_verh.gif" name="nal_vert_left" id="nal_vert_left" width="15" height="15"></td>
              <td width="160" align="center" height="80"><img src="b_dveri_standart_files/empty_hor.gif" name="nal_hor" id="nal_hor" width="160" height="15"></td>
              <td align="left" height="80"><img src="b_dveri_standart_files/empty_standart_verh.gif" name="nal_vert_right" id="nal_vert_right" width="15" height="15"></td>
            </tr>
            <tr>
              <td valign="bottom" align="right" height="420"><img src="b_dveri_standart_files/empty_vert.gif" name="nal_vert1" id="nal_vert1" width="15" height="420"></td>
              <td width="160" height="420"><img src="b_dveri_standart_files/standart-dub.jpg" name="door" id="door" width="160" height="420"></td>
              <td valign="bottom" align="left" height="420"><img src="b_dveri_standart_files/empty_vert.gif" name="nal_vert2" id="nal_vert2" width="15" height="420"></td>
            </tr>
          </tbody></table>
        </div>
        <div class="doors_property">
          <dl>
            
            <dd style="margin-left: 48px;">Варианты декора</dd>
            <dt style="margin-left: 48px;">
              <label>
                <input name="color" id="radio7" value="beldub" checked="checked" onclick="work()" type="radio">
                Белёный дуб</label>
            </dt>
            <dt style="margin-left: 48px;">
              <label>
                <input name="color" id="radio8" value="dub" onclick="work()" type="radio">
                Светлый дуб</label>
            </dt>
          </dl>
          <dl>
            <dd style="margin-left: 48px;">Дополнения</dd>
            <dt style="margin-left: 48px;">
              <label>
                <input name="nal" id="nal2" onclick="nalichnik()" value="checkbox" checked="checked" type="radio">
                Без наличника</label>
            </dt>
            <dt style="margin-left: 48px;">
              <label>
                <input name="nal" id="nal" onclick="nalichnik()" value="checkbox" type="radio">
                Наличник (прямое соединение)</label>
            </dt>
            <dt style="margin-left: 48px;">
              <label>
                <input name="nal" value="checkbox" id="nal2" onclick="nalichnik()" type="radio">
                Наличник
                (соединение под углом)</label>
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
          • цвет белённый дуб и светлый дуб<br />

• фанерованное шпоном дуба полотно<br />

• каркас - клеёный массив хвойных пород и МДФ-плита<br />

• филёнка - ДСП<br />

• штапик - дуб<br />

• 3-слойное лакокрасочное покрытие полиуретановыми материалами «HERBERTS» (Германия)<br />

• упаковка - полиэтилен, гофрокартон белого цвета по периметру с фирменной маркировкой «Халес» зеленого цвета, названием модели и размерами<br />

• размеры полотен - 2000 x (600, 700, 800, 900) мм<br />

• толщина полотна - 40 мм<br />

<br />

</div>
        </div>
      </div></td>
  </tr></tbody></table>
    
    
    
    
    
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
