@extends('layouts/default')

@section('content')
	
<div class="container" id="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
        <h6 class="slim-pagetitle">Istituti di Credito</h6>
    </div>
    <div class="section-wrapper">
    	@yield('sub_content')
    </div>
</div>
@endsection