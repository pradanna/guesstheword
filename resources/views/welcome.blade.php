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
    <link rel="stylesheet" href={{ asset('css/style.css') }} />
</head>

<body>
    @if (session('error'))
        <div id="hideMe" class="div">
            <span class="wrong">{{ session('error') }} </span>
        </div>
    @endif
    <div class="main-container">
        <div class="main-div">
            <p class="title">Guess The Word</p>
            <div class="mb-3">
                <form method="POST" action="{{ route('addwords.check') }}">
                    @csrf
                    <input type="text" name="kata" class="form-control" id="theanswer" placeholder="Your Answer">
                    <button class="btn" type="submit">Check Word</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        window.onload = function() {
            setTimeout(function() {
                var div = document.getElementById('hideMe');
                if (div) {
                    div.style.display = 'none';
                }
            }, 2000); // 3000 milidetik = 3 detik
        }
    </script>
</body>

</html>
