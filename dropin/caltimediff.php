<?php

$difference = abs($date2 - $date1);

$dyears = floor($difference / (365*60*60*24));


$dmonths = floor(($difference - $dyears * 365*60*60*24)
								/ (30*60*60*24));


$ddays = floor(($difference - $dyears * 365*60*60*24 -
			$dmonths*30*60*60*24)/ (60*60*24));


$dhours = floor(($difference - $dyears * 365*60*60*24
		- $dmonths*30*60*60*24 - $ddays*60*60*24)
									/ (60*60));


$dminutes = floor(($difference - $dyears * 365*60*60*24
		- $dmonths*30*60*60*24 - $ddays*60*60*24
							- $dhours*60*60)/ 60);

$dseconds = floor(($difference - $dyears * 365*60*60*24
		- $dmonths*30*60*60*24 - $ddays*60*60*24
				- $dhours*60*60 - $dminutes*60));

?>
