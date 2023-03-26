Jeu des 9 cases ( taquin )--------------------------
Url     : http://codes-sources.commentcamarche.net/source/100612-jeu-des-9-cases-taquinAuteur  : franckfavierDate    : 19/06/2014
Licence :
=========

Ce document intitulé « Jeu des 9 cases ( taquin ) » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

/*Ce code est de 2009 environs .
<br />l'index php n'est pas utile et frcopy2.t
xt aussi, sur le zip envoyé*/
<br /><pre class="code" data-mode="js">
&lt;!DOCT
YPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"&gt;
&lt;HTML&gt;
&lt;HEA
D&gt;


 &lt;META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html/js; charset=windo
ws-1252"&gt;
 &lt;TITLE&gt;jeux 9cases&lt;/TITLE&gt;
 &lt;META NAME="GENERATOR" 
CONTENT="StarOffice 7  (part1 débian part2 Win32)"&gt;
 &lt;META NAME="AUTHOR" C
ONTENT="franck"&gt;
 &lt;META NAME="CREATED" CONTENT="20081129;18320015"&gt;
 &l
t;META NAME="CHANGEDBY" CONTENT="francknoveau10072010"&gt;
 &lt;META NAME="CHANG
ED" CONTENT="20090628;18462446"&gt;


&lt;SCRIPT LANGUAGE="JAVASCRIPT"&gt;
//&lt
;!--
   // base début http://www.aliasdmc.fr/coursjavas/
var nav=(navigator.appN
ame).toLowerCase(); 

 if (nav =="microsoft internet explorer")
{ 
document.writ
e('&lt;Link href="stylefjeux.css" rel="stylesheet" type="text/css"&gt;'); 
}

