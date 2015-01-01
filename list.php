<?php
$dir = 'playlist';
$files = scandir($dir);
echo "<table class=\"ex1\" style=\"width:50%\"><tr class=\"ex1\"><td class=\"ex1\">";
foreach ($files as &$value) {
  if($value !== "." && $value !== "..") {
    echo "<a  onclick=\"onClick('playlist/".$value."')\" href=\"#\" style=\"width:80%\" class=\"myButton\">".$value."</a>\n";
    echo "<a  onclick=\"onClickRemove('playlist/".$value."')\" href=\"#\" style=\"width:15%\" class=\"myButton2\">DELETE</a>\n";
  }
}
echo "</td></tr></table>";
?>
