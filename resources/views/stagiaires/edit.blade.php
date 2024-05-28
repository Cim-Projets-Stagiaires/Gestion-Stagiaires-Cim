<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Gestion Stagiaires</title>
</head>

@include('layouts.app')

<body>
    <div class="flex justify-center  bg-white dark:bg-gray-900">
        <div class="container">
            <form class="space-y-4" action="/update/{{ $stagiaire->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex justify-center">
                    <span class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Modifier
                        les informations du stagiaire
                        {{ $stagiaire->nom_de_famille . ' ' . $stagiaire->prenom }}</span>
                </div>
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <!-- Add other fields as needed -->
                    <div class="form-group">
                        <label for="nom_de_famille"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom de
                            famille</label>
                        <input type="text" id="nom_de_famille" name="nom_de_famille"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $stagiaire->nom_de_famille }}">
                    </div>

                    <div class="form-group">
                        <label for="prenom"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
                        <input type="text" id="prenom" name="prenom"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            value="{{ $stagiaire->prenom }}">
                    </div>

                    <div class="form-group">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"value="{{ $stagiaire->email }}">
                    </div>

                    <div class="form-group">
                        <label for="etablissement"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Etablissement</label>
                        <select id="etablissement" name="etablissement"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option value="Faculté des Sciences Semlalia de Marrakech"
                                {{ $stagiaire->etablissement === 'Faculté des Sciences Semlalia de Marrakech' ? 'selected' : '' }}>
                                Faculté des Sciences Semlalia de Marrakech</option>
                            <option value="Faculté des Sciences Juridiques, Économiques et Sociales de Marrakech"
                                {{ $stagiaire->etablissement === 'Faculté des Sciences Juridiques, Économiques et Sociales de Marrakech' ? 'selected' : '' }}>
                                Faculté des Sciences Juridiques, Économiques et Sociales de Marrakech</option>
                            <option value="Faculté de Médecine et de Pharmacie de Marrakech"
                                {{ $stagiaire->etablissement === 'Faculté de Médecine et de Pharmacie de Marrakech' ? 'selected' : '' }}>
                                Faculté de Médecine et de Pharmacie de Marrakech</option>
                            <option value="Faculté des Lettres et des Sciences Humaines"
                                {{ $stagiaire->etablissement === 'Faculté des Lettres et des Sciences Humaines' ? 'selected' : '' }}>
                                Faculté des Lettres et des Sciences Humaines</option>
                            <option value="Faculté des Sciences et Techniques Gueliz"
                                {{ $stagiaire->etablissement === 'Faculté des Sciences et Techniques Gueliz' ? 'selected' : '' }}>
                                Faculté des Sciences et Techniques Gueliz</option>
                            <option value="École Nationale des Sciences Appliquées de Marrakech"
                                {{ $stagiaire->etablissement === 'École Nationale des Sciences Appliquées de Marrakech' ? 'selected' : '' }}>
                                École Nationale des Sciences Appliquées de Marrakech</option>
                            <option value="École Normale Supérieure de Marrakech"
                                {{ $stagiaire->etablissement === 'École Normale Supérieure de Marrakech' ? 'selected' : '' }}>
                                École Normale Supérieure de Marrakech</option>
                            <option value="Faculté de Langue Arabe de Marrakech"
                                {{ $stagiaire->etablissement === 'Faculté de Langue Arabe de Marrakech' ? 'selected' : '' }}>
                                Faculté de Langue Arabe de Marrakech</option>
                            <option value="Faculté Poly disciplinaire de Safi"
                                {{ $stagiaire->etablissement === 'Faculté Poly disciplinaire de Safi' ? 'selected' : '' }}>
                                Faculté Poly disciplinaire de Safi</option>
                            <option value="École Nationale des Sciences Appliquées de Safi"
                                {{ $stagiaire->etablissement === 'École Nationale des Sciences Appliquées de Safi' ? 'selected' : '' }}>
                                École Nationale des Sciences Appliquées de Safi</option>
                            <option value="École Supérieure de Technologie Safi"
                                {{ $stagiaire->etablissement === 'École Supérieure de Technologie Safi' ? 'selected' : '' }}>
                                École Supérieure de Technologie Safi</option>
                            <option value="École Supérieure de Technologie Essaouira"
                                {{ $stagiaire->etablissement === 'École Supérieure de Technologie Essaouira' ? 'selected' : '' }}>
                                École Supérieure de Technologie Essaouira</option>
                            <option value="Faculté des Sciences Juridiques, Économiques et Sociales Kelâa des Sraghna"
                                {{ $stagiaire->etablissement === 'Faculté des Sciences Juridiques, Économiques et Sociales Kelâa des Sraghna' ? 'selected' : '' }}>
                                Faculté des Sciences Juridiques, Économiques et Sociales Kelâa des Sraghna
                            </option>
                            <option value="École Supérieure de Technologie D'El Kelâa Des Sraghna"
                                {{ $stagiaire->etablissement === 'École Supérieure de Technologie D El Kelâa Des Sraghna' ? 'selected' : '' }}>
                                École Supérieure de Technologie D'El Kelâa Des Sraghna</option>
                            <option value="OFPPT" {{ $stagiaire->etablissement === 'OFPPT' ? 'selected' : '' }}>
                                OFPPT</option>
                            <option value="EMSI" {{ $stagiaire->etablissement === 'EMSI' ? 'selected' : '' }}>
                                EMSI</option>
                            <option value="Autre" {{ $stagiaire->etablissement === 'Autre' ? 'selected' : '' }}>
                                Autre</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pole"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pole</label>
                        <select id="pole" name="pole"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            required>
                            <option value="transvers" {{ $stagiaire->pole === 'transvers' ? 'selected' : '' }}>
                                Transvers</option>
                            <option value="valorisation" {{ $stagiaire->pole === 'valorisation' ? 'selected' : '' }}>
                                Valorisation
                            </option>
                            <option value="observation" {{ $stagiaire->pole === 'observation' ? 'selected' : '' }}>
                                Observation</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="duree_de_stage"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duree de stage</label>
                        <select name="duree_de_stage" id="duree_de_stage"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="1" {{ $stagiaire->duree_de_stage == 1 ? 'selected' : '' }}>1
                                mois</option>
                            <option value="2" {{ $stagiaire->duree_de_stage == 2 ? 'selected' : '' }}>2
                                mois</option>
                            <option value="3" {{ $stagiaire->duree_de_stage == 3 ? 'selected' : '' }}>3
                                mois</option>
                            <option value="4" {{ $stagiaire->duree_de_stage == 4 ? 'selected' : '' }}>4
                                mois</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="demande_de_stage"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Demande de Stage</label>
                        <input type="file" id="demande_de_stage" name="demande_de_stage"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @if ($stagiaire->demande_de_stage)
                            <a href="{{ asset('pdf_demandestage/' . $stagiaire->demande_de_stage) }}" target="_blank"
                                class="inline-block mb-2">Voir demande de stage</a>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="assurance"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Assurance</label>
                        <input type="file" id="assurance" name="assurance"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @if ($stagiaire->assurance)
                            <a href="{{ asset('assurance/' . $stagiaire->assurance) }}" target="_blank"
                                class="inline-block mb-2">Voir assurance</a>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="semi_rapport_de_stage"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semi rapport de stage</label>
                        <input type="file" id="semi_rapport_de_stage" name="semi_rapport_de_stage"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @if ($stagiaire->demande_de_stage)
                            <a href="{{ asset('semi_rapport_de_stage/' . $stagiaire->semi_rapport_de_stage) }}" target="_blank"
                                class="inline-block mb-2">Voir Semi rapport de stage</a>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="rapport_finale_de_stage"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rapport finale de stage</label>
                        <input type="file" id="rapport_finale_de_stage" name="rapport_finale_de_stage"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        @if ($stagiaire->rapport_finale_de_stage)
                            <a href="{{ asset('rapport_finale_de_stage/' . $stagiaire->rapport_finale_de_stage) }}" target="_blank"
                                class="inline-block mb-2">Voir Rapport finale de stage</a>
                        @endif
                    </div>
                </div>
                <div>
                    <button  type="submit" class="bg-blue-500 text-white py-2 px-6 rounded-md float-right ml-2">Modifier</button>

                    <a href="/index">
                        <button class="bg-red-500 text-white py-2 px-6 rounded-md float-right">Annuler</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
