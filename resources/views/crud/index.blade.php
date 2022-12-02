@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('crud-create') }}" class="btn btn-primary mb-5">add crud</a>
    <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
          </tr>
        </thead>
        <tbody>

            @foreach($data as $key)
                @if (Auth::user()->id == $key->user_id)
                    <tr>
                        <td>{{ $key->id }}</td>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->email }}</td>
                    </tr>
                @endif
            @endforeach

        </tbody>
      </table>
</div>
@endsection
