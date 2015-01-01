<?php
$current = file_get_contents('./points/frequency', FILE_USE_INCLUDE_PATH);
echo "<table class=\"ex1\" style=\"width:50%\"><tr class=\"ex1\"><td class=\"ex1\">
<input id=\"freq\" type=\"text\" name=\"frequency\" value=\"".$current."\">
<input type=\"submit\" value=\"SET\" onclick=\"onClickF()\"></td></tr></table>";
?>
