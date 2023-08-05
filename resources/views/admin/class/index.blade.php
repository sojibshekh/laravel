

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <h4>
        	
        </h4>

        <a href="{{ route('create.class') }}">add new</a>
        <table style="text-align: center;">
                		<thead style="border-bottom: 2px solid red;">
                			<tr style="border: 1px solid black;">
                				<td style="border: 1px solid black;">id</td>
                				<td style="border: 1px solid black;">class name</td>
                				<td style="border: 1px solid black;">Action</td>
                			</tr>
                		</thead>
                		<tbody>
                			@foreach($class as $key=>$row)
                			<tr>
                				<td>{{++$key}}</td>
                				<td>{{$row->class_name}}</td>
                			</tr>
                			@endforeach
                		</tbody>
                	</table>
   

   

