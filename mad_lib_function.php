<?php
function generateStory($singular_noun, $verb, $color, $distance_unit)
{
  $story = "\nThe $singular_noun are lovely, $color, and deep.\nBut I have promises to keep,\nAnd $distance_unit to go before I $verb,\nAnd $distance_unit to go before I $verb.\n";
  
  return $story;
}

echo generateStory("Shelf", "run", "purple", "20 miles");
echo generateStory("Fridge", "catch", "yellow", "50 yards");
echo generateStory("Table", "swim", "blue", "100 light years");




?>
