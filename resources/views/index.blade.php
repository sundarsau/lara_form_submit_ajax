@extends('layouts.master')
@section('main-content')
<div class="container">
    <h1>Item List</h1>
    <div class="text-end mb-5"><a class="btn btn-success" href="{{route('item.create')}}">+ New Item</a>
    </div>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <th>Id</th>
            <th>Item Name</th>
            <th>Quantity</th>
        </thead>
        <tbody>
            @forelse ($items as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->item_name }}</td>
                <td>{{ $row->quantity }}</td>
            </tr>
            @empty
            <tr>
                <td>No Items to display</td>
            </tr>
            @endforelse

        </tbody>
    </table>
</div>
@endsection