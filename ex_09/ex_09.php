<?php
function print_movie_from($nbr) {
switch ($nbr) {
case 3 :
echo "The Three Brothers";
break;
case 6:
echo "The Sixth Sense";
break;
case 23:
echo "The Number 23";
break;
case 28:
echo "28 Days Later";
break;
default:
echo "I don’t know.";
break;
}
echo "\n";
}
?>
