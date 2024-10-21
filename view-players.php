<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>

      <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Office</th>
    </thead>
      </tr>
  

<tbody>
  <?php
while ($player = $players->fetch_assoc()) {
    ?>
  <tr>
    <td><?php echo $coach['players_id']; ?></td>
    <td><?php echo $coach['player_name']; ?></td>
    <td><?php echo $coach['player_position']; ?></td>

  </tr>
  <?php
}
?>
</tbody>
    
  </table>
</div>
