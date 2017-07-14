@extends('layout')
@section('title', 'Create Ticket')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component">
<form class="form-horizontal" method="post">
@foreach($errors->all() as $error)
<p class="alert alert-danger">{{$error}}</p>
@endforeach
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<fieldset>
<legend>Submit a new ticket</legend>
<div class="form-group">
<label for="title" class="col-lg-2 control-label">Title</label>
<div class="col-lg-10">
<input type="text" class="form-control" id="title" placeholder="Title" name="title">
</div>
</div>
<div class="form-group">
<label for="content" class="col-lg-2 control-label">Content</label>
<div class="col-lg-10">
<textarea class="form-control" rows="3" id="content" name="content"></textarea>
<span class="help-block">Feel free to ask us any question.</span>
</div>
</div>
<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{!! action('TicketsController@index') !!}" class="btn btn-default">Cancel</a>
</div>
</div>
</fieldset>
</form>
</div>
</div>
@stop