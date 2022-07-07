<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Forum</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="css/forum.css">
        <link rel="stylesheet" href="css/modal.css">

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
                            <div class="d-flex head-forum">
                                <div class="entete">
                                    <h1>Discussion</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                    </p>
                                </div>
                                <div class="illustration">
                                    <img src="/images/conversation.png" alt="">
                                </div>
                            </div>
                            <div class="badge-forum d-flex mb-4">
                                <svg width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.656 20.479C5.51242 20.6038 5.3362 20.6851 5.14803 20.7133C4.95987 20.7415 4.76756 20.7155 4.59369 20.6382C4.41982 20.5609 4.2716 20.4357 4.16644 20.2771C4.06128 20.1185 4.00354 19.9332 4 19.743V17.5C3.46957 17.5 2.96086 17.2893 2.58579 16.9142C2.21071 16.5391 2 16.0304 2 15.5V8.5C2 7.96957 2.21071 7.46086 2.58579 7.08579C2.96086 6.71071 3.46957 6.5 4 6.5H15C15.5304 6.5 16.0391 6.71071 16.4142 7.08579C16.7893 7.46086 17 7.96957 17 8.5V15.5C17 16.0304 16.7893 16.5391 16.4142 16.9142C16.0391 17.2893 15.5304 17.5 15 17.5H10.003L5.656 20.479V20.479ZM18 12.517C17.9968 12.64 17.9968 12.763 18 12.886V12.516C18.005 12.409 18.006 11.069 18.004 8.497C18.0032 7.70187 17.6868 6.93958 17.1243 6.37762C16.5617 5.81566 15.7991 5.5 15.004 5.5H7V4.5C7 3.96957 7.21071 3.46086 7.58579 3.08579C7.96086 2.71071 8.46957 2.5 9 2.5H20C20.5304 2.5 21.0391 2.71071 21.4142 3.08579C21.7893 3.46086 22 3.96957 22 4.5V11.5C22 12.0304 21.7893 12.5391 21.4142 12.9142C21.0391 13.2893 20.5304 13.5 20 13.5V15.743C19.9965 15.9332 19.9387 16.1185 19.8336 16.2771C19.7284 16.4357 19.5802 16.5609 19.4063 16.6382C19.2324 16.7155 19.0401 16.7415 18.852 16.7133C18.6638 16.6851 18.4876 16.6038 18.344 16.479L18 16.243V12.517Z" fill="black"/>
                                </svg>
                                <h1> Forums</h1>
                                <button class="d-flex" data-bs-toggle="modal" data-bs-target="#exampleModal"> 
                                    <svg width="30" height="30" viewBox="0 0 1024 1024" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M512 64C264.6 64 64 264.6 64 512C64 759.4 264.6 960 512 960C759.4 960 960 759.4 960 512C960 264.6 759.4 64 512 64ZM704 536C704 540.4 700.4 544 696 544H544V696C544 700.4 540.4 704 536 704H488C483.6 704 480 700.4 480 696V544H328C323.6 544 320 540.4 320 536V488C320 483.6 323.6 480 328 480H480V328C480 323.6 483.6 320 488 320H536C540.4 320 544 323.6 544 328V480H696C700.4 480 704 483.6 704 488V536Z" fill="black"/>
                                    </svg>
                                    <span>Créer Forum</span>
                                </button>
                            </div>
                            <div class="lesForums">
                                <a href="" class="d-flex" role="button">
                                    <div class="photo">
                                        <svg width="29" height="29" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.25 9.75C11.25 13.4715 14.2785 16.5 18 16.5C21.7215 16.5 24.75 13.4715 24.75 9.75C24.75 6.0285 21.7215 3 18 3C14.2785 3 11.25 6.0285 11.25 9.75ZM30 31.5H31.5V30C31.5 24.2115 26.7885 19.5 21 19.5H15C9.21 19.5 4.5 24.2115 4.5 30V31.5H30Z" fill="white"/>
                                        </svg>        
                                    </div>
                                    <div class="details">
                                        <h2 class="titre-theme">La dégradation du littoral: causes et conséquences</h2>
                                        <div class="plus-details d-flex">
                                            <span class="auteur">Créé par Boubs</span>
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 9.5C8.39782 9.5 8.77936 9.34196 9.06066 9.06066C9.34196 8.77936 9.5 8.39782 9.5 8C9.5 7.60218 9.34196 7.22064 9.06066 6.93934C8.77936 6.65804 8.39782 6.5 8 6.5C7.60218 6.5 7.22064 6.65804 6.93934 6.93934C6.65804 7.22064 6.5 7.60218 6.5 8C6.5 8.39782 6.65804 8.77936 6.93934 9.06066C7.22064 9.34196 7.60218 9.5 8 9.5V9.5Z" fill="#CCCCCC"/>
                                            </svg>
                                            <span class="auteur mr-2">Il y a 2h</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>  
                           
                    </div>
                   
                </div> 
            </div>
        </div> 

        <!-- Modal de création de forum -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ">
                            <h5 class="modal-title" id="exampleModalLabel">Créer un sujet de discussion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- espace de poste utilisateur -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{route('stocker')}} " enctype="multipart/form-data">
                             @csrf
                            <div class="modal-body">
                                <div class="mt-4 d-flex">
                                    <input type="text" name="titre" id="titre" class="outpout" placeholder="Thème"  required>   
                                </div>
                                <div class="mt-4 d-flex">
                                    <input type="text" name="description" id="desc" class="outpout" placeholder="Description"  required>   
                                </div>
                               
                                
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn">Lancer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       
    </body>
