<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Form</title>
</head>
<body>
	<form action="{{ URL::to('/') }}" method="POST">
		Name:<input type="text" name="name"><br>
		Url:<input type="text" name="url"><br>
		Remarks:<input type="text" name="remarks"><br>
		<button type="submit">Submit</button>	
	</form>
	
</body>
</html>