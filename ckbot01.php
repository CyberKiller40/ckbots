#!/usr/bin/php -q

<?php

//fwrite(STDERR, $line . "\n");

fwrite(STDOUT, "RobotOption USE_NON_BLOCKING 0\n");

do
{
	$line=trim(fgets(STDIN));
	fwrite(STDERR, $line . "\n");
}
while($line!="Initialize 1");

	fwrite(STDOUT, "Name CKbot01\n");
	fwrite(STDOUT, "Colour 0000FF 0000FE\n");

	while(($line!="GameFinishes")||($line=="Dead")||($line=="ExitRobot"))
	{
		fwrite(STDOUT, "Accelerate 10\n");
		sleep(1);
		fwrite(STDOUT, "Shoot 10\n");
		fwrite(STDOUT, "RotateAmount 7 15 1\n");

		$line=trim(fgets(STDIN));
		fwrite(STDERR, $line . "\n");
	}

?>
