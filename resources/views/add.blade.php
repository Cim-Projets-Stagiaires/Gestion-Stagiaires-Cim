<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Stagiaires</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex  justify-center m-10">
        <a href="/">
            <img src='/images/log.png' alt="Logo" class="h-20 w-auto rounded-full">
        </a>
    </div>
    <div class="flex justify-center m-10 bg-white dark:bg-gray-900">
        <form action="ajouter" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex justify-center">
                <h4 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                    Postuler
                    pour un stage à la CIM</h4>
            </div>
            <br>
            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                <div class="form-group">
                    <label for="nom_de_famille" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom
                        de
                        famille</label>
                    <input type="text" name="nom_de_famille" id="nom_de_famille"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        required="" placeholder="Enter voter Nom">
                </div>
                <div class="form-group">
                    <label for="duree" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Duree de
                        stage</label>
                    <select id="duree" name="duree_de_stage"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="1">1 Mois</option>
                        <option value="2">2 Mois</option>
                        <option value="3">3 Mois</option>
                        <option value="4">4 Mois</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prenom"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
                    <input type="text" name="prenom" id="prenom"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        required="" placeholder="Enter voter Prenom">
                </div>
                <div class="form-group">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        required="" placeholder="Name@gmail.com">
                </div>
                <div class="form-group">
                    <label for="Photo"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Photo</label>
                    <input type="file" name="photo" id="photo"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        required="" accept="image/*">
                </div>
                <div class="form-group">
                    <label for="etablissement"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Etablissement</label>
                    <select id="etablissement" name="etablissement"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Faculté des Sciences Juridiques, Économiques et Sociales de Marrakech">
                            Faculté des Sciences Juridiques, Économiques et Sociales de Marrakech</option>
                        <option value="École Nationale de Commerce et de Gestion de Marrakech">École Nationale
                            de Commerce et de Gestion de Marrakech</option>
                        <option value="Faculté de Médecine et de Pharmacie de Marrakech">Faculté de Médecine et
                            de Pharmacie de Marrakech</option>ù
                        <option value="Faculté des Lettres et des Sciences Humaines">Faculté des Lettres et des
                            Sciences Humaines</option>
                        <option value="Faculté des Sciences et Techniques Gueliz">Faculté des Sciences et
                            Techniques Gueliz</option>
                        <option value="École Nationale des Sciences Appliquées de Marrakech">École Nationale des
                            Sciences Appliquées de Marrakech</option>
                        <option value="École Normale Supérieure de Marrakech">École Normale Supérieure de
                            Marrakech</option>
                        <option value="Faculté de Langue Arabe de Marrakech">Faculté de Langue Arabe de
                            Marrakechh</option>
                        <option value="Faculté Poly disciplinaire de Safi">Faculté Poly disciplinaire de Safi
                        </option>
                        <option value="École Nationale des Sciences Appliquées de Safi">École Nationale des
                            Sciences Appliquées de Safi</option>
                        <option value="École Supérieure de Technologie Safi">École Supérieure de Technologie
                            Safi</option>
                        <option value="École Supérieure de Technologie Essaouira">École Supérieure de
                            Technologie Essaouira</option>
                        <option value="Faculté des Sciences Juridiques, Économiques et Sociales Kelâa des Sraghna">
                            Faculté des Sciences Juridiques, Économiques et Sociales Kelâa des Sraghna</option>
                        <option value="École Supérieure de Technologie D'El Kelâa Des Sraghna">École Supérieure
                            de Technologie D'El Kelâa Des Sraghna</option>
                        <option value="OFPPT">OFPPT</option>
                        <option value="EMSI">EMSI</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pdf_cv" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CV
                        de stage</label>
                    <input type="file" name="pdf_cv" id="pdf_cv"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        required="" accept="application/pdf">
                </div>
                <div class="form-group">
                    <label for="demande_de_stage"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Demande de
                        stage</label>
                    <input type="file" name="demande_de_stage" id="demande_de_stage"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        required="" accept="application/pdf">
                </div>
                <div class="form-group">
                    <label for="pole"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pole</label>
                    <select id="pole" name="pole"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="Transver">Transver</option>
                        <option value="Valorisation">Valorisation</option>
                        <option value="Observation">Observation</option>
                    </select>
                </div>
                <br>
                <div class="flex items-center space-x-4">
                    <button type="submit" id="aj"
                        class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Postuler
                    </button>
                    <a href="/">
                        <button type="button"
                            class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                            Retour
                        </button>
                    </a>
                </div>
            </div>
        </form>
    </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.5/dist/umd/popper.min.js"></script>
</body>

</html>
