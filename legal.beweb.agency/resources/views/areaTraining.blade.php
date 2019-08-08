@extends('layouts/default')

@section('content')
	
<div class="container" id="container">
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
        <h6 class="slim-pagetitle">Area Operativa</h6>
    </div>
    <div class="section-wrapper">
    	<label class="section-title">Materiale LEGAL INSURANCE</label>
        <ul class="list-group">
            <li class="list-group-item">
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Manuale Formativo (276 KB)
            </li>
        </ul>

        <label class="section-title">Materiale Diverso</label>
         <ul class="list-group">
            <li class="list-group-item">
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Modulo CID (105 KB)
            </li>
            <li class="list-group-item">
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Codice delle Assicurazioni (716 KB)
            </li>
            <li class="list-group-item">
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Codice della Strada - 01/01/2013 (1336 KB)
            </li>
            <li class="list-group-item">
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Codice delle Assicurazioni - luglio 2008 (593 KB)
            </li>
        </ul>
    </div>
</div>
@endsection