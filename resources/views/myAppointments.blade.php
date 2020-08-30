@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Appointments') }}</div>

                <div class="card-body">
@foreach ($userAppoint as $item)
    <b>Doctor ID:</b>{{$item->doctors_id}}<br>
    <b>Appointment Date:</b>{{$item->date}}<br>
    <b>Appointment Time:</b>{{$item->time}}<br><br>
@endforeach
                </div>
            </div><br><br>

        </div>
    </div>
</div>
@endsection
