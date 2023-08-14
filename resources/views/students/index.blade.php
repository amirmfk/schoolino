@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<a href="{{route('student.create')}}">Create new Student</a>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Father Name</th>
            <th>Base</th>
            <th>Major</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->lastname }}</td>
                <td>{{ $student->father_name }}</td>
                <td>{{ $student->Base }}</td>
                <td>{{ $student->Major }}</td>
                <td>
                    <form action="{{ route('student.destroy',$student->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('student.show',$student->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('student.edit',$student->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>




@endsection
