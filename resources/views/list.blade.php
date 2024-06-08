<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="/img/descansa_logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="resources/css/design.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
@include('navbar') <br>
    <div class="container mx-auto py-8">
        <h1 class="font-museo font-bold text-5xl text-center mb-8">Order List</h1>
        <table class="table-auto w-full bg-white shadow-md rounded my-6">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200">Order ID</th>
                    <th class="px-4 py-2 bg-gray-200">Total Price</th>
                    <th class="px-4 py-2 bg-gray-200">Order Date</th>
                    <th class="px-4 py-2 bg-gray-200">Items</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="border px-4 py-2">{{ $order->id }}</td>
                        <td class="border px-4 py-2">₱{{ $order->total_price }}</td>
                        <td class="border px-4 py-2">{{ $order->order_date }}</td>
                        <td class="border px-4 py-2">
                            <ul>
                                @foreach ($order->items as $item)
                                    <li>
                                        {{ $item->product_name }} - ₱{{ $item->product_price }} x {{ $item->quantity }} = ₱{{ $item->total_price }}
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
