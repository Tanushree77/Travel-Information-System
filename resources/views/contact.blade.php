<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Contact Us</h1>
    <div class="row">
        <div class="col-md-6">
    <form method="post" action="{{ route('contact.store') }}">
        {{ csrf_field() }}
    	<div class="form-group">
    	<label>Full Name: </label>
    		<input type="text" name="form-control" name="name">
    	</div>

    	<div class="form-group">
    	<label>Email Address: </label>
    		<input type="text" name="form-control" name="email">
    		</div>

    		<div class="form-group">
    	<label>Message: </label>
    		<textarea name="message" class="form-control"></textarea>
    		</div>

    		<button class="btn btn-primary">Submit</button>
    </form>
      
      </div>
</body>
</html>