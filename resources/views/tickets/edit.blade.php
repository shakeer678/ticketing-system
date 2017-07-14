@extends('layout')
@section('title' , 'Edit Ticket')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component">
<fieldset>
<form class="form-horizontal" method="post">
@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<legend>Edit ticket</legend>
<div class="form-group">
<label for="title" class="col-lg-2 control-label">Title</label>
<div class="col-lg-10">
<input type="text" class="form-control" id="title" name="title" value="{!! $ticket->title !!}">
</div>
</div>
<div class="form-group">
<label for="content" class="col-lg-2 control-label">content</label>
<div class="col-lg-10">
<textarea class="form-control" rows="3" id="content" name="content">{!! $ticket->content !!}</textarea>
</div>
</div>
<div class="form-group">
<label>
<input type="checkbox" name="status" {!! $ticket->status?"":"checked"!!} > Close this ticket?
</label>
</div>
<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">
<button type="submit" class="btn btn-primary">Update</button>
<a class="btn btn-warning" href="{!! action('TicketsController@show' , $ticket->slug) !!}">Cancel</a>
</div>
</div>
</form>
</fieldset>
<div class="clearfix"></div>
</div></div>
@endsection