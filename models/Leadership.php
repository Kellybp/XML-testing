<?php
	$Leader = ("xml/Leadership.xml");
	$xmlleader = new DOMDocument();
	$xmlleader->load($Leader);
	$Leader = $xmlleader->getElementsByTagName('leadership');
?>