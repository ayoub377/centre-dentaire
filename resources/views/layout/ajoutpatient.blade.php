@extends('layout.master')
@section('content')
<form method="post" action="create">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nom</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nom">
        <label for="exampleInputEmail1">Prenom</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="prenom">
        <label for="exampleFormControlSelect1">sexe</label>
        <select class="form-control" id="exampleFormControlSelect1" name="sexe">
            <option>Homme</option>
            <option>Femme</option>
        </select>
        <label for="exampleInputEmail1">Date naissance</label>
        <input type="date" class="form-control" id="exampleInputEmail1" name="date_naissance">
        <label for="exampleInputEmail1">age</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="age">
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
@endsection
