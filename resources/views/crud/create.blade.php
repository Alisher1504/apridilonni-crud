@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-3">
            <form action="{{ url('store') }}" method="POST">

                @csrf

                <input class="form-control mb-2" type="text" name="name" placeholder="Name" required>
                <input class="form-control mb-2" type="email" name="email" placeholder="Email" required>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>

@endsection
