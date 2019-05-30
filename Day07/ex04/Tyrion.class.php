<?php

		Class Tyrion extends Lannister
		{
				public function wants($obj)
				{
						if (get_parent_class($obj) !== 'Lannister')
							print "Let's do this.";
						else	
							print "Not even if I'm drunk !";
				}
		}
?>
