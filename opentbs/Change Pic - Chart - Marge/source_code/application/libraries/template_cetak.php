<?php
	// load the TinyButStrong library
	if (version_compare(PHP_VERSION,'5')<0) {
		include_once('tbs_class.php'); // TinyButStrong template engine for PHP 4
	} else {
		include_once('tbs_class_php5.php'); // TinyButStrong template engine
	}

	// Excel plug-in for TBS 
	include('tbs_plugin_opentbs.php');
	//require_once(dirname(__FILE__).'\html2pdf.php');
	class template_cetak{
		var $type="";
		function __construct($type=""){
			$this->type = $type;
		}
		function _templateExist($templateName=""){
			$isExist = file_exists($templateName);
			if (!$isExist) {
				show_error('Template tidak ada ('.basename ($templateName).')');
			}
			return $isExist;
		}
		function createNew ($type,$templateUri,$orientation = 'P', $format = 'A4', $langue='fr', $unicode=true, $encoding='UTF-8', $marges = array(5, 5, 5, 8)){
			
			if(!empty($type)){
				$this->type=$type;
			}
			if($this->type=='pdf'){
				return new HTML2PDF($orientation, $format, $langue,$unicode, $encoding, $marges);
			}	
			else if ($this->type == "doc"){
				return new clsTinyButStrong;
			}
			else if($this->type == "docx"){
				$TBS = new clsTinyButStrong;
				$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load OpenTBS plugin
				$this->_templateExist($templateUri);
				$TBS->LoadTemplate($templateUri);
				return $TBS;
			}
			else if($this->type == "xls"){
				return new clsTinyButStrong;
			}
			else if($this->type == "xlsx"){
				$TBS = new clsTinyButStrong;
				$TBS->Plugin(TBS_INSTALL, OPENTBS_PLUGIN); // load OpenTBS plugin
				$this->_templateExist($templateUri);
				$TBS->LoadTemplate($templateUri);
				return $TBS;
				
			}
			else if($this->type == "xls"){
				return new clsTinyButStrong;
			}	
			else {
				return new clsTinyButStrong;
			}			
		}
	}
?>