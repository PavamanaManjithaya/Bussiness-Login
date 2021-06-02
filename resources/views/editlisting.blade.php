@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Edit List') }} <a href="/dashboard" class="float-right btn btn-outline-dark">Go back</a></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['action' => ['App\Http\Controllers\ListingController@update',$listing->id],'method'=>'POST']) !!}
                {{Form::bsText('name',$listing->name,['placeholder'=>'Company Name'])}}
                {{Form::bsText('website',$listing->website,['placeholder'=>'Company Website'])}}
                {{Form::bsText('email',$listing->email,['placeholder'=>'Contact Email'])}}
                {{Form::bsText('phone',$listing->phone,['placeholder'=>'Contact Phone'])}}
                {{Form::bsText('address',$listing->address,['placeholder'=>'Address'])}}
                {{Form::bsTextArea('bio',$listing->bio,['placeholder'=>'about This Bussiness'])}}
                {{Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}}
                {{Form::hidden('_method','PUT')}}
                {!! Form::close() !!}   
            </div>
        </div>
    </div>
</div>  
@endsection