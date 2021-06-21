@extends('layouts/app')


@section('content')


Edit {{ $grocery->name }}


<a href="/groceries/{{ $grocery->id }}/edit">{{$grocery->name}}</a>


<form method="POST" action="/groceries/{{ $grocery->id }}">
    @csrf
    @method('PATCH')

    <label for="name">Name</label><br>
    <input 
        type="text" 
        id="name" 
        name="name"
        value="{{ $grocery->name }}"><br>

    @if($errors->has('name'))
        <p class="help is-danger">{{ $errors->first('name') }}</p>
    @endif
    
    <label for="price">Price</label><br>
    <input 
        type="text" 
        id="price" 
        name="price"
        value="{{ $grocery->price }}"><br>

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
        value="{{ $grocery->number }}"><br>

    @if($errors->has('number'))
        <p class="help is-danger">{{ $errors->first('number') }}</p>
    @endif

    <input type="submit">
</form>
@endsection