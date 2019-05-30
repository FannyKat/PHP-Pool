<?php
		class Targaryen
		{
			public function		resistsFire()
			{
					if ($this->resistsFire)
						return True;
			}
			public function		getBurned()
			{
					if ($this->resistsFire() === True)
						return ("emerges naked but unharmed");
					return ("burns alive");
			}

		}
?>
