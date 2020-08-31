@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="home" class="btn btn-primary">Back</a><br><br>

            <div class="card">
                <div class="card-header">{{ __(' Appointment Form') }}</div>

                <div class="card-body">
<form action="appointment" method="post">

    {{ @csrf_field() }}
                       <select name="doctors" id="" class="form-control">

                        @foreach ($docList as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select><br><br>
                    <input type="date" name="date" id="" class="form-control">
                    <br><br>
                    <select name="time" class="form-control">
                        <option value="9-10AM">9-10AM</option>
                        <option value="10-11AM">10-11AM</option>
                        <option value="1-2PM">1-2PM</option>
                        <option value="2-3PM">2-3PM</option>
                        <option value="3-4PM">3-4PM</option>
                    </select>
                    <br><br>
                    <button type="submit" class="btn btn-primary">Fix Appointment</button>
</form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
