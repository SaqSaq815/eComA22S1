<?php
	// include() try to include and warn on failure
	// include_once() try to include(if not previously included) and warn oon failure
	// require() try to include and halt on failure
	// require_once() try to include (if not previously included) and halt on failure
	if(!isset($_GET['url'])){
		header('location:/');
		exit();
	}
	require("app/core/init.php");
	new app\core\App();
