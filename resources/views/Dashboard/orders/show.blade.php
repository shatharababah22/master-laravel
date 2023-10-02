@extends('Dashboard.Master')

@section('title')
Order Items
@endsection

@section('content')
<div class="container">
    <h2>Order Items</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Quantity</th>
                <th>Column 3</th>
                <th>Subtotal</th>
                <th>OrderID</th>
                <th>ProductID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderItems as $orderItem)
                <tr>
                    <td>{{ $orderItem->id }}</td>
                    <td>{{ $orderItem->Quantity }}</td>
                    <td>{{ $orderItem->column_3 }}</td>
                    <td>{{ $orderItem->products->Name }}</td>
                    <td>{{ $orderItem->Subtotal }}</td>
                    <td>{{ $orderItem->OrderID }}</td>
                    <td>{{ $orderItem->ProductID }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
