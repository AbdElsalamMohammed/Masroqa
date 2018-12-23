<!DOCTYPE html>
<html>
<head>
	<title>Browse by category</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Select category</h2>
	</div>
	
	<form action = "<?php $_PHP_SELF ?>" method = "POST">

		<?php include('errors.php'); ?>
      
		<!__ Category __>        
		<div class="input-group">
			<label>Category</label>
			<select style="width: 150px"  name="category">
                <option></option>
                <option value="Wallet">Wallet</option>
                <option value="Phone">Phone</option>
                <option value="Bag">Bag</option>
                <option value="Money">Money</option>
                <option value="Charger">Charger</option>
                <option value="HeadPhone">HeadPhone</option>
                <option value="Book">Book</option>
                <option value="Clothes">Clothes</option>
                <option value="USB">USB</option>
                <option value="FlashMemory">FlashMemory</option>
                <option value="CoverPhone">CoverPhone</option>
            </select>    
        </div>
		
        <div class="input-group">
			<button type="submit" class="btn" name="verfiy_category">Submit</button>

		</div>
		
	</form>
</body>
</html>