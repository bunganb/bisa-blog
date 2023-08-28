@vite('resources/css/app.css')
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>

<body>
    @php
        $name = 'Bunga';
        $name .= 'Nabila';
    @endphp
    {{ $name }}
</body>

</html>
