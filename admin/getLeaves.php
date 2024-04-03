<?php
$conn = mysqli_connect("localhost", "root", "", "lars_database");
function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}
$sel_query="Select * from leaveapplications ORDER BY status desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $row["uid"]; ?></td>
<td align="center"><?php echo $row["username"]; ?></td>
<td align="center"><?php echo $row["type_of_leave"]; ?></td>
<td align="center"><?php echo $row["description_of_leave"]; ?></td>
<td class="ellipsis" align="center"><?php custom_echo( $row["reason_of_leave"],20); ?></td>
<td align="center"><?php echo $row["from_date"]; ?></td>
<td align="center"><?php echo $row["to_date"]; ?></td>
<td align="center"><?php echo $row["status"]; ?></td>
<td align="center"><?php echo $row["days"];?></td>
<td align="center">

<style>




.overlay {
  position: fixed;
  top: 200px;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup .close:hover {
  color: red;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
  color: black;
}

}

</style>
<div class="box">
  <a class="Viewbutton" href="view.php?id=<?php echo $_SESSION['id']=$row["username"];?>&uid=<?php echo $_SESSION['uid']=$row["uid"]; ?>">View</a>
  <?php if(!empty($_SESSION['reason'])){
  //echo $_SESSION['reason'];
  //unset($_SESSION['reason']);
?>
  <a class="button" href="#reasonpopup" style="display:none;"></a>
</div>
<div id="reasonpopup" class="overlay">
  <div class="popup">
    <a class="close" href="#">&times;</a>
    <div class="content">
      <h3 style="color:black">Reason</h3>
      <?php echo $_SESSION['reason'];?>
    </div>
  </div>
</div>
<?php }?>

<td align="center">
<a class="Acceptbutton" href="accept.php?id=<?php echo $_SESSION['id']=$row["username"];?>&uid=<?php echo $_SESSION['uid']=$row["uid"]; ?>">Accept</a>
</td>
<td align="center">

  <a class="Rejbutton"href="reject.php?id=<?php echo $_SESSION['id']=$row["username"];?>&uid=<?php echo $_SESSION['uid']=$row["uid"]; ?>">Reject</a>
</td>
</tr>
<?php } ?>
