@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Patient Data</h2>

    <p> {{ $message }} </p>

</div>
<table class="table table-bordered">
    <tr>
        <th>Id: </th>
        <th>Name: </th>
        <th>Provider: </th>
        <th>Status:</th>
    </tr>
    
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->provider }}</td>
        <td><form method="GET" action="{{ '/checkin/' . $user->id }}"><input type="submit" value="Check-In"/></form></td>
    </tr>

    @endforeach

</table>
@endsection