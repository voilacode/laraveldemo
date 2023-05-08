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
 		<th>created_at</th>
 		<th>updated_at</th>
 	</tr>
 	@foreach($all_data as $data)
 	<tr>
 		<td>{{ $data->id }}</td>
 		<td>{{ $data->a }}</td>
 		<td>{{ $data->b }}</td>
 		<td>{{ $data->opr }}</td>
 		<td>{{ $data->result }}</td>
 		<td>{{ $data->created_at }}</td>
 		<td>{{ $data->updated_at }}</td>
 	</tr>
 	@endforeach
 </table>

 @include('layouts.footer')