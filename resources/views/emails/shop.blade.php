<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order</title>
</head>
<body>

    <!-- Estos son los datos que se envian por correo a jackyberi67@gmail.com desde el aparatado de contacto -->

    <h1>Contact Form Submission</h1>

    <p><strong>Item:</strong> {{ $item->name }}</p>
    <p><strong>Price:</strong> {{ $item->price }}</p>
    <br>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <br>
    <p><strong>Address:</strong> {{ $data['address'] }}</p>
    <p><strong>Postal code:</strong> {{ $data['postal'] }}</p>
    <p><strong>City:</strong> {{ $data['city'] }}</p>


    
</body>
</html>