@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
     
    <form method="POST" action="{!! url('product') !!}">
        @csrf

        <div>
            <label for="title">title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="short_notes">short_notes:</label>
            <textarea name="short_notes" id="short_notes" required>{{ old('short_notes') }}</textarea>
        </div>
        <div>
            <label for="slug">slug:</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug') }}" required>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}" step="0.01" required>
        </div>
        <div>
            <label for="image">image:</label>
            <input name="image" id="image" required>{{ old('image') }}</input>
        </div>

        <button type="submit">Create</button>
    </form>
@endsection