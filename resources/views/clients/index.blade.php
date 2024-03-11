@extends('layout')

@section('content')
    <h1>Client List</h1>
    <a href="{{ route('clients.create') }}" class="btn btn-success">Create Client</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Num_Client</th>
                <th>Nom_Client</th>
                <th>Pre_Client</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->Num_Client }}</td>
                    <td>{{ $client->Nom_Client }}</td>
                    <td>{{ $client->Pre_Client }}</td>
                    <td>
                        <a href="{{ route('clients.show', $client->Num_Client) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('clients.edit', $client->Num_Client) }}" class="btn btn-warning">Edit</a>
                        <form method="POST" action="{{ route('clients.destroy', $client->Num_Client) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection