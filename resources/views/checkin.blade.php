@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patient Check-in</div>

                <div class="card-body">

                    Welcome : {{ $patient->name }}
                    <br>
                    Please select a doctor: 
                    
                    <form method="POST" action="{{ '/checkin/' . $patient->id }}">
                    {{ csrf_field() }}
                    <select name="doctorid">
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                    @endforeach
                    </select>
                    <input type="submit" value="checkin">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection