<?php 
	$Education = ("xml/Education.xml");
	$xmlEducation = new DOMDocument();
	$xmlEducation->load($Education);
	$Education = $xmlEducation->getElementsByTagName('school');
?>