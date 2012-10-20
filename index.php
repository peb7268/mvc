<?php 
// Get the requested file (ignore any paths)
$page = basename($_GET['page']);
// Replace any extension
$ext = pathinfo($page, PATHINFO_EXTENSION);
$page = str_replace('.' .$ext, '', $page);

// Check if we need a model
if ($page == 'user-account') {
  // Include the model
  //require_once 'user-model.php';
}
// Include the view
echo $page . '-view.php';
//require_once $page . '-view.php';
echo "index.php?page=$1&action=$2&id=$3&param=$4<br>";
var_dump($_GET); 