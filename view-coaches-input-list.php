<select class="form-select" id = "cid" name = "cid">

<?php
while ($coachItem = $coachList->fetch_assoc()) {
      $selText = "";
      if ($selectedCoach == $coachItem['coaches_id']) {
            $selText = " selected";
      }
            
?>
      <option value="<?php echo $coachItem['coaches_id']; ?>"<?php echo $selText; ?>><?php echo $coachItem['coaches_name']; ?>    </option>
  <?php
}

?>
  

</select>
