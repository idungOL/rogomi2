
<div id="footer">
	<div id="copyright">
		<p>&copy;&nbsp;2013 Rogomi, Inc.</p>
	</div>

	<div id="navBot">
		<p>
		<?php 
		if($title == 'Home'){
			echo '&nbsp;Home&nbsp;';
		} else {
			echo '<a href="home.php">&nbsp;Home&nbsp;</a>';
		}		
		?> <span class="vertBar">|</span>  
		
		<?php 
		if($title == 'About'){
			echo '&nbsp;About Rogomi&nbsp;';
		} else {
			echo '<a href="about.php">&nbsp;About Rogomi&nbsp;</a>';
		}		
		?> <span class="vertBar">|</span>  
		<?php 
		if($title == 'Apps'){
			echo '&nbsp;Products&nbsp;';
		} else {
			echo '<a href="apps.php">&nbsp;Products&nbsp;</a>';
		}
		?> <span class="vertBar">|</span>  
		<?php 
		if($title == 'Blog'){
			echo '&nbsp;Blog&nbsp;';
		} else {
			echo '<a href="http://numlock.com.ph/blog/" target="_blank">&nbsp;Blog&nbsp;</a>';
		}
		?> <span class="vertBar">|</span> 
		<?php 
		if($title == 'Inquire'){
			echo '&nbsp;Contact&nbsp;';
		} else {
			echo '<a href="inquire.php">&nbsp;Contact&nbsp;</a>';
		}
		?></p>
	</div>
</div>



</body>
</html>