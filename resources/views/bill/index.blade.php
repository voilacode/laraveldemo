@include('layouts.head')

<h1>Bill Listing <a href="{{ route('bill.create') }}" class="btn btn-primary">Calculate the Bill</a></h1>
<table class="table table-bordered table-dark">
    <tr>
        <th>id</th>
        <th>number</th>
        <th>units</th>
        <th>amount</th>
        <th>due date</th>
        <th>tools</th>
    </tr>
    @foreach($records as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->number }}</td>
        <td>{{ $data->units }}</td>
        <td>{{ $data->amount }}</td>
        <td>{{ $data->due_date }}</td>
        <td>
            <a href="{{ route('bill.show',$data->id) }}" class="btn btn-sm btn-primary">Show </a>
            <a href="{{ route('bill.edit',$data->id) }}" class="btn btn-sm btn-success">Edit </a>
            <a href="{{ route('bill.destroy',$data->id) }}" class="btn btn-sm btn-danger">Delete </a>

        </td>
    </tr>
    @endforeach
</table>


@include('layouts.footer')