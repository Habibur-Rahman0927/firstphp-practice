<?php 
    if(isset($_REQUEST["name"]) || isset($_POST["age"])){
        echo "Hello ". $_REQUEST['name']. "<br>";
        echo "your age is ". $_REQUEST['age']. "<br>";
        exit();
    }

?>

<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name">
            <label for="age">Age</label>
            <input type="text" name="age">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>