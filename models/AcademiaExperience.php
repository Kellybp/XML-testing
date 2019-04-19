<?php
	$AE = ("xml/AcademiaExperience.xml");
	$xmlAE = new DOMDocument();
	$xmlAE->load($AE);
	$AE = $xmlAE->getElementsByTagName('AExperience');
?>