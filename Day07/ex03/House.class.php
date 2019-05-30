<?php
		
		abstract Class House 
		{
			abstract public function getHouseName();
			abstract public function getHouseSeat();
			abstract public function getHouseMotto();
		
			public function introduce()
			{
				print ("House ".$this->getHouseName());
				print (" of ".$this->getHouseSeat());
				print (" : \"".$this->getHouseMotto()."\"". PHP_EOL);
			}	
		}
?>
