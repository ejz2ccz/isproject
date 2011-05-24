
<html>
<body>

<?php
$attributes = array();

$tag="form ";
$attributes = array("action" => "some_action", "method" => "some_method", "name" => "somename",
					"id" => "some_id", "event" => "some_event", "style" => "some_style", "class" => "some_class");
$content="just say something";
	echo tag($tag, $attributes, $content);
function tag($tag, $attributes, $content){

	$output='<' . $tag;
	
	foreach($attributes as $key=>$value){
		$output .= '' . $key . '="' . $value . '" ';
	}
		$output .= '>' . $content . '</' . $tag . '>';
	print_r($attributes);
	return $output;
}
?>
</br>
</body>
</html>
