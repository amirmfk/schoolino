@extends('layouts.app')

@section('content')
    @foreach($student as $sn)
        <p>{{ $sn -> name }}</p>
    @endforeach

@endsection
