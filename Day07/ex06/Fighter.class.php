<?php
		abstract class Fighter
		{
			abstract function fight($k);
			public $type_soldier;
		
			public function __construct($obj)
			{
				$this->fighter = $obj;
			}

			public function fighterType()
			{
				return ($this->fighter);
			}	
		}

?>
