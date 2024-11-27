@extends('admin.admin')

@section('title', 'Tous les biens')

@section('content')
    <div class="d-flex justify-content-between align-item-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.property.create') }}" class="btn btn-primary my-auto">Ajouter un bien</a>
    </div>

    <table class="table-striped table">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Surface</th>
                <th scope="col">Prix</th>
                <th scope="col">Ville</th>
                <th scope="col" class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property)
                <tr>
                    <th scope="row">{{ $property->title }}</th>
                    <td>{{ $property->surface }}m²</td>
                    <td>{{ number_format($property->price, thousands_separator: ' ') }}</td>
                    <td>{{ $property->city }}</td>
                    <td>
                        <div class="d-flex w-100 justify-content-end gap-3">
                            <a href="{{ route('admin.property.edit', $property) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.property.destroy', $property) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $properties->links() }}
@endsection
