@extends('layouts.app')


@section('content')

    


    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $personnage->nom }}</td>
        </tr>

        <tr>

            <th>Company:</th>
            <td>{{ $personnage->company }}</td>

        </tr>

        <tr>

            <th>détail:</th>
            <td>{{ $personnage->detail }}</td>

        </tr>

        <tr>

            <th>Fortune:</th>
            <td>$ {{ $personnage->fortune }}</td>

        </tr>

    </table>

@endsection