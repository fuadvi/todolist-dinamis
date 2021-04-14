<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todo list</title>
    {{-- styling css --}}
    @include('includes.style')

</head>
<body>
    <div class="container">
        <div class="header my-5">
            <h1 class="display-2 text-center">Target Hari Ini <span class="text-danger">?</span></h1>
        </div>

        {{-- list todo --}}
        @yield('content')
    </div>
</body>
</html>
