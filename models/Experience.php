<?php
	$EXP = ("xml/Experience.xml");
	$xmlEXP = new DOMDocument();
	$xmlEXP->load($EXP);
	$EXP = $xmlEXP->getElementsByTagName('experience');
?>