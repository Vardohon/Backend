<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<h1>Bonjour le monde</h1>";

    // echo $_SERVER["SCRIPT_NAME"];
    // var_dump($_SERVER);

    // $euro = 6.55957; 
    // printf("%.2f FF<br />",$euro); 
    // $money1 = 68.75; 
    // $money2 = 54.35; 
    // $money = $money1 + $money2; 
    // echo $money; 
    // echo "afficher sans printf".$money."<br>";
    // echo $monformat=sprintf("%01.2f",$money);
    // echo $monformat;
    // echo "affichage avec printf:" .$monformat."<br>";
    // $year="2002";
    // $month="4";
    // $day="5";
    // $date=sprintf("%04d-%02d-%02d",$year,$month,$day);
    // echo $date. "<br>";
    // echo "affichage avec sprintf".$date."<br>";

    // echo $_SERVER["SERVER_ADDR"];
    // echo $_SERVER["REMOTE_ADDR"];

    // for($a=1;$a<150;$a++){
    //     if($a%2 !=0){
    //         echo $a."<br>";
    //     };
    // };

    // for($i=0;$i<15;$i++){
    //     $a ="Je dois faire des sauvegardes régulières de mes fichiers.<br>";
    //     echo $a;
    // };

    // for($i=0;$i<12;$i++){
    //     for($j=0;$j<12;$j++){
    //         echo $i*$j." ";
    //         echo "<br>";
    //     };
    // };

    // $tab = array(); //ou $tab = []


    $a = array(
        "19001" => array(
            "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre",
            "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"
        ),

        "19002" => array(
            "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
            "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""
        ),

        "19003" => array(
            "", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage",
            "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation"
        )
    );

    // var_dump($a);


    // $resultat=array_search("Validation",$a["19002"]);
    // echo "La semaine de résultat est : ".$resultat+1;

    // $resultat=array_search("Stage",array_reverse($a["19001"]));
    // echo $resultat+1;

    // print_r(array_keys($a));

    // echo array_count_values($a[19003])["Stage"];




// function calculator($FirstNumber,$SecondNumber,$operator){
//     switch ($operator) {
//         case "Somme":
//             $CalculatorResult = $FirstNumber + $SecondNumber;
//             echo $CalculatorResult;
//             break;
//         case "Soustraction":
//             $CalculatorResult = $FirstNumber - $SecondNumber;
//             echo $CalculatorResult;
//             break;
//         case "Multiplication":
//             $CalculatorResult = $FirstNumber * $SecondNumber;
//             echo $CalculatorResult;
//             break;
//         case "Division":
//             if($SecondNumber!=0){
//             $CalculatorResult = $FirstNumber / $SecondNumber;
//             echo $CalculatorResult;}
//             else{echo "Pas divisible par 0";};
//             break;
//         default:
//         echo "Erreur";
//     }};
//     calculator(8,12,"Somme");

// $date =strtotime("2019-07-14");
// echo date("W", $date); 

// $origin = new DateTime();
// $target = date_create('2024-08-09');
// $interval = date_diff($origin, $target);
// echo $interval->format('%R%a days');

// $annee = 2024; // Remplacez ceci par l'année que vous souhaitez vérifier
// if (date('L', strtotime("$annee-01-01"))) {
//     echo "L'année $annee est bissextile."; } 
//     else { echo "L'année $annee n'est pas bissextile."; }

// $oDate = DateTime::createFromFormat("d/m/Y", "32/17/2019"); 
// $errors = DateTime::getLastErrors(); 
// if ($errors["error_count"]>0 || $errors["warning_count"]>0) { echo "ARGHHHH !"; }

// echo date("H:i");

// $date= new DateTime();
// $date->modify('+1 month');
// echo $date->format('Y-m-d');

$timestamp=1000200000;
echo gmdate("Y-m-d\TH:i:s\Z", $timestamp);

    ?>

</body>

</html>