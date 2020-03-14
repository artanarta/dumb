<?php 
$x1='dumb';
$x2='ways';
$x3='the';
$x4='best';

$name = "dumbways";
  
if (strpos( $name, $x1) !== FALSE)
  { 
  echo "$x1 => true <br>"; 
  } 
else
  { 
  echo "$x1 => false <br>"; 
  }  
if (strpos( $name, $x2) !== FALSE)
  { 
  echo "$x2 => true <br>"; 
  } 
else
  { 
  echo "$x2 => false <br>"; 
  } 
if (strpos( $name, $x3) !== FALSE)
  { 
  echo "$x3  => true <br>"; 
  }
else
  { 
  echo "$x3  => false <br>"; 
  }
if (strpos( $name, $x4) !== FALSE)
  { 
  echo "$x4  => true <br>"; 
  } 
else
  { 
  echo "$x4  => false <br>"; 
  } 

?> 