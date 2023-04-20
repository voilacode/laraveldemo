@include('layouts.head')
<div class="container">
	<h1> Result Page</h1><br>
<p>You have entered <b style="color: red">{{$message}}</b> and the lenght is <b style="color: blue">{{$length}}</b></p>
<a href="{{ route('form') }}">back </a>
	</div>

@include('layouts.footer')