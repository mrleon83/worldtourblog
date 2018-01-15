<style>

</style>
</br>
<div class="row" style="background-color: #fff; border-radius: 10px;">
  <div class="col-md-2">
    <ul class="galleryNav" style="list-style: none; cursor: pointer;">
      <li style="font-weight: bold; border-bottom: 2px solid #666;" id="menuhead">Pick an album (+)</li>
      <div id="consel">
      <li id="england" style="padding: 4px; border-bottom: 1px solid #666" "">England</li>
      <li id="mumbai" style="padding: 4px; border-bottom: 1px solid #666">Mumbai</li>
      <li id="srilanka" style="padding: 4px; border-bottom: 1px solid #666">Sri Lanka</li>
      <li id="kualalumpur" style="padding: 4px; border-bottom: 1px solid #666">Kuala Lumpur</li>
      <li id="vietnam" style="padding: 4px; border-bottom: 1px solid #666">Vietnam</li>
      <li id="singapore" style="padding: 4px; border-bottom: 1px solid #666">Singapore</li>
      <li id="australia" style="padding: 4px; border-bottom: 1px solid #666">Australia</li>
      <li id="sanfrancisco" style="padding: 4px; border-bottom: 1px solid #666">San Francisco</li>
    </div>
    </ul>
  </div>
  <div class="col-md-10">
    <div id="test"></div>
  </div>
</div>

</br></br>

<script type="text/javascript">
  $(document).ready(function()
  {
    $("#menuhead").click(function(){
          $("#consel").toggle('slow');
    })

    $("#england").click(function()
      {
      $.post( "includes/getGallery.php", {place:'England'}, function(data) 
        {
          $("#consel").toggle('slow');
          $("#test").html(data);
        });
      })
     $("#mumbai").click(function()
      {
      $.post( "includes/getGallery.php", {place:'Mumbai'}, function(data) 
        {
          $("#test").html(data);
                    $("#consel").toggle('slow');
        });
      })

     $("#srilanka").click(function()
      {
      $.post( "includes/getGallery.php", {place:'Sri Lanka'}, function(data) 
        {
          $("#test").html(data);
                    $("#consel").toggle('slow');
        });
      })

      $("#kualalumpur").click(function()
      {
      $.post( "includes/getGallery.php", {place:'Kuala Lumpur'}, function(data) 
        {
          $("#test").html(data);
                    $("#consel").toggle('slow');
        });
      })

      $("#vietnam").click(function()
      {
      $.post( "includes/getGallery.php", {place:'Vietnam'}, function(data) 
        {
          $("#test").html(data);
          $("#consel").toggle('slow');
        });
      })

      $("#singapore").click(function()
      {
      $.post( "includes/getGallery.php", {place:'Singapore'}, function(data) 
        {
          $("#test").html(data);
          $("#consel").toggle('slow');
        });
      })

      $("#australia").click(function()
      {
      $.post( "includes/getGallery.php", {place:'Australia'}, function(data) 
        {
          $("#test").html(data);
          $("#consel").toggle('slow');
        });
      })

      $("#sanfrancisco").click(function()
      {
      $.post( "includes/getGallery.php", {place:'San Francisco'}, function(data) 
        {
          $("#test").html(data);
          $("#consel").toggle('slow');
        });
      })




  });

</script>





