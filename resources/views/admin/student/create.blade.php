<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crud</title>
</head>
<body>

	<form  action="{{ route('students.store') }}" method="post" >
		@csrf
		<select name="class_id">
			@foreach($class as $row)
           	<option value="{{ $row->id }}">{{ $row->class_name }}</option>
			@endforeach

		</select> 
		<input type="text" name="stu_name" placeholder="Student name" value="{{ old('stu_name') }}">
		<input type="text" name="stu_roll" placeholder="Student roll" value="{{ old('stu_roll') }}">
		<input type="email" name="stu_email" placeholder="student email" value="{{ old('stu_email') }}">
		<input type="text" name="stu_phone" placeholder="student phone" value="{{ old('stu_phone') }}">
		<input type="text" name="stu_address" placeholder="address" value="{{ old('stu_address') }}">
		<button type="submit">submit</button>
	</form>

</body>
</html>