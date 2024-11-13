<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題　クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
    <p>
        <?php
        class Food
        {
            private $name;
            private $price;
            public function __construct(string $name, int $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
            public function show_price()
            {
                echo $this->price;
            }
        }

        class Animal
        {
            private $name;
            private $hight;
            private $weight;
            public function __construct(string $name, int $hight, int $weight)
            {
                $this->name = $name;
                $this->hight = $hight;
                $this->weight = $weight;
            }

            public function show_hight()
            {
                echo $this->hight;
            }
        }

        $potato = new Food('potato', 250);
        $dog = new Animal('dog', 60, 5000);

        print_r($potato);
        echo '<br>';
        print_r($dog);
        echo '<br>';
        $potato->show_price();
        echo '<br>';
        $dog->show_hight();

        ?>
    </p>
</body>

</html>