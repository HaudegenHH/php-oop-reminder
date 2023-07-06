<?php

require_once 'BaseClass.php';

class SubClass extends BaseClass
{
  public function getParentProtectedProperty(): string
  {
  	// return $this->protectedProperty;
  	return $this->getProtectedProperty();
  }

  public function getParentPrivateProperty() 
  {
    return $this->privateProperty;
  }

}