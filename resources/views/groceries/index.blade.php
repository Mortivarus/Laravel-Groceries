
@extends('layouts/app')


@section('content')
<table>
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
            <th>Edit</th>
            <th>Verwijder</th>
        </tr>
    
    <?php 
    foreach(App\Models\Grocery::orderBy('name', 'ASC')->get() as $item): ?>
        <tr>
            <td><?= $item->name;  ?></td>
            <td><?= $item->price;  ?></td>
            <td><?= $item->number;  ?></td>
            <td><?= $item->number * $item->price;  ?></td>
            <td>
                <form method="get" action="/groceries/{{ $item->id }}/edit">
                    @csrf
                    <input type="submit" value="Click" >
                </form>
            </td>
            <td>
                <form method="post" action="/groceries/{{ $item->id }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Click" >
                </form>
            </td>
        </tr>
    <?php endforeach; ?>

    </table>






@endsection