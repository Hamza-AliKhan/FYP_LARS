<?php
$conn = mysqli_connect("localhost", "root", "", "lars_database");
$count=1;
$sel_query="Select * from users ORDER BY username asc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["username"]; ?></td>
<td align="center"><?php echo $row["type"]; ?></td>
<td align="center"><?php echo $row["first_name"]; ?></td>
<td align="center"><?php echo $row["last_name"]; ?></td>
<td class="hidetext" align="center"><?php echo $row["password"]; ?></td>
<td align="center">
<a href="edit.php?id=<?php echo $row["username"]; ?>">Edit</a>
</td>
<td align="center">
<a href="delete.php?id=<?php echo $row["username"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>