@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Select Specialist') }}</div>

                <div class="card-body">
<form action="doctors" method="post">
   <p style="color: #00B2EE"> {{session('success')}} </p>
   <p style="color: #FF0000"> {{session('fail')}} </p>

    {{ @csrf_field() }}
                       <select name="special" id="" class="form-control">

                        @foreach ($specialist as $item)
                    <option value="{{$item->id}}">{{$item->type}}</option>
                        @endforeach
                    </select>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Check Doctors</button>
</form>
                </div>
            </div><br><br>
            <a href="userAppointments" class="btn btn-primary">View My Appointments</a>
        </div>
    </div>
</div>
@endsection
