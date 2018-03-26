<?php 

  $names = array('Brad', 'John', 'Jane', 'Timi');
  $count = 1;

  while($count < 100) {
    echo "<li>$count</li>";
    $count++;
  }

?>

<p>Hi, my name is <?php echo $names[0] ?>.</p>