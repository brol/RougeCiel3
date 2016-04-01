Rouge Ciel 3
============
Le configurateur permet de choisir quelle largeur de page vous voulez (750px ou 1000px).

Dimensions pour les images de bannière :
- affichage 750 : 750px x 150px
- affichage 1000 : 1000px x 150px

Si vous voulez en ajouter d'autres, il est impératif de se conformer aux règles suivantes :
- les nommer de manière identique "roundX.ext" où X est un chiffre
- en cas d'ajout (et non de remplacement), il faut modifier :
  * le fichier tpl/user_head.html et indiquer en ligne 3 (```var round = parseInt(Math.random()*4);```) le nombre total d'image de bannière (4 par défaut)
  * le fichier css correspondant à la largeur de page choisie (css/750.css ou css/1000.css) en prenant exemple sur la déclaration css en ligne 17 : ```.round0 { background : transparent url(../img/750/round0.jpg) no-repeat top left; }```