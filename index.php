<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Тренировка</title>

</head>

<body>
  <div container class="container">
    <?php
    class Animal
    {
      public $legs = 4;
      public function info()
      {
        echo "У меня {$this->legs} лапы.<br>";
      }
    }
    // $obj = new Animal();
    //$obj->info();

    class Dog extends Animal
    {
      public $name = "Собака";
      public function voise()
      {
        echo " {$this->name} издает звук, ГАВ-ГАВ.<br>";
      }
    }
    // $dog = new Dog;
    // $dog->info();
    // $dog->voise();

    class Cat extends Animal
    {
      public $name = "Кот";
      public function voise()
      {
        echo " {$this->name} издает звук, МЯУ-МЯУ.<br>";
      }
    }
    $cat = new Cat;
    $cat->info();
    $cat->voise();
    // public - наследуется дочерними классами без проблем, можно изменять извне
    // private - не наследуется, изменять можно только внутри класса
    // protected - наследуется, изменять можно только внутри класса
    ?>

  </div>

  </div>
</body>

</html>