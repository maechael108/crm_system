<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {{-- <a href="#" class="navbar-brand">check</a> --}}
    </nav>
    <div id="app">
        <nav class="navbar navbar-dark  bg-dark">
            <div class="container-fluid">
              <span class="navbar-brand mb-0 h1">Bayag</span>
            </div>
          </nav>
        <h1>this will test the dependencies</h1>
        <example-component />
    </div>

</body>
<script src="{{ asset('js/app.js') }}"></script>
</html>