#!/usr/bin/php -q

<?php

//fwrite(STDERR, $line . "\n");

fwrite(STDOUT, "RobotOption USE_NON_BLOCKING 0\n");

do
{
	$line=trim(fgets(STDIN));
	fwrite(STDERR, $line . "\n");
}
while(substr($line,0,10)!="Initialize");

if($line=="Initialize 1")
{
	fwrite(STDERR, "This should set the name :-P\n");
	fwrite(STDOUT, "Name CKbot01\n");
	fwrite(STDOUT, "Colour 0000FF 0000FE\n");
}

do
{
	$line=trim(fgets(STDIN));
	fwrite(STDERR, $line . "\n");
}
while($line!="GameStarts");

	while(($line!="GameFinishes")||($line!="Dead")||($line!="ExitRobot"))
	{
		fwrite(STDOUT, "Accelerate 10\n");
		sleep(1);
		fwrite(STDOUT, "Shoot 10\n");
		
		$kat=((rand(0,60))-30)/10;
		
		fwrite(STDOUT, "RotateAmount 1 15 " . $kat . "\n");

		$line=trim(fgets(STDIN));
		fwrite(STDERR, $line . "\n");
	}

?>
