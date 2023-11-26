<?php
    $title = 'login';
    include('includes/header.php');
    require_once('includes/functions.php');


    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     $name = filter_input(INPUT_POST, 'name', FILTER_VALIDATE_ALPHA);
    // }
?>   


<div class="formContainer">
    <form action="" method="POST">
        <label for="name"> name
            <input name="name" id="name" type="text">
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
        
    </div>
</div>

<?php
    include('includes/footer.php');
?>