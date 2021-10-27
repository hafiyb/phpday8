<?php
    
$name = ['hafiy','zahin','arjun','amal','asy'];
$colours = ['green','blue','black'];

class invoke{

}

class students extends invoke{
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

}

class bag extends students{

   

}

class colour extends bag{
    public function setColour($colour){
        $this->colour = $colour;
    }

    public function getColour(){
        return $this->colour;
    }
}

$person = array();

for($i = 0 ; $i < 5; $i++){
    $person[$i] = new colour;
    $person[$i]->setName($name[$i]);
}

foreach($person as $persons){
    $persons->setColour($colours[rand(0,2)]);
    if($persons->getColour() == 'black' ){
        echo $persons->getName();
        echo '<br>';
    }
    
}
?>