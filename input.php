
<?php
    $title = 'input';
    include('includes/header.php');
    require_once('includes/functions.php');

   

    $category = filter_input(INPUT_GET,'category', FILTER_VALIDATE_INT);
    $limit =filter_input(INPUT_GET,'limit', FILTER_VALIDATE_INT);

    if($category == false){
        $category = 1;
    }
    if($limit == false){
        $limit = 1;
    }
    

    function setValues(){
        global $category,$limit;
       
    }

    setValues();

    echo isset($category);
?> 

<div class="a">
   <p>the category is: </p> <?= $category ?>
   <p>the limit is: </p> <?=$limit ?>
</div>












<?php
    include('includes/footer.php');
?>





