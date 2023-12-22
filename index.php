<?php
spl_autoload_register();

class ZooKeeper
{
  private $name;
  private $animals = [];
  public function __construct($name)
  {
    $this->name = $name;
  }
  public function addAnimal($animal)
  {
    $this->animals[] = new Animal($animal['name'], $animal['age']);
  }
  public function printMyAnimals()
  {
  }
}
class Zoo
{
  private $name;
  private $zooKeepers = [];
  public function __construct($name)
  {
    $this->name = $name;
  }
  public function addKeeper($keeper)
  {
    $this->zooKeepers[] = new zooKeeper($keeper);
  }
  public function addAnimal($animal, $keeper)
  {
    $this->zooKeepers[$keeper]->addAnimal($animal);
  }

  public function printZoo()
  {
  }
}


$str = file_get_contents('test.json');
$animals = json_decode($str, 1);

$zoo = new Zoo(' Мой зоо');
$zoo->addKeeper('Вася');
$zoo->addKeeper('Петя');
$zoo->addKeeper('Коля');
foreach ($animals as $animal) {
  $zoo->addAnimal($animal, $keeper);
}
$zoo->printZoo();









/*if(isset($_GET['delindex'])){
    unset($animals[$_GET['delindex']]);
    $animals = array_values($animals);  
  }
  if(isset($_POST['name'])&&isset($_POST['age'])){
    $animals[] = ['type'=>'animal','name'=>$_POST['name'], 'age'=>$_POST['age']];  
  }
 
  $objAnimals =[];
  foreach($animals as $animal){
    switch ($animal['type']){
      case 'animal':
        $objAnimals[] =new Animal($animal['name'],$animal['age']);
        break;
      case 'predator':
        $objAnimals[] =new Predator($animal['name'],$animal['age'],$animal['teethlength']);
        break;
      case 'herbivor':
        $objAnimals[] =new Herbivor($animal['name'],$animal['age']);
        break;
      case 'wolf':
        $objAnimals[] =new Wolf($animal['name'],$animal['age'],$animal['teethlength']);
        break;
    }
  }  

  */
?>
<!-- <form action = "<?= $_SERVER['SCRIPT_NAME'] ?>  " method = "POST">
  Введите название:<br>
  <input name = "name"><br> 
  Введите возраст:<br>
  <input name = "age"><br>
  <input type = "submit"> <br>
  </form>  -->
<?php
// foreach ($objAnimals as $key=>$animal){
//   if($animal instanceof Animal)
//     $animal->sayAboutMe();
//   else echo 'Это не животное';
//   echo("<a href = '{$_SERVER['SCRIPT_NAME']}?delindex=$key'>Удалить</a><br><br>");  
// }
// $str = json_encode($animals); 
// file_put_contents('test.json', $str);
?>