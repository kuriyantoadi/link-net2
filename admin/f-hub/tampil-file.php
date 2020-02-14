<?php
  $cek = '../f-fo/upload/';
  $dir = "../f-fo/upload/*";

    // Open a known directory, and proceed to read its contents
    foreach(glob($dir.$node_id.'-'.'*') as $file)
    {
      echo "filename: $file <br />";
      echo "<a href=''$file'>$file</a>";
    }
?>
