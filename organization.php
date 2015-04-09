<?php
        $page_title="Organization Committee";
        include("include/header.php");
?>

<h2 class="hcls">Organization Committee</h2>

<ul data-role="listview" data-inset="true" data-theme="d" data-content-theme="d">

	<li data-role="list-divider">General Chairs</li>
	<?php
		add_listitem("Arjuna Sathiaseelan", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~as2330/");
		add_listitem("Marco Zennaro", "ICTP", "");
	?>

	<li data-role="list-divider">TPC Chairs</li>
	<?php
		add_listitem("Elizabeth Belding", "University of California, Santa Barbara, USA", "https://www.cs.ucsb.edu/~ebelding/Home.html");
		add_listitem("Jay Chen", "New York University, USA", "");
	?>
	
	<li data-role="list-divider">Local Arrangements Chairs</li>
	<?php
		add_listitem("Gareth Tyson", "Queen Mary University of London, UK", "http://www.eecs.qmul.ac.uk/~tysong/");
	?>
	
	<li data-role="list-divider">Web &amp; Publicity Chair</li>
	<?php
		add_listitem("Liang Wang", "University of Cambridge, UK", "http://cs.helsinki.fi/liang.wang");
	?>
	
	<li data-role="list-divider">TPC Members</li>
	<?php
		add_listitem("TBD", "", "");
	?>
	
</ul>

<?php
    include ("include/footer.php");
?>