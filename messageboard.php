<script>
	$('document').ready(function(){
		$("#sendcomment").prop('disabled', true);
	})
	function enableSend()
		{
			$("#sendcomment").prop('disabled', false);
		}
</script>


<?php
//add comment
echo "</br>";
?>
<div class="row">
<div class="col-md-12">
<!--<h3 style="text-align: center;">Send us a message ! </h3>-->
</div>
</div>
<?php

/*
		echo "<div id=\"addcomment\">";
			if($_SESSION['loggedin'] == true)
			{
				echo "<div id=\"blog\" class=\"container-fluid\">
					<div class=\"row\">
					<div class=\"col-sm-12\">
					<p>New Comment</p>
					<form action=\"includes/login.php\" method=\"post\">
					<textarea name=\"comments\" rows=\"5\" style=\"width: 100%;\" wrap=\"soft\" placeholder=\"Comment\" require></textarea>
					<input type=\"hidden\" name=\"form\" value=\"comment\">
					<input type=\"hidden\" name=\"username\" value=\"" . $_SESSION["user"] . "\">
					<div class=\"g-recaptcha\" data-sitekey=\"6LeMHDgUAAAAAN33asW6jPI4sz27hZgDxtAcn7Tv\" data-callback=\"enableSend\"></div>
					<p><input type=\"submit\" value=\"Submit\" id=\"sendcomment\"></p>
					</form>
					</div>
					</div>
					</div>";
			}
			else{
				echo "<p style=\"text-align: center;\"><a href=\"index.php?p=login\">Login</a> to leave a comment</p><hr>";
			}
		echo "</div>";
		*/

//view comments 
include("includes/getcomments.php");
