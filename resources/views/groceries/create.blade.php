@extends('layouts/app')


@section('content')

<form method="post" action="/groceries">
    @csrf

    <label for="name">Name</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="price">Price</label><br>
    <input type="text" id="price" name="price"><br>
    <label for="number">Amount</label><br>
    <input type="number" id="number" name="number" min="1" max="100"><br>
    <input type="submit">
</form>



@endsection