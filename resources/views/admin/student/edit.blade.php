<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crud</title>
</head>
<body>

	<form  action="{{ route('students.update',$students->id) }}" method="post" >
		@csrf
		<input type="hidden" name="_method" value="PATCH">
		<select name="class_id">
			@foreach($class as $row)
           	<option value="{{ $row->id }}" @if ($row->id == $students->class_id) selected @endif >{{ $row->class_name }}</option>
			@endforeach

		</select> 
		<input type="text" name="stu_name" placeholder="Student name" value="{{ $students->stu_name }}">
		<input type="text" name="stu_roll" placeholder="Student roll" value="{{ $students->stu_roll }}">
		<input type="email" name="stu_email" placeholder="student email" value="{{ $students->stu_email }}">
		<input type="text" name="stu_phone" placeholder="student phone" value="{{ $students->stu_phone }}">
		<input type="text" name="stu_address" placeholder="address" value="{{ $students->stu_address }}">
		<button type="submit">submit</button>
	</form>

</body>
</html>