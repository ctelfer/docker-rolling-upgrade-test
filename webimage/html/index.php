<?php

//Stream infinite data
if (! $_GET['stream']) {
		printf('Servicer hostname: %s'.PHP_EOL, gethostname());
		exit();
}
$c = 0;
while(true) {
		printf('c = %s, Server hostname: %s'.PHP_EOL, $c++, gethostname());
		usleep(250);
}
