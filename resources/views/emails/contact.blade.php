<!DOCTYPE html>
<html>

<head>
    <title>Contact Us Form Submission</title>
</head>

<body>
    <p>You have received a new message from the contact form on your website:</p>
    <p><strong>Name:</strong> {{ $data->name }}</p>
    <p><strong>Email:</strong> {{ $data->email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data->message }}</p>
</body>

</html>