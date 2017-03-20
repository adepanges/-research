<?php
	
	if (version_compare(PHP_VERSION,'5')<0) {
		include_once('tbs_class.php');
	} else {
		include_once('tbs_class_php5.php');
	}

	include('tbs_plugin_opentbs.php');

	class opentbs {
		var $TBS = false;

		function __construct()
		{
			$this->TBS = new clsTinyButStrong;
		}

		function get()
		{
			return $this->TBS;
		}
	}