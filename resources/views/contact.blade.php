<h1>this is conact page from view </h1>

<a href="{{url('/')}}">back to home</a>

<form method="POST" action="{{ route('student.store')}}">
	@csrf
	<input type="text" name="name" placeholder="write your name"> <br>
	<input type="email" name="email" placeholder="write your email"> <br>
	<button type="submit">submit</button>
</form>