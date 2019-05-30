<?php
		Class NightsWatch implements IFighter
		{
			private 	$tab;

			public function recruit($obj)
			{
				if ($obj instanceof IFighter)
					$this->tab[] = $obj;
			}
			public function fight()
			{
				foreach ($this->tab as $key => $value)
					$value->fight();
			}
		}
?>
