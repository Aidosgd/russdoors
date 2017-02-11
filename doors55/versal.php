<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Версаль - классические двери | ТОО Российские Двери</title>
<meta name="Description" content="межкомнатные класические двери Версаль, купить классические двери в Алматы, двери из Белорусии ">
<meta name="Keywords" content="дери, межкомнатные, деревянные двери, магазин дверей, купить ">
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
polotno='venge';
nalich='venge';
//
  pic[0] = "versal-vanil-glass.jpg";
  pic[1] = "versal-oreh-glass.jpg";
 pic[10] = "versal-vanil.jpg";
 pic[11] = "versal-oreh.jpg";

///////////////////////////////////////////////////////////////////////////////////////////////
function work(){
	// варианты полотна
	var radio = document.getElementsByName("polotno");
	for (var i = 0; i< radio.length; i++){
    if (radio[i].checked) 
		{polotno=radio[i].value;
		 num_polotno=i*10}};
	// цвет полотна
	var radio = document.getElementsByName("color");
	for (var i = 0; i< radio.length; i++){
    if (radio[i].checked) 
		{num_color=i
		 // беленый дуб
		 if(i==0){
			polotno='beldub';
		    if(nalich=='venge'){beldub(); nalich='beldub';}
			if(nalich=='oreh_simple'){vanil_simple(); nalich='vanil_simple';}
			if(nalich=='oreh_dekor'){vanil_dekor(); nalich='vanil_dekor';}
		  };
		  // венге
		 if(i==1){
			polotno='venge';
		 	if(nalich=='beldub'){venge(); nalich='venge';}
			if(nalich=='vanil_simple'){oreh_simple(); nalich='oreh_simple';}
			if(nalich=='vanil_dekor'){oreh_dekor(); nalich='oreh_dekor';}
			};
		 }};
	//
	num = num_polotno+num_color;
	//
	document.door.src = '_doors_img_/versal/'+pic[num];
}	
///////////////////////////////////////////////////////////////////////////////////////////////
function nalichnik(){
	// наличники
	var radio2 = document.getElementsByName("nal");
	for(var i = 0; i< radio2.length; i++){
	  if(radio2[i].checked){
		if(i==0){//без наличника
		  nalich='void';
		  document.getElementById('nal_vert_380_1').src = '_doors_img_/nalichnik/empty_380_vert.gif';
		  document.getElementById('nal_vert_380_2').src = '_doors_img_/nalichnik/empty_380_vert.gif';
		  document.getElementById('nal_vert_40_1').src = '_doors_img_/nalichnik/empty_40_vert.gif';
		  document.getElementById('nal_vert_40_2').src = '_doors_img_/nalichnik/empty_40_vert.gif';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/empty_left_verh.gif';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/empty_right_verh.gif';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/empty_hor.gif';};
		if(i==1){//наличник
		  if(polotno=='beldub'){beldub(); nalich='beldub'};		  	
		  if(polotno=='venge'){venge(); nalich='venge'}}
		if(i==2){//наличник + простой декор
		  if(polotno=='beldub'){vanil_simple()(); nalich='vanil_simple()';}		  	
		  if(polotno=='venge'){oreh_simple(); nalich='oreh_simple';}}
		if(i==3){//наличник + декор объемный
		  if(polotno=='beldub'){vanil_dekor()(); nalich='vanil_dekor()';}		  	
		  if(polotno=='venge'){oreh_dekor(); nalich='oreh_dekor';}}		
	  };
	};
	
}
///
function beldub(){
		  document.getElementById('nal_vert_380_1').src = '_doors_img_/nalichnik/vanil_vert_380.jpg';
		  document.getElementById('nal_vert_380_2').src = '_doors_img_/nalichnik/vanil_vert_380.jpg';
		  document.getElementById('nal_vert_40_1').src = '_doors_img_/nalichnik/vanil_vert_40.jpg';
		  document.getElementById('nal_vert_40_2').src = '_doors_img_/nalichnik/vanil_vert_40.jpg';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/vanil_vert_left.jpg';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/vanil_vert_right.jpg';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/vanil_hor.jpg' };
///
function vanil_simple(){
		  document.getElementById('nal_vert_380_1').src = '_doors_img_/nalichnik/vanil_vert_380.jpg';
		  document.getElementById('nal_vert_380_2').src = '_doors_img_/nalichnik/vanil_vert_380.jpg';
		  document.getElementById('nal_vert_40_1').src = '_doors_img_/nalichnik/vanil_vert_40_simple.jpg';
		  document.getElementById('nal_vert_40_2').src = '_doors_img_/nalichnik/vanil_vert_40_simple.jpg';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/vanil_vert_simple.jpg';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/vanil_vert_simple.jpg';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/vanil_hor.jpg' };
///
function vanil_dekor(){
		  document.getElementById('nal_vert_380_1').src = '_doors_img_/nalichnik/vanil_vert_380.jpg';
		  document.getElementById('nal_vert_380_2').src = '_doors_img_/nalichnik/vanil_vert_380.jpg';
		  document.getElementById('nal_vert_40_1').src = '_doors_img_/nalichnik/vanil_vert_40_dekor.jpg';
		  document.getElementById('nal_vert_40_2').src = '_doors_img_/nalichnik/vanil_vert_40_dekor.jpg';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/vanil_vert_dekor.jpg';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/vanil_vert_dekor.jpg';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/vanil_hor.jpg' };
///
function venge(){
		  document.getElementById('nal_vert_380_1').src = '_doors_img_/nalichnik/oreh_vert_380.jpg';
		  document.getElementById('nal_vert_380_2').src = '_doors_img_/nalichnik/oreh_vert_380.jpg';
		  document.getElementById('nal_vert_40_1').src = '_doors_img_/nalichnik/oreh_vert_40.jpg';
		  document.getElementById('nal_vert_40_2').src = '_doors_img_/nalichnik/oreh_vert_40.jpg';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/oreh_vert_left.jpg';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/oreh_vert_right.jpg';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/oreh_hor.jpg'};
///
function oreh_simple(){
		  document.getElementById('nal_vert_380_1').src = '_doors_img_/nalichnik/oreh_vert_380.jpg';
		  document.getElementById('nal_vert_380_2').src = '_doors_img_/nalichnik/oreh_vert_380.jpg';
		  document.getElementById('nal_vert_40_1').src = '_doors_img_/nalichnik/oreh_vert_40_simple.jpg';
		  document.getElementById('nal_vert_40_2').src = '_doors_img_/nalichnik/oreh_vert_40_simple.jpg';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/oreh_vert_simple.jpg';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/oreh_vert_simple.jpg';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/oreh_hor.jpg'};
///
function oreh_dekor(){
		  document.getElementById('nal_vert_380_1').src = '_doors_img_/nalichnik/oreh_vert_380.jpg';
		  document.getElementById('nal_vert_380_2').src = '_doors_img_/nalichnik/oreh_vert_380.jpg';
		  document.getElementById('nal_vert_40_1').src = '_doors_img_/nalichnik/oreh_vert_40_dekor.jpg';
		  document.getElementById('nal_vert_40_2').src = '_doors_img_/nalichnik/oreh_vert_40_dekor.jpg';
		  document.getElementById('nal_vert_left').src = '_doors_img_/nalichnik/oreh_vert_dekor.jpg';
		  document.getElementById('nal_vert_right').src = '_doors_img_/nalichnik/oreh_vert_dekor.jpg';
		  document.getElementById('nal_hor').src = '_doors_img_/nalichnik/oreh_hor.jpg'};
///
function tablecolor(obj){
		  document.getElementById('fonback').style.background = obj.style.background;}
///
function pageload(){
	if(get!="")document.door.src='_doors_img_/versal/'+pic[get];
	switch (get){
	case '0': 
		document.getElementsByName("polotno")[0].checked="checked"; 
		document.getElementsByName("color")[0].checked="checked"; 
		polotno='beldub'; break; 
	case '10': 
		document.getElementsByName("polotno")[1].checked="checked"; 
		document.getElementsByName("color")[0].checked="checked";
		polotno='beldub'; break;
	case '1': 
		document.getElementsByName("polotno")[0].checked="checked"; 
		document.getElementsByName("color")[1].checked="checked"; 
		polotno='venge'; break; 
	case '11': 
		document.getElementsByName("polotno")[1].checked="checked"; 
		document.getElementsByName("color")[1].checked="checked"; 
		polotno='venge'; break;
	default: document.door.src='_doors_img_/versal/'+pic[0];};}
</script>



 <!-- main -->
  <table width="1000" border="0" align="center" bgcolor="#fcedc3">
  <tr>
    <td align="center"><br />

<table><tbody><tr>
<td colspan="3" align="left" height="40" width="600" valign="middle">
  
  <strong class="doors_name">Модель "Версаль" </strong><span class="doors_description_t">производитель компания "Халес" Беларусь, г. Смаргонь</span><br /><br />


  <table width="500" border="0" class="catalog_table_x">
    <tr><td></td></tr></table>

    </td></tr>
<tr>
<td colspan="3" align="left" valign="bottom"><div class="doors_back">
        <div class="doors_img" id="fonback">
          <table class="doors-back" style="background: url(&quot;_doors_img_/nalichnik/transpar_back.png&quot;) repeat scroll 0% 0% transparent;" border="0" cellpadding="0" cellspacing="0" width="500">
            <tbody><tr valign="bottom">
              <td align="right" height="80"><img src="b_dveri_versal_files/vanil_vert_left.jpg" name="nal_vert_left" id="nal_vert_left" height="15" width="15"></td>
              <td align="center" height="80" width="160"><img src="b_dveri_versal_files/vanil_hor.jpg" name="nal_hor" id="nal_hor" height="15" width="160"></td>
              <td align="left" height="80"><img src="b_dveri_versal_files/vanil_vert_right.jpg" name="nal_vert_right" id="nal_vert_right" height="15" width="15"></td>
            </tr>
            <tr>
              <td align="right" height="420" valign="bottom"><table border="0" cellpadding="0" cellspacing="0" width="15">
                  <tbody><tr>
                    <td height="380"><img src="b_dveri_versal_files/vanil_vert_380.jpg" name="nal_vert_380_1" id="nal_vert_380_1" border="0" height="380" width="15"></td>
                  </tr>
                  <tr>
                    <td height="40"><img src="b_dveri_versal_files/vanil_vert_40.jpg" name="nal_vert_40_1" id="nal_vert_40_1" border="0" height="40" width="15"></td>
                  </tr>
                </tbody></table></td>
              <td height="420" width="160"><img src="b_dveri_versal_files/versal-vanil-glass.jpg" name="door" id="door" height="420" width="160"></td>
              <td align="left" height="420" valign="bottom"><table border="0" cellpadding="0" cellspacing="0" width="15">
                  <tbody><tr>
                    <td height="380"><img src="b_dveri_versal_files/vanil_vert_380.jpg" name="nal_vert_380_2" id="nal_vert_380_2" border="0" height="380" width="15"></td>
                  </tr>
                  <tr>
                    <td height="40"><img src="b_dveri_versal_files/vanil_vert_40.jpg" name="nal_vert_40_2" id="nal_vert_40_2" border="0" height="40" width="15"></td>
                  </tr>
                </tbody></table></td>
            </tr>
          </tbody></table>
        </div>
        <div class="doors_property">
          <dl>
            <dd style="margin-left: 48px;">Варианты полотна</dd>
            <dt style="margin-left: 48px; height: 35px;">
              <label>
                <input name="polotno" id="radio3" value="3glass" checked="checked" onclick="work()" type="radio">
                Стекло сатинированное с рисунком</label>
            </dt>
            <dt class="doors_property_text" style="margin-left: 48px;">
              <label>
                <input name="polotno" id="radio5" value="1glass" onclick="work()" type="radio">
                Глухая </label>
            </dt>
          </dl>
          <dl>
            <dd style="margin-left: 48px;">Варианты декора</dd>
            <dt style="margin-left: 48px;">
              <label>
                <input name="color" id="radio7" value="beldub" checked="checked" onclick="work()" type="radio">
                Патина, ваниль</label>
            </dt>
            <dt style="margin-left: 48px;">
              <label>
                <input name="color" id="radio8" value="venge" onclick="work()" type="radio">
                Патина, орех </label>
            </dt>
          </dl>
          <dl>
            <dd style="margin-left: 48px;">Дополнения</dd>
            <dt style="margin-left: 48px;">
              <label>
                <input name="nal" onclick="nalichnik()" value="checkbox" type="radio">
                Без наличника</label>
            </dt>
            <dt style="margin-left: 48px;">
              <label>
                <input checked="checked" name="nal" onclick="nalichnik()" value="checkbox" type="radio">
                Наличник</label>
            </dt>
            <dt style="margin-left: 48px;">
              <label>
                <input name="nal" value="checkbox" onclick="nalichnik()" type="radio">
                Наличник + декор гладкий</label>
            </dt>
            <dt style="margin-left: 48px;">
              <label>
                <input name="nal" value="checkbox" onclick="nalichnik()" type="radio">
                Наличник + декор объемный</label>
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
          • Фанерованное шпоном дуба полотно<br />

• Каркас - клеёный массив хвойных пород и МДФ-плита<br />

• Филёнка - ДСП<br />

• Штапик - тонированная ольха<br />

• 5-слойное лакокрасочное покрытие полиуретановыми материалами «HERBERTS» (Германия)<br />

• Упаковка - полиэтилен, гофрокартон белого цвета по периметру с фирменной маркировкой «Халес» зеленого цвета, названием модели и размерами<br />

• Размеры полотен - 2000 x (600, 700, 800, 900) мм<br />

• Толщина полотна - 40 мм<br />

</div>
      </div>
   
      
      
      </td>
  </tr>
</tbody></table>
<br />

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
