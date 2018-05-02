@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Treatment Data</h2>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ App\Patient::find($visit->patientid)->name }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ '/treat/' . $visit->id }}">
                        @csrf

                        <div class="form-group row">
                            <label for="diagnosis" class="col-sm-4 col-form-label text-md-right">Diagnosis</label>

                            <div class="col-md-6">
                                <input id="diagnosis" type="text" name="diagnosis" required autofocus>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit Treatment
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection