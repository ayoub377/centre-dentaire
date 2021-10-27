@extends("layout.master")

@section('content')
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="ajouterpatient" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Ajouter Patient</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Supprimer Patient</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/listepatient" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Lister les Patient</span>
                            </a>
                        </li>

                    </ul>
                    <hr>
                </div>
            </div>
            <div class="col py-3">
                <h2 style="border: #1a202c 1px solid;width: 60%">Les 5 derniers Patients Ajouter</h2>
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
                    @foreach($data as $key => $data2)
                        <tr>
                            <th>{{$data2->prenom}}</th>
                            <th>{{$data2->nom}}</th>
                            <th>{{$data2->sexe}}</th>
                            <th>{{$data2->date_de_naissance}}</th>
                            <th>{{$data2->age}}</th>
                            <th>
                                <form action="{{ url('/supprimer/'.$data2->id)}}" method="post">
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                    <input type="hidden" name="_method" value="delete" />
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
