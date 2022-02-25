<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$products = 
[
    ['name' => 'banana', 'price' => 1, 'pieces' => 6, 'tva' => 6],
    ['name' => 'apple', 'price' => 1.5, 'pieces' => 3, 'tva' => 6],
    ['name' => 'wine', 'price' => 10, 'pieces' => 2, 'tva' => 6]
];
            
$total = 0;         //Quite a lot of globals !! change that !   
$calculEdit = 0;
$tvapart = 0;
$tvatotal = 0;

foreach($products as $index => $calculatePrice)
{
    //Calcul the total price tva included
    $calcul = (($products[$index]['price']) * ($products[$index]['pieces']));
    $calculEdit = $calculEdit + $calcul;
    
   //Calcul the tva percentage
   if($products[$index]['name']!= "wine")
   {    
       echo "<pre>";
        $tvapart = (($calcul / 100) * 6);
        $name = $products[$index]["name"];
        echo "$tvapart is the tva part of  $name ";
        echo "</pre>";
    }
    if($products[$index]['name'] == "wine" ){
        echo "<pre>";
        $tvapart = (($calcul / 100) * 21);
        $name = $products[$index]["name"];
        echo "$tvapart is the tva part of  $name ";
        echo "</pre>";
    }
}

echo "the total price is :  $calculEdit";



?>



