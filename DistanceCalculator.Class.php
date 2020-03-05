<?php
class DistanceCalculator
{
    // Latitude and longtitudes  properties
    public $lat1 = 0;
    public $long1 = 0;
    public $lat2 = 0;
    public $long2 = 0;
    public $type = 'mile';
    public $show_type = true;
    
    // Method to get the distance
    public function getDistance(){
    $theta = $this->long1 - $this->long2;
    $miles = (sin(deg2rad($this->lat1)) * sin(deg2rad($this->lat2))) + (cos(deg2rad($this->lat1)) * cos(deg2rad($this->lat2)) * cos(deg2rad($theta)));
    $miles = acos($miles);
    $miles = rad2deg($miles);
    $miles = $miles * 60 * 1.1515;
    $feet = $miles * 5280;
    $yards = $feet / 3;
    $kilometers = $miles * 1.609344;
    $meters = $kilometers * 1000; 
    if($this->type == 'mile'){
        $return  = $miles;
    }else if($this->type == 'km'){
        $return  = $kilometers;
    }else if($this->type == 'meter'){
        $return  = $meters;
    }else if($this->type == 'yard'){
        $return  = $yards;
    }else if($this->type == 'feet'){
        $return  = $feet;
    }else{
        $return = $miles;
    }       
        if($this->show_type){
            return number_format($return,4).' '.ucfirst($this->type).'s';
        }else{
            return number_format($return,4);
        }
    }
    
}
?>