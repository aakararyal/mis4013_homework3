<select class="form-select" id = "pid" name = "pid">

<?php
while ($playerItem = $playerList->fetch_assoc()) {
      $selText = "";
      if ($selectedPlayer == $playerItem['players_id']) {
            $selText = " selected";
      }
            
?>
      <option value="<?php echo $playerItem['players_id']; ?>"<?php echo $selText; ?>><?php echo $playerItem['player_name']; ?>    </option>
  <?php
}

?>
  

</select>
