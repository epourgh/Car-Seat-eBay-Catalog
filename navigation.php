<?PHP
  include './url.php';
?>
<?PHP echo $url; ?>
<!-- NAVIGATION -->
<div class="navigation">
  <div class="navigation-content">
	<h3 class="blue">Menu</h3>
	<ul class="navigation-menu">
	  <li class="blue"><a href="./index.html" class="active">Home</a></li>
	  <li><b>CARS:</b></li>
	  <li><a href="<?PHP echo $url; ?>/index.html#chevrolet"><i class="blue fa fa-circle"></i> Chevrolet</a></li>
	  <li><a href="<?PHP echo $url; ?>/index.html#dodge"><i class="blue fa fa-circle"></i> Dodge</a></li>
	  <li><a href="<?PHP echo $url; ?>/index.html#ford"><i class="blue fa fa-circle"></i> Ford</a></li>
	  <li><a href="<?PHP echo $url; ?>/index.html#gmc"><i class="blue fa fa-circle"></i> GMC</a></li>
	  <li><a href="<?PHP echo $url; ?>/index.html#hummer"><i class="blue fa fa-circle"></i> Hummer</a></li>
	  <li><a href="<?PHP echo $url; ?>/index.html#jeep"><i class="blue fa fa-circle"></i> Jeep</a></li>
	  <li><a href="<?PHP echo $url; ?>/index.html#lincoln"><i class="blue fa fa-circle"></i> Lincoln</a></li>
	</ul>
	<h3 class="blue">More</h3>
	<ul class="navigation-menu">
	  <li><a href="<?PHP echo $url; ?>/navbar/about.php">About Us</a></li>
	  <li><a href="<?PHP echo $url; ?>/navbar/contact.php">Contact</a></li>
	  <li><a href="<?PHP echo $url; ?>/navbar/services.php">Services</a></li>
	  <li><a href="<?PHP echo $url; ?>/navbar/FAQ.php">FAQ</a></li>
	</ul>
  </div>
</div>
