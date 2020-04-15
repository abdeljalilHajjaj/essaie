@extends('layouts.app')

@section('content')

<div class="container w-50 bg-light">

    <form>

        <input name="patient_id" type="hidden" value=" {{Auth::user()->usereable_id }}  " >

        
        <div class="form-group">
            <label class="" for="nom">Nom</label>
            <input class="form-control" name="nom" type="text" value="{{Auth::user()->nom}}" disabled > 
        </div>

        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" name="prenom" value="{{ Auth::user()->prenom }} " class="form-control" disabled >
          
        </div>
        
        <div class="form-group">
            <label>Numéro de registre national</label>
            <input class="form-control" name="numero_registre_nat" type="text" value="{{Auth::user()->usereable->numero_registre_nat}}" disabled >
        </div>

        <div class="form-group">
          <label for="date">Date et heure </label>
          <input type="text" name="date" id="datetimepicker" class="form-control">
          
        </div>
           
    
    </form>
</div>



<script>

    
</script>
    

@endsection