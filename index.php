<?php
    $title = 'home';
    include('includes/header.php');
    require_once('includes/functions.php');

?>    
    

<div class="a">
    <?php 
        echo sum(1,2);
    ?>
</div>
<div class="a">
<?php 
        echo sum(1,4);
    ?>
</div>
<div class="a">
<?php 
        echo sum(1,99);
    ?>
</div>







<?php
    include('includes/footer.php');
?>