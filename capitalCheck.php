<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claudio Dionisio</title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css ">
</head>
<body>
<div class="container">

<?php include 'include/header.php';?>

<!-- paragraph above form -->
<br>
        <hr><br>
        <h4>
        <?php

        $userImput = ucfirst(strtolower($_GET["country"]));

        $country =
        array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", 
        "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", 
        "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
        "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", 
        "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
         "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
         "Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

            foreach($country as $x => $capital) {
                if($x === $userImput){

                    $ValidCountry = true;
                    $validCapital = $capital;
                }
            }

            if ($ValidCountry === true){
                echo "The capital of ".$userImput. " is ".($validCapital).".";
            }else{ 
                echo "The country ".$userImput." is not a valid country ";}
     
        ?> <br><br></h4>
        <a href="capital.php" ><button type="submit" class="btn btn-primary">Try again</button></a>
        <?php


include 'include/footer.php';

?>
</div>
</body>
</html>
