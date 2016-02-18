<html>

	<body>

		<form action="{{URL::to('/report-image')}}" method="POST" enctype="multipart/form-data">

			Select image to upload:
		    <input type="file" name="fileImage" id="fileImage"><br>
		    Name:<input type="text" name="name" id="name"><br>
		    Remarks:<input type="text" name="remarks" id="remarks"><br>
		    <input type="submit" value="Upload Image" name="submit">

		</form>

	</body>

</html>