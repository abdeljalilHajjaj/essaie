@extends('layouts.app')

@section('content')

<h1 class="text-center">Bienvenue</h1>


<div class="container float-left w-75">
    
        <div class="col-lg-12">
            <img class="h-100 w-100" src=" {{asset('image/LMed.jpg')}} "/>
        </div>
</div>   
<div class="container float-right w-25 bg-secondary">
        
       <div class="row border border-primary">
            <div class="col-xs-5 float-left w-50 h-100">
                <a href="http://www.medicalinfo.ch/internet-pour-tous/lelectrocardiogramme-de-lapple-watch-une-app-utile-ou-uniquement-angoissante">
                    <img class="img-responsive w-100" alt="" src="http://www.medicalinfo.ch/images/articles/_thumbnailsNewArticles/ECG.jpg">
                </a>
            </div>
            <div class="col-xs-7 float-right w-50">
                <h2 style="font-size: 1vw;">
                    <a href="http://www.medicalinfo.ch/internet-pour-tous/lelectrocardiogramme-de-lapple-watch-une-app-utile-ou-uniquement-angoissante">
                        <span  aria-hidden="true"></span>
                     L’électrocardiogramme de l’Apple Watch: une app utile ou uniquement angoissante ?</a>
                </h2>
                <p style="font-size: 0.8vw;margin:0 0 0">L’histoire de la dernière série de l’Apple Watch et de...</p>
                <p >04/05/2019 | Par Jean Gabriel Jeannot</p>
            </div>
		
        </div>    
        
            
</div>
           

        






@endsection