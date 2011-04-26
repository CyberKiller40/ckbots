#!/usr/bin/php -q

<?php

//fwrite(STDERR, $line . "\n");

fwrite(STDOUT, "RobotOption USE_NON_BLOCKING 1\n");

do
{
	$line=trim(fgets(STDIN));
	fwrite(STDERR, $line . "\n");
}
while($line!="Initialize 1");

fwrite(STDOUT, "Name CKbot01\n");
fwrite(STDOUT, "Colour 0000FF 0000FE\n");

do
{
	$line=trim(fgets(STDIN));
	fwrite(STDERR, $line . "\n");
}
while($line!="GameStarts");

	while(($line!="GameFinishes")||($line=="Dead")||($line=="ExitRobot"))
	{
		fwrite(STDOUT, "Accelerate 10\n");
		sleep(1);
		for($i=0;$i<3;$i++)
		{
			fwrite(STDOUT, "Shoot 10\n");
			fwrite(STDOUT, "RotateAmount 2 15 0.1\n");
		}
		for($i=0;$i<3;$i++)
		{
			fwrite(STDOUT, "Shoot 10\n");
			fwrite(STDOUT, "RotateAmount 2 15 -0.1\n");
		}
		for($i=0;$i<3;$i++)
		{
			fwrite(STDOUT, "Shoot 10\n");
			fwrite(STDOUT, "RotateAmount 2 15 -0.1\n");
		}
		for($i=0;$i<3;$i++)
		{
			fwrite(STDOUT, "Shoot 10\n");
			fwrite(STDOUT, "RotateAmount 2 15 0.1\n");
		}
		
		fwrite(STDOUT, "RotateAmount 1 15 1.2\n");

		$line=trim(fgets(STDIN));
		fwrite(STDERR, $line . "\n");
	}

?>
