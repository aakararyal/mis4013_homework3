<h1>Coaches</h1>
<div class="table-responsive">
  <table class="table">
    <thead>

      <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Office</th>
        <th></th>
    </thead>
      </tr>
  

<tbody>
  <?php
while ($coach = $coaches->fetch_assoc()) {
    ?>
  <tr>
    <td><?php echo $coach['coaches_id']; ?></td>
    <td><?php echo $coach['coaches_name']; ?></td>
    <td><?php echo $coach['office_location']; ?></td>
  <td> <a href = "coaches-with-players.php?id=<?php echo $coach['coaches_id']; ?>">NFL players from Coaches</td>
  </tr>
  <?php
}
?>
</tbody>
    
  </table>
</div>
