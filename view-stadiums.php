<h1>Stadiums</h1>
<div class="table-responsive">
  <table class="table">
    <thead>

      <tr>
        <th>ID</th>
      <th>Stadium Name</th>
      <th>Capacity</th>
    </thead>
      </tr>
  

<tbody>
  <?php
while ($stadium = $stadiums->fetch_assoc()) {
    ?>
  <tr>
    <td><?php echo $stadium['stadium_id']; ?></td>
    <td><?php echo $stadium['stadium_name']; ?></td>
    <td><?php echo $stadium['staidum_capacity']; ?></td>

  </tr>
  <?php
}
?>
</tbody>
    
  </table>
</div>
