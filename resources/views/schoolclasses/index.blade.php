@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<a href="{{route('schoolclass.create')}}">Create new School Class</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Base</th>
            <th>Major</th>
            <th>School id</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($schoolclasses as $schoolclass)
            <tr>
                <td>{{ $schoolclass->name }}</td>
                <td>{{ $schoolclass->base }}</td>
                <td>{{ $schoolclass->Major }}</td>
                <td>{{ $schoolclass->school_id }}</td>
                <td>
                    <form action="{{ route('schoolclass.destroy',$schoolclass->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('schoolclass.show',$schoolclass->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('schoolclass.edit',$schoolclass->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>




@endsection
