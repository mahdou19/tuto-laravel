@extends('admin.admin')

@section('title', 'Tous les option')

@section('content')
    <div class="d-flex justify-content-between align-item-center">
        <h1>@yield('title')</h1>
        <a href="{{ route('admin.option.create') }}" class="btn btn-primary my-auto">Ajouter un option</a>
    </div>

    <table class="table-striped table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col" class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($options as $option)
                <tr>
                    <th>{{ $option->name }}</th>

                    <td>
                        <div class="d-flex w-100 justify-content-end gap-3">
                            <a href="{{ route('admin.option.edit', $option) }}" class="btn btn-primary">Editer</a>
                            <form action="{{ route('admin.option.destroy', $option) }}" method="POST">
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

    {{ $options->links() }}
@endsection
