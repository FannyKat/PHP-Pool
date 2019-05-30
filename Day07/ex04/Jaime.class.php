<?php

		Class Jaime extends Lannister
		{
			public function wants($obj)
			{
				if (get_class($obj) === 'Tyrion')
					print "Not even if I'm drunk !";
				else if (get_class($obj) === 'Sansa')
					print "Let's do this.";
				else if (get_class($obj) === 'Cersei')
					print "With pleasure, but only in a tower in Winterfell, then.";
			}
		}
?>
