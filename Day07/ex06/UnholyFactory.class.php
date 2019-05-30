<?php
	class UnholyFactory
	{
		private $tab = array();

		public function 	absorb($obj)
		{
			if ($obj instanceof Fighter)
			{
				if (in_array($obj, $this->tab))
					print "(Factory already absorbed a fighter of type " . $obj->fighterType() . ")". PHP_EOL;
				else
				{
					$this->tab[] = $obj;
					print "(Factory absorbed a fighter of type " . $obj->fighterType() . ")". PHP_EOL;
				}
			}
			else	
				print "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
		}
		
		public function 	fabricate($rf)
		{
			foreach ($this->tab as $key => $value)
			{
				if (get_class($value) === ucfirst(preg_replace('/\s/', '', $rf)))
				{
					$clone = clone $this->tab[$key];
					print "(Factory fabricates a fighter of type ". $rf . ")" . PHP_EOL;
					return ($clone);
				}
			}
			print "(Factory hasn't absorbed any fighter of type " . $rf . ")" . PHP_EOL;
		}
	}	
?>
