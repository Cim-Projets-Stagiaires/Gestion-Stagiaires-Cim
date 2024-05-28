<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion Stagiaires</title>
    
    <!-- Include CSS using Blade directive -->
    @vite('resources/css/app.css')
    
    <!-- Include header using Blade directive -->
    {{-- @include('layouts.app') --}}
    
    
        
</head>
<style>
    .btn {
    display: inline-block;
    padding: 10px 20px;
 
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    border-radius: 8px;
}

.btn-danger {
    background-color: #da2c38;
    color: #FFFFFF;
}

.btn-primary {
    background-color: #008ccb;
    color: #FFFFFF;
}

.btn-secondary {
    background-color: #e7782d;
    color: #ffffff;
}

.btn-success {
    background-color: #a02441;
    color: #FFFFFF;
}
.btn-warning{
    background-color: #6c757d;
    color: #FFFFFF;
}
.btn-info{
    background-color: #403d39;
    color: #FFFFFF;
}


</style>

<body class="bg-gray-100 ">
   
    <div class="flex items-center justify-center h-screen  ">
        <div class=" bg-gray-50 w-full max-w-5xl  shadow-lg rounded-lg p-10">
            <h1 class="text-3xl font-extrabold mb-6">Détails du stagiaire : {{$stagiaires->nom_de_famille .' '. $stagiaires->prenom}}</h1>
            <div class="flex justify-center mb-6">
                <img class="w-52 h-52 rounded-full border-4 border-white" src="{{ asset('images/'.$stagiaires->photo)}}" alt="Photo du stagiaire">

            </div>
            
            <div class="border-2 border-gray-500 p-4 mb-6">
                <div class="font-bold text-xl uppercase font-mono mb-2">
                    {{$stagiaires->nomnom_de_famille}} {{$stagiaires->prenom}}
                </div>
                <div class="mb-2">
                    <span class="font-bold text-lg">Nom de famille:</span> {{$stagiaires->nom_de_famille}}
                </div>
                <div class="mb-2">
                    <span class="font-bold text-lg">Prénom:</span> {{$stagiaires->prenom}}
                </div>
                <div class="mb-2">
                    <span class="font-bold text-lg">Établissement:</span> {{$stagiaires->etablissement}}
                </div>
                <div class="mb-2">
                    <span class="font-bold text-lg">Durée de stage:</span> {{$stagiaires->duree_de_stage}} mois 
                </div>
                <div class="mb-2">
                    <span class="font-bold text-lg">Demande de stage:</span>
                    @if ($stagiaires->demande_de_stage)
                    &nbsp; &nbsp;    <a href="{{ url('view-demande/'.$stagiaires->id) }}" target="_blank" class="text-blue-500 underline">   Voir Demande</a>
                    @else
                        Aucun fichier de demande de stage
                    @endif
                </div>
                <div class="mb-2">
                    <span class="font-bold text-lg">CV:</span>
                    @if ($stagiaires->pdf_cv)
                    &nbsp; &nbsp; <a href="{{ url('view-cv/'.$stagiaires->id) }}" target="_blank" class="text-blue-500 underline">Voir CV</a>
                    @else
                        Aucun fichier CV
                    @endif
                </div>

            
            <!-- <div class="flex justify-center space-x-4 mt-6"> -->
                <a href="/trombino" class="btn btn-secondary">Retour</a>
               <!-- ... (existing code) ... -->

                <!-- <div class="flex justify-center space-x-4 mt-6"> -->
                    <a href="{{ asset('pdf_reports/'.$stagiaires->pdf_rapport) }}" download="{{$stagiaires->pdf_cv}}" class="btn btn-success">Télécharger le CV</a>
                    
                    @if ($stagiaires->demande_de_stage)
                        <a href="{{ asset('pdf_demandestage/'.$stagiaires->pdf_demandestage) }}" download="{{$stagiaires->demande_de_stage}}" class="btn btn-success">Télécharger le Demande</a>
                    @else
                        <span class="btn btn-success" disabled>Aucune demande de stage</span>
                    @endif
                <!-- </div> -->

                <!-- ... (remaining code) ... -->

                <a href="/Update/{{$stagiaires->id}}" class="btn btn-primary">Update</a>
                <a href="/Delete/{{$stagiaires->id}}" class="btn btn-danger" >Delete</a>
                
<!--                 
            </div> -->
            <!-- ... (previous content) ... -->

            <div class="flex justify-between mt-4">
                @if($previousStagiaire)
                <a href="{{ url('previousStagiaire/'.$previousStagiaire->id) }}" class="btn btn-warning">Previous Stagiaire</a>

                @endif
                
                @if($nextStagiaire)
                <a href="{{ url('nextStagiaire/'.$nextStagiaire->id) }}" class="btn btn-info">Next Stagiaire</a>

                @endif
            
            </div>
                <!-- ... (remaining content) ... -->

            
        </div>
    </div>
</body>

</html>
