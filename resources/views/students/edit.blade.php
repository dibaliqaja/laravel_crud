@extends('layouts.app')
{{-- @section('title', 'Templating Blade')

@section('main') --}}
@section('content')

@if (count($errors)>0)
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <div class="container">
        <h3>Edit Student Form</h3>
        <form action="{{ route('crud.update', $students->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" value="{{ $students->name }}">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea class="form-control" name="address" id="">{{ $students->address }}</textarea>
            </div>
            <div class="form-group">
                <label for="">Faculty</label>
                <input type="text" class="form-control" name="faculty" id="" value="{{ $students->faculty }}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>

@endsection
