
<!DOCTYPE html>
<html>
<head>
	<title>Delete Item</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Delete ITEM</h2>
	</div>
	
	<form action = "<?php $_PHP_SELF ?>" method = "POST">

		<?php include('errors.php'); ?>
      
		<!__ password __>
        <div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		
        <div class="input-group">
			<button type="submit" class="btn" name="verfiy_password">Submit</button>

		</div>
		
	</form>
</body>
</html>