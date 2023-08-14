@extends('layouts.app')

@section('content')

    <form action="{{ url('ssi') }}" method="get">
        <label for="inputState">Select Class</label>
        <select name="name" id="inputState" class="form-control">
            <option selected>Choose...</option>
            @foreach ($schoolclass as $si)
               <option> {{ $si -> name }} </option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
