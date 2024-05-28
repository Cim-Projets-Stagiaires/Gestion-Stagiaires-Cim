<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add your other head content here -->
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
        .rounded-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        .img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .flex {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .pole-button {
            padding: 10px;
            margin: 5px;
            border: none;
            cursor: pointer;
            border-radius: 15px;
            font-size: 16px;
        }

        .pole-button[data-pole="transvers"] {
            background-color: #008ccb;
            color: #fff;
        }

        .pole-button[data-pole="valorisation"] {
            background-color: #a02441;
            color: #fff;
        }

        .pole-button[data-pole="observation"] {
            background-color: #e7782d;
            color: #fff;
        }

        .poles-container {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        .pole-section {
            width: 100%;
            display: none;
            margin: 0 auto;
            text-align: left;
            padding: 10px;
            background-color: #f0f0f0;
        }

        .pole-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .stagiaire-container {
            margin: 0 10px 40px;
            /* Adjusted margin for better spacing */
            text-align: center;
            width: calc('' / 6 - 16px);
            /* 1/6th width with margin, adjusted for better spacing */
            box-sizing: border-box;
        }


        .flex-row {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: -15px;
            /* Negative margin to offset the margin-bottom of .stagiaire-container */
        }


        .stagiaire-link {
            text-decoration: none;
            color: #000;
            display: block;
            text-align: center;
        }

        .stagiaire-name {
            margin-top: 10px;
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .h2 {
            text-align: center;
        }

        #all {
            background-color: #403d39;
            color: aliceblue;

        }
    </style>

</head>

<body>

    <!-- Add your body content here -->

    {{-- <div class="poles-container">
        <div class="flex">
            <button class="pole-button" id="all">All</button>
            <button class="pole-button" data-pole="transvers">Transvers</button>
            <button class="pole-button" data-pole="valorisation">Valorisation</button>
            <button class="pole-button" data-pole="observation">Observation</button>
            <a href="/index"><button class="pole-button">Retour</button></a>

        </div>
    </div> --}}

    


    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <div class="flex">
                    <form class="poles-container" action="{{ route('searchByPole') }}" method="GET">
                        <input type="hidden" name="pole" id="poleInput" value="">
                        <button class="pole-button" id="all">All</button>
                        <button class="pole-button" data-pole="transvers" type="submit" onclick="setPole('transvers')">Transvers</button>
                        <button class="pole-button" data-pole="valorisation" type="submit" onclick="setPole('valorisation')">Valorisation</button>
                        <button class="pole-button" data-pole="observation" type="submit" onclick="setPole('observation')">Observation</button>
                    </form>
                    <a href="/index"><button class="pole-button">Retour</button></a>
                </div>
               
            </div>
            <script>
        function setPole(pole) {
            document.getElementById('poleInput').value = pole;
        }
    </script>
            <div class="all-stagiaires" id="allStagiaires">
                <div class="flex-row">
                    @foreach ($stagiaires as $stagiaire)
                    <div class="stagiaire-container">
                        <a href="{{ url('Voir/'.$stagiaire->id) }}" class="stagiaire-link rounded-img">
                            <img class="img rounded-img" src="{{ asset('images/' . $stagiaire->photo) }}" alt="{{ $stagiaire->nom_de_famille }} {{ $stagiaire->prenom }}">
                            <p class="stagiaire-name">{{ $stagiaire->nom_de_famille }} {{ $stagiaire->prenom }}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        
            @foreach ($stagiaires->groupBy('pole') as $pole => $poleStagiaires)
            <div class="pole-section" id="{{ $pole }}">
                <h2 class="pole-title">{{ ucfirst($pole) }}</h2>
                <div class="flex-row">
                    @foreach ($poleStagiaires as $stagiaire)
                    <div class="stagiaire-container">
                        <a href="{{ url('Voir/'.$stagiaire->id) }}" class="stagiaire-link rounded-img">
                            <img class="img rounded-img" src="{{ asset('images/' . $stagiaire->photo) }}" alt="{{ $stagiaire->nom_de_famille }} {{ $stagiaire->prenom }}">
                            <p class="stagiaire-name">{{ $stagiaire->nom_de_famille }} {{ $stagiaire->prenom }}</p>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach 
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function showStagiaires(selectedPole) {
                var poleSections = document.querySelectorAll('.pole-section');
                poleSections.forEach(function(section) {
                    section.style.display = 'none';
                });

                document.getElementById('allStagiaires').style.display = 'flex';

                if (selectedPole) {
                    document.getElementById('allStagiaires').style.display = 'none';
                    var selectedSection = document.getElementById(selectedPole);
                    if (selectedSection) {
                        selectedSection.style.display = 'block';
                    }
                }
            }

            var buttons = document.querySelectorAll('.pole-button');
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    showStagiaires(button.dataset.pole);
                });
            });

            showStagiaires('');
        });
    </script>
</body>

</html>