el
se{ 
document.write('&lt;Link href="stylefjeuxg.css" rel="stylesheet" type="text
/css"&gt;'); 
}


 // --&gt;

&lt;/SCRIPT&gt;

&lt;/HEAD&gt;

&lt;body LANG="fr-
FR"&gt;

&lt;SCRIPT LANGUAGE="JAVASCRIPT"&gt;
//&lt;!--

var xcase1=1;
var xcase
2=2;
var xcase3=3;
var xcase4=4;
var xcase5=5;
var xcase6=6;
var xcase7=7;
var x
case8=8;

var xcase9=0;


var chois1=0;
var chois2=0;
var chois3=0;
var chois4=0
;
var chois5=0;
var chois6=0;
var chois7=0;
var chois8=0;
var chois9=0;


var xn
umber=Math.round(Math.random()*81);

var somm=0;
var poin=0;
var toppos1= [1,2,3
,4,5,6,7,8,0];
// --&gt;



&lt;/SCRIPT&gt;

 &lt;form name="jeu1"&gt;

&lt;div 
id="case0"&gt;
&lt;P&gt;&lt;INPUT TYPE=TEXT NAME="point" VALUE="" size="2"&gt;&l
t;FORM ACTION="index.html" METHOD="get"&gt;&lt;input type="submit" value="nouvea
u"&gt;&lt;/p&gt;
 &lt;/div&gt;

&lt;div id="case1"&gt;
&lt;P&gt;&lt;INPUT class=
"bouton" TYPE=BUTTON NAME="PushButton1" VALUE="" STYLE="width: 1.8cm; height: 1.
8cm" onclick="doc1()"&gt;&lt;/p&gt;
 &lt;/div&gt;


&lt;div id="case2"&gt;
&lt;P
&gt;&lt;INPUT class="bouton" TYPE=BUTTON NAME="PushButton2" VALUE="" STYLE="widt
h: 1.8cm; height: 1.8cm" onclick="doc2()"&gt;&lt;/p&gt;
 &lt;/div&gt;


&lt;div 
id="case3"&gt;
&lt;P&gt;&lt;INPUT class="bouton" TYPE=BUTTON NAME="PushButton3" 
VALUE="" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc3()"&gt;&lt;/p&gt;
 &lt
;/div&gt;

&lt;div id="case4"&gt;
&lt;P&gt;&lt;INPUT class="bouton" TYPE=BUTTON 
NAME="PushButton4" VALUE="" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc4()"
&gt;&lt;/p&gt;
 &lt;/div&gt;

&lt;div id="case5"&gt;
&lt;P&gt;&lt;INPUT class="b
outon" TYPE=BUTTON NAME="PushButton5" VALUE="" STYLE="width: 1.8cm; height: 1.8c
m" onclick="doc5()"&gt;&lt;/p&gt;
 &lt;/div&gt;

&lt;div id="case6"&gt;
&lt;P&gt
;&lt;INPUT class="bouton" TYPE=BUTTON NAME="PushButton6" VALUE="" STYLE="width: 
1.8cm; height: 1.8cm" onclick="doc6()"&gt;&lt;/p&gt;
 &lt;/div&gt;

&lt;div id="
case7"&gt;
&lt;P&gt;&lt;INPUT class="bouton" TYPE=BUTTON NAME="PushButton7" VALU
E="" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc7()"&gt;&lt;/p&gt;
 &lt;/di
v&gt;

&lt;div id="case8"&gt;
&lt;P&gt;&lt;INPUT class="bouton" TYPE=BUTTON NAME
="PushButton8" VALUE="" STYLE="width: 1.8cm; height: 1.8cm" onclick="doc8()"&gt;
&lt;/p&gt;
 &lt;/div&gt;


 &lt;div id="case9"&gt;
&lt;P&gt;&lt;INPUT class="bou
ton" TYPE=BUTTON NAME="PushButton9" VALUE="" STYLE="width: 1.8cm; height: 1.8cm"
 onclick="doc9()"&gt;&lt;/p&gt;
 &lt;/div&gt;
 &lt;/form&gt;






&lt;SCRIPT LA
NGUAGE="JAVASCRIPT"&gt;



//&lt;!--



do {

if (xcase1==0)
{
var chois1 =Math.
round(Math.random()*1);


if (chois1==0){

xcase1=xcase2;
xcase2=0;

 

}

if (c
hois1==1){
xcase1=xcase4;
xcase4=0;


}

}
// ----------------------------------
---------------------------------------------------------------


if (xcase2==0)

{
var chois2 =Math.round(Math.random()*2);



if (chois2==0){

xcase2=xcase1;
x
case1=0;


}
if (chois2==1){

xcase2=xcase3;
xcase3=0;


}

if (chois2==2){

xca
se2=xcase5;
xcase5=0;

 } 


}


// --------------------------------------------
-------------------------------------


if (xcase3==0)
{


var chois3 =Math.roun
d(Math.random()*1);



if (chois3==0){

xcase3=xcase2;
xcase2=0;



}


if (choi
s3==1){

xcase3=xcase6;
xcase6=0;

 

}

}


// --------------------------------
----------------------------------------------------------------


if (xcase4==0
)
{

var chois4 =Math.round(Math.random()*2);



if (chois4==0){
xcase4=xcase1;

xcase1=0;

}


if (chois4==1){
xcase4=xcase5;
xcase5=0;
 
}



if (chois4==2){
x
case4=xcase7;
xcase7=0;

}


}

// ---------------------------------------------
----------

if (xcase5==0)
{
var chois5 =Math.round(Math.random()*3);


if (choi
s5==0){
xcase5=xcase2;
xcase2=0;


}

if (chois5==1){
xcase5=xcase4;
xcase4=0;
 
 

}

if (chois5==2){
xcase5=xcase6;
xcase6=0;


}

if (chois5==3){
xcase5=xcase
8;
xcase8=0;



}


}

// ----------------------------------------------------



if (xcase6==0)
{
var chois6 =Math.round(Math.random()*2);




if (chois6==0){
x
case6=xcase3;
xcase3=0;



}


if (chois6==1){
xcase6=xcase5;
xcase5=0;


}



i
f (chois6==2){
xcase6=xcase9;
xcase9=0;


}
}

// ------------------------------
---------------------------------------------------------------

if (xcase7==0)

{

var chois7 =Math.round(Math.random()*1);



if (chois7==0){
xcase7=xcase4;
xc
ase4=0;
 

}



if (chois7==1){
xcase7=xcase8;
xcase8=0;

  
}


}


//---------
--------------------------------------------------------------------------------
-----

if (xcase8==0)
{
var chois8 =Math.round(Math.random()*2);



if (chois8==
0){
xcase8=xcase7;
xcase7=0;

 
}



if (chois8==1){
xcase8=xcase5;
xcase5=0;

 
 
}




if (chois8==2){
xcase8=xcase9;
xcase9=0;
  
}

}



// -----------------
---------------------------

if (xcase9==0)
{

var chois9 =Math.round(Math.rando
m()*1);



if (chois9==0){

xcase9=xcase6;
xcase6=0;

}




if (chois9==1){
xcas
e9=xcase8;
xcase8=0;


}


}

++xnumber;


 } while(xnumber &lt; 101);


 docume
nt.forms.jeu1.PushButton1.value = xcase1;
 document.forms.jeu1.PushButton2.value
 = xcase2;
 document.forms.jeu1.PushButton3.value = xcase3;
 document.forms.jeu1
.PushButton4.value = xcase4;
 document.forms.jeu1.PushButton5.value = xcase5;
do
cument.forms.jeu1.PushButton6.value = xcase6;
 document.forms.jeu1.PushButton7.v
alue = xcase7;
document.forms.jeu1.PushButton8.value = xcase8;
 document.forms.j
eu1.PushButton9.value = xcase9;
 result();


 function doc1()
{
var case1 = Numb
er(document.forms.jeu1.PushButton1.value);
 var case2 = Number(document.forms.je
u1.PushButton2.value);
  var case4 = Number(document.forms.jeu1.PushButton4.valu
e);

if (case2==0)
{
document.forms.jeu1.PushButton2.value = case1;
document.for
ms.jeu1.PushButton1.value = case2;
document.forms.jeu1.point.value = ++poin;
res
ult();
 }

 if (case4==0)
{
document.forms.jeu1.PushButton1.value = case4;
docum
ent.forms.jeu1.PushButton4.value = case1;
document.forms.jeu1.point.value = ++po
in;
result();
 }


}


 function doc2()
{
var case2 = Number(document.forms.jeu1
.PushButton2.value);
 var case1 = Number(document.forms.jeu1.PushButton1.value);

  var case3 = Number(document.forms.jeu1.PushButton3.value);
    var case5 = Nu
mber(document.forms.jeu1.PushButton5.value);

if (case1==0)
{
document.forms.jeu
1.PushButton2.value = case1;
document.forms.jeu1.PushButton1.value = case2;
docu
ment.forms.jeu1.point.value = ++poin;
result();
 }

 if (case3==0)
{
document.fo
rms.jeu1.PushButton3.value = case2;
document.forms.jeu1.PushButton2.value = case
3;
document.forms.jeu1.point.value = ++poin;
result();
 }


 if (case5==0)
{
doc
ument.forms.jeu1.PushButton5.value = case2;
document.forms.jeu1.PushButton2.valu
e = case5;
document.forms.jeu1.point.value = ++poin;
result();
 }


}


 

 func
tion doc3()
{
var case3 = Number(document.forms.jeu1.PushButton3.value);
 var ca
se2 = Number(document.forms.jeu1.PushButton2.value);
  var case6 = Number(docume
nt.forms.jeu1.PushButton6.value);

if (case2==0)
{
document.forms.jeu1.PushButto
n2.value = case3;
document.forms.jeu1.PushButton3.value = case2;
document.forms.
jeu1.point.value = ++poin;
result();
 }

 if (case6==0)
{
document.forms.jeu1.Pu
shButton3.value = case6;
document.forms.jeu1.PushButton6.value = case3;
document
.forms.jeu1.point.value = ++poin;
result();
 }

}









 function doc4()
{
va
r case4 = Number(document.forms.jeu1.PushButton4.value);
 var case1 = Number(doc
ument.forms.jeu1.PushButton1.value);
  var case7 = Number(document.forms.jeu1.Pu
shButton7.value);
  var case5 = Number(document.forms.jeu1.PushButton5.value);


if (case1==0)
{
document.forms.jeu1.PushButton4.value = case1;
document.forms.je
u1.PushButton1.value = case4;
document.forms.jeu1.point.value = ++poin;
result()
;
 }

 if (case7==0)
{
document.forms.jeu1.PushButton4.value = case7;
document.f
orms.jeu1.PushButton7.value = case4;
document.forms.jeu1.point.value = ++poin;
r
esult();
 }
 
  if (case5==0)
{
document.forms.jeu1.PushButton4.value = case5;
d
ocument.forms.jeu1.PushButton5.value = case4;
document.forms.jeu1.point.value = 
++poin;
result();

}


}



 function doc5()
{
var case5 = Number(document.forms
.jeu1.PushButton5.value);
 var case2 = Number(document.forms.jeu1.PushButton2.va
lue);
  var case4 = Number(document.forms.jeu1.PushButton4.value);
  var case6 =
 Number(document.forms.jeu1.PushButton6.value);
    var case8 = Number(document.
forms.jeu1.PushButton8.value);

if (case2==0)
{
document.forms.jeu1.PushButton5.
value = case2;
document.forms.jeu1.PushButton2.value = case5;
document.forms.jeu
1.point.value = ++poin;
result();
 }

 if (case4==0)
{
document.forms.jeu1.PushB
utton5.value = case4;
document.forms.jeu1.PushButton4.value = case5;
document.fo
rms.jeu1.point.value = ++poin;
result();
 }
 
  if (case6==0)
{
document.forms.j
eu1.PushButton5.value = case6;
document.forms.jeu1.PushButton6.value = case5;
do
cument.forms.jeu1.point.value = ++poin;
result();
 }


  if (case8==0)
{
documen
t.forms.jeu1.PushButton5.value = case8;
document.forms.jeu1.PushButton8.value = 
case5;
document.forms.jeu1.point.value = ++poin;
result();
 }
}


 function doc6
()
{
var case6 = Number(document.forms.jeu1.PushButton6.value);
 var case3 = Num
ber(document.forms.jeu1.PushButton3.value);
  var case5 = Number(document.forms.
jeu1.PushButton5.value);
  var case9 = Number(document.forms.jeu1.PushButton9.va
lue);

if (case3==0)
{
document.forms.jeu1.PushButton6.value = case3;
document.f
orms.jeu1.PushButton3.value = case6;
document.forms.jeu1.point.value = ++poin;
r
esult();
 }

 if (case5==0)
{
document.forms.jeu1.PushButton6.value = case5;
doc
ument.forms.jeu1.PushButton5.value = case6;
document.forms.jeu1.point.value = ++
poin;
result();
 }
 
  if (case9==0)
{
document.forms.jeu1.PushButton6.value = c
ase9;
document.forms.jeu1.PushButton9.value = case6;
document.forms.jeu1.point.v
alue = ++poin;
result();
 }


}




 function doc7()
{
var case7 = Number(docume
nt.forms.jeu1.PushButton7.value);
 var case4 = Number(document.forms.jeu1.PushBu
tton4.value);
  var case8 = Number(document.forms.jeu1.PushButton8.value);

if (
case4==0)
{
document.forms.jeu1.PushButton7.value = case4;
document.forms.jeu1.P
ushButton4.value = case7;
document.forms.jeu1.point.value = ++poin;
result();
 }


 if (case8==0)
{
document.forms.jeu1.PushButton7.value = case8;
document.forms
.jeu1.PushButton8.value = case7;
document.forms.jeu1.point.value = ++poin;
resul
t();
 }



}


 function doc8()
{
var case8 = Number(document.forms.jeu1.PushBut
ton8.value);
 var case5 = Number(document.forms.jeu1.PushButton5.value);
  var c
ase7 = Number(document.forms.jeu1.PushButton7.value);
    var case9 = Number(doc
ument.forms.jeu1.PushButton9.value);

if (case5==0)
{
document.forms.jeu1.PushBu
tton8.value = case5;
document.forms.jeu1.PushButton5.value = case8;
document.for
ms.jeu1.point.value = ++poin;
result();
 }

 if (case7==0)
{
document.forms.jeu1
.PushButton8.value = case7;
document.forms.jeu1.PushButton7.value = case8;
docum
ent.forms.jeu1.point.value = ++poin;
result();
 }


 if (case9==0)
{
document.fo
rms.jeu1.PushButton8.value = case9;
document.forms.jeu1.PushButton9.value = case
8;
document.forms.jeu1.point.value = ++poin;
result();
 }


}

 function doc9()

{
var case9 = Number(document.forms.jeu1.PushButton9.value);
 var case6 = Number
(document.forms.jeu1.PushButton6.value);
  var case8 = Number(document.forms.jeu
1.PushButton8.value);

if (case6==0)
{
document.forms.jeu1.PushButton9.value = c
ase6;
document.forms.jeu1.PushButton6.value = case9;
document.forms.jeu1.point.v
alue = ++poin;
result();
 }

 if (case8==0)
{
document.forms.jeu1.PushButton9.va
lue = case8;
document.forms.jeu1.PushButton8.value = case9;
document.forms.jeu1.
point.value = ++poin;
result();
 }



}

function result()
{

var case1 = Number
(document.forms.jeu1.PushButton1.value);
 var case2 = Number(document.forms.jeu1
.PushButton2.value);
  var case3 = Number(document.forms.jeu1.PushButton3.value)
;
var case4 = Number(document.forms.jeu1.PushButton4.value);
 var case5 = Number
(document.forms.jeu1.PushButton5.value);
  var case6 = Number(document.forms.jeu
1.PushButton6.value);
var case7 = Number(document.forms.jeu1.PushButton7.value);

 var case8 = Number(document.forms.jeu1.PushButton8.value);
  var case9 = Numbe
r(document.forms.jeu1.PushButton9.value);

if (case1==1)
{
++somm;
}

if (case2=
=2)
{
++somm;
}
if (case3==3)
{
++somm;
}
if (case4==4)
{
++somm;
}
if (case5==5
)
{
++somm;
}

if (case6==6)
{
++somm;
}
if (case7==7)
{
++somm;
}
if (case8==8)

{
++somm;
}

if (somm==8)
{
window.location.href=("good.html");
}
else
{
somm=0
;
}


 if (case1==0)
{document.forms.jeu1.PushButton1.value = "";}


 if (case2=
=0)
{document.forms.jeu1.PushButton2.value = "";}

 if (case3==0)
{document.form
s.jeu1.PushButton3.value = "";}

 if (case4==0)
{document.forms.jeu1.PushButton4
.value = "";}
 if (case5==0)
{document.forms.jeu1.PushButton5.value = "";}
 if (
case6==0)
{document.forms.jeu1.PushButton6.value = "";}
 if (case7==0)
{document
.forms.jeu1.PushButton7.value = "";}
 if (case8==0)
{document.forms.jeu1.PushBut
ton8.value = "";}
   if (case9==0)
{document.forms.jeu1.PushButton9.value = "";}










}

 // --&gt;

&lt;/SCRIPT&gt;
&lt;div id="copie"&gt;
&lt;a href="http
://www.gnu.org/philosophy/free-sw.fr.html"&gt;copiewebimage&lt;/a&gt;
&lt;/div&g
t;
&lt;/body&gt;



&lt;/html&gt;



</pre>
