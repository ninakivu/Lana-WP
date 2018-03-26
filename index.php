<?php 

  $names = array('Brad', 'John', 'Jane', 'Timi');
  $count = 0;
  
  while($count < count($names)) {
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
  }

?>