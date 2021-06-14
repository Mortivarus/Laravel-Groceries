@extends('layouts/app')


@section('content')

<form method="post" action="/groceries">
    @csrf

    <label for="name">Name</label><br>
    <input 
        type="text" 
        id="name" 
        name="name"
        value="{{ old('name') }}"><br>

    @if($errors->has('name'))
        <p class="help is-danger">{{ $errors->first('name') }}</p>
    @endif
    
    <label for="price">Price</label><br>
    <input 
        type="text" 
        id="price" 
        name="price"
        value="{{ old('price') }}"><br>

    @if($errors->has('price'))
        <p class="help is-danger">{{ $errors->first('price') }}</p>
    @endif
    
    <label for="number">Amount</label><br>
    <input 
        type="number" 
        id="number" 
        name="number" 
        min="1" 
        max="100"
        value="{{ old('number') }}"><br>

    @if($errors->has('number'))
        <p class="help is-danger">{{ $errors->first('number') }}</p>
    @endif


    <input type="submit">
</form>



@endsection