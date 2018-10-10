 <?php
    function readini($sFilename, $sSection, $sKey) {
    	$sFileHandle = fopen($sFilename, "r");
    	if (!$sFileHandle) {
    		die("<b>Error:</b> Unable to open file ".$sFilename.".");
    	}
    	if (filesize($sFilename) > 0) {
    		$sFileContents = fread($sFileHandle, filesize($sFilename));
    	}
    	if ($sFileContents === FALSE) {
    		die("<b>Error:</b> Unable to read data from ".$sFilename.".");
    	}
    	$sFileData = preg_split("/\r?\n/", $sFileContents);
    	$sectionStart = -1;
    	$sectionEnd = -1;
    	$returnLine = -1;
    	for ($i = 0; $i < count($sFileData); $i++) {
    		$x = strpos($sFileData[$i], "[".$sSection."]");
    		$y = strpos($sFileData[$i], "[");
    		if ($y == 0 && $y !== FALSE && $sectionStart >= 0 && $sectionEnd == -1) {
    			$sectionEnd = ($i - 1);
    		}
    		$z = explode("=", $sFileData[$i]);
    		if (count($z) >= 2) {
    			if (trim($z[0]) == $sKey && $sectionStart >= 0 && $sectionEnd == -1 && substr($sFileData[$i], 0, 1) != "") {
    				$returnLine = $i;
    			}
    		}
    		if ($x == 0 && $x !== FALSE && $sectionStart = -1) {
    			$sectionStart = ($i+1);
    		}
    	}
    	if ($sectionStart == -1) {
    		return "";
    	}
    	if ($sectionEnd == -1) {
    		$sectionEnd = (count($sFileData)-1);
    	}
    	if ($returnLine == -1) {
    		return "";
    	}
    	return trim(substr($sFileData[$returnLine], (strpos($sFileData[$returnLine], "=")+1)));
    }
    function writeini($sFilename, $sSection, $sKey, $sValue) {
    	$sFileHandle = fopen($sFilename, "r");
    	if (!$sFileHandle) {
    		die("<b>Error:</b> Unable to open ".$sFilename.".");
    	}
    	if (filesize($sFilename) > 0) {
    		$sFileContents = fread($sFileHandle, filesize($sFilename));
    	}
    	if ($sFileContents === FALSE) {
    		die("<b>Error:</b> Unable to read data from ".$sFilename.".");
    	}
    	$sFileData = preg_split("/\r?\n/", $sFileContents);
    	$sectionStart = -1;
    	$sectionEnd = -1;
    	$returnLine = -1;
    	for ($i = 0; $i < count($sFileData); $i++) {
    		$x = strpos($sFileData[$i], "[".$sSection."]");
    		$y = strpos($sFileData[$i], "[");
    		if ($y == 0 && $y !== FALSE && $sectionStart >= 0 && $sectionEnd == -1) {
    			$sectionEnd = ($i - 1);
    		}
    		$z = explode("=", $sFileData[$i]);
    		if (count($z) >= 2) {
    			if ($z[0] == $sKey && $sectionStart >= 0 && $sectionEnd == -1 && substr($sFileData[$i], 0, 1) != ";") {
    				$returnLine = $i;
    			}
    		}
    		if ($x == 0 && $x !== FALSE && $sectionStart == -1) {
    			$sectionStart = ($i + 1);
    		}
    	}
    	if ($sectionEnd == -1) {
    		$sectionEnd = (count($sFileData)-1);
    	}
    	$newfile = "";
    	if ($returnLine > -1) {
    		$sFileData[$returnLine] = $sKey."=".$sValue;
    		for ($i = 0; $i < count($sFileData); $i++) {
    			$newfile .= $sFileData[$i]."\r\n";
    		}
    	}
    	else {
    		if ($sectionStart > -1) {
    			for ($i = 0; $i < count($sFileData); $i++) {
    				if ($i == $sectionEnd) {
    					$newfile .= $sKey."=".$sValue."\r\n";
    				}
    				$newfile .= $sFileData[$i]."\r\n";
    			}
    		}
    		else {
    			for ($i = 0; $i < count($sFileData); $i++) {
    				$newfile .= $sFileData[$i]."\r\n";
    			}
    			$newfile .= "[".$sSection."]\r\n".$sKey."=".$sValue."\r\n";
    		}
    	}
    	fclose($sFileHandle);
    	$sFileHandle = fopen($sFilename, "w");
    	if (!$sFileHandle) {
    		die("<b>Error:</b> Unable to open file ".$sFilename." with write access.");
    	}
    	$sFileWrite = fwrite($sFileHandle, trim($newfile));
    	if ($sFileWrite === FALSE) {
    		die("<b>Error:</b> Unable to write data to file ".$sFilename.".");
    	}
    }
    ?>