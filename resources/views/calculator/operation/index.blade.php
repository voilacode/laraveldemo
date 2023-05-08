 @include('layouts.head')
 <h1>Operation Index </h1>
 <a href="{{ route('operation.create') }}" class="btn btn-success mb-3">Create Operation</a>
 <table class="table table-bordered table-dark">
 	<tr>
 		<th>id</th>
 		<th>a</th>
 		<th>b</th>
 		<th>opr</th>
 		<th>result</th>
 		<th>tools</th>
 	</tr>
 	@foreach($all_data as $data)
 	<tr>
 		<td>{{ $data->id }}</td>
 		<td>{{ $data->a }}</td>
 		<td>{{ $data->b }}</td>
 		<td>{{ $data->opr }}</td>
 		<td>{{ $data->result }}</td>
 		<td>
 			<a href="{{ route('operation.show',$data->id) }}">
 				<button class="btn btn-primary btn-sm">view</button>
 			</a>

 			<a href="{{ route('operation.edit',$data->id) }}">
 				<button class="btn btn-secondary btn-sm">edit</button>
 			</a>

 			<a href="{{ route('operation.destroy',$data->id) }}">
 				<button class="btn btn-danger btn-sm">delete</button>
 			</a>
 		</td>
 	</tr>
 	@endforeach
 </table>

 @include('layouts.footer')