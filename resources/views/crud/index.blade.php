@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('status'))
        <div class="card p-3 bg-success mb-3 text-white">
            {{ session('status') }}
        </div>
    @endif

    <a href="{{ url('crud-create') }}" class="btn btn-primary mb-5">add crud</a>
    <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>

            @foreach($data as $key)
                @if (Auth::user()->id == $key->user_id)
                    <tr>
                        <td>{{ $key->id }}</td>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->email }}</td>
                        <td>
                            <a href="{{ url('edit-crud/' . $key->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('delete/' . $key->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endif
            @endforeach

        </tbody>
      </table>
</div>
@endsection
