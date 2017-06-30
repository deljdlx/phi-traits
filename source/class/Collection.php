<?php
namespace Phi\Traits;



Trait Collection
{

    use ArrayAccess;


	public function setVariable($name, $value) {
		$this->arrayAccessValues[$name]=$value;
		return $this;
	}


	public function getVariable($name) {
		if(isset($this->arrayAccessValues[$name])) {
			return $this->arrayAccessValues[$name];
		}
		else {
			return null;
		}
	}


	public function getVariables() {
		return $this->arrayAccessValues;
	}


	public function setVariables(array $values) {
		foreach ($values as $name=>$value) {
			$this->setVariable($name, $value);
		}
		return $this;
	}





}