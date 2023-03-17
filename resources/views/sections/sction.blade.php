@extends('layouts.header')
@section('title')
    section create
@stop

@section('content')
@include('layouts.minneheader2')
<div class="form-container">
    <form action="{{route('sections.store')}}" method="post">
        @csrf
        <input type="text" placeholder="Section Name " class="box form-control " name="Section_Names" required>

        <button type="submit" class="btn">New Section</button>

    </form>
</div>


<script src="js/script.js"></script>

@endsection
