@extends('layout')

@section('content')
<style>
	.title {
		font-size: 96px;
		margin-bottom: 40px;
		text-align: center;
	}

	.quote {
		font-size: 24px;
		text-align: center;
	}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="title col-md-12">Laravel Shop</div>
		<div class="quote col-md-12">{{ Inspiring::quote() }}</div>
	</div>
</div>
@stop
