
<div id="footer">
	<div id="copyright">
		<p>&copy;&nbsp;2013 Rogomi, Inc.</p>
	</div>

	<div id="navBot">
		<ul id="navlist">
			<li>
				<?php 
				if($title == 'Inquire'){
					echo '&nbsp;Contact&nbsp;';
				} else {
					echo '<a id="contactLi" href="inquire.php">&nbsp;Contact&nbsp;</a>';
				}
				?>
			</li>
			<li class="vertBar">|</li>
			
			<li>
				<?php 
				if($title == 'Blog'){
					echo '&nbsp;Blog&nbsp;';
				} else {
					echo '<a id="blogLi" href="http://numlock.com.ph/blog/" target="_blank">&nbsp;Blog&nbsp;</a>';
				}
				?>
			</li>
			<li class="vertBar">|</li>
			
			<li>
				<?php 
				if($title == 'Apps'){
					echo '&nbsp;Products&nbsp;';
				} else {
					echo '<a id="productLi" href="apps.php">&nbsp;Products&nbsp;</a>';
				}
				?>
			</li>
			<li class="vertBar">|</li> 
			
			<li>
				<?php 
				if($title == 'About'){
					echo '&nbsp;About Rogomi&nbsp;';
				} else {
					echo '<a id="aboutLi" href="about.php">&nbsp;About Rogomi&nbsp;</a>';
				}		
				?>
			</li>
			<li class="vertBar">|</li>
		
			<li>
				<?php 
				if($title == 'Home'){
					echo '&nbsp;Home&nbsp;';
				} else {
					echo '<a href="home.php">&nbsp;Home&nbsp;</a>';
				}		
				?> 
			</li>
		
			

	</div>
</div>



</body>
</html>