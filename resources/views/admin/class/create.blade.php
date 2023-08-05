<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crud</title>
</head>
<body>

	<form  action="{{ route('store.class') }}" method="POST" >
		@csrf
		<input type="text" name="class_name" placeholder="class name">
		<button type="submit">submit</button>
	</form>

</body>
</html>