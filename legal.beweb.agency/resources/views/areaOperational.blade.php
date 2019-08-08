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
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Manuale Operativo (361 KB)
            </li>
            <li class="list-group-item">
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Allegati Manuale Operativo (24 KB)
            </li>
            <li class="list-group-item"></li>
            <li class="list-group-item">
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Kit Convenzione Segnalatori (1.5 MB)
            </li>
            <li class="list-group-item">
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Modello Report Settimanale (21.5 KB)
            </li>
            <li class="list-group-item">
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Modulo Contatto (9.49 KB)
            </li>
        </ul>

        <label class="section-title">Materiale Diverso</label>
         <ul class="list-group">
            <li class="list-group-item">
                <button class="btn-primary"><i class="icon ion-ios-download"></i></button> Regolamento Attuativo Indennizzo Diretto (25.6 KB)
            </li>
        </ul>
    </div>
</div>
@endsection