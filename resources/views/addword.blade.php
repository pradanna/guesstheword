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

    <div class="main-container">
        <div class="main-div2">
            <p class="title">Add Words</p>
            <div class="mb-3">
                <form method="POST" action="{{ route('addwords.store') }}">
                    @csrf
                    <input type="text" class="form-control" id="theanswer" placeholder="The words" name="kata"
                        required>
                    <button type="submit" class="btn">Add</button>
                </form>
            </div>

        </div>

        <div class="main-div2">
            <table class="table">
                <thead>
                    <tr>
                        <td>
                            Words
                        </td>
                        <td>
                            Action
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($addwords as $word)
                        <tr>
                            <td>
                                <span style="color: gray"> {{ $word->kata }}</span>
                            </td>
                            <td>

                                <form action="{{ route('addwords.destroy', $word->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="delete-btn" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
