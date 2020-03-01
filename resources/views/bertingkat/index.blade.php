@extends('layouts.app')
@section('content')

    <br/>
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}  
        </div>
    @endif
    {!! csrf_field() !!}
    <div class="row">
        <div class="col-md-3">
            <label for="kecamatanlbl">Kecamatan</label>
            {!! Form::select('kecamatan', $data_kec, null, ['class'=>'form-control']) !!}
        </div>

        <div class="col-md-3">
            <label for="kelurahanlbl">Kelurahan</label>
            {!! Form::select('kelurahan',[''=>'--- Select Kelurahan ---'],null,['class'=>'form-control']) !!}
        </div>
    </div>

@endsection