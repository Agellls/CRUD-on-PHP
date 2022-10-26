<form name="Table Properties" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Order by Week
<?php 
 $query = "SELECT * FROM `classes` ";
 $value = 0;
switch($_POST['sort_week']) {
 case 1:
    $value = 2;
    $query .= "ORDER BY `classes`.`week` DESC";
  break;
 case 0:
  $value = 1;
    $query .= "ORDER BY `classes`.`week` ASC";
  break;
 default:
  break;
}
?>
<button type="submit" name="sort_week" class="button" value="<?php echo $value; ?>"> Sort Week </button>
</form>