<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Bievenue sur notre site ! ') }}
    </h2>
</x-slot>
        <div class="row">
        @foreach($vins as $vin)
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 mb-4">
                <div class="shadow px-4 py-3 rounded text-center">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 text-truncate">{{ $vin['wine'] }}</h5>
                        @if($vin['color'] == 'Red')
                            <img width="80" src="https://previews.123rf.com/images/gomolach/gomolach1703/gomolach170300080/75107651-verre-%C3%A0-vin-r%C3%A9aliste-de-vecteur-avec-l-ic%C3%B4ne-du-vin-rouge-isol%C3%A9-sur-fond-transparent-mod%C3%A8le-de-conception-en.jpg"/>
                        @endif
                        @if($vin['color'] == 'White')
                            <img width="80" src="https://previews.123rf.com/images/gomolach/gomolach1703/gomolach170300082/75075278-verre-%C3%A0-vin-r%C3%A9aliste-vector-avec-ic%C3%B4ne-de-vin-blanc-isol%C3%A9-sur-fond-transparent-mod%C3%A8le-de-conception-en-eps10-.jpg"/>
                        @endif
                    </div>
                    <p> {{$vin['country']}}   {{$vin['regions'][0]}}  </p>
                    <a class="mt-3 btn btn-primary w-100" href="vin/{{$vin['wine_id']}}"> Plus d'informations </a>
                </div>
            </div>
        @endforeach
        </div>

</x-app-layout>
