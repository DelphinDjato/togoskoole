@extends('layouts.app2', ['title' => 'Ajout d\'un Enseignant'])

@section('css')
    <link rel="stylesheet" href="{{ asset('vendors/icheck/skins/all.css') }}">
@endsection

@section('js')
    <template id="enseignants">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-tile"><b>Ajouter un Enseignant</b></h4>
                       
                            <div class="row mt-5">
                             
                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Nom* </label>
                                    <input type="text" class="form-control"  v-model= "newTeacher.nom"  placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Prénoms*</label>
                                    <input type="text" class="form-control" v-model= "newTeacher.prenoms"  placeholder="">
                                </div>
                            </div>

                            <div class="row mt-5">
                              
                                <div class="form-group col-md-2">
                                    <label>Sexe*</label>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" v-model= "newTeacher.sexe" name="sexe" id="optionsRadios1" value="Masculin" checked> Masculin
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-2">
                                    <label></label>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" v-model= "newTeacher.sexe" name="sexe" id="optionsRadios2" value="Feminin"> Feminin
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">date de naissance*</label>
                                    <input type="text" class="form-control" v-model= "newTeacher.date_naissance"  placeholder="">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">lieu de naissance*</label>
                                    <input type="text" class="form-control" v-model= "newTeacher.lieu_naissance"  >
                                </div>
                             
                                   
                            </div>

                            <div class="row mt-5">
                               
                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Nationalité*</label>
                                    <select class="form-control" v-model= "newTeacher.nationalite">
                                        <option value="Togo">Togo</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Ghana">Ghana</option>
                                    </select>
                                </div>

                                 <div class="form-group col-md-4">
                                    <label for="exampleInputName1">Adresse*</label>
                                    <input type="text" class="form-control" v-model= "newTeacher.adresse"  placeholder="">
                                </div>


                                <div class="form-group col-md-4">
                                    <label for="exampleInputName1">E-mail*</label>
                                    <input type="email" class="form-control" v-model= "newTeacher.email"  placeholder="">
                                </div>

                                   
                            </div>

                            <div class="row mt-5">
                               
                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Telephone*</label>
                                    <input type="text" class="form-control" v-model= "newTeacher.telephone" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputName1">Diplome*</label>
                                    <input type="text" class="form-control" v-model= "newTeacher.diplome"  placeholder="">
                                </div>

                              {{--   <div class="form-group col-md-2">
                                    <label class="col-md-2 label-control">Select une image</label>
                                </div> --}}

                           

                               

                              

                                   
                            </div>

                            

                            <button class="btn btn-light">Cancel</button>
                            <button  class="btn btn-success mr-2"  @click="addTeacher()" >Submit</button>


                            

                       
                    </div>
                </div>
            </div>
        </div>
    </template>

    <script src="{{ asset('js/vues/enseignant.js') }}" type="module"></script>
@endsection

@section('content')
    <Enseignants></Enseignants>
@endsection

