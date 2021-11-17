<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP day7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
   <div class="text-center"><h1>different Vehicles</h1> <?php
    // Create a simple Class called Vehicles. This Class should have the properties: name, model, makeYear, color, fuelType. Use a constructor. Create a method which will return the name and the model of this vehicle. 

    // Instantiate 3 new objects from this Class. 
    
    // Once you have done creating these objects, create a new Class called Ships. This Class will extend the Vehicles Class. Add new properties and methods to this Class.
    
    // Instantiate 3 new objects from this Class. 


    class Cars{
               function __construct(protected $brand, protected $model, protected $constYear, protected $color,  protected $fuel)
        {
                $this->brand = $brand;
                $this->model = $model;
        }
            public function showCar(){
                echo "<div class='body'><h5>Car</h5><br> Brand: " .$this->brand,"<br> Model: " .$this->model. "<hr></div>";
            }
    }

    $car1=new Cars("Mazda", "323f", 1987, "darkblue", "gasoline");
    $car2=new Cars("Volkswagen", "LT31", 1985, "blue", "diesel");
    $car3=new Cars("Dacia", "Sandero", 2018, "golden", "LPG");

    $car1->showCar();
    $car2->showCar();
    $car3->showCar();

    class Ships extends Cars{
             
            function __construct(protected $brand, protected $model, protected $constYear, protected $color,  protected $fuel, protected $speed, protected $tons)
            {
                $this->brand = $brand;
                $this->model = $model;
                $this->speed = $speed;
                $this->tons = $tons;
            }
            public function showShip(){
                echo "<div class='body'><h5>Ship</h5><br> Type: " .$this->brand,"<br> Model: " .$this->model. "<br> Speed: " .$this->speed . " kn<br> Tonnage: " . $this->tons . " tons<hr></div>";
            }
    }

    $ship1=new Ships("Hovercraft", "SR.N4", 1987, "white-red-black", "gasoline", 70, 320);
    $ship2=new Ships("Moss-type carrier", "LNG Rivers", 2002, "turquoise", "heavy oil", 6.6 , 47.700);
    $ship3=new Ships("Paddle steamer", "Gisela", 1872, "white", "steam", 12, 187.5);

    $ship1->showShip();
    $ship2->showShip();
    $ship3->showShip();
    
    ?></div>
</body>
</html>