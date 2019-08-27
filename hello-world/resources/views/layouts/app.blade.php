<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Poppleton Dog Show
    </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">

    <link rel="icon" type="image/png" href="{{ asset ('images/favicon.png') }}" />

</head>
<body>

<div class="container">

    <h1 class="title">
        @yield ('page_heading', 'Poppleton Dog Show')
    </h1>

    @yield ('content')

</div>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>
</html>
