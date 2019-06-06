<!-- PUBILIC -->





<?php
// class PublicClass{
// 	//properties and methods
// 	//protected works with METHODS
// 	private $showClass = "this is an extension from <em> the first Class changed to VS Code </em>";

// 	public function dname(){
// 		return $this->showClass;
// 	}
// }

//protected cn be access with a function or method in d other class
class ProtectClassParent{
	protected $protect = 'This is a protected class';
	
}

//we can only access private here
class PrivateClassBaba{
	private $Priv = 'This is a damn privte Classsssssss';
	//method or function to access it
	public function priv(){
		return $this->Priv;
	}

}



















?>