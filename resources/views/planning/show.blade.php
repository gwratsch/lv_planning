@extends('layouts.layout')

@section('headtitle', 'Planning')
@section('classPageName','Planning overzicht')
@section('header')
@endsection

@section('title')
Planning INDEX Page
@endsection

@section('section')
<div class="container">
    <h3>Aangemaakte planning.</h3>
    <table class="table">
        <thead>
            <tr >
                <th>Naam</th>
                <th>Omschrijving</th>
                <th>Userid</th>
                <th>Groupname</th>
                <th>Start datum</th>
            </tr>

        </thead>
        @if($planning)
            @foreach($planning as $planningrow)
            <tr >
                <td >{{$planningrow->name}}</td>
                <td >{{$planningrow->description}}</td>
                <td >{{$planningrow->userid}}</td>
                <td >{{$planningrow->Groupname}}</td>
                <td >{{$planningrow->start_date}}</td>
            </tr>
            @endforeach
        @endif
    </table>
</div>
@endsection
