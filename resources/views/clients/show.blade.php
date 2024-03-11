@extends('layout')

@section('content')
    <h1>Client Details</h1>
    <p>Nom_Client: {{ $client->Nom_Client }}</p>
    <p>Pre_Client: {{ $client->Pre_Client }}</p>
    <a href="{{ route('clients.edit', $client->Num_Client) }}" class="btn btn-primary">Edit</a>
    <form method="POST" action="{{ route('clients.destroy', $client->Num_Client) }}" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection