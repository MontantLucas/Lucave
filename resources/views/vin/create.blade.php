<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Creation demande de vin
        </h2>
    </x-slot>

    <div>

        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger w-100" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <form  method="POST" action="{{ route('vin.store') }}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom">
                    @error('nom')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="price">Quantite</label>
                    <input type="number" class="form-control" name="quantite" id="quantite">
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Créer</button>
        </form>
    </div>
 
</x-app-layout>