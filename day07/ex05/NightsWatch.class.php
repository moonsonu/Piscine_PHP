<?php
class NightsWatch implements IFighter{
	private $vars = array();
	public function recruit($i) {
		$this->vars[] = $i;
	}
	function fight() {
		foreach($this->vars as $i) {
			if (method_exists(get_class($i), 'fight'))
				$i->fight();
		}
	}
}
?>
