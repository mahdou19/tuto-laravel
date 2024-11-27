@extends('admin.admin')

@section('title', $property->exists ? 'Editer un bien' : 'Creer un bien')

@section('content')
    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', ['property' => $property]) }}" method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')

        <div class="row">
            @include(
                'shared.input',
                [
                    'name' => 'title',
                    'label' => 'Titre',
                    'value' => $property->title,
                    'class' => 'col',
                ]
            )
            <div class="col row">
                @include(
                    'shared.input',
                    [
                        'name' => 'surface',
                        'label' => 'Surface',
                        'value' => $property->surface,
                        'class' => 'col',
                    ]
                )
                @include(
                    'shared.input',
                    [
                        'name' => 'price',
                        'label' => 'Prix',
                        'value' => $property->price,
                        'class' => 'col',
                    ]
                )
            </div>
        </div>

        @include(
            'shared.input',
            [
                'name' => 'description',
                'label' => 'Description',
                'value' => $property->description,
                'type' => 'textarea',
            ]
        )

        <div class="row">
            @include(
                'shared.input',
                [
                    'name' => 'rooms',
                    'label' => 'Pièces',
                    'value' => $property->rooms,
                    'class' => 'col',
                ]
            )
            @include(
                'shared.input',
                [
                    'name' => 'bedrooms',
                    'label' => 'Chambres',
                    'value' => $property->bedrooms,
                    'class' => 'col',
                ]
            )
            @include(
                'shared.input',
                [
                    'name' => 'floor',
                    'label' => 'Etages',
                    'value' => $property->floor,
                    'class' => 'col',
                ]
            )
        </div>

        <div class="row">
            @include(
                'shared.input',
                [
                    'name' => 'adress',
                    'label' => 'Adresse',
                    'value' => $property->adress,
                    'class' => 'col',
                ]
            )
            @include(
                'shared.input',
                [
                    'name' => 'city',
                    'label' => 'Ville',
                    'value' => $property->city,
                    'class' => 'col',
                ]
            )
            @include(
                'shared.input',
                [
                    'name' => 'postal_code',
                    'label' => 'Code postal',
                    'value' => $property->postal_code,
                    'class' => 'col',
                ]
            )
        </div>
        <div class="col row">
            @include(
                'shared.checkbox',
                [
                    'name' => 'sold',
                    'label' => 'Vendu',
                    'value' => $property->sold,
                ]
            )
        </div>

        <div>
            <button type="submit" class="btn btn-primary">
                @if ($property->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>
    </form>
@endsection
