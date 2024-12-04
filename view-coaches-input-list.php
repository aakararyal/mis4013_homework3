<select class="form-select" id = "cid" name = "cid">

<?php
while ($coachItem = $coachList->fetch_assoc()) {
?>
      <option value="<?php echo $coachItem['coaches_id']; ?>">  <?php echo $coachItem['coaches_name']; ?>    </option>
  <?php
}

?>
  

</select>
