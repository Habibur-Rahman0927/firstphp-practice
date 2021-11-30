<html>

<body>
    <h1>The first program</h1>
    <?php

    class Fruit
    {
        public $name;
        public $color;

        function set_name($name)
        {
            $this->name = $name;
        }

        function get_name()
        {
            return $this->name;
        }
    }

    $apple = new Fruit('Apple', 'red');
    $banana = new Fruit('Banana', 'black');
    $apple->set_name('apple');
    $banana->set_name('comola');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
    ?>

</body>

</html>