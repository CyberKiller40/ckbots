#!/usr/bin/php -q

<?php

fwrite(STDOUT, "RobotOption USE_NON_BLOCKING 0\n");

$line=trim(fgets(STDIN));

while($line!="GameFinishes")
{
	$line=trim(fgets(STDIN));
	
	if($line=="Initialize 1")
	{
		fwrite(STDOUT, "Name CKbot01\n");
		fwrite(STDOUT, "Colour 0000FF 0000FE\n");
	}
	else
	{
		//dunno ;-)
	}

fwrite(STDOUT, "Accelerate 10\n");
fwrite(STDOUT, "Shoot 10\n");

$line=trim(fgets(STDIN));

}


?>
