@extends('layouts.layout')

@section('headtitle', 'Planning')
@section('classPageName','show')
@section('header')
@endsection

@section('title')
Planning Show Page
@endsection

@section('section')
<div class="container">
    <h3>Planning Info</h3>
    <div class="box">
        <form method="post" action="/party/{{$planning->id}}">
            @method('PATCH')
            @csrf
            <div class="field ">
                <label class="label">Planning</label>
                <div class="control">
                    <textarea class="textarea" name="partyinfo">{{$planning->planninginfo}}</textarea>
                </div>
            </div>
            <div class="field">
                <label class="label">Locatie</label>
                <div class="control">
                    <textarea class="textarea" name="location">{{$planning->location}}</textarea>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <button class="submit button is-link" type="submit">Update</button>
                </div>
            </div>    
        </form>
        <form method="post" action="/party/{{$planning->id}}">
            @method('DELETE')
            @csrf
            <button class="submit button" type="submit">Delete</button>
        </form>
    </div>
</div>
@endsection

