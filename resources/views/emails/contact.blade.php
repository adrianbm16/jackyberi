<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- Estos son los datos que se envian por correo a jackyberi67@gmail.com desde el aparatado de contacto -->

    <h1>Contact Form Submission</h1>

    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Number:</strong> {{ $data['number'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
    <p><strong>Message:</strong> {{ $data['message'] }}</p>
    
</body>
</html>