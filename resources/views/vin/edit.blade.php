<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Modifier mon vin
        </h2>
    </x-slot>

    <div class="row">
        <p class="w-100">Ici nous modifions le vin d'id : {{ $vin->id }}.</p>

        <form class="w-100" method="POST" action="{{ route('vin.update', ['vin' => $vin]) }}">
            @csrf
            @method('PUT')
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" value="{{ old('name') ?? $vin->nom }}">
                    @error('nom')
                        <p class="text-danger mb-0">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="quantite">Quantite</label>
                    <input type="number" step="0.01" class="form-control" name="quantite" id="quantite" value="{{ old('quantite') ?? $vin->quantite }}">
                    @error('quantite')
                        <p class="text-danger mb-0">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Modifier</button>
        </form>
    </div>


</x-app-layout>