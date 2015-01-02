<?php
  if (strpos($_GET['path'],'../') !== false) {
    echo "No way, biaaach!";
  } else {
    unlink("playlist/".$_GET['path']);
    echo "Removed playlist/".$_GET['path'];
  }
?>
