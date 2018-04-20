@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Patient Data</h2>
</div>
<table class="table table-bordered">
    <tr>
        <th>Id: </th>
        <th>Name: </th>
        <th>Provider: </th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->provider }}</td>
    </tr>
    @endforeach
</table>
@endsection