<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Comments_Forum</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="css/forum.css">
        <link rel="stylesheet" href="css/comments.css">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body >
        <div class="min-h-screen ">
                @include('layouts.partials.navig')
             <div class="container">
                @include('components.topbarforum')
                <div class="main-side">
                    <div class="mainForum">
                        <div class="les-medias ">
                            <div class="card bg-dark text-white">
                                <img src="/images/back1_littoral.webp" class="card-img" alt="...">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Titre Thème</h5>
                                    <p class="card-text" id="desc-theme">Description Thème: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <p class="card-text" id="date">Créé le 22 Juin 2022</p>
                                </div>
                            </div>
                            <div class="badge-forum d-flex mb-4">
                                <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.656 20.479C5.51242 20.6038 5.3362 20.6851 5.14803 20.7133C4.95987 20.7415 4.76756 20.7155 4.59369 20.6382C4.41982 20.5609 4.2716 20.4357 4.16644 20.2771C4.06128 20.1185 4.00354 19.9332 4 19.743V17.5C3.46957 17.5 2.96086 17.2893 2.58579 16.9142C2.21071 16.5391 2 16.0304 2 15.5V8.5C2 7.96957 2.21071 7.46086 2.58579 7.08579C2.96086 6.71071 3.46957 6.5 4 6.5H15C15.5304 6.5 16.0391 6.71071 16.4142 7.08579C16.7893 7.46086 17 7.96957 17 8.5V15.5C17 16.0304 16.7893 16.5391 16.4142 16.9142C16.0391 17.2893 15.5304 17.5 15 17.5H10.003L5.656 20.479V20.479ZM18 12.517C17.9968 12.64 17.9968 12.763 18 12.886V12.516C18.005 12.409 18.006 11.069 18.004 8.497C18.0032 7.70187 17.6868 6.93958 17.1243 6.37762C16.5617 5.81566 15.7991 5.5 15.004 5.5H7V4.5C7 3.96957 7.21071 3.46086 7.58579 3.08579C7.96086 2.71071 8.46957 2.5 9 2.5H20C20.5304 2.5 21.0391 2.71071 21.4142 3.08579C21.7893 3.46086 22 3.96957 22 4.5V11.5C22 12.0304 21.7893 12.5391 21.4142 12.9142C21.0391 13.2893 20.5304 13.5 20 13.5V15.743C19.9965 15.9332 19.9387 16.1185 19.8336 16.2771C19.7284 16.4357 19.5802 16.5609 19.4063 16.6382C19.2324 16.7155 19.0401 16.7415 18.852 16.7133C18.6638 16.6851 18.4876 16.6038 18.344 16.479L18 16.243V12.517Z" fill="black"/>
                                </svg>
                                <h1 id="title-comments"> Commentaires</h1>
                            </div>
                            <div class="myComment d-flex">
                                <div class="myphoto">
                                    <svg width="29" height="29" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.25 9.75C11.25 13.4715 14.2785 16.5 18 16.5C21.7215 16.5 24.75 13.4715 24.75 9.75C24.75 6.0285 21.7215 3 18 3C14.2785 3 11.25 6.0285 11.25 9.75ZM30 31.5H31.5V30C31.5 24.2115 26.7885 19.5 21 19.5H15C9.21 19.5 4.5 24.2115 4.5 30V31.5H30Z" fill="white"/>
                                    </svg>        
                                </div>
                                <div class="espaceComment d-flex">
                                    <input type="text" placeholder="Ce commentaire sera rendu publique une fois publié">
                                    <input type="submit" value="Poster">
                                 </div>
                            </div>
                            <div class="lesForums">
                                <!-- Un commentaire d'un utilisateur -->
                                <div class="comment-details">
                                    <div class="d-flex oneComment">
                                        <div class="photo">
                                            <svg width="29" height="29" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.25 9.75C11.25 13.4715 14.2785 16.5 18 16.5C21.7215 16.5 24.75 13.4715 24.75 9.75C24.75 6.0285 21.7215 3 18 3C14.2785 3 11.25 6.0285 11.25 9.75ZM30 31.5H31.5V30C31.5 24.2115 26.7885 19.5 21 19.5H15C9.21 19.5 4.5 24.2115 4.5 30V31.5H30Z" fill="white"/>
                                            </svg>        
                                        </div>
                                        <div class="espaceComment d-flex">
                                            <p class="unCommentaire">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
                                        
                                    </div>
                                    <div class="details">
                                        <div class="plus-details d-flex">
                                            <span class="auteur">publié par Boubs</span>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 9.5C8.39782 9.5 8.77936 9.34196 9.06066 9.06066C9.34196 8.77936 9.5 8.39782 9.5 8C9.5 7.60218 9.34196 7.22064 9.06066 6.93934C8.77936 6.65804 8.39782 6.5 8 6.5C7.60218 6.5 7.22064 6.65804 6.93934 6.93934C6.65804 7.22064 6.5 7.60218 6.5 8C6.5 8.39782 6.65804 8.77936 6.93934 9.06066C7.22064 9.34196 7.60218 9.5 8 9.5V9.5Z" fill="#CCCCCC"/>
                                            </svg>
                                            <span class="auteur mr-2">Il y a 2h</span>
                                        </div>
                                    </div>
                                </div>
                  
                            </div>
                        </div>  
                           
                    </div>
                   
                </div> 
            </div>
        </div> 
       
    </body>
</html>
 