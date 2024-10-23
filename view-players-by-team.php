<h1>Players by Team</h1>
<div class="table-responsive">
  <table class="table">
    <thead>

      <tr>
        <th>ID</th>
      <th>Coach Name</th>
      <th>Office Location</th>
         <th>NFL Team</th>
         <th>Division</th>
    </thead>
      </tr>
  
<tbody>
  <?php
while ($pteam = $playerteam->fetch_assoc()) {
    ?>
  <tr> 
    <td><?php echo $pteam['players_id']; ?></td>
    <td><?php echo $pteam['player_name']; ?></td>
    <td><?php echo $pteam['seasons']; ?></td>
      <td><?php echo $pteam['nfl_team']; ?></td>
    <td><?php echo $pteam['division']; ?></td>
  </tr>
  <?php
}
?>
</tbody>
    
  </table>
</div>
