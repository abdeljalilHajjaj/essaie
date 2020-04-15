@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-10">
            <form class="form-group" action="{{url('InscriptionPatient')}}" method="post">
            @csrf
                    <label for="Nom">Nom</label>
                    <input type="text" class="form-control" name="nom">

                    <label for="Prenom">Prenom</label>
                    <input type="text" class="form-control" name="prenom"  >

                    <label for="Numéro de registre national">Numéro de registre national</label>
                    <input type="text" class="form-control" name="numero_registre_nat" >
                    
                    <label for="Adresse">Adresse</label>
                    <input type="text" class="form-control" name="adresse" >
                    
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email"  >

                    <label for="Gsm">Gsm</label>
                    <input type="tel" class="form-control" name="gsm"  >

                    <label for="password">Mot de passe</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="mdp" required autocomplete="new-password">
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                    <label for="password-confirm">Confirmer le mot de passe</label>
                    <input id="password-confirm" type="password" class="form-control" name="mdp_confirm" required autocomplete="new-password">
                    
                    
                    <input class="btn btn-primary" type="submit" value="Envoyer">



                
            </form>
            </div>
        </div>
    </div>
    
@endsection