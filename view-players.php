<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>

      <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Position</th>
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

  </tr>
  <?php
}
?>
</tbody>
    
  </table>
</div>
