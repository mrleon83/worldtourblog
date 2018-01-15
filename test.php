<?php
include('includes/header.php');
include ('includes/config.php');
?>
<style>
#hidethis{
  display: none;
}
</style>
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
                      echo $title . " " . $date;
                    echo "</a>";
                  echo "</h5>";
                echo "</div>";
                echo "<div id=\"" . $blog_id . "\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"header" . $blog_id . "\">";
                
                  echo "<div class=\"card-block\">";
                        echo "<input type=\"hidden\" id=\"blog_id\" value=\"" . $blog_id . "\">"; 
                        echo "<div id=\"blogInner\">";
                        if(isset($photo))
                            {
                            $photo = "includes/" . $photo;
                            echo "<img src=\"" .$photo . "\" width=\"50%\">";
                          }
                          echo "<p style=\"font-family: arial;\">" . $blogpost . "</p>";
                            echo "<div style=\"clear:both\"></div>";
                          echo "<p>Posted By: " . $username . " </p> ";
                          echo "<p>Date: " . $date . "</p>";
                  echo "</div>";
                echo "</div>";
              echo "</div>";


        }
    ?>
</div>


  






