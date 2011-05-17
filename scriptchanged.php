nterface typeSrc
{
	public function getType();
	public function setType();
	public function getSrc();
	public function setSrc();
}

class changeable implements typeSrc
{
	private $type;
	private $src;
	
	public function setType($type){
		this->type = $type;
	}
	public function getType(){
		return $this->type;
	}
	public function setSrc($src){
		this->src = $src;
	}
	public function getSrc(){
		return $this->src;
	}
}

$a = new changeable();
$a->setType('text/javaScript');
$a->setSrc('js/myScript.js');
echo '<script type=' . $a->getType . 'src= ' . $a->getSrc . '></script>';
?>
