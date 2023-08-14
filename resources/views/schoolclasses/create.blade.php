@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New School Class</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('schoolclass.index') }}"> Back</a>
            </div>
        </div>
    </div>
    'name', 'base','Major','school-id'

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('schoolclass.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <label>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Base:</strong>
                    <label>
                        <input type="number" class="form-control"  name="base" placeholder="Base"></input>
                    </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Major:</strong>
                    <label>
                        <input class="form-control"  name="Major" placeholder="Major"></input>
                    </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>school_id:</strong>
                    <label>
                        <input type="number" class="form-control"  name="school_id" placeholder="school_id"></input>
                    </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