</html>
 <!-- @auth
                           
                            <form method="POST" action="{{route('publier')}}" class="card-user-connected" enctype="multipart/form-data">
                                    @csrf
                                <div class="user">
        
                                    <div class="create-theme">
                                            <input name="titre" type="text" id="theme" class="theme" placeholder="Sujet de discussion" required>
                                            <textarea name="description" id="description" class="desc" placeholder="Description" required></textarea>
                                            <div class="medias d-flex">
                                               
                                                <div class="publier">
                                                    <input type="submit" id="publier" value="Lancer la discussion">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                            @endauth
                            <div class="user-post">
                                <div class="user">
                                    <div class="photo">
                                        <svg width="30" height="30" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.25 9.75C11.25 13.4715 14.2785 16.5 18 16.5C21.7215 16.5 24.75 13.4715 24.75 9.75C24.75 6.0285 21.7215 3 18 3C14.2785 3 11.25 6.0285 11.25 9.75ZM30 31.5H31.5V30C31.5 24.2115 26.7885 19.5 21 19.5H15C9.21 19.5 4.5 24.2115 4.5 30V31.5H30Z" fill="white"/>
                                        </svg>        
                                    </div>
                                    <div class="details-user">
                                        <div class="name-user"><span id="prenom">Boubs </span> <span class="nom ml-1">Diallo</span></div>
                                        <div class="porte-post d-flex ml-1">
                                            <svg width="11.5" height="11.5" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.50004 1.78125C7.94421 1.78125 6.45211 2.3993 5.35197 3.49943C4.25184 4.59957 3.63379 6.09167 3.63379 7.6475V7.6475V8.075C3.87129 11.2892 6.53921 13.874 9.50004 17.2188C12.5915 13.7275 15.3663 11.0833 15.3663 7.6475C15.3663 6.09167 14.7482 4.59957 13.6481 3.49943C12.548 2.3993 11.0559 1.78125 9.50004 1.78125ZM9.50004 4.82917C10.0584 4.82917 10.6042 4.99479 11.0684 5.30509C11.5326 5.61538 11.8944 6.05639 12.1079 6.57233C12.3214 7.08827 12.377 7.65594 12.2678 8.20352C12.1586 8.7511 11.8894 9.25397 11.4943 9.64852C11.0992 10.0431 10.5959 10.3116 10.0482 10.42C9.50048 10.5285 8.93289 10.472 8.41725 10.2578C7.90161 10.0436 7.4611 9.6812 7.15146 9.21656C6.84182 8.75191 6.67696 8.20586 6.67775 7.6475C6.6788 6.89967 6.97661 6.18282 7.50578 5.6544C8.03494 5.12597 8.75221 4.82917 9.50004 4.82917Z" stroke="#8A8A8A" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span class="text-porte ml-1"> Ndar </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="post">
                                    <p class="desc-post">
                                        lorem ipsum

                                    </p>
                                    <div class="medias">
                                        
                                            
                                            <div class="media-post">
                                                <img src="#" alt="">
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div> -->
 <!-- <div class="photo d-flex">
                                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M22 16V4C22 2.9 21.1 2 20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16ZM11 12L13.03 14.71L16 11L20 16H8L11 12ZM2 6V20C2 21.1 2.9 22 4 22H18V20H4V6H2Z" fill="#0FA958"/>
                                                    </svg>
                                                    <input type="file" id="photo" name="photo"  hidden/>
                                                    <label for="photo" class="ml-3">Photo</label>
                                                </div>
                                                 -->