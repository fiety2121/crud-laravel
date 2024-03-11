@extends('layout')

@section('content')
    <h1>Create Client</h1>
    <form method="POST" action="{{ route('clients.store') }}">
        @csrf
        <div class="form-group">
            <label for="Nom_Client">Nom_Client:</label>
            <input type="text" class="form-control" id="Nom_Client" name="Nom_Client">
        </div>
        <div class="form-group">
            <label for="Pre_Client">Pre_Client:</label>
            <input type="text" class="form-control" id="Pre_Client" name="Pre_Client">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection 