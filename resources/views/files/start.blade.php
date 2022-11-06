@extends('layouts.layout')
@section('content')
<div class="container">
    <div>
        <div>
            <img src="{{ asset('img/_gupef50940bka42ak4b8ekad8ck5ad3e74c64ce.jpg') }}">
        </div>
        <div>
            <p>Sie möchten wissen, wie viele Kalorien Sie am Tag verbrauchen?<br> Mit unserem Rechner können Sie ganz einfach Ihren individuellen Bedarf ermitteln.
            Teilen Sie dafür die 24 Stunden eines Tages in unterschiedliche <br>Aktivitäten wie Sport, Arbeit und Schlaf auf.<br>
            Wichtig: Um möglichst passende Werte zu erhalten, sollten Sie die <br>unterschiedlichen Tätigkeiten so genau wie möglich bewerten und im Zweifel eher <br>ab- als aufrunden.<br>
            Der Rechner wandelt Ihre Angaben in das "Metabolische Äquivalent"<br> (MET) um, um den Energieverbrauch der unterschiedlichen Aktivitäten vergleichbar<br> zu machen.<br>
            <strong>Der Kalorienbedarfsrechner gilt für gesunde, normalgewichtige <br>Erwachsene ab 18 Jahren. Sollten Sie an chronischen Krankheiten oder Übergewicht <br>leiden,
            wenden Sie sich bitte an Ihren Arzt, um Ihren individuellen Bedarf zu ermitteln.</strong>
        </p>
        </div>
    </div>

 <div style="float: right">
     <a href="caloriesSleep">
     <button type="button" class="btn btn-outline-secondary">Berechnen starten</button>
     </a>
 </div>
</div>
    <br>
@endsection
