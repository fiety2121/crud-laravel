@extends('layout')

@section('content')
    <h1>Edit Client</h1>
    <form method="POST" action="{{ route('clients.update', $client->Num_Client) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Nom_Client">Nom_Client:</label>
            <input type="text" class="form-control" id="Nom_Client" name="Nom_Client" value="{{ $client->Nom_Client }}">
        </div>
        <div class="form-group">
            <label for="Pre_Client">Pre_Client:</label>
            <input type="text" class="form-control" id="Pre_Client" name="Pre_Client" value="{{ $client->Pre_Client }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection