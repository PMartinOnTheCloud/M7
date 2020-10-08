<html>
<head>
	<style>
		th {
			font-style: bold;
			background-color: green;
		}
        table {
        	empty-cells: hide;
            border: 1px solid black;
        }
        td {
        	text-align: center;
        }
        td,th {
        	width: 75px;
            height: 50px;
        }
        tr:nth-child(2) > td {
        	border-bottom: 3px solid black;
        }
	</style>
</head>
<body>
<?php
$meses = array("Enero" => 31, "Febrero" => 28, "Marzo" => 31, "Abril" =>30 ,"Mayo"=>31, "Junio"=>30,"Julio"=>31,"Agosto"=>31,"Septiembre"=>30,"Octubre"=>31,"Noviembre"=>30,"Diciembre"=>31);
$restante = 0;
foreach($meses as $clau=>$valor){
	echo "\n<table>";
	echo "<tr><th colspan='7'>$clau</th></tr>";
	echo "<tr><td>Lunes</td><td>Martes</td><td>Miercoles</td><td>Jueves</td><td>Viernes</td><td>Sabado</td><td>Domingo</td></tr>";
	$tabla = 0;
	foreach(range(1,$valor+$restante) as $i){
    	if ($tabla%7==0){
    		echo "\n<tr>";
    	}
       
        if ($restante>=$i){
        	echo "\n<td></td>";
        } else {
        	$w = $i-$restante;
        	echo "\n<td>$w</td>";
        }
       
    	if (($tabla+1)%7==0 || $i == $valor+$restante){
    		echo "\n</tr>";
    	}
    	$tabla+=1;
	}
    $x=0;
    while($x<=6){
    	if (($tabla+$x)%7==0){
        	if ($x!=0){
        		$y= 7-$x;
                $restante= $y;
            } else {
            	$restante= $x;
            }
        }
    $x+=1;
    }
echo "\n</table>\n";
}
?>
</body>
</html>
