
<?php 

$str="I'm sorry Dave I'm afraid I can't do that";
$i=0;
$taille=strlen($str);

while ($i <$taille) {
    
    if($str[$i]=="a"||$str[$i]=="A"||$str[$i]=="e"||$str[$i]=="E"||$str[$i]=="i"||$str[$i]=="I"||$str[$i]=="o"||$str[$i]=="O"||$str[$i]=="u"||$str[$i]=="U"||$str[$i]=="y"||$str[$i]=="Y")
    {
        echo $str[$i];
        
    }
    $i++;
}

 ?>
