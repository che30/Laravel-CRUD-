@extends('layouts.app') 
@section('content')
@if ($product)
{
<div class="container">
<div>
   testing my edit view {{$product -> title}} 
</div>
@section('content')
    <h1>update Product</h1>
	<!-- <form action="{{ route('product.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')
<form method="post" action="{{ url('product/'.$product->id) }}"> -->
     
    <form method="post" action="{!! url('product/'.$product->id) !!}">
        @csrf
		@method('PUT')
        <div>
            <label for="title">title:</label>
            <input type="text" name="title" id="title" value="{{ old('name', $product -> title) }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" >{{old('name', $product -> description )}}</textarea>
        </div>
		<div>
            <label for="short_notes">short_notes:</label>
            <textarea name="short_notes" id="short_notes" required>{{old('name',  $product -> short_notes)}}</textarea>
        </div>
        <div>
            <label for="slug">slug:</label>
            <input type="text" name="slug" id="slug" value="{{old('name',  $product -> slug) }}" required>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" value="{{old('name',  $product -> price )}}" step="0.01" required>
        </div>
        <div>
            <label for="image">image:</label>
            <input name="image" id="image" required value="{{old('name',  $product -> image )}}"></input>
        </div>


        <button type="submit">update</button>
    </form>
}
@else
    <div>
        nothing to show yet
    </div>
@endif
@endsection