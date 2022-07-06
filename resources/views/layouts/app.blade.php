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
                        <!-- espace de poste utilisateur -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{route('stocker')}} " enctype="multipart/form-data">
                             @csrf
                            <div class="modal-body">
                                <div class="mt-4 d-flex">
                                    <input type="text" name="lieu" id="lieuLit" class="outpout" placeholder="Lieu sur le littoral"  required>   
                                </div>
                                <div class="mt-4 d-flex">
                                    <input type="text" name="titre" id="titre" class="outpout" placeholder="Titre"  required>   
                                </div>
                                <div class="mt-4 d-flex">
                                    <input type="text" name="description" id="desc" class="outpout" placeholder="Description"  required>   
                                </div>
                                <div class="medias d-flex">
                                    <div class="mt-4 d-flex">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22 16V4C22 2.9 21.1 2 20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16ZM11 12L13.03 14.71L16 11L20 16H8L11 12ZM2 6V20C2 21.1 2.9 22 4 22H18V20H4V6H2Z" fill="#0FA958"/>
                                        </svg>
                                        <input type="file" id="photo" name="photo"  hidden/>
                                        <label for="photo" class="ml-3">Photo</label>
                                    </div>
                                    <div class="mt-4 d-flex">
                                         <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.4134 6.66666H2.58671C2.2543 6.66666 1.93551 6.7987 1.70047 7.03375C1.46542 7.26879 1.33337 7.58759 1.33337 7.91999V20.08C1.33337 20.4124 1.46542 20.7312 1.70047 20.9662C1.93551 21.2013 2.2543 21.3333 2.58671 21.3333H21.4134C21.7458 21.3333 22.0646 21.2013 22.2996 20.9662C22.5347 20.7312 22.6667 20.4124 22.6667 20.08V7.91999C22.6667 7.58759 22.5347 7.26879 22.2996 7.03375C22.0646 6.7987 21.7458 6.66666 21.4134 6.66666ZM16.12 14.5533L9.60671 17.46C9.50529 17.5056 9.39408 17.5251 9.2832 17.5167C9.17232 17.5083 9.06529 17.4724 8.97186 17.4121C8.87844 17.3518 8.80158 17.2691 8.74828 17.1715C8.69498 17.0739 8.66694 16.9645 8.66671 16.8533V11.04C8.66694 10.9288 8.69498 10.8194 8.74828 10.7218C8.80158 10.6242 8.87844 10.5415 8.97186 10.4812C9.06529 10.4209 9.17232 10.385 9.2832 10.3766C9.39408 10.3682 9.50529 10.3877 9.60671 10.4333L16.12 13.3333C16.2383 13.3855 16.3389 13.4709 16.4095 13.5792C16.4801 13.6875 16.5177 13.814 16.5177 13.9433C16.5177 14.0726 16.4801 14.1991 16.4095 14.3074C16.3389 14.4157 16.2383 14.5012 16.12 14.5533Z" fill="#D27C2C"/>
                                            <path d="M20.0934 2.00001C20.0934 1.8232 20.0231 1.65363 19.8981 1.52861C19.7731 1.40358 19.6035 1.33334 19.4267 1.33334H4.76005C4.58324 1.33334 4.41367 1.40358 4.28865 1.52861C4.16362 1.65363 4.09338 1.8232 4.09338 2.00001V2.66668H20.0934V2.00001Z" fill="#D27C2C"/>
                                            <path d="M21.4134 4.66667C21.4134 4.48986 21.3431 4.32029 21.2181 4.19526C21.0931 4.07024 20.9235 4 20.7467 4H3.41337C3.23656 4 3.06699 4.07024 2.94197 4.19526C2.81694 4.32029 2.7467 4.48986 2.7467 4.66667V5.33333H21.4134V4.66667Z" fill="#D27C2C"/>
                                        </svg>   
                                        <input name="video" type="file" id="video"  hidden/>
                                        <label for="video" class="ml-3">Vidéo</label> 
                                    </div>
                                    <div class="mt-4 d-flex">
                                          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 13H15M9 17H12M4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8.342C20 8.07556 19.9467 7.81181 19.8433 7.56624C19.7399 7.32068 19.5885 7.09824 19.398 6.912L14.958 2.57C14.5844 2.20466 14.0826 2.00007 13.56 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V4Z" stroke="#FFD233" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M14 2V6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8H20" stroke="#FFD233" stroke-width="2" stroke-linejoin="round"/>
                                            </svg>   
                                           <input name="documents" type="file" id="documents"  hidden/>
                                        <label for="documents" class="ml-3">Document</label> 
                                    </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="modal-title" id="exampleModalLabel">Ajout Média</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- espace de poste utilisateur -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{route('stocker')}} " enctype="multipart/form-data">
                             @csrf
                            <div class="modal-body">
                                <div class="mt-4 d-flex">
                                    <!-- <input type="text" name="lieu" id="lieuLit" class="outpout " placeholder="Lieu sur le littoral"  required> -->
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>   
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn">Partager</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       
    </body>
</html>
