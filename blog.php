<?php
include ('includes/config.php');
?>
<style>

#blogmenu .blogmenuinner{
	display: none;
}
.blogbody{
	display: none;
}
#hidethis{
  display: none;
}

</style>
<div class="row">
	<div class="col-md-12" id="heading2">
    <h4 id="blogtitle">Showing The Latest Blog Posts</h4>
  	</div>
</div>
</br>
<div class="row">
		<div class="col-md-2">
		<div id="blogmenu">
			<h3 id="bloggy">Blog Menu<i class="fa fa-arrow-down" aria-hidden="true"></i></h3>
			<div class="blogmenuinner">
			<ul style="list-style: none; ">
				<li><p>By Month :</p></li>
				<li><a href="#" class="november" >November</a></li>
				<li><a href="#" class="december">December</a></li>
				<li><a href="#" class="january">January</a></li>
			</ul>
			</div>
			<div class="blogmenuinner">
			<ul style="list-style: none; ">
				<li><p>By Blogger</p></li>
				<li><a href="#" class="leon">Leon</a></li>
				<li><a href="#" class="cat">Cat</a></li>
			</ul>
			</div>
			<div class="blogmenuinner">
			<ul style="list-style: none; ">
				<li><p>By Place</p></li>
				<li><a href="#" class="england">England</a></li>
				<li><a href="#" class="mumbai">Mumbai</a></li>
				<li><a href="#" class="srilanka">Sri Lanka</a></li>
				<li><a href="#" class="Kuala Lumpur">Kuala Lumpur</a></li>
				<li><a href="#" class="vietnam">Vietnam</a></li>
				<li><a href="#" class="singapore">Singapore</a></li>
				<li><a href="#" class="vietnam">Austrailia</a></li>
				<li><a href="#" class="sanfrancisco">San Francisco</a></li>
			</ul>
		</div>
		</div>
	</div>

	<div class="col-md-10" >
	<div id="accordion" role="tablist" aria-multiselectable="true">
	  <div id="hidethis">
	    <div class="card">
	    <div class="card-header" role="tab" id="headingOne">
	      <h5 class="mb-0">
	        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
	          #1
	        </a>
	      </h5>
	    </div>

	    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
	      <div class="card-block">
	      </div>
	    </div>
	  </div>
	</div>
		<div id="blog">
		<?php
     $sql5 = "SELECT * FROM `blog_worldtour` ORDER BY id DESC";
        $result = $conn->query($sql5);
        while($row2 = $result->fetch_assoc())
        {
            $title = $row2['title'];
            $blogpost =  nl2br($row2['blogpost']);
            $username = ucfirst($row2['username']);
            $month =  $row2['month'];
            $date = $row2['date'];
            $photo = $row2['photolink'];
            $date = date("d/m/Y", strtotime($date));
            $blog_id = $row2['id'];

              echo "<div class=\"card\">";
                echo "<div class=\"card-header\" role=\"tab\" id=\"header" . $blog_id . "\">";
                 echo "<h5 class=\"mb-0\">";
                    echo "<a  class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#" . $blog_id . "\" aria-expanded=\"true\" aria-controls=\"" . $blog_id . "\">";
                      echo $title . " " . $date . " <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>" ;
                    echo "</a>";
                  echo "</h5>";
                echo "</div>";
                echo "<div id=\"" . $blog_id . "\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"header" . $blog_id . "\">";
                
                  echo "<div class=\"card-block\">";
                        echo "<input type=\"hidden\" id=\"blog_id\" value=\"" . $blog_id . "\">"; 
                        echo "<div id=\"blogInner\">";
                          echo "<p style=\"font-family: Verdana, Geneva, sans-serif;\">" . $blogpost . "</p>";
                          if(isset($photo))
                            {
                            $photo = "includes/" . $photo;
                            echo "<img src=\"" .$photo . "\" style=\"padding: 5px; width:100%\">";
                            }
                           echo "<div style=\"clear:both\"></div>";
                          echo "<p>Posted By: " . $username . " </p> ";
                          echo "<p>Date: " . $date . "</p>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";
        }
    ?>

	</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#blogmenu").click(function(){
			$('.blogmenuinner', this).toggle('slow');
		});

		$(".november").click(function(){
		$.post( "includes/getBlog.php", {month:'november'}, function(data) {
		  $("#blog").html(data);		  
		});
		$('#blogtitle').html('Showing all November Entries');
		});

		$(".december").click(function(){
		$.post( "includes/getBlog.php", {month:'december'}, function(data) {
		  $("#blog").html(data);
		});
				$('#blogtitle').html('Showing all December Entries');
		})

		$(".january").click(function(){
		$.post( "includes/getBlog.php", {month:'january'}, function(data) {
			$("#blog").html(data);
		});
				$('#blogtitle').html('Showing all January Entries');
		})

		$(".leon").click(function(){
		$.post( "includes/getBlog.php", {name:'leon'}, function(data) {
			$("#blog").html(data);
		});
				$('#blogtitle').html('Showing all of Leon\'s Entries');
		})

		$(".cat").click(function(){
		$.post( "includes/getBlog.php", {name:'cat'}, function(data) {
			$("#blog").html(data);
		});
				$('#blogtitle').html('Showing all of Cat\'s Entries');
		})


		$(".england").click(function(){
		$.post( "includes/getBlog.php", {place:'England'}, function(data) {
			$("#blog").html(data);
		});

				$('#blogtitle').html('Showing all about England');
		})

		$(".mumbai").click(function(){
		$.post( "includes/getBlog.php", {place:'Mumbai'}, function(data) {
			$("#blog").html(data);
		});
				$('#blogtitle').html('Showing all about Mumbai');
		})

		$(".srilanka").click(function(){
		$.post( "includes/getBlog.php", {place:'Sri Lanka'}, function(data) {
			$("#blog").html(data);
		});
				$('#blogtitle').html('Showing all about Sri Lanka');
		})

		$(".kualalumpur").click(function(){
		$.post( "includes/getBlog.php", {place:'Kuala Lumpur'}, function(data) {
			$("#blog").html(data);
		});
				$('#blogtitle').html('Showing all about Kuala Lumpur');
		})
		
		$(".vietnam").click(function(){
		$.post( "includes/getBlog.php", {place:'Vietnam'}, function(data) {
			$("#blog").html(data);
		});
				$('#blogtitle').html('Showing all about Vietnam');
		})
		
		$(".singapore").click(function(){
		$.post( "includes/getBlog.php", {place:'Singapore'}, function(data) {
			$("#blog").html(data);
		});
				$('#blogtitle').html('Showing all about Singapore');
		})

		$(".australia").click(function(){
		$.post( "includes/getBlog.php", {place:'Austrailia'}, function(data) {
			$("#blog").html(data);
		});
				$('#blogtitle').html('Showing all about Singapore');
		})

		$(".sanfrancisco").click(function(){
		$.post( "includes/getBlog.php", {place:'San Francisco'}, function(data) {
			$("#blog").html(data);
		});
				$('#blogtitle').html('Showing all about Singapore');
		})

		var blog_id = $("#blog_id").val();
		$.post( "includes/getComments.php", {blogid:blog_id}, function(data) {
			$("#comments").html(data);
		});	
	});
</script>



