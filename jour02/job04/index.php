<?php /* Job4 */

$nombre= 0;

    while ($nombre <=100)
{
    if ($nombre==3 ||$nombre==6 ||$nombre==9 ||$nombre==12||$nombre==18 ||$nombre==21 ||$nombre==24 ||$nombre==27 ||$nombre==33 
	||$nombre==36 ||$nombre==39 ||$nombre==42 || $nombre==48||$nombre==51 ||$nombre==54 ||$nombre==57 ||$nombre==63 ||$nombre==66 ||$nombre==69 
	||$nombre==72 ||$nombre==78||$nombre==81 ||$nombre==84 ||$nombre==87||$nombre==93 ||$nombre==96 ||$nombre==99)
    {
    echo "Fizz"; 
    echo "<br>";
$nombre++;
}
    elseif ($nombre==5 ||$nombre==10 ||$nombre==20 ||$nombre==25 ||$nombre==35 ||$nombre==40 ||$nombre==50 ||$nombre==55 ||$nombre==65 
    ||$nombre==70 ||$nombre== 80 ||$nombre==85 ||$nombre==95)
{
    echo "Buzz";
    echo "<br>";
    $nombre++;
}
    elseif ($nombre==15 ||$nombre==30 ||$nombre==45 ||$nombre==60 ||$nombre==75 ||$nombre==90)
{
    echo "FizzBuzz";
    echo "<br>";
    $nombre++;
}
    else{
    echo  $nombre;
    echo "<br/>";
    $nombre++;
}
}
?>
