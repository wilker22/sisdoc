<?php
//header('Content-Disposition: attachment; filename="downloaded.pdf"');
//echo $content_for_layout;

header("Content-type: application/pdf charset=utf-8");
echo $content_for_layout; 
?>
