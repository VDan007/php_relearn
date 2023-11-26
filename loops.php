<?php
    $title='php loops';
    $guitars = ['a','b','c'];
    $kvpGuitars = [
        'x' => 'aa',
        'y' => 'bb',
        'z' => 'cc'
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title; ?> </title>
</head>
<body>
   
    <h1>Favorite Guitars</h1>

    <div class="a">
        <h2 class="divTittle">foreach loop</h2>
        <?php 
            foreach($kvpGuitars as $key => $guitar){
               echo "<div>$key ===>>> $guitar</div>" ; 
            }
        ?>
    </div>
    <div class="a">
        <h2 class="divTittle">for loop</h2>
        <?php 
            for($i = 0; $i <= 1; $i++){
                echo "<p> $i </p> $title ";
            }
        ?>
    </div>
    <div class="a">
        <h2 class="divTittle"> while loop </h2>
        <?php 
            $i = 0;
            while($i < 12){
                $nbr = $i;
                echo "<h4>$nbr</h4>";

                $i++;
            }
        ?>
    </div>
    <a href="/">back to home</a>
</body>

<style>
    .a{
        display:flex;
        gap:15px;
        border: 2px solid greenyellow;
        min-height: 150px;
        align-items: center;
        padding: 10px;
        margin-bottom:30px;
    }
    .a > div{
        border: 1px solid red;
        padding:8px;
    }
    
</style>


</html>