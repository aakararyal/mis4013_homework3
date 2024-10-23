<div clas = "row">
  <div class = "col">
    <h1>Players</h1>
  </div>
  <div class = "col-auto">
    <?php
include "view-players-newform.php";
?>
  </div>
</div>

<div class="table-responsive">
  <table class="table">
    <thead>

      <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Position</th>
        <th></th>
    </thead>
      </tr>
  

<tbody>
  <?php
while ($player = $players->fetch_assoc()) {
    ?>
  <tr>
    <td><?php echo $player['players_id']; ?></td>
    <td><?php echo $player['player_name']; ?></td>
    <td><?php echo $player['player_position']; ?></td>
  <td>
    <form method = "post" action = "players-by-team.php">
      <input type = "hidden" name = "cid" value = "<?php echo $player['players_id']; ?>">
    <button type="submit" class="btn btn-primary">Player's NFL Teams</button>
  
</form>
  </td>
  </tr>
  <?php
}
?>
</tbody>
    
  </table>
</div>
