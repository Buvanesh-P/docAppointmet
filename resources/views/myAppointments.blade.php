@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="home" class="btn btn-primary">Back</a><br><br>

            <div class="card">
                <div class="card-header">{{ __('My Appointments') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Token Number</th>
                                <th>Doctor Name</th>
                                <th>Appointment Date</th>
                                <th>Appointment Time</th>
                            </tr>
                        </thead>
                        <tbody>

            @foreach ($userAppoint as $item)

                            <tr>
                                <td scope="row">{{$item->id}}</td>
                                <td>{{$item->doctor->name}}</td>
                                <td>{{$item->date}}</td>
                                <td>{{$item->time}}</td>
                            </tr>

            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>
    @endsection
