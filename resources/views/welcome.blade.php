
@extends('template.default')

@section('title')
<title>Home</title>
<head>
    <link rel="stylesheet" href="{{url('/css/Home.css')}}">
</head>
@endsection

@section('content')


<main>
    <form class="search-container" action="/ass">
        <h1 class="titleHome">Busque pela a categoria</h1>
        <input type="text" id="search-bar" placeholder="Buscar">
        <a href="#"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
    </form>
    
</main>

@endsection