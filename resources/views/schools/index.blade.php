@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<a href="{{route('school.create')}}">Create new School</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>School Name</th>
            <th>School Address</th>
            <th>Manager Name</th>
            <th>Base</th>
        </tr>
        @foreach ($schools as $school)
            <tr>
                <td>{{ $school->school_name }}</td>
                <td>{{ $school->school_address }}</td>
                <td>{{ $school->manager_name }}</td>
                <td>{{ $school->base }}</td>
                <td>
                    <form action="{{ route('school.destroy',$school->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('school.show',$school->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('school.edit',$school->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>




@endsection
