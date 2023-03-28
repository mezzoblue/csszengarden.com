<?php if(isset($bottomNav)) { ?>
  <ul class="design-nav">
  <?php

    // bring global variables in scope
    global $totalDesigns;


  	$numPages = floor($totalDesignCount / $totalDesigns);

  	// generate the paginated list
    // (starting at 1 for human-friendly numbering)
  	for ($i = 1; $i <= $numPages + 1; $i++) {

      if (isset($_GET["pg"])) {
        $pg = $_GET["pg"];
      } else {
        $pg = "1";
      }

      if ((strval($i) == $pg)) {
?>
  	<li class="current">
<?php
      } else {
?>
    <li>
<?php
      }
?>
  		<a href="<?php echo $zenUrls["zen-view-all"]; ?>?pg=<?php echo $i; ?>"><?php echo $i; ?></a>
  	</li>
  <?php
  	}
  ?>
  </ul>
<?php } ?>

  <p class="copyright">&copy; These pages copyright <?php echo date("Y"); ?>, <a href="http://daveshea.com/">Dave Shea</a>. Licensed under <a href="https://creativecommons.org/licenses/by-nc-sa/3.0/">CC BY-NC-SA 3.0</a></p>

</div>

</body>
</html>
