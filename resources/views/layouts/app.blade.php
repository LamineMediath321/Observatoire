<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sen Observatoire</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="stylesheet" href="css/modal.css">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body >
        <!-- <div class="min-h-screen bg-gray-100"> -->
            @include('layouts.partials.navig')
            <div class="container">
                @include('layouts.partials.topDashboard')
                <div class="main-side">
                    <div class="mainMedias">
                        <div class="les-medias">
                            {{ $slot }}
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="modal-title" id="exampleModalLabel">Ajout Média</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="">
                            <div class="modal-body">
                                <div class="mt-4 d-flex">
                                    <input type="text" name="lieu" id="lieuLit" class="outpout " placeholder="Lieu sur le littoral"  required>   
                                </div>
                                <div class="mt-4 d-flex">
                                    <input type="text" name="Titre" id="titre" class="outpout " placeholder="Titre"  required>   
                                </div>
                                <div class="mt-4 d-flex">
                                    <input type="text" name="Description" id="desc" class="outpout " placeholder="Description"  required>   
                                </div>
                                <div class="mt-4 d-flex">
                                    <input type="file" class="media" id="media">
                                    <label class="" for="media">Upload</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Header Dashboard -->
           
            <!-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> -->

            <!-- Page Content -->
            
        <!-- </div> -->
    </body>
</html>
