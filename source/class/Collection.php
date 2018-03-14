<?php
namespace Phi\Traits;



Trait Collection
{

    use ArrayAccess;


	public function setVariable($name, $value) {
		$this->offsetSet($name, $value);
		return $this;
	}


	public function getVariable($name) {
	    return $this->offsetGet($name);
	}


	public function getVariables() {
		return $this->getAll();
	}


	public function setVariables(array $values) {
		foreach ($values as $name=>$value) {
			$this->setVariable($name, $value);
		}
		return $this;
	}





}