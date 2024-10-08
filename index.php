<?php 
// $cars = array(
//     array("bmw","gjermani", 200),
//     array('ferrari','itali',999),
//     array('golfdysh','gjermani',2)
// );
// echo $cars[0][0]. " :origjina: ". $cars[0][1]. "kosto:". $cars[0][2]. "<br>";
// echo $cars[1][0]." :origjina: ". $cars[1][1]. "kosto:". $cars[1][2]. "<br>";
// echo $cars[2][0]." :origjina: ". $cars[2][1]. "kosto:". $cars[2][2]. "<br>";


// for($row=0; $row<3; $row++){
//     echo"<p> row number $row</p>";
//     echo"<ul>";
//     for($col=0;$col<3;$col++){
//         echo"<li>". $cars[$row][$col]."<li>";
//     }
//     echo "</ul>";
// }

// $phones = array(
//     array("iphone14","20", "12"),
//     array('iphone13','10',"15"),
//     array('iphone12','15',"10")
// );
// echo $phones[0][0]. " :stock: ". $cars[0][1]. "sold:". $cars[0][2]. "<br>";
// echo $phones[1][0]." :stock: ". $cars[1][1]. "sold:". $cars[1][2]. "<br>";
// echo $phones[2][0]." :stock: ". $cars[2][1]. "sold:". $cars[2][2]. "<br>";


// for($row=0; $row<3; $row++){
    
//     echo"<p> row number $row</p>";
//     echo"<ul>";
//     for($col=0;$col<3;$col++){
//         echo"<li>". $cars[$row][$col]."<li>";
//     }
//     echo "</ul>";
// }

// $tabelaar = array(
//     array(1,2,3),
//     array(1,2,3),
//     array(1,2,3)
// );

// for($i=1,$i<4;$i++){
//     for($j=1;$j<4;$j++){
//         echo"array: $i element:$j <br>" ;
//     }
// }

$tabelaar = array(
    array("*","*","*","*","*","*");
 
);

for($i=1,$i<2;$i++){
    for($j=1;$j<3;$j++)
    for($k=1;$k<4;$k++)
    for($m=1;$m<5;$m++){
        echo"array: * " ;
    }
}
?>