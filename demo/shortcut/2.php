<?php
$Shortcut = "[InternetShortcut]
URL=http://www.521php.com/
IDList=
[{000214A0-0000-0000-C000-000000000046}]
Prop3=19,2
";
Header("Content-type: application/octet-stream; charset=utf-8");
header("Content-Disposition: attachment; filename=�Ŵ泬���˼�������.url;");
echo $Shortcut;
?>