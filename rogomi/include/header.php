<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Rogomi - <?php echo $title; ?></title>


<script  src="include/jquery.js"></script>
<link rel="Shortcut Icon" href="img/Home/logos/favicon.ico" />
<link rel='stylesheet' type='text/css' href='css/header.css' />
<?php
	if($title == 'Home'){
	echo "<link rel='stylesheet' type='text/css' href='css/home.css' />";
	}
	elseif($title == 'About'){
		echo "<link rel='stylesheet' type='text/css' href='css/about.css' />";
		echo '<script src="include/scrollplugin.js"></script>';
		echo '<script src="include/tw.js"></script>';
	
	}
	elseif($title == 'Apps'){
	echo "<link rel='stylesheet' type='text/css' href='css/apps.css' />";
	}
	elseif($title == 'Inquire'){
	echo "<link rel='stylesheet' type='text/css' href='css/inquire.css' />";
	}
?>
<link rel='stylesheet' type='text/css' href='css/footer.css' />
<script>
$(document).ready(function(){
 var title = '<?php echo $title; ?>';
 
	 if(title != 'Blog'){
	  $(".blog").mouseover(function(){
	    $(".blog").attr('src','img/Home/navs/Button_Blog_Active.png');
	  });
	  $(".blog").mouseout(function(){
	    $(".blog").attr('src','img/Home/navs/Button_Blog_Inactive.png');
	  });
	  }
	  
	  if(title != 'Home'){
	  $(".home").mouseover(function(){
	    $(".home").attr('src','img/Home/navs/Button_Home_Active.png');
	  });
	  $(".home").mouseout(function(){
	    $(".home").attr('src','img/Home/navs/Button_Home_Inactive.png');
	  });
	  }
	  
	 if(title != 'Apps'){
	  $(".apps").mouseover(function(){
	    $(".apps").attr('src','img/Home/navs/Button_Apps_Active.png');
	  });
	  $(".apps").mouseout(function(){
	    $(".apps").attr('src','img/Home/navs/Button_Apps_Inactive.png');
	  });
	  }
	  
	if(title != 'Inquire'){
	  $(".inquire").mouseover(function(){
	    $(".inquire").attr('src','img/Home/navs/Button_Inquire_Active.png');
	  });
	  $(".inquire").mouseout(function(){
	    $(".inquire").attr('src','img/Home/navs/Button_Inquire_Inactive.png');
	  });
	  }
	  
	if(title != 'About'){
	  $(".about").mouseover(function(){
	    $(".about").attr('src','img/Home/navs/Button_About_Active.png');
	  });
	  $(".about").mouseout(function(){
	    $(".about").attr('src','img/Home/navs/Button_About_Inactive.png');
	  });
	  }
	
});

</script>
</head>

<body>

<div id="header">
	<div id="logoContainer">
		<img src="img/Home/logos/Logo_Rogomi.png" id="logo">
		<div id="topLabel"><p>{mobile app design} | development | [quality assurance testing]</p></div>
		<div id="navBut">
			<div id="right">
				<?php if($title == 'Blog'){
				echo '<a href="http://numlock.com.ph/blog/" target="_blank"><img src="img/Home/navs/Button_Blog_Active.png" class="blog" style="margin-bottom:2px" ></a>';
				}else {
					echo '<a href="http://numlock.com.ph/blog/" target="_blank"><img src="img/Home/navs/Button_Blog_Inactive.png" class="blog" style="margin-bottom:2px" ></a>';
				}
				?>
				<?php if($title == 'Inquire'){
				echo '<a href="#"><img class="inquire" src="img/Home/navs/Button_Inquire_Active.png"></a>';
				} else {
					echo '<a href="inquire.php"><img class="inquire" src="img/Home/navs/Button_Inquire_Inactive.png"></a>';
				}				
				?>
			</div>
			<div id="mid">
				<?php 
				if($title == 'Apps'){
					echo '<a href="#"><img class="apps" src="img/Home/navs/Button_Apps_Active.png"></a>';
				} else {
					echo '<a href="apps.php"><img class="apps" src="img/Home/navs/Button_Apps_Inactive.png"></a>';
				}
				
				?>
			</div>
			<div id="left">
			<?php 
				if($title == 'Home'){
				echo '<a href="#"><img class="home" src="img/Home/navs/Button_Home_Active.png" style="margin-bottom:2px" ></a>';
				} else {
					echo '<a href="home.php"><img class="home" src="img/Home/navs/Button_Home_Inactive.png" style="margin-bottom:2px" ></a>';
				}
				?>
			<?php 
				if($title == 'About'){
					echo '<a href="#"><img class="about" src="img/Home/navs/Button_About_Active.png"></a>';
				} else {
					echo '<a href="about.php"><img class="about" src="img/Home/navs/Button_About_Inactive.png"></a>';
				}
				
				?>
				</div>
		</div>
	</div>

</div>


