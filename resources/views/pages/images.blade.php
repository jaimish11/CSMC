<div class="row">
	<form action="{{ action('ImageController@store',$milestone['id']) }}" method="POST"enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="file" name="file">
		<input type="submit" name="submit" value="Submit">
	</form>
</div>