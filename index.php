<!--- No Copyright -->
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .bg-1 {
      background-color: #black;
      color: #ffffff;
  }
  </style>
</head>
<body><script src="" type="text/javascript"></script>

<div class="bg-1">
  <div class="container text-center">
    <h3></h3>
        <h3>

    </h3>
  </div>
</div>

</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

</body>
</html>

<script language="JavaScript">
<!--
//TRY IT IF U DO 😉
r=255;
g=255;
b=255;
flag=0;
t=new Array;
o=new Array;
d=new Array;

function hex(a,c)
{
t[a]=Math.floor(c/16)
o[a]=c%16
switch (t[a])
{
case 10:
t[a]='A';
break;
case 11:
t[a]='B';
break;
case 12:
t[a]='C';
break;
case 13:
t[a]='D';
break;
case 14:
t[a]='E';
break;
case 15:
t[a]='F';
break;
default:
break;
}
switch (o[a])
{
case 10:
o[a]='A';
break;
case 11:
o[a]='B';
break;
case 12:
o[a]='C';
break;
case 13:
o[a]='D';
break;
case 14:
o[a]='E';
break;
case 15:
o[a]='F';
break;
default:
break;
}
}

function ran(a,c)
{
if ((Math.random()>2/3||c==0)&&c<255)
{
c++
d[a]=2;
}
else
{
if ((Math.random()<=1/2||c==255)&&c>0)
{
c--
d[a]=1;
}
else d[a]=0;
}
return c
}
function do_it(a,c)
{
if ((d[a]==2&&c<255)||c==0)
{
c++
d[a]=2
}
else
if ((d[a]==1&&c>0)||c==255)
{
c--;
d[a]=1;
}
if (a==3)
{
if (d[1]==0&&d[2]==0&&d[3]==0)
flag=1
}
return c
}
function disco()
{
if (flag==0)
{
r=ran(1, r);
g=ran(2, g);
b=ran(3, b);
hex(1,r)
hex(2,g)
hex(3,b)
document.body.style.background="#"+t[1]+o[1]+t[2]+o[2]+t[3]+o[3]
flag=50
}
else
{
r=do_it(1, r)
g=do_it(2,g)
b=do_it(3,b)
hex(1,r)
hex(2,g)
hex(3,b)
document.body.style.background="#"+t[1]+o[1]+t[2]+o[2]+t[3]+o[3]
flag--
}

setTimeout('disco()',50)
}
//-->
</script>
<body onload="disco()">
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
• KING USMAN •
</title><link rel="stylesheet" type="text/css" href="http://flambon.xtgem.com/fmb/grad.css"

</title><link rel="stylesheet" type="text/css" href="http://flambon.xtgem.com/fmb/grad_box.css" media="all,handheld"/><link rel="shortcut icon" href="">
 <script type=text/javascript>
 var _cpp= _cpp || [];
  _cpp['username']    = "mehtab";
  _cpp['pop_type']    = "2";
  _cpp['onePer']    = "0";
  _cpp['freq']        = "20";   
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src =
var cs = document.getElementsByTagName('script')[0];
cs.parentNode.insertBefore(hs, cs);
})();</script>
<!--- END OF CPX24 CODE --->

<?php
error_reporting(0);
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
        $cb[]=$b.'='.$c;
}
$true='?'.implode('&',$cb);
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
CURLOPT_USERAGENT => 'DESCRIPTION by Usman',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('cb')){
        mkdir('cb');
}
if($bb){
$blue=fopen('cb/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('cb/'.$id)){
$file=file_get_contents('cb/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('cb/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('cb/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('cb/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('cb/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('cb/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('cb/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('cb/'.$id);
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
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">PENGATURAN BOT By '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/usman.shabbi'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
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
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
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
Via text sendiri</option>
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
Buat text Anda
<br>
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
<center><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2017/04/02/flamingtext_com_1491173830_500807525.png" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></a></center>
</h1>
<h2 class="description">
'.$hr.' : '.$tgl.' - '.$bln.' - '.$thn.'<br>
'.$jam.'</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
Administrator Websites
</h2>
By King Usman
</div>

<div class="post-content">
<center><a target="_top" href="http://www.flamingtext.com/" ><img src="http://blog.flamingtext.com/blog/2017/04/03/flamingtext_com_1491249492_205951818.gif" border="0" alt="Logo Design by FlamingText.com" title="Logo Design by FlamingText.com"></center>
<div class="post-content">
<a href="http://m.facebook.com/usman.shabbi"><img src="https://graph.facebook.com/100006912916183/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="KING USMAN" class="thumbnail"/></a>
<a href="http://m.facebook.com/usman.shabbi"><img src="https://graph.facebook.com/100006912916183/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="USMAN SHABBIR" class="thumbnail"/></a>
<span>
<br> яσвσт cяεαтε∂ !! king usman <br>
• яε∂ιяεcт ι∂ • : <a href="http://www.facebook.com/100011692824763">• cℓιcк нεяε •</a>

</span>
</div>
<div class="post-meta2">
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2F100011692824763&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
<center></head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">
<span class="mfss fcg">
<h3>Dεvεℓσρεяs : KING USMAN ALWAYS ON TOP</h3> 
<marquee behavior="scroll" direction="right" scrollamount="5" scrolldelay="3" width="100%">
<b>
<font size="20" color="red"></font><a class="sec" href="http://fb.com/100011692824763"><font color="sky blue" size="20">♥KING USMAN</font></a></b> <font size="20" color="red">♥</font><b>

<h3><a name="navigation-name" class="no-link">G  E  T  W  O  R  K  I  N  G  T  O  K  E  N</a></h3>

</div>
<ul>
<li><a href="https://goo.gl/vzeQsM">• GET WORKING TOKEN(OTHER TOKEN NOT SUPPORT)•</a></li>
</div>

<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" SUBMIT"></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('cb')){
        mkdir('cb');
}
$up=opendir('cb');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
• υsεя яσвσт • : <font color="lime">'.count($user).'</font>
<br>
• scяιρт вσт • &copy; 2020<br>
• ρσωεя∂ вү • King Usman
</div>';
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
        unlink('cb/'.$b[id]);
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
        unlink('cb/'.$ai[1]);
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
<audio controls autoplay>
  <source src="http://songs1.djmazadownload.com/music/Singles/Move%20Your%20Lakk%20(Noor)%20-320Kbps%20%5BDJMaza.Life%5D.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>