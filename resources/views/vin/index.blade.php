<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mes vins
        </h2>
        
    </x-slot>

    <div class="row">

<nav class="navbar navbar-light bg-light w-100 mb-4">
    <form class="form-inline w-100">
        <input class="form-control mr-sm-2 col-8" type="search" name="search" placeholder="Rechercher parmi mes alertes" aria-label="Search">
        <button class="col-3 btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        
    </form>

    <p class="mt-3 px-2">Recherche en cours : <span class="font-weight-bold">{search}</span></p>
    <x-nav-link :href="route('vin.create')">
                        Nouveau vin
                    </x-nav-link>

</nav>

    @foreach(auth()->user()->vin as $vin)
        <div class="w-100 shadow-sm mb-4 rounded px-4 py-3 d-flex justify-content-between align-items-center">
            <p class="mb-0">{{ $vin->nom }} |  Quantite :  {{ $vin->quantite }}</p>
            <div class="d-flex">
                <div class="mr-2">
                    <a class="btn btn-secondary" href="{{ route('vin.edit', ['vin' => $vin]) }}">Modifier</a>
                </div>
                <div>
                    <form class="w-100" method="POST" action="{{ route('vin.delete', ['vin' => $vin]) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
 
</x-app-layout>