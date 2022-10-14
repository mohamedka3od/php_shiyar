<?php
class App{
    public $name  = 'mohamed';//have to specify the acess modifier
    private $age =25;
    function __construct()
    {
        // echo 'app created <br>';
    }
    public function setAge($age){
        $this->age = $age;
    }
    function getAge(){
        echo "$this->age <br>";
    }
}

$app = new App();
echo $app ->name;
$app -> setAge(15);
$app->getAge();