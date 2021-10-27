@extends('layout.master')

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">Sexe</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">Age</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($patients as $key => $data)
            <tr>
                <th>{{$data->prenom}}</th>
                <th>{{$data->nom}}</th>
                <th>{{$data->sexe}}</th>
                <th>{{$data->date_de_naissance}}</th>
                <th>{{$data->age}}</th>
                <th>
                    <form action="{{ url('/supprimer/'.$data->id)}}" method="post">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                        <input type="hidden" name="_method" value="delete" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>

                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
