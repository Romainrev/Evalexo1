<!Doctype>
<html>

<head>

<meta charset="utf-8">
    <title>On se présente !</title>
    <body>
<?php
$tab=array("Prenom"=>'Romain',"Nom"=>'Revert',"Adresse"=>'3 rue du Code',"Code Postal"=>76000,"Ville"=>'Rouen',
    "Email"=>'blabla76@gmail.com',"Telephone"=>02-35-36-37-38,"Date de naissance"=>1992-03-30);
foreach($tab as $afficher=>$value){
    echo("<li>". $afficher .":"." " .$value.  "</li>");
}


?>
</body>
</head>
</html>