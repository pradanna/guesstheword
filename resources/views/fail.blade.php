<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Guess The Word</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    {{-- MAIN STYLE --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body style="background-color: black">

    <img class="chongrat-image" src="{{ asset('images/fail.jpeg') }}" />

    <a class="tryagain_btn" href="https://guesstheword.genossys.com/">YES</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <audio id="audio" src="{{ asset('images/fail.mp3') }}" type="audio/mp3"></audio>
    <button id="playButton" style="display: none;">Play Audio</button>

    <script>
        audio.addEventListener("canplaythrough", () => {
            audio.play().catch(e => {
                window.addEventListener('click', () => {
                    audio.play()
                }, {
                    once: true
                })
            })
        });
    </script>

</body>

</html>
