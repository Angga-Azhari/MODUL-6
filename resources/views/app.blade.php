<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" value="{{ csrf_token() }}" />

    <title>Buku App</title>
    
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />

</head>

<body>
    <div id="app"></div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    
</body>
</html>