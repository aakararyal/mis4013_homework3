<select class="form-select" id = "sid" name = "sid">

<?php
while ($stadiumItem = $stadiumList->fetch_assoc()) {
      $selText = "";
      if ($selectedStadium == $stadiumItem['stadium_id']) {
            $selText = " selected";
      }
            
?>
      <option value="<?php echo $stadiumItem['stadium_id']; ?>"<?php echo $selText; ?>><?php echo $stadiumItem['stadium_name']; ?>    </option>
  <?php
}

?>
  

</select>
