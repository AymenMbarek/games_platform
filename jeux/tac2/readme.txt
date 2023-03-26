Résolution en profondeur du taquin 3x3--------------------------------------
Url     : http://codes-sources.commentcamarche.net/source/103326-resolution-en-profondeur-du-taquin-3x3Auteur  : pabbatiDate    : 18/02/2022
Licence :
=========

Ce document intitul� � Résolution en profondeur du taquin 3x3 � issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis � disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fix�es par la licence, tant que cette note
appara�t clairement.

Description :
=============

En 5 minutes, le programme trouve le nombre minimum de déplacements
<br />Si o
n lui donne un jeu impossible, il calcule les 181440 positions différentes (soi
t 9!/2 la moitié des possibles)
<br />On peut programmer un solution plus rapi
de mais avec un nombre de coups bien
<br />souvent supérieur
<br />
<br />Fo
nction pour vérifier la possible résolution :
<br />
<br />function résolub
le(jeu)
<br />{
<br />	let z=0;
<br />	for(let n=1;n&lt;8;n++)
<br />	{
<br
 />		let a=jeu.indexOf(n);
<br />		for(let m=n+1;m&lt;9;m++)
<br />			if(a&gt;
jeu.indexOf(m))z++;
<br />	}
<br />	return (z&1)==0;
<br />}
