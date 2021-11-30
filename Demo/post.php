<?php 
    if(isset($_POST["name"]) || isset($_POST["age"])){
        if(preg_match("/[^A-Za-z'-]/",$_POST['name'])){
            die("Invalid name. Name should be alphabet");
        }
        echo "Hello ". $_POST['name']. "<br>";
        echo "your age is ". $_POST['age']. "<br>";
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