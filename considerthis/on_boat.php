<?php
class On_Boat{

private $state;
private $ini="man, wolf, goat, salad, start";

public function __construct(){
	
	$this->state=$this->ini;
}

public function move($obj){
	
	$move2="man, goat, end";	
	$move3="man, wolf, salad, start";
	$move4="man, goat, salad, end";	
	$move5="man, goat, wolf, end";
	$move6="man, wolf, salad, end";
	$move7="man,goat, start";
	$move8="man, wolf, goat, salad, end";
	
	switch ($this->state){
		case  $this->ini:
			
			/* $obj==''; means only man on boat, no item is taken */
			
			if($obj==''){
				echo "Nothing is move";
				$this->state=$this->ini;
			}
			elseif ($obj=='goat'){
				echo "goat is moved <br/>",
				$this->state=$move2;
			}
			else {
				echo "unsuccessful move";
			}
			break;
		case $move2:
			if($obj==''){
				echo "man is return <br/>";
			}
			elseif($obj=='goat'){
				echo "no point to bring the goatback";
				$this->state=$this->ini;
			}
			else{
				echo "invalid move!";
			}
			break;
		case $move3:
			if($obj==''){
				echo "Please pick one object with you";
				$this->state=$move3;
				
			}
			elseif($obj=="salad"){
				echo "Salad is moved<br/>";
				$this->state=$move4;
				
			}
			else{
				echo "wolf is moved<br/>";
				$this->state=$move5;
			}
		
		break;
		case $move4:
			if($obj==''){
				echo "goat eats the salad<br/>";
				$this->state=$move4;
				
			}
			elseif($obj=="salad"){
				echo "unnecessary move<br/>";
				$this->state=$move4;
				
			}
			elseif($obj=='goat'){
				echo "goat is moved to start point<br/>";
				$this->state=$move5;
			}
		
		break;
		case $move5:
			if($obj==''){
				echo "wolf eats goat<br/>";
				$this->state=$move5;
				
			}
			elseif($obj=="wolf"){
				echo "unnecessary move<br/>";
				$this->state=$move5;
				
			}
			elseif($obj=='goat'){
				echo "goat is moved to start point<br/>";
				$this->state=$move6;
			}
			else{
				echo "invalid move";
			}
		
		break;
		case $move6:
			if($obj==''){
				echo "goat eats salad<br/>";
				$this->state=$move6;
				
			}
			elseif($obj=="goat"){
				echo "unnecessary move<br/>";
				$this->state=$move6;
				
			}
			elseif($obj=='salad'){
				echo "salad is moved to start point<br/>";
				$this->state=$move7;
			}
			else{
				echo "invalid move";
			}
		
		break;
		case $move7:
			if($obj==''){
				echo "unnecessary move<br/>";
				$this->state=$move6;
				
			}
			elseif($obj=="goat"){
				echo "great move you successfully move all the items!<br/>";
				$this->state=$move8;
				
			}
			
			else{
				echo "invalid move";
			}
		
		break;
			
	}
	}
}

$boat=new On_Boat();
$boat->move("goat");
$boat->move("");
$boat->move("salad");
$boat->move("goat");
$boat->move("wolf");
$boat->move("");
$boat->move("goat");

?>




