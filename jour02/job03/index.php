<?php /* Job3 */

$nombre= 0;

    while ($nombre <=100)
{
    if ($nombre <=20)
    {
    echo "<i>".$nombre." </i>";
    echo "<br>"; 
$nombre++;
}
    elseif ($nombre >=25 & $nombre <=50 & $nombre !=42)
{
    echo "<u>".$nombre."</u>";
    echo "<br>";
    $nombre++;
}
    elseif ($nombre==42)
{ 
    echo "la Plateforme";
    echo "<br>";
    $nombre++;
}
    else{
    echo $nombre;
    echo "<br/>";
    $nombre++;
}
}
?>
