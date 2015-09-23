This is a PHP class to solve Man, Goat, wolf and Salad problem.


You can move Objects one at a time,
empty Object means ($obj=="") or interface $this->On_boat("") Means only man on the boat.

to get on the otherside successfull

$boat=new On_Boat();
$boat->move("goat");
$boat->move("");
$boat->move("salad");
$boat->move("goat");
$boat->move("wolf");
$boat->move("");
$boat->move("goat");


Cheers!