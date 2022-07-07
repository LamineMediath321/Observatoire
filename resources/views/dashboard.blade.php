<x-app-layout>

            <!-- Contenu medias -->
    <!-- <div class="mainMedias"> -->
                
        <!-- <div class="les-medias"> -->
                    <!-- espace des images -->
            <div class="group-medias">
                <h4>Images</h4>
                <div class="list-of-medias">
                @foreach ($photos as $photo)
                    
                    <div class="card oneCard" style="width: 210px;">
                        <div class="card-img-top">
                            <img class="" src="{{Storage::url($photo->src)}}" alt="Card image cap">
                        </div>
                        
                        <div class="card-body">
                            <svg width="13" height="13" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_63_430)">
                                    <path d="M9.37817 8.59375C9.37817 9.21535 9.13124 9.81149 8.69171 10.251C8.25217 10.6906 7.65602 10.9375 7.03442 10.9375C6.41282 10.9375 5.81668 10.6906 5.37714 10.251C4.9376 9.81149 4.69067 9.21535 4.69067 8.59375C4.69067 7.97215 4.9376 7.37601 5.37714 6.93647C5.81668 6.49693 6.41282 6.25 7.03442 6.25C7.65602 6.25 8.25217 6.49693 8.69171 6.93647C9.13124 7.37601 9.37817 7.97215 9.37817 8.59375Z" fill="#FF9A62"/>
                                    <path d="M3.12817 1.5625C2.29937 1.5625 1.50452 1.89174 0.918465 2.47779C0.332414 3.06384 0.00317383 3.8587 0.00317383 4.6875V20.3125C0.00317383 21.1413 0.332414 21.9362 0.918465 22.5222C1.50452 23.1083 2.29937 23.4375 3.12817 23.4375H21.8782C22.707 23.4375 23.5018 23.1083 24.0879 22.5222C24.6739 21.9362 25.0032 21.1413 25.0032 20.3125V4.6875C25.0032 3.8587 24.6739 3.06384 24.0879 2.47779C23.5018 1.89174 22.707 1.5625 21.8782 1.5625H3.12817ZM21.8782 3.125C22.2926 3.125 22.69 3.28962 22.983 3.58265C23.2761 3.87567 23.4407 4.2731 23.4407 4.6875V14.8438L17.5391 11.8016C17.3926 11.7282 17.2267 11.7027 17.0649 11.7288C16.9031 11.7549 16.7536 11.8312 16.6375 11.9469L10.8407 17.7437L6.68442 14.975C6.53436 14.8751 6.35436 14.8302 6.17495 14.8478C5.99554 14.8655 5.82776 14.9446 5.70005 15.0719L1.56567 18.75V4.6875C1.56567 4.2731 1.73029 3.87567 2.02332 3.58265C2.31635 3.28962 2.71377 3.125 3.12817 3.125H21.8782Z" fill="#FF9A62"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_63_430">
                                        <rect width="25" height="25" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>    
                            <span class="card-text"> {{$photo->titre}} </span>
                            <div class="boutons-crud d-flex">
                                <a href="{{route('publier_by',['donnee'=> $photo])}}" class="public">
                                    <svg width="11" height="11" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.25C3.71969 0.25 0.25 3.71969 0.25 8C0.25 12.2803 3.71969 15.75 8 15.75C12.2803 15.75 15.75 12.2803 15.75 8C15.75 3.71969 12.2803 0.25 8 0.25ZM13 6.98438V7.20094C13 7.38437 12.8962 7.55219 12.7322 7.63406L12.2513 7.87469C12.1749 7.91291 12.0897 7.93024 12.0045 7.92492C11.9193 7.91959 11.837 7.8918 11.7659 7.84438L11.1969 7.465C11.1355 7.42411 11.0656 7.39777 10.9925 7.38797C10.9194 7.37816 10.845 7.38517 10.775 7.40844L10.6922 7.43594C10.3891 7.53687 10.2653 7.89813 10.4425 8.16406L10.8562 8.78469C10.9459 8.91937 11.0972 9.00031 11.2591 9.00031H11.5156C11.7831 9.00031 12 9.21719 12 9.48469V9.83906C12 9.94375 11.9659 10.0459 11.9031 10.1297L11.3175 10.9103C11.2731 10.9697 11.2428 11.0384 11.2291 11.1112L11.0947 11.8247C11.0753 11.9275 11.0231 12.0213 10.9459 12.0922C10.6498 12.3634 10.3875 12.6693 10.1647 13.0034L9.7575 13.6144C9.67831 13.7332 9.57101 13.8306 9.44514 13.898C9.31927 13.9653 9.17871 14.0006 9.03594 14.0006C8.7075 14.0006 8.40719 13.815 8.26031 13.5212C8.08911 13.1788 7.99998 12.8013 8 12.4184V11.4844C8 11.2169 7.78312 11 7.51562 11H6.70687C6.25406 11 5.82 10.82 5.49969 10.5C5.17962 10.1798 4.99977 9.74557 4.99969 9.29281V8.85344C4.99969 8.31625 5.25281 7.81031 5.6825 7.48781L6.54437 6.84125C6.83992 6.61963 7.19934 6.49978 7.56875 6.49969H7.59656C7.86156 6.49969 8.12312 6.56125 8.36 6.68L8.82 6.91C8.935 6.9675 9.06781 6.97688 9.18969 6.93625L10.6681 6.44344C10.8659 6.3775 10.9994 6.1925 10.9994 5.98406C10.9994 5.71656 10.7825 5.49969 10.515 5.49969H10.1997C10.0713 5.49969 9.94812 5.44875 9.85719 5.35781L9.64094 5.14156C9.59597 5.09657 9.54257 5.06089 9.4838 5.03654C9.42504 5.0122 9.36205 4.99968 9.29844 4.99969H6.48438C6.21688 4.99969 6 4.78281 6 4.51531V4.37781C6 4.15562 6.15125 3.96188 6.36688 3.90781L6.81844 3.795C6.93531 3.76562 7.03719 3.69406 7.10406 3.59375L7.35656 3.21531C7.44625 3.08063 7.5975 2.99969 7.75938 2.99969H8.51594C8.78344 2.99969 9.00031 2.78281 9.00031 2.51531V1.83719C11.4759 2.23844 13.4644 4.09437 14.0603 6.5H13.4844C13.2169 6.5 13 6.71688 13 6.98438Z" fill="#000000"/>

                                    </svg>
                                </a>
                                <a href="{{route('delete',['id'=> $photo->id])}} ">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 5H14C14 4.46957 13.7893 3.96086 13.4142 3.58579C13.0391 3.21071 12.5304 3 12 3C11.4696 3 10.9609 3.21071 10.5858 3.58579C10.2107 3.96086 10 4.46957 10 5ZM8.5 5C8.5 4.54037 8.59053 4.08525 8.76642 3.66061C8.94231 3.23597 9.20012 2.85013 9.52513 2.52513C9.85013 2.20012 10.236 1.94231 10.6606 1.76642C11.0852 1.59053 11.5404 1.5 12 1.5C12.4596 1.5 12.9148 1.59053 13.3394 1.76642C13.764 1.94231 14.1499 2.20012 14.4749 2.52513C14.7999 2.85013 15.0577 3.23597 15.2336 3.66061C15.4095 4.08525 15.5 4.54037 15.5 5H21.25C21.4489 5 21.6397 5.07902 21.7803 5.21967C21.921 5.36032 22 5.55109 22 5.75C22 5.94891 21.921 6.13968 21.7803 6.28033C21.6397 6.42098 21.4489 6.5 21.25 6.5H19.93L18.76 18.611C18.6702 19.539 18.238 20.4002 17.5477 21.0268C16.8573 21.6534 15.9583 22.0004 15.026 22H8.974C8.04186 22.0001 7.1431 21.653 6.45295 21.0265C5.7628 20.3999 5.33073 19.5388 5.241 18.611L4.07 6.5H2.75C2.55109 6.5 2.36032 6.42098 2.21967 6.28033C2.07902 6.13968 2 5.94891 2 5.75C2 5.55109 2.07902 5.36032 2.21967 5.21967C2.36032 5.07902 2.55109 5 2.75 5H8.5ZM10.5 9.75C10.5 9.55109 10.421 9.36032 10.2803 9.21967C10.1397 9.07902 9.94891 9 9.75 9C9.55109 9 9.36032 9.07902 9.21967 9.21967C9.07902 9.36032 9 9.55109 9 9.75V17.25C9 17.4489 9.07902 17.6397 9.21967 17.7803C9.36032 17.921 9.55109 18 9.75 18C9.94891 18 10.1397 17.921 10.2803 17.7803C10.421 17.6397 10.5 17.4489 10.5 17.25V9.75ZM14.25 9C14.0511 9 13.8603 9.07902 13.7197 9.21967C13.579 9.36032 13.5 9.55109 13.5 9.75V17.25C13.5 17.4489 13.579 17.6397 13.7197 17.7803C13.8603 17.921 14.0511 18 14.25 18C14.4489 18 14.6397 17.921 14.7803 17.7803C14.921 17.6397 15 17.4489 15 17.25V9.75C15 9.55109 14.921 9.36032 14.7803 9.21967C14.6397 9.07902 14.4489 9 14.25 9Z" fill="#F24E1E"/>
                                    </svg> 
                                </a>
                                <a href="" id="share" data-bs-toggle="modal" data-bs-target="#exampleModal{{$photo->id}}">
                                    <svg width="14" height="14" class="share" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 12L14 5V9C7 10 4 15 3 20C5.5 16.5 9 14.9 14 14.9V19L21 12Z" fill="#85B6FF"/>
                                    </svg>  
                                </a>
                            </div>
                            
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal{{$photo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <h5 class="modal-title" id="exampleModalLabel">Partager </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- espace pour partager des donnees a d'autres-->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <form method="POST" action="{{route('partager')}} " enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mt-4 d-flex">
                                            <input type="text" name="donnee" value="{{$photo->id}}" hidden>
                                            <input type="email" name="beneficiaire" class="outpout" placeholder="login@example.com" required/>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn">Partager</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  


                    @endforeach
                </div>
                
              
            </div>
                    <!-- espace des vidéos -->
          @if ($videos)
                <div class="group-medias">
                <h4>Vidéos</h4>
                <div class="list-of-medias">
                    @foreach ($videos as $video)
                    <div class="card oneCard" style="width: 210px;">
                        <video controls>
                            <source src="{{Storage::url($video->src)}}" type="video/mp4">
                        </video>
                        <div class="card-body">
                            <svg width="15" height="15" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.0001 5.33333H8.00008C5.05456 5.33333 2.66675 7.72114 2.66675 10.6667V21.3333C2.66675 24.2788 5.05456 26.6667 8.00008 26.6667H24.0001C26.9456 26.6667 29.3334 24.2788 29.3334 21.3333V10.6667C29.3334 7.72114 26.9456 5.33333 24.0001 5.33333Z" stroke="#FFD233" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M20.0002 16L13.3335 12V20L20.0002 16Z" stroke="#FFD233" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>   
                            <span class="card-text">{{$video->titre}} </span>
                            <div class="boutons-crud d-flex">
                                <a href="{{route('publier_by',['donnee'=> $video])}}" class="public">
                                <svg width="11" height="11" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.25C3.71969 0.25 0.25 3.71969 0.25 8C0.25 12.2803 3.71969 15.75 8 15.75C12.2803 15.75 15.75 12.2803 15.75 8C15.75 3.71969 12.2803 0.25 8 0.25ZM13 6.98438V7.20094C13 7.38437 12.8962 7.55219 12.7322 7.63406L12.2513 7.87469C12.1749 7.91291 12.0897 7.93024 12.0045 7.92492C11.9193 7.91959 11.837 7.8918 11.7659 7.84438L11.1969 7.465C11.1355 7.42411 11.0656 7.39777 10.9925 7.38797C10.9194 7.37816 10.845 7.38517 10.775 7.40844L10.6922 7.43594C10.3891 7.53687 10.2653 7.89813 10.4425 8.16406L10.8562 8.78469C10.9459 8.91937 11.0972 9.00031 11.2591 9.00031H11.5156C11.7831 9.00031 12 9.21719 12 9.48469V9.83906C12 9.94375 11.9659 10.0459 11.9031 10.1297L11.3175 10.9103C11.2731 10.9697 11.2428 11.0384 11.2291 11.1112L11.0947 11.8247C11.0753 11.9275 11.0231 12.0213 10.9459 12.0922C10.6498 12.3634 10.3875 12.6693 10.1647 13.0034L9.7575 13.6144C9.67831 13.7332 9.57101 13.8306 9.44514 13.898C9.31927 13.9653 9.17871 14.0006 9.03594 14.0006C8.7075 14.0006 8.40719 13.815 8.26031 13.5212C8.08911 13.1788 7.99998 12.8013 8 12.4184V11.4844C8 11.2169 7.78312 11 7.51562 11H6.70687C6.25406 11 5.82 10.82 5.49969 10.5C5.17962 10.1798 4.99977 9.74557 4.99969 9.29281V8.85344C4.99969 8.31625 5.25281 7.81031 5.6825 7.48781L6.54437 6.84125C6.83992 6.61963 7.19934 6.49978 7.56875 6.49969H7.59656C7.86156 6.49969 8.12312 6.56125 8.36 6.68L8.82 6.91C8.935 6.9675 9.06781 6.97688 9.18969 6.93625L10.6681 6.44344C10.8659 6.3775 10.9994 6.1925 10.9994 5.98406C10.9994 5.71656 10.7825 5.49969 10.515 5.49969H10.1997C10.0713 5.49969 9.94812 5.44875 9.85719 5.35781L9.64094 5.14156C9.59597 5.09657 9.54257 5.06089 9.4838 5.03654C9.42504 5.0122 9.36205 4.99968 9.29844 4.99969H6.48438C6.21688 4.99969 6 4.78281 6 4.51531V4.37781C6 4.15562 6.15125 3.96188 6.36688 3.90781L6.81844 3.795C6.93531 3.76562 7.03719 3.69406 7.10406 3.59375L7.35656 3.21531C7.44625 3.08063 7.5975 2.99969 7.75938 2.99969H8.51594C8.78344 2.99969 9.00031 2.78281 9.00031 2.51531V1.83719C11.4759 2.23844 13.4644 4.09437 14.0603 6.5H13.4844C13.2169 6.5 13 6.71688 13 6.98438Z" fill="#000000"/>
                                    </svg> 
                                </a>
                                <a href="{{route('delete',['id'=> $video->id])}} ">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 5H14C14 4.46957 13.7893 3.96086 13.4142 3.58579C13.0391 3.21071 12.5304 3 12 3C11.4696 3 10.9609 3.21071 10.5858 3.58579C10.2107 3.96086 10 4.46957 10 5ZM8.5 5C8.5 4.54037 8.59053 4.08525 8.76642 3.66061C8.94231 3.23597 9.20012 2.85013 9.52513 2.52513C9.85013 2.20012 10.236 1.94231 10.6606 1.76642C11.0852 1.59053 11.5404 1.5 12 1.5C12.4596 1.5 12.9148 1.59053 13.3394 1.76642C13.764 1.94231 14.1499 2.20012 14.4749 2.52513C14.7999 2.85013 15.0577 3.23597 15.2336 3.66061C15.4095 4.08525 15.5 4.54037 15.5 5H21.25C21.4489 5 21.6397 5.07902 21.7803 5.21967C21.921 5.36032 22 5.55109 22 5.75C22 5.94891 21.921 6.13968 21.7803 6.28033C21.6397 6.42098 21.4489 6.5 21.25 6.5H19.93L18.76 18.611C18.6702 19.539 18.238 20.4002 17.5477 21.0268C16.8573 21.6534 15.9583 22.0004 15.026 22H8.974C8.04186 22.0001 7.1431 21.653 6.45295 21.0265C5.7628 20.3999 5.33073 19.5388 5.241 18.611L4.07 6.5H2.75C2.55109 6.5 2.36032 6.42098 2.21967 6.28033C2.07902 6.13968 2 5.94891 2 5.75C2 5.55109 2.07902 5.36032 2.21967 5.21967C2.36032 5.07902 2.55109 5 2.75 5H8.5ZM10.5 9.75C10.5 9.55109 10.421 9.36032 10.2803 9.21967C10.1397 9.07902 9.94891 9 9.75 9C9.55109 9 9.36032 9.07902 9.21967 9.21967C9.07902 9.36032 9 9.55109 9 9.75V17.25C9 17.4489 9.07902 17.6397 9.21967 17.7803C9.36032 17.921 9.55109 18 9.75 18C9.94891 18 10.1397 17.921 10.2803 17.7803C10.421 17.6397 10.5 17.4489 10.5 17.25V9.75ZM14.25 9C14.0511 9 13.8603 9.07902 13.7197 9.21967C13.579 9.36032 13.5 9.55109 13.5 9.75V17.25C13.5 17.4489 13.579 17.6397 13.7197 17.7803C13.8603 17.921 14.0511 18 14.25 18C14.4489 18 14.6397 17.921 14.7803 17.7803C14.921 17.6397 15 17.4489 15 17.25V9.75C15 9.55109 14.921 9.36032 14.7803 9.21967C14.6397 9.07902 14.4489 9 14.25 9Z" fill="#F24E1E"/>
                                    </svg> 
                                </a>
                                <a href="" id="share" data-bs-toggle="modal" data-bs-target="#exampleModal{{$video->id}}">
                                    <svg width="14" height="14" class="share" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 12L14 5V9C7 10 4 15 3 20C5.5 16.5 9 14.9 14 14.9V19L21 12Z" fill="#85B6FF"/>
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>

                       <div class="modal fade" id="exampleModal{{$video->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header ">
                                    <h5 class="modal-title" id="exampleModalLabel">Partager </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- espace pour partager des donnees a d'autres-->
                                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                <form method="POST" action="{{route('partager')}} " enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mt-4 d-flex">
                                            <input type="text" name="donnee"  value="{{$video->id}}" hidden>
                                            <input type="email" name="beneficiaire" class="outpout" placeholder="login@example.com" required/>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                    <button type="submit" class="btn">Partager</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  

                    @endforeach
                </div>
            </div>
          @endif
              <!-- espace des documents -->
          @if ($documents)
              <div class="group-medias">
                <h4>Documents</h4>
                <div class="list-of-medias">
                    <div class="card oneCard"  style="width: 210px;" data-bs-toggle="modal" data-bs-target="#exampleModal_">
                        <img id="example1" src="/images/beau-bord-mer.webp" class="card-img-top" alt="">
                        <div class="card-body ">
                            <svg width="13" height="13" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.74992 14.0833H16.2499M9.74992 18.4167H12.9999M4.33325 4.33332V21.6667C4.33325 22.2413 4.56153 22.7924 4.96785 23.1987C5.37418 23.605 5.92528 23.8333 6.49992 23.8333H19.4999C20.0746 23.8333 20.6257 23.605 21.032 23.1987C21.4383 22.7924 21.6666 22.2413 21.6666 21.6667V9.03716C21.6666 8.74851 21.6088 8.46279 21.4968 8.19675C21.3849 7.93072 21.2208 7.68975 21.0144 7.48799L16.2044 2.78416C15.7996 2.38837 15.256 2.16673 14.6899 2.16666H6.49992C5.92528 2.16666 5.37418 2.39493 4.96785 2.80126C4.56153 3.20759 4.33325 3.75869 4.33325 4.33332V4.33332Z" stroke="#0FA958" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.1665 2.16666V6.49999C15.1665 7.07463 15.3948 7.62573 15.8011 8.03205C16.2074 8.43838 16.7585 8.66666 17.3332 8.66666H21.6665" stroke="#0FA958" stroke-width="2" stroke-linejoin="round"/>
                            </svg>                                        
                            <span class="card-text">titre document</span>
                            <div class="boutons-crud d-flex" id="crud-boutons">
                                <a href="#" class="public">
                                    <svg width="11" height="11" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 0.25C3.71969 0.25 0.25 3.71969 0.25 8C0.25 12.2803 3.71969 15.75 8 15.75C12.2803 15.75 15.75 12.2803 15.75 8C15.75 3.71969 12.2803 0.25 8 0.25ZM13 6.98438V7.20094C13 7.38437 12.8962 7.55219 12.7322 7.63406L12.2513 7.87469C12.1749 7.91291 12.0897 7.93024 12.0045 7.92492C11.9193 7.91959 11.837 7.8918 11.7659 7.84438L11.1969 7.465C11.1355 7.42411 11.0656 7.39777 10.9925 7.38797C10.9194 7.37816 10.845 7.38517 10.775 7.40844L10.6922 7.43594C10.3891 7.53687 10.2653 7.89813 10.4425 8.16406L10.8562 8.78469C10.9459 8.91937 11.0972 9.00031 11.2591 9.00031H11.5156C11.7831 9.00031 12 9.21719 12 9.48469V9.83906C12 9.94375 11.9659 10.0459 11.9031 10.1297L11.3175 10.9103C11.2731 10.9697 11.2428 11.0384 11.2291 11.1112L11.0947 11.8247C11.0753 11.9275 11.0231 12.0213 10.9459 12.0922C10.6498 12.3634 10.3875 12.6693 10.1647 13.0034L9.7575 13.6144C9.67831 13.7332 9.57101 13.8306 9.44514 13.898C9.31927 13.9653 9.17871 14.0006 9.03594 14.0006C8.7075 14.0006 8.40719 13.815 8.26031 13.5212C8.08911 13.1788 7.99998 12.8013 8 12.4184V11.4844C8 11.2169 7.78312 11 7.51562 11H6.70687C6.25406 11 5.82 10.82 5.49969 10.5C5.17962 10.1798 4.99977 9.74557 4.99969 9.29281V8.85344C4.99969 8.31625 5.25281 7.81031 5.6825 7.48781L6.54437 6.84125C6.83992 6.61963 7.19934 6.49978 7.56875 6.49969H7.59656C7.86156 6.49969 8.12312 6.56125 8.36 6.68L8.82 6.91C8.935 6.9675 9.06781 6.97688 9.18969 6.93625L10.6681 6.44344C10.8659 6.3775 10.9994 6.1925 10.9994 5.98406C10.9994 5.71656 10.7825 5.49969 10.515 5.49969H10.1997C10.0713 5.49969 9.94812 5.44875 9.85719 5.35781L9.64094 5.14156C9.59597 5.09657 9.54257 5.06089 9.4838 5.03654C9.42504 5.0122 9.36205 4.99968 9.29844 4.99969H6.48438C6.21688 4.99969 6 4.78281 6 4.51531V4.37781C6 4.15562 6.15125 3.96188 6.36688 3.90781L6.81844 3.795C6.93531 3.76562 7.03719 3.69406 7.10406 3.59375L7.35656 3.21531C7.44625 3.08063 7.5975 2.99969 7.75938 2.99969H8.51594C8.78344 2.99969 9.00031 2.78281 9.00031 2.51531V1.83719C11.4759 2.23844 13.4644 4.09437 14.0603 6.5H13.4844C13.2169 6.5 13 6.71688 13 6.98438Z" fill="#000000"/>
                                    </svg> 
                                </a>
                                <a href="#">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 5H14C14 4.46957 13.7893 3.96086 13.4142 3.58579C13.0391 3.21071 12.5304 3 12 3C11.4696 3 10.9609 3.21071 10.5858 3.58579C10.2107 3.96086 10 4.46957 10 5ZM8.5 5C8.5 4.54037 8.59053 4.08525 8.76642 3.66061C8.94231 3.23597 9.20012 2.85013 9.52513 2.52513C9.85013 2.20012 10.236 1.94231 10.6606 1.76642C11.0852 1.59053 11.5404 1.5 12 1.5C12.4596 1.5 12.9148 1.59053 13.3394 1.76642C13.764 1.94231 14.1499 2.20012 14.4749 2.52513C14.7999 2.85013 15.0577 3.23597 15.2336 3.66061C15.4095 4.08525 15.5 4.54037 15.5 5H21.25C21.4489 5 21.6397 5.07902 21.7803 5.21967C21.921 5.36032 22 5.55109 22 5.75C22 5.94891 21.921 6.13968 21.7803 6.28033C21.6397 6.42098 21.4489 6.5 21.25 6.5H19.93L18.76 18.611C18.6702 19.539 18.238 20.4002 17.5477 21.0268C16.8573 21.6534 15.9583 22.0004 15.026 22H8.974C8.04186 22.0001 7.1431 21.653 6.45295 21.0265C5.7628 20.3999 5.33073 19.5388 5.241 18.611L4.07 6.5H2.75C2.55109 6.5 2.36032 6.42098 2.21967 6.28033C2.07902 6.13968 2 5.94891 2 5.75C2 5.55109 2.07902 5.36032 2.21967 5.21967C2.36032 5.07902 2.55109 5 2.75 5H8.5ZM10.5 9.75C10.5 9.55109 10.421 9.36032 10.2803 9.21967C10.1397 9.07902 9.94891 9 9.75 9C9.55109 9 9.36032 9.07902 9.21967 9.21967C9.07902 9.36032 9 9.55109 9 9.75V17.25C9 17.4489 9.07902 17.6397 9.21967 17.7803C9.36032 17.921 9.55109 18 9.75 18C9.94891 18 10.1397 17.921 10.2803 17.7803C10.421 17.6397 10.5 17.4489 10.5 17.25V9.75ZM14.25 9C14.0511 9 13.8603 9.07902 13.7197 9.21967C13.579 9.36032 13.5 9.55109 13.5 9.75V17.25C13.5 17.4489 13.579 17.6397 13.7197 17.7803C13.8603 17.921 14.0511 18 14.25 18C14.4489 18 14.6397 17.921 14.7803 17.7803C14.921 17.6397 15 17.4489 15 17.25V9.75C15 9.55109 14.921 9.36032 14.7803 9.21967C14.6397 9.07902 14.4489 9 14.25 9Z" fill="#F24E1E"/>
                                    </svg> 
                                </a>
                                <a href="" id="share" data-bs-toggle="modal" data-bs-target="#exampleModal_">
                                    <svg width="14" height="14" class="share" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 12L14 5V9C7 10 4 15 3 20C5.5 16.5 9 14.9 14 14.9V19L21 12Z" fill="#85B6FF"/>
                                    </svg>

                                </a>
                            </div>
                           
                        </div>
                    </div>
                    <!-- Modal Documents -->
                    <div class="modal fade" id="exampleModal_" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" id="dialog-modal">
                            <button type="button" id="bouton-close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <embed src="/Documents/Projet_Data_Mining_2.pdf" width="600px" height="600px" type="">
                        </div>
                    
                    </div>
                </div>
            </div>
          @endif





         
</x-app-layout>
