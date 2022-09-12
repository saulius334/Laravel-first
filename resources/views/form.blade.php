<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if (Session::has('ans'))
<h2>{{ Session::get('ans') }}</h2>
@endif



    {{-- @if ($ans != 'Matai mane jei nieko nera') 
        <h2>{{$ans}}</h2>
    @endif --}}
    <form action="{{route('calculate')}}" method="POST">
        KFC : <input type="text" name="number1"/><br><br>
        McDonals<input type="text" name="number2"/><br><br>
        @csrf
        <button type="submit">Subway</button>
    </form>
</body>
</html>