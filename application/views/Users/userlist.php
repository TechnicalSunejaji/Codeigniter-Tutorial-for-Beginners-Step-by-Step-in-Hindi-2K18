<html>
<head>
<title>Users Details</title>
</head>
<body>

<h1>User Account Details</h1>
<table>
<tr>
<td>First name</td>
<td>Account No</td>
</tr>
<?php foreach($users as $user):  ?>
<tr>
<td><?php echo $user['Firstname']; ?></td>
<td><?php echo $user['accountno']; ?></td>
</tr>
<?php endforeach; ?>

</table>
</body>
</html>