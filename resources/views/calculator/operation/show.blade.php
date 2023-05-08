 @include('layouts.head')
 <div class="border border-secondary p-4">
     <h1>The data of {{$data['id']}} id</h1>
     <div>id: {{$data['id']}}</div>
     <div>A: {{$data['a']}}</div>
     <div>B: {{$data['b']}}</div>
     <div>Opr: {{$data['opr']}}</div>
     <div>Created at: {{$data['created_at']}}</div>
     <div>Updated at: {{$data['updated_at']}}</div>
     <hr>
     <div class="h3">result: {{$data['result']}}</div>
     <a href="{{ route('operation.index') }}">back to index</a>
 </div>
 @include('layouts.footer')