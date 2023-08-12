

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All student') }}
        </h2>

        <h4>
        	
        </h4>

        <a href="{{ route('students.create') }}">add new Student</a>
        <table style="text-align: center;">
                		<thead style="border-bottom: 2px solid red;">
                			<tr style="border: 1px solid black;">
                				<td style="border: 1px solid black;">id</td>
                				<td style="border: 1px solid black;">Roll</td>
                				<td style="border: 1px solid black;">Student Name</td>
                				<td style="border: 1px solid black;">Email</td>
                				<td style="border: 1px solid black;">phone</td>
                				<td style="border: 1px solid black;">class name</td>
                				<td style="border: 1px solid black;">Action</td>
                			</tr>
                		</thead>
                		<tbody>
                			@foreach( $student as $key=>$row)
                			<tr>
                				<td>{{++$key}}</td>
                				<td>{{$row->stu_roll}}</td>
                				<td>{{$row->stu_name}}</td>
                				<td>{{$row->stu_email}}</td>
                				<td>{{$row->stu_phone}}</td>
                				<td>{{$row->class_id}}</td>
                				
								<td> <a href="{{ route('students.edit',$row->id) }}">edit</a>
								 <form action="{{ route('students.destroy' ,$row->id) }} " method="post">
								 	@csrf
								 	<input type="hidden" name="_method" value="delete">
								 	<button type="submit">delete</button>
								 </form>
								</td>
                			</tr>
                			@endforeach
                		</tbody>
                	</table>
   

   

