<?php
    $title = 'login';
    include('includes/header.php');
    require_once('includes/functions.php');


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
        
        if($email == false){
            $status = 'Please enter a valid e-mail';
        }
    }
?>   


<div class="formContainer">
    <form action="" method="POST">
        <label for="email"> email
            <input name="email" id="email" type="text">
        </label>
        <label for="number"> number
            <input name="number" id="number" type="number">
        </label>
        <button>submit</button>
    </form>
</div>

<div>
    <h1>results</h1>
    <div>
        <?php 
            
        ?>
    </div>
</div>

<?php
    include('includes/footer.php');
?>