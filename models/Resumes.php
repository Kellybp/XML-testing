<?php
	$Resume = ("xml/Resumes.xml");
	$xmlResume = new DOMDocument();
	$xmlResume->load($Resume);
	$Resume = $xmlResume->getElementsByTagName('resumes');
?>