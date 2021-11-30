<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="GET">
            <label for="name">Name</label>
            <input type="text" name="name">
            <label for="age">Age</label>
            <input type="text" name="age">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<?php 
    if(isset($_GET["name"]) || isset($_GET["age"])){
        echo "Hi ".$_GET["name"]. "<br>";
        echo "Your age is ".$_GET['age']. " years";
        exit();
    }

?>