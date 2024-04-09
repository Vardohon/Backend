<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <!-- <form action="monscript.php" method="post" enctype="multipart/form-data">
        <label>Votre nom :</label>
        <input name="nom" id="nom" type="text" />

        <label>Votre âge :</label>
        <input name="age" id="age" type="number" /></p>

        <button type="submit">Valider</button>
        <input type="file" name="fichier">
    </form> -->

    <form action="monscript.php" method="POST" enctype="multipart/form-data">

    <button type="submit">Valider</button>
        <input type="file" name="fichier">
    </form>



    <?php


    // echo "<h1>Bonjour le monde</h1>";

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


    // $a = array(
    //     "19001" => array(
    //         "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre",
    //         "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"
    //     ),

    //     "19002" => array(
    //         "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre",
    //         "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""
    //     ),

    //     "19003" => array(
    //         "", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage",
    //         "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation"
    //     )
    // );

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

    // $timestamp=1000200000;
    // echo gmdate("Y-m-d\TH:i:s\Z", $timestamp);

    // print_r(file("customers.csv"))


    // Chemin vers le fichier CSV
// $chemin_fichier_csv = 'customers.csv';

// // Lire le fichier CSV dans un tableau
// $donnees = file($chemin_fichier_csv);

// // Vérifier si le fichier est lu avec succès
// if ($donnees !== false) {
//     // Parcourir chaque ligne du fichier
//     foreach ($donnees as $ligne) {
//         // Diviser la ligne en utilisant la virgule comme séparateur
//         $colonnes = explode(',', $ligne);

//         // Afficher chaque colonne
//         print_r($colonnes);
//     }
// } else {
//     // Afficher un message d'erreur si le fichier ne peut pas être lu
//     echo "Impossible de lire le fichier CSV.";
// }

// if ($donnees !== false) {
//     echo '<div class="container"><div class="row"><div class="col">';
//     echo '<table class="table table-bordered">';
//     // Parcourir chaque ligne du fichier
//     foreach ($donnees as $ligne) {
//         // Diviser la ligne en utilisant la virgule comme séparateur
//         $colonnes = explode(',', $ligne);
//         // Début de la ligne du tableau
//         echo '<tr>';
//         // Afficher chaque colonne
//         foreach ($colonnes as $colonne) {
//             echo '<td>' . $colonne . '</td>';
//         }
//         // Fin de la ligne du tableau
//         echo '</tr>';
//     }
//     echo '</table>';
//     echo '</div></div></div>';
// } else {
//     // Afficher un message d'erreur si le fichier ne peut pas être lu
//     echo "Impossible de lire le fichier CSV.";
// }

    ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>