<?php 
class vehicles {
    public $name="audi";
    public $model="a8";
    public $makeYear="2008";
    public $color="black";
    public $fuelType="benzin";

    function __construct($name_arg, $model_arg, $makeYear_arg,$color_arg, $fuelType_arg)
    {
 
         $this->name   = $name_arg;
        $this->model  = $model_arg;
        $this ->makeYear  = $makeYear_arg;
        $this->color   = $color_arg;
        $this->fuelType  = $fuelType_arg;
    }
 function showInfo(){
    $info = $this->name + $this->model ;
    return $info;}
}


class ships extends vehicles {
    public $weight="1100kg";
    public $radius="500m";
    public $capacity="12300m^3";

function __construct($name_arg, $model_arg, $makeYear_arg,$color_arg, $fuelType_arg,$weight_arg,$radius_arg,$capacity_arg){

    $this->weight=$weight_arg;
    $this->capacity=$capacity_arg;
    $this->radius=$radius_arg;
}

 function showInfo(){
    $info1 = "{$this->name}   {$this->model} made in {$this->makeYear} runs on {$this->fuelType} and weighs {$this->weight} and has a radius of {$this->radius} and a capacity of {$this->capacity}l";
    return$info1;
   
 }

}
 $shipObj = new ships("ferrari","s121",2000,"black","petrol","10000kg",400,1212);
 $result = $shipObj->showInfo();
echo $result;
?>