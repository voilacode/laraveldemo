@include('layouts.head')
<div class="container">
		<h1>Form page</h1>
		<form action="{{ route('result') }}" method="get">
			<input name="message" type="text" class="form-control"/>
			<button type="submit" class="btn btn-primary mt-4">Find length</button>
		</form>
</div>

@include('layouts.footer')