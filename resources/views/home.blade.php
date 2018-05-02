@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <table class="table table-bordered">
                <tr>
                    <th>PatientId: </th>
                    <th>Name: </th>
                    <th>Diagnosis: </th>
                </tr>
                
                @foreach($visits as $visit)
                <tr>
                    <td>{{ $visit->patientid }}</td>
                    <td>{{ App\Patient::find($visit->patientid)->name }}</td>
                    <td>{{ $visit->diagnosis }}</td>
                    <td><form method="GET" action="{{ '/treat/' . $visit->id }}"><input type="submit" value="Treat"/></form></td>
                </tr>

                @endforeach

            </table>
            </div>
        </div>
    </div>
</div>
@endsection
