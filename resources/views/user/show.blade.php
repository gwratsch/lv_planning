@extends('layouts.layout')

@section('headtitle', 'User page')
@section('classPageName','Gebruikers overzicht')
@section('header')
@endsection

@section('title')
Users INDEX Page
@endsection

@section('section')
<div class="container">
    <h3>Aangemaakte gebruikers</h3>
    <table class="table">
        <thead>
            <tr >
                <th>Id</th>
                <th>Naam</th>
                <th>E-mail</th>
            </tr>

        </thead>
        @if($users)
            @foreach($users as $usersrow)
            <tr >
                <td >{{$usersrow->id}}</td>
                <td >{{$usersrow->name}}</td>
                <td >{{$usersrow->email}}</td>
            </tr>
            @endforeach
        @endif
    </table>
</div>
@endsection
