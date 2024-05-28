<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Gestion Stagiaires</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    @include('header')

    <div class="p-10 mt-10">
        <div class="table-container">
            <section class="bg-gray-50 dark:bg-gray-900 py-3 sm:py-5">
                <div class="px-4 mx-auto max-w-screen-auto lg:px-auto">
                   <div class="form-wrapper">
                        <form action="{{ route('search') }}" method="GET" class="mb-auto flex items-center">
                            <input type="text" name="query" class="border rounded py-2 px-4 custom-input" placeholder="Search ...">
                            <button type="submit" class="bg-blue-600 text-white font-bold py-2 px-4 rounded ml-2" id="ccc">Search</button>
                            <a href="{{ url('/index') }}" class="bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded ml-2">Cancel</a>
                        </form>
                    </div>
                    <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                        <div class="flex flex-col px-4 py-3 space-y-3 lg:flex-row lg:items-center lg:justify-between lg:space-y-0 lg:space-x-4">
                            <div class="flex flex-col flex-shrink-0 space-y-3 md:flex-row md:items-center lg:justify-end md:space-y-0 md:space-x-3">
                                <a href="{{ url('/addadmin') }}">
                                    <button type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-2 -ml-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                        </svg>
                                        Ajouter stagiaire
                                    </button>
                                </a>
                                <a href="{{ url('/trombino') }}">
                                    <button type="button" class="flex items-center justify-center flex-shrink-0 px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg focus:outline-none hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                        <svg class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                                        </svg>
                                        voir le Trombinoscope
                                    </button>
                                </a>
                            </div>
                        </div>
                        @unless (count($stagiaires) == 0)

                        <div class="overflow-x-auto ">
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
                                        <th scope="col" class="px-4 py-3 whitespace-nowrap">Assurance </th>
                                        <th scope="col" class="px-4 py-3 whitespace-nowrap">Semi rapport de stage </th>
                                        <th scope="col" class="px-4 py-3 whitespace-nowrap">Rapport finale de stage </th>
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
                                                <img src="{{ asset('images/' . $stagiaire->photo) }}" alt="" class="rounded-full object-cover h-full w-full">
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
                                            <a href="{{ asset('pdf_cv/' . $stagiaire->pdf_cv) }}" target="_blank">Voir CV</a>
                                        </td>
                                        <td class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <a href="{{ asset('demande_de_stage/' . $stagiaire->demande_de_stage) }}" target="_blank">Voir demande</a>
                                        </td>
                                        <td class="px-4 py-2">
                                            @if($stagiaire->assurance)
                                                <a href="{{ asset('assurances/' . urlencode($stagiaire->assurance)) }}" class="bg-green-500 text-white font-bold py-2 px-4 rounded" target="_blank" type="application/pdf">Voir_assurance</a>
                                            @else
                                                <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">No Assurance</button>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2">
                                            @if($stagiaire->rapport_finale_de_stage)
                                            <a href="{{ url('rapport_finale_de_stage/' . $stagiaire->rapport_finale_de_stage) }}" class="bg-green-500 text-white font-bold py-2 px-4 rounded" target="_blank">Voir_Rapport</a>
                                            @else
                                            <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">No Rapport</button>
                                            @endif
                                        </td>
                                        <td class="px-4 py-2">
                                            @if($stagiaire->semi_rapport_de_stage)
                                            <a href="{{ url('semi_rapport_de_stage/' . $stagiaire->semi_rapport_de_stage) }}" class="bg-green-500 text-white font-bold py-2 px-4 rounded" target="_blank">Voir_Rapport</a>
                                            @else
                                            <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">No Rapport</button>
                                            @endif
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                                    </svg>

                                                </button>
                                            </a>
                                            <a href="/Delete/{{ $stagiaire->id }}" onclick='return confirm("Are you sure you want to delete ?")'>
                                                <button class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                        <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                                    </svg>
                                                </button>
                                            </a>

                                            <a href="stagiaires/{{ $stagiaire->id }}/edit">
                                                <button class="btn btn-warning" id="myForm" onclick='confirm("are you sure to update ?")'>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
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
                    <div class="m-4 flex flex-col gap-4 items-end ">
                        {{ $stagiaires->links() }}
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