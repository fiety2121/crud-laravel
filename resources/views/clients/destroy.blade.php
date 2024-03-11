@extends('layout')

@section('content')
    <h1>Delete Client</h1>
    <p>Are you sure you want to delete this client?</p>
    <form method="POST" action="{{ route('clients.destroy', $client->Num_Client) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection