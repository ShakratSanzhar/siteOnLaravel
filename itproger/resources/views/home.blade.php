@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad dolore nobis, nisi beatae fuga id quae ratione assumenda, dolor sed soluta neque dignissimos, facere velit eos atque vel. Rerum, odit.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection

