@extends('layouts.app')


@section('content')


    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <div class="flex  justify-center m-10">
            <a href="/">
                <img src='/images/log.png' alt="Logo" class="h-20 w-auto rounded-full">
            </a>
        </div>
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Mon profil</h2>
        <form action="{{ route('searchProfile') }}" method="GET" class="space-y-8">
            @csrf
            <div>
                <label for="nom_de_famille" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nom de
                    famille</label>
                <input type="text" id="nom_de_famille" name="nom_de_famille"
                    class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="Enter voter Nom" required>
            </div>
            <div>
                <label for="Prenom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prenom</label>
                <input type="text" id="Prenom" name="prenom"
                    class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light"
                    placeholder="Enter voter Prenom" required>
            </div>
            <button type="submit"
                class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Recherche</button>
            <a href="{{ url('/') }}"
                class="py-3 px-5 text-sm font-medium text-center bg-gray-300 text-gray-800  rounded ml-2">Cancel</a>
        </form>
    </div>




    <!-- Display search results here -->

    <div class="table-responsive mt-4 py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <table class="table table-bordered">
            <tbody>
                @isset($stagiaire)
                    <tr>
                        <th>Nom de famille</th>
                        <td>{{ $stagiaire->nom_de_famille }}</td>
                    </tr>
                    <tr>
                        <th>Prenom</th>
                        <td>{{ $stagiaire->prenom }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $stagiaire->email }}</td>
                    </tr>

                    <tr>
                        <th>Durée de stage</th>
                        <td>{{ $stagiaire->duree_de_stage }} mois</td>
                    </tr>

                    <tr>
                        <th>Assurance</th>
                        <td>
                            @if($stagiaire->assurance)
                                <p>Assurance File is Present</p>
                            @else
                            <form action="{{ route('stagiaires.update-assurance', ['id' => $stagiaire->id]) }}" method="POST" enctype="multipart/form-data" id="myForm">
                                @csrf
                                <input type="file" name="assurance" class="form-control" id="assurance">
                                <button type="submit" class="btn btn-primary mt-2">Upload</button>
                            </form>
                            @endif
                            
                        </td>
                    </tr>

                    <tr>
                        <th>Semi Rapport de Stage</th>
                        <td>
                            @php
                                $currentDate = now();
                                $startDate = $stagiaire->date_debut; // Assuming $stagiaire->date_debut represents the start date of the internship
                                $endDate = $stagiaire->date_de_fin_de_stage; // Assuming $stagiaire->date_de_fin_de_stage represents the end date of the internship

                                // Calculating the duration (difference) in days between start and end date
                                $durationInDays = $startDate->diffInDays($endDate);

                                // Determine when to display the form based on the middle of the internship duration
                                $middleDate = $startDate->copy()->addDays($durationInDays / 2);
                                $isPastMiddleDate = $currentDate->gte($middleDate);

                                // Calculate the remaining days if not past the middle date
                                $remainingDays = $currentDate->diffInDays($middleDate);
                            @endphp

                            @if ($isPastMiddleDate)
                                <form action="{{ route('semi-rapport-de-stage', ['id' => $stagiaire->id]) }}" method="POST" enctype="multipart/form-data" id="myForm">
                                    @csrf
                                    <input type="file" name="semi_rapport_de_stage" class="form-control" id="semi_rapport_de_stage">
                                    <button type="submit" class="btn btn-primary mt-2">Upload</button>
                                </form>
                            @else
                                <p>The time remaining to submit the semi-report: {{ $remainingDays }} days.</p>
                                <!-- Optionally, you can add more content or message here -->
                            @endif
                        </td>
                    </tr>


                    <tr>
                    <tr>
                        <th>Rapport finale de Stage</th>
                        <td>
                            @php
                                $currentDate = now();
                                $endDate = \Carbon\Carbon::parse($stagiaire->date_de_fin_de_stage); // Parsing the string to Carbon date object
                                $isDurationCompleted = $currentDate->gte($endDate); // Check if current date is greater than or equal to end date

                                // Calculate the remaining time until the end of the internship
                                $remainingTime = $currentDate->diff($endDate)->format('%m months %d days %h hours');
                            @endphp

                            @if ($isDurationCompleted)
                                <form action="{{ route('rapport-finale-de-stage', ['id' => $stagiaire->id]) }}" method="POST" enctype="multipart/form-data" id="myForm">
                                    @csrf
                                    <input type="file" name="rapport_finale_de_stage" class="form-control" id="rapport_finale_de_stage">
                                    <button type="submit" class="btn btn-primary mt-2">Upload</button>
                                </form>
                            @else
                                <p>The internship duration has not been completed yet. Remaining time: {{ $remainingTime }}.
                                </p>
                                <!-- Optionally, you can add more content or message here -->
                            @endif
                        </td>
                    </tr>
                @endisset

            </tbody>
        </table>
    </div>


    <!-- Success message container (initially hidden) -->
    <div id="successMessage" class="alert alert-success d-none">
        File uploaded successfully! Redirecting to the home page...
    </div>
    </form>

    {{-- <script>
        // Show success message after form submission
        document.getElementById('myForm').addEventListener('submit', function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Display the success message
            document.getElementById('successMessage').classList.remove('d-none');

            // Redirect to the home page after a delay (e.g., 3 seconds)
            setTimeout(function() {
                window.location.href = "/";
            }, 1000);
        });
    </script> --}}

    </div>
@endsection
