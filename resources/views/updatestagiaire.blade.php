<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Gestion Stagiaires</title>
</head>
<style>
    .FF {

    }
</style>
<script>
    function openPdf(url) {
        window.open(url, '_blank');
    }
</script>

@include('layouts.app')

<body>
    <div class="p-10 mt-10">
        <div class="container">
            <div class="pb-10" style="margin-left: 17%;">
                <span class="font-extrabold text-xl">Modifier les informations du stagiaire :
                    {{ $data->nom_de_famille . ' ' . $data->prenom }}</span>
            </div>

            <div class="rounded-xl border-4 border-gray-600">
                <div class="bg-gray-50 p-4 ">
                    <form class="space-y-4" action="/update/{{ $stagiaire->id }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="flex" style="margin-left: 32%;">
                            <img class="w-60 h-52 rounded-full ml-10" src="{{ asset('images/' . $stagiaire->photo) }}" alt="">

                        </div>
                     
                        <!-- Add other fields as needed -->
                        <div style="margin-left: 30%;">
                            <label for="nom_de_famille" class="block font-medium text-base pb-2">Nom de famille :</label>
                            <input type="text" id="nom_de_famille" name="nom_de_famille" class="h-8 rounded-md w-50 px-2 bg-gray-200" value="{{ $stagiaire->nom_de_famille }}">
                        </div>

                        <div style="margin-left: 30%;">
                            <label for="prenom" class="block font-medium text-base pb-2">Prenom :</label>
                            <input type="text" id="prenom" name="prenom" class="h-8 rounded-md w-50 px-2 bg-gray-200" value="{{ $stagiaire->prenom }}">
                        </div>

                        <div style="margin-left: 30%;">
                            <label for="email" class="block font-medium text-base pb-2">Email :</label>
                            <input type="text" id="email" name="email" class="h-8 rounded-md w-50 px-2 bg-gray-200" value="{{ $stagiaire->email }}">
                        </div>

                        <div style="margin-left: 30%;">
                            <label for="etablissement" class="block font-medium text-base pb-2">Etablissement:</label>
                            <select id="etablissement" name="etablissement" class="form-control bg-light rounded-md" required>
                                <option value="observation" {{ $stagiaire->etablissement === 'Faculté des Sciences Semlalia de Marrakech' ? 'selected' : '' }}>Faculté des Sciences Semlalia de Marrakech</option>
                                <option value="transvers" {{ $stagiaire->etablissement === 'Faculté des Sciences Juridiques, Économiques et Sociales de Marrakech' ? 'selected' : '' }}>Faculté des Sciences Juridiques, Économiques et Sociales de Marrakech</option>
                                <option value="valorisation" {{ $stagiaire->etablissement === 'Faculté de Médecine et de Pharmacie de Marrakech' ? 'selected' : '' }}>Faculté de Médecine et de Pharmacie de Marrakech</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'Faculté des Lettres et des Sciences Humaines' ? 'selected' : '' }}>Faculté des Lettres et des Sciences Humaines</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'Faculté des Sciences et Techniques Gueliz' ? 'selected' : '' }}>Faculté des Sciences et Techniques Gueliz</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'École Nationale des Sciences Appliquées de Marrakech' ? 'selected' : '' }}>École Nationale des Sciences Appliquées de Marrakech</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'École Normale Supérieure de Marrakech' ? 'selected' : '' }}>École Normale Supérieure de Marrakech</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'Faculté de Langue Arabe de Marrakech' ? 'selected' : '' }}>Faculté de Langue Arabe de Marrakech</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'Faculté Poly disciplinaire de Safi' ? 'selected' : '' }}>Faculté Poly disciplinaire de Safi</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'École Nationale des Sciences Appliquées de Safi' ? 'selected' : '' }}>École Nationale des Sciences Appliquées de Safi</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'École Supérieure de Technologie Safi' ? 'selected' : '' }}>École Supérieure de Technologie Safi</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'École Supérieure de Technologie Essaouira' ? 'selected' : '' }}>École Supérieure de Technologie Essaouira</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'Faculté des Sciences Juridiques, Économiques et Sociales Kelâa des Sraghna' ? 'selected' : '' }}>Faculté des Sciences Juridiques, Économiques et Sociales Kelâa des Sraghna</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'École Supérieure de Technologie D El Kelâa Des Sraghna' ? 'selected' : '' }}>École Supérieure de Technologie D'El Kelâa Des Sraghna</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'OFPPT' ? 'selected' : '' }}>OFPPT</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'EMSI' ? 'selected' : '' }}>EMSI</option>
                                <option value="observation" {{ $stagiaire->etablissement === 'Autre' ? 'selected' : '' }}>Autre</option>
                            </select>
                        </div>

                        <div style="margin-left: 30%;">
                            <label for="pole" class="block font-medium text-base pb-2">Pole:</label>
                            <select id="pole" name="pole" class="form-control bg-light rounded-md" required>
                                <option value="transvers" {{ $stagiaire->pole === 'transvers' ? 'selected' : '' }}>Transvers</option>
                                <option value="valorisation" {{ $stagiaire->pole === 'valorisation' ? 'selected' : '' }}>Valorisation</option>
                                <option value="observation" {{ $stagiaire->pole === 'observation' ? 'selected' : '' }}>Observation</option>
                            </select>
                        </div>
                        
                        <div style="margin-left: 30%;">
                            <label for="duree_de_stage" class="block font-medium text-base pb-2">Duree de stage (mois):</label>
                            <select name="duree_de_stage" id="duree_de_stage" class="form-control">
                                <option value="1" {{ $stagiaire->duree_de_stage == 1 ? 'selected' : '' }}>1 mois</option>
                                <option value="2" {{ $stagiaire->duree_de_stage == 2 ? 'selected' : '' }}>2 mois</option>
                                <option value="3" {{ $stagiaire->duree_de_stage == 3 ? 'selected' : '' }}>3 mois</option>
                                <option value="4" {{ $stagiaire->duree_de_stage == 4 ? 'selected' : '' }}>4 mois</option>
                            </select>
                        </div>
                        
                        <div style="margin-left: 30%;">
                            <label for="demande_de_stage" class="block font-medium text-base pb-2">Demande de Stage :</label>
                            <input type="file" id="demande_de_stage" name="demande_de_stage" class="h-8 rounded-md w-50 bg-gray-200">
                            @if($stagiaire->demande_de_stage)
                                <a href="{{ asset('pdf_demandestage/'.$stagiaire->demande_de_stage) }}" target="_blank" class="inline-block mb-2">Voir demande de stage</a>
                                <input type="checkbox" name="remove_pdf_demandestage"> Remove Demande de Stage
                            @endif
                        </div>
                        
                        <div class="clearfix">
                            <button class="bg-blue-500 text-white py-2 px-6 rounded-md float-right ml-2">Modifier</button>

                            <a href="/index">
                                <button class="bg-red-500 text-white py-2 px-6 rounded-md float-right">Annuler</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
