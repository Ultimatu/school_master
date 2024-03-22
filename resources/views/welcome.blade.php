<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    {{-- boostrap online --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <div class="container mt-5 pt-5 bg-secondary text-white">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5">Bienvenue sur le Gestionnaire de Master et Professeur</h1>

                <div class="d-flex justify-content-center mt-5 align-items-center alert alert-info">
                    <a href="{{ route('filament.admin.auth.login') }}" class="btn btn-primary">Administration</a>

                    <a href="{{ route("filament.professeur.auth.login") }}" class="btn btn-primary ms-3">Professeur</a>

                </div>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
