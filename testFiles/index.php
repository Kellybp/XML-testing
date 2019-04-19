<?php
	include("models/header.php");
	include("models/billy.php");
	include("models/grant.php");
	include("models/sarah.php");
	include("models/george.php");
?>

<div class="container">	
	<div id="Billy">
		<h2>&f1;</h2>
		<?php 
		$rowCounter = 0;
		$rowStart = 1;
		for ($i=0; $i< $billy->length; $i++): ?>
			<div class="row">
		    <div class="col s12">
		      <div class="card blue-grey darken-1">
		        <div class="card-content white-text">
		          <span class="card-title"><?php echo $billy->item($i)->getElementsByTagName("heading")->item(0)->childNodes->item(0)->nodeValue; ?></span>
		          <p><?php echo $billy->item($i)->getElementsByTagName("body")->item(0)->childNodes->item(0)->nodeValue; ?></p>
		        </div>
		        <div class="card-action">
		         	<span><?php echo $billy->item($i)->getElementsByTagName("from")->item(0)->childNodes->item(0)->nodeValue; ?></span>
		        </div>
		      </div>
		    </div>
		  </div>			
		<?php endfor;?>
	</div>
	<div id="Grant">
		<h2>&f2;</h2>
		<?php 
		$rowCounter = 0;
		$rowStart = 1;
		for ($i=0; $i< $grant->length; $i++): ?>
			<div class="row">
		    <div class="col s12">
		      <div class="card blue-grey darken-1">
		        <div class="card-content white-text">
		          <span class="card-title"><?php echo $grant->item($i)->getElementsByTagName("heading")->item(0)->childNodes->item(0)->nodeValue; ?></span>
		          <p><?php echo $grant->item($i)->getElementsByTagName("body")->item(0)->childNodes->item(0)->nodeValue; ?></p>
		        </div>
		        <div class="card-action">
		         	<span><?php echo $grant->item($i)->getElementsByTagName("from")->item(0)->childNodes->item(0)->nodeValue; ?></span>
		        </div>
		      </div>
		    </div>
		  </div>			
		<?php endfor;?>
	</div>
	<div id="Sarah">
		<h2>&f3;</h2>
		<?php 
		$rowCounter = 0;
		$rowStart = 1;
		for ($i=0; $i< $sarah->length; $i++): ?>
			<div class="row">
		    <div class="col s12">
		      <div class="card blue-grey darken-1">
		        <div class="card-content white-text">
		          <span class="card-title"><?php echo $sarah->item($i)->getElementsByTagName("heading")->item(0)->childNodes->item(0)->nodeValue; ?></span>
		          <p><?php echo $sarah->item($i)->getElementsByTagName("body")->item(0)->childNodes->item(0)->nodeValue; ?></p>
		        </div>
		        <div class="card-action">
		         	<span><?php echo $sarah->item($i)->getElementsByTagName("from")->item(0)->childNodes->item(0)->nodeValue; ?></span>
		        </div>
		      </div>
		    </div>
		  </div>			
		<?php endfor;?>
	</div>
	<div id="George">
		<h2 src="f4">&f4;</h2>
		<?php 
		$rowCounter = 0;
		$rowStart = 1;
		for ($i=0; $i< $george->length; $i++): ?>
			<div class="row">
		    <div class="col s12">
		      <div class="card blue-grey darken-1">
		        <div class="card-content white-text">
		          <span class="card-title"><?php echo $george->item($i)->getElementsByTagName("heading")->item(0)->childNodes->item(0)->nodeValue; ?></span>
		          <p><?php echo $george->item($i)->getElementsByTagName("body")->item(0)->childNodes->item(0)->nodeValue; ?></p>
		        </div>
		        <div class="card-action">
		         	<span><?php echo $george->item($i)->getElementsByTagName("from")->item(0)->childNodes->item(0)->nodeValue; ?></span>
		        </div>
		      </div>
		    </div>
		  </div>			
		<?php endfor;?>
	</div>
</div>
<?php include("models/footer.php"); ?>