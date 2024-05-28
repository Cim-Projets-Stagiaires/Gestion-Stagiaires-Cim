<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="...">

    @vite('resources/css/app.css')
    <title>Gestion Stagiaires</title>
</head>

<body>



    <div class="p-10 mt-10">
        <div>
            <div class="p-10 mt-10">
                <div class="form-wrapper">
                    <form action="{{ route('searchlistdattent') }}" method="GET" class="mb-auto flex items-center">
                        <input type="text" name="query" class="border rounded py-2 px-4 custom-input"
                            placeholder="Search ...">
                        <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-4 rounded ml-2"
                            id="ccc">Search</button>
                        <a href="{{ url('/listedatent') }}"
                            class="bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded ml-2">Cancel</a>

                            <a href="/index">
                                <button type="button"
                                    class="text-red-600 font-bold py-2 px-4 rounded ml-2 hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300  text-sm  text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                    Retour
                                </button>
                            </a>
                    </form>
                </div>
                





                @unless (count($stagiaires) == 0)

                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Photo</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Nom de famille</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Prenom</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Email</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Duree de stage</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">CV</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Demande de stage </th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Pole</th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Etablissement </th>
                                    <th scope="col" class="px-4 py-3 whitespace-nowrap">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stagiaires as $stagiaire)
                                    <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="px-4 py-2 whitespace-nowrap">
                                            <div class="img-container h-32 w-32">
                                                <img src="{{ asset('images/' . $stagiaire->photo) }}" alt=""
                                                    class="rounded-full object-cover h-full w-full">
                                            </div>
                                        </td>
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $stagiaire->nom_de_famille }}
                                        </td>
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $stagiaire->prenom }}
                                        </td>
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $stagiaire->email }}
                                        </td>
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $stagiaire->duree_de_stage }} mois
                                        </td>
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <a href="{{ asset('pdf_reports/' . $stagiaire->pdf_rapport) }}"
                                                target="_blank">Voir CV</a>
                                        </td>
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <a href="{{ asset('pdf_demandestage/' . $stagiaire->pdf_demandestage) }}"
                                                target="_blank">Voir demande</a>
                                        </td>
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $stagiaire->pole }}
                                        </td>
                                        <td class="px-4 py-2font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $stagiaire->etablissement }}
                                        </td>
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <a href="/Voir/{{ $stagiaire->id }}">
                                                <button class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path
                                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>

                                                </button>
                                            </a>
                                            <a href="/Delete/{{ $stagiaire->id }}"
                                                onclick='return confirm("Are you sure you want to delete ?")'>
                                                <button class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                    </svg>
                                                </button>
                                            </a>

                                            <a href="Update/{{ $stagiaire->id }}">
                                                <button class="btn btn-warning" id="myForm"
                                                    onclick='confirm("are you sure to update ?")'>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path
                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd"
                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </section>
        </div>
        </div>
    @else
        <div class="flex justify-center bg-gray-400 p-24 rounded-lg">
            <span class="font-bold font-mono text-2xl"> No stagiaires found </span>
        </div>
    @endunless
    </div>

    </div>


</body>

</html>
