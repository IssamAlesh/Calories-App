@extends('layouts.layout')
@section('content')
<div class="container">
    <div>
        <div>
            <img src="{{ asset('img/gesundheit-wieviel-schlaf.webp') }}" style="width: 500px; height: 250px">
        </div>
        <div>
            <h3><i class="moon icon"></i> Schlaf</h3>
            <p>Wie viele Stunden schlafen Sie durchschnittlich pro Nacht?</p>
        </div>
        <div class="ui form">
            <div class="fields">
                <div class="field">
                    <label>Täglicher Schlaf in Stunden</label>
                    <input type="text" placeholder="Täglicher Schlaf in Stunden">
                </div>
            </div>
    </div>

    <div style="float: right">
        <a href="start">
            <button type="button" class="btn btn-outline-secondary">Zurück</button>
        </a>
        <a href="caloriesWork">
            <button type="button" class="btn btn-outline-secondary">Speichern und zur nächsten Eingabe</button>
        </a>
</div>
</div>
@endsection
