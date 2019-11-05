@extends('layouts.layout')

@section('headtitle', 'Planning Group')
@section('classPageName','Planning Group overzicht')
@section('header')
@endsection

@section('title')
Planninggroup INDEX Page
@endsection

@section('section')
<div class="container">
    <h3>Aangemaakte planning groepen.</h3>
    <table class="table">
        <thead>
            <tr >
                <th>groupname</th>
                <th>aanmaak datum</th>
            </tr>

        </thead>
        @if($planninggroup ?? '')
            @foreach($planninggroup as $planninggrouprow)
            <tr >
                <td >{{$planninggrouprow->Groupname}}</td>
                <td >{{$planninggrouprow->created_at}}</td>
            </tr>
            @endforeach
        @endif
    </table>
</div>
@endsection
