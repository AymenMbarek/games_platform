


 <?php
$octet = 500000;
$filename = 'frcopy.txt';
$filename2 = 'frcopy2.txt';


 $aujourdhui = date("d/m/Y"); // 12/03/2001
 $aujourdhuih = date("H:i:s"); // 10:16:18

 $dateh =  $aujourdhui ;
// $addresse= $_SERVER['REMOTE_ADDR'];
// $hostname1 = gethostbyaddr($addresse);

$valeur= filesize($filename);


if   (filesize($filename)<$octet)
{

 $guide7 = $_SERVER['HTTP_USER_AGENT'];
 $addresse= $_SERVER['REMOTE_ADDR'];
   $guide10 = "       \r\n";
 

if (is_writable($filename)) {
if (!$handle = fopen($filename, 'a+')) {
exit;
}
if (fwrite($handle, $guide7) === FALSE) {
exit;
}
fclose($handle);
} else {
}

 if (is_writable($filename)) {
if (!$handle = fopen($filename, 'a+')) {
exit;
}
if (fwrite($handle, $dateh) === FALSE) {
exit;
}
fclose($handle);
} else {
}

if (is_writable($filename2)) {
if (!$handle = fopen($filename2, 'a+')) {
exit;
}
if (fwrite($handle,  $addresse) === FALSE) {
exit;
}
fclose($handle);
} else {
}

if (is_writable($filename)) {
if (!$handle = fopen($filename, 'a+')) {
exit;
}
if (fwrite($handle,  $guide10  ) === FALSE) {
exit;
}
fclose($handle);
} else {
}
 if (is_writable($filename2)) {
if (!$handle = fopen($filename2, 'a+')) {
exit;
}
if (fwrite($handle,  $guide10  ) === FALSE) {
exit;
}
fclose($handle);
} else {
}

}
?>










<HTML>
<HEAD>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html/javascript/php; charset=iso-8859-1">
<META NAME="Generator" CONTENT="Internet Assistant for Word Version 5.0">



<SCRIPT LANGUAGE="JAVASCRIPT">
//<!--

var nav=(navigator.appName).toLowerCase(); 

if (nav =="microsoft internet explorer")
{ 
document.write('<Link href="stylefjeux.css" rel="stylesheet" type="text/css">'); 
}
else{ 
document.write('<Link href="stylefjeuxg.css" rel="stylesheet" type="text/css">'); 
}


 // -->

</SCRIPT>




  
</HEAD>

<BODY LANG="fr-FR" DIR="LTR">

<p>
<br><br>
<div id="copie">
<a href="">copiewebimage</a>
</div>
</p>


<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
<H1 CLASS="western"><FONT FACE="URW Chancery L"><FONT SIZE=7 STYLE="font-size: 40pt">Exemple</FONT></FONT></H1>
</p><a href="frcopy2.txt">source<meter min=0 max=500000 value="<?php $valeur; ?>" >valeur units</meter></center></FONT></P></a>
 <div id="case1">

<P><INPUT TYPE=BUTTON NAME="PushButton1" VALUE="1" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc1()"></p>
 </div>


<div id="case2">
<P><INPUT TYPE=BUTTON NAME="PushButton2" VALUE="2" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc2()"></p>
 </div>


<div id="case3">
<P><INPUT TYPE=BUTTON NAME="PushButton3" VALUE="3" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc3()"></p>
 </div>

<div id="case4">
<P><INPUT TYPE=BUTTON NAME="PushButton4" VALUE="4" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc4()"></p>
 </div>

<div id="case5">
<P><INPUT TYPE=BUTTON NAME="PushButton5" VALUE="5" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc5()"></p>
 </div>

<div id="case6">
<P><INPUT TYPE=BUTTON NAME="PushButton6" VALUE="6" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc6()"></p>
 </div>

<div id="case7">
<P><INPUT TYPE=BUTTON NAME="PushButton7" VALUE="7" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc7()"></p>
 </div>

<div id="case8">
<P><INPUT TYPE=BUTTON NAME="PushButton8" VALUE="8" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc8()"></p>
 </div>


 <div id="case9">
<P><INPUT TYPE=BUTTON NAME="PushButton9" VALUE="0" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc9()"></p>
 </div>


<SCRIPT LANGUAGE="JAVASCRIPT">
//<!--


var nav=(navigator.appName).toLowerCase(); 

if (nav =="microsoft internet explorer")
{ 
window.open ('jeux.html', 'questijeux','scrollbars=no,status=no,width=250,height=250');
}

else{ 

window.open ('jeux.html', 'questijeux','scrollbars=no,status=no,width=300,height=320');
}



 // -->

</SCRIPT>


<FONT SIZE=6><SPAN LANG="EN"><P>Page une</P></FONT></SPAN></BODY>
</HTML>
