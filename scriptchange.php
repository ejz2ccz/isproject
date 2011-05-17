<html>
<body>

<?php

function script_change($script, $src)
{
	echo '<script type=' . $script . '  src= ' . $src . '></script>';
}

script_change("javascript","myfile");
echo "script ran well";
?>
</body>
</html>
