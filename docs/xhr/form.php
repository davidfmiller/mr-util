<?php

echo '<pre>';
if (count($_GET)) { 
  print_r($_GET);
}
if (count($_POST)) { 
  print_r($_POST);
}
echo '</pre>';
?>