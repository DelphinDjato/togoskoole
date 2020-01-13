@extends('layouts.app2', ['title' => 'Inscription d\'un eleve'])

@section('css')
    <link rel="stylesheet" href="{{ asset('vendors/icheck/skins/all.css') }}">
@endsection

@section('js')
    <template id="inscriptions">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-tile"><b>Ajouter un élève</b></h4>
                        <form class="forms-sample">
                            <div class="row mt-5">
                                <p class="card-description col-md-12">
                                    <b>1) - Premier représentant</b>
                                </p>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Nom et prénoms</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Prénoms du père</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <p class="card-description col-md-12">
                                    <b>2) - Deuxième représentant (Facultatif)</b>
                                </p>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Nom et prénoms</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Prénoms du père</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <p class="card-description col-md-12">
                                    <b>3) - Informations complémentaires (Facultatif)</b>
                                </p>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Nom et prénoms</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Prénoms du père</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <p class="card-description col-md-12">
                                    <b>IV - INFORMATIONS DE ELEVE</b>
                                </p>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Nom*</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Prénoms*</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                                </div>

                                <div class="form-group col-md-2">
                                    <label>Sexe*</label>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="sexe" id="optionsRadios1" value="" checked> Masculin
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-2">
                                    <label></label>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="sexe" id="optionsRadios2" value=""> Feminin
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Pays de naissance*</label>
                                    <select class="form-control">
                                        <option>Togo</option>
                                        <option>Benin</option>
                                        <option>Ghana</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Ville de naissance*</label>
                                    <select class="form-control">
                                        <option>Togo</option>
                                        <option>Benin</option>
                                        <option>Ghana</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Nationalité*</label>
                                    <select class="form-control">
                                        <option>Togo</option>
                                        <option>Benin</option>
                                        <option>Ghana</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Adresse*</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">E-mail*</label>
                                    <input type="email" class="form-control" id="exampleInputName1" placeholder="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Telephone*</label>
                                    <input type="text" class="form-control" id="exampleInputName1" placeholder="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Niveau detude*</label>
                                    <select class="form-control">
                                        <option>Collège</option>
                                        <option>Lycée</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Classe*</label>
                                    <select class="form-control">
                                        <option>Togo</option>
                                        <option>Benin</option>
                                        <option>Ghana</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Sous classe*</label>
                                    <select class="form-control">
                                        <option>Togo</option>
                                        <option>Benin</option>
                                        <option>Ghana</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">*</label>
                                    <select class="form-control">
                                        <option>Togo</option>
                                        <option>Benin</option>
                                        <option>Ghana</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <script src="{{ asset('js/vues/inscription.js') }}" type="module"></script>
@endsection

@section('content')
    <Inscriptions></Inscriptions>
@endsection

