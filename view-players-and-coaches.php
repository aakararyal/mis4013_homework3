<h1>Players and Coaches</h1>
<div class="card-group">
  
<?php
while ($coach = $coaches->fetch_assoc()) {
    ?>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $coach['coaches_name']; ?></h5>
      <p class="card-text">

    <ul class ="list-group">
        
  <?php
    $playersc = selectCoaches( $coach['coaches_id']);
    while ($playe = $playersc->fetch_assoc()) {

      ?>
          <li class="list-group-item"><?php echo $coach['office_location']; ?> </li>
   
      
        <?php
      
    }

  ?>
    </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Location: <?php echo $coach['office_location']; ?></small></p>
    </div>
  
 
  <?php
}
?>
</div>
