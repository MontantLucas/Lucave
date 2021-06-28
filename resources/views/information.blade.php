<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($vin['appellation']) }}
        </h2>
    </x-slot>

    <ul class="list-group" style="margin-top:15px; text-align: center;">
        <li class="list-group-item" style="margin-bottom: 15px; text-align: center;"> <h1>Information  </h1></li>
        <li class="list-group-item">Nom complet : {{$vin['wine']}}</li>
        <li class="list-group-item">Id : {{$vin['wine_id']}}</li>
        <li class="list-group-item">Appelation : {{$vin['appellation']}}</li>
        <li class="list-group-item">classification: {{$vin['classification']}}</li>
        <li class="list-group-item">Pays : {{$vin['country']}}</li>
        <li class="list-group-item">Region : {{$vin['regions'][0]}}</li>
        <li class="list-group-item">Indice de confiance : {{$vin['confidence_index']}}</li>
        <li class="list-group-item">lwin_11 : {{$vin['lwin_11']}}</li>
    </ul>

</x-app-layout>
