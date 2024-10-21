<h1>Coaches with Players</h1>
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
while ($coach = $coaches->fetch_assoc()) {
    ?>
  <tr>
    <td><?php echo $coach['coaches_id']; ?></td>
    <td><?php echo $coach['coaches_name']; ?></td>
    <td><?php echo $coach['office_location']; ?></td>
      <td><?php echo $coach['nfl_team']; ?></td>
    <td><?php echo $coach['division']; ?></td>

  </tr>
  <?php
}
?>
</tbody>
    
  </table>
</div>
