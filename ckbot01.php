#!/usr/bin/php -q

<?php

fwrite(STDOUT, "RobotOption USE_NON_BLOCKING 0\n");

$line=trim(fgets(STDIN));

	fwrite(STDOUT, "Print This should set the name CKbot01\n");
	fwrite(STDOUT, "Name CKbot01\n");
	fwrite(STDOUT, "Colour 0000FF 0000FE\n");

	while(($line!="GameFinishes")||($line=="Dead"))
	{

		fwrite(STDOUT, "Accelerate 10\n");
		sleep(2);
		fwrite(STDOUT, "Shoot 10\n");
		fwrite(STDOUT, "RotateAmount 7 15 1\n");

		$line=trim(fgets(STDIN));
	}

?>