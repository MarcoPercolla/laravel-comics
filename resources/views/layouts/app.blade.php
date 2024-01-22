<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "DC Comics")</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    @include('partials.header')
    @include('partials.jumbo')
    @include('partials.cardDisplay')
    @include('partials.prodotti')
    @include('partials.footer')




</body>

</html>