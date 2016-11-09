@if (Session::has('success'))
	<div class="alert alert-success" id="alert-box">
		<strong>Success: </strong>{{Session::get('success')}}
	</div>
@endif



