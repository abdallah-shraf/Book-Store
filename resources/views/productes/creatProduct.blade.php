@extends('../layouts.header')
@section('content')
@section('title')
Create Product
@endsection
@include('../layouts.minneheader')
<div class="form-container">
    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="">Book Name</label><br><br>
        <input type="text" class="box form-control " name="Book_Name" required><br><br>


        <label for=""> About of Book</label><br><br>
        <textarea class="box form-control "name="about" required ></textarea><br><br>


        <div class="form-group">
            <label for="exampleInputEmail1">أسم القسم</label>
            <select name="section_id" id="section_id" class="form-control" required >
                <option value=""select disabled> ---حددالقسم-----</option>
                @foreach ( $section as $Data  )
                    <option value="{{$Data->id}}">{{$Data->Section_Name}}</option>
                @endforeach
            </select>
        </div>

        <label for="">Price</label><br><br>
        <input type="text" class="box form-control " name="Price" required><br><br>

        <label for="">AutherName</label><br><br>
        <input type="text" class="box form-control "name="Auther_Name" required><br><br>

        <label for="">Photo Book</label><br><br>
        <input type="file" class="box form-control "name="Image_Product" required><br><br>

        <button type="submit" class="btn">add Book</button><br><br>
    </form>

</div>




@include('layouts.minefooter')


@endsection
