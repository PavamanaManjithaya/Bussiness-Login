@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Create List') }}<a href="/dashboard" class="float-right btn btn-outline-dark">Go back</a></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['action' => 'App\Http\Controllers\ListingController@store']) !!}
                {{Form::bsText('name','',['placeholder'=>'Company Name'])}}
                {{Form::bsText('website','',['placeholder'=>'Company Website'])}}
                {{Form::bsText('email','',['placeholder'=>'Contact Email'])}}
                {{Form::bsText('phone','',['placeholder'=>'Contact Phone'])}}
                {{Form::bsText('address','',['placeholder'=>'Address'])}}
                {{Form::bsTextArea('bio','',['placeholder'=>'about This Bussiness'])}}
                {{Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}}
                {!! Form::close() !!}   
            </div>
        </div>
    </div>
</div>  
@endsection