@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-3">
            <form action="{{ url('store-update/'. $edit->id) }}" method="POST">

                @csrf
                @method('PUT')

                <input class="form-control mb-2" type="text" name="name" value="{{ $edit->name }}">
                <input class="form-control mb-2" type="email" name="email" value="{{ $edit->email }}">
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>

@endsection
