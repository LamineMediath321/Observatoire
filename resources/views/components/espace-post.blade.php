@auth
<!-- espace de poste utilisateur -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />
<form method="POST" action="{{route('publier')}}" class="card-user-connected" enctype="multipart/form-data">
        @csrf
    <div class="user">
        <div class="photo">
            <svg width="30" height="30" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.25 9.75C11.25 13.4715 14.2785 16.5 18 16.5C21.7215 16.5 24.75 13.4715 24.75 9.75C24.75 6.0285 21.7215 3 18 3C14.2785 3 11.25 6.0285 11.25 9.75ZM30 31.5H31.5V30C31.5 24.2115 26.7885 19.5 21 19.5H15C9.21 19.5 4.5 24.2115 4.5 30V31.5H30Z" fill="white"/>
            </svg>        
        </div>
        <div class="details-user">
            <div class="name-user"><span id="prenom">{{Auth::user()->nom}} </span> <span id="nom" class="nom ml-1">{{Auth::user()->prenom}}</span></div>
                <div class="porte-post d-flex ml-1">
                    <svg width="11.5" height="11.5" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.50004 1.78125C7.94421 1.78125 6.45211 2.3993 5.35197 3.49943C4.25184 4.59957 3.63379 6.09167 3.63379 7.6475V7.6475V8.075C3.87129 11.2892 6.53921 13.874 9.50004 17.2188C12.5915 13.7275 15.3663 11.0833 15.3663 7.6475C15.3663 6.09167 14.7482 4.59957 13.6481 3.49943C12.548 2.3993 11.0559 1.78125 9.50004 1.78125ZM9.50004 4.82917C10.0584 4.82917 10.6042 4.99479 11.0684 5.30509C11.5326 5.61538 11.8944 6.05639 12.1079 6.57233C12.3214 7.08827 12.377 7.65594 12.2678 8.20352C12.1586 8.7511 11.8894 9.25397 11.4943 9.64852C11.0992 10.0431 10.5959 10.3116 10.0482 10.42C9.50048 10.5285 8.93289 10.472 8.41725 10.2578C7.90161 10.0436 7.4611 9.6812 7.15146 9.21656C6.84182 8.75191 6.67696 8.20586 6.67775 7.6475C6.6788 6.89967 6.97661 6.18282 7.50578 5.6544C8.03494 5.12597 8.75221 4.82917 9.50004 4.82917Z" stroke="#8A8A8A" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                                <!-- <svg width="10" height="10" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0.25C3.71969 0.25 0.25 3.71969 0.25 8C0.25 12.2803 3.71969 15.75 8 15.75C12.2803 15.75 15.75 12.2803 15.75 8C15.75 3.71969 12.2803 0.25 8 0.25ZM13 6.98438V7.20094C13 7.38437 12.8962 7.55219 12.7322 7.63406L12.2513 7.87469C12.1749 7.91291 12.0897 7.93024 12.0045 7.92492C11.9193 7.91959 11.837 7.8918 11.7659 7.84438L11.1969 7.465C11.1355 7.42411 11.0656 7.39777 10.9925 7.38797C10.9194 7.37816 10.845 7.38517 10.775 7.40844L10.6922 7.43594C10.3891 7.53687 10.2653 7.89813 10.4425 8.16406L10.8562 8.78469C10.9459 8.91937 11.0972 9.00031 11.2591 9.00031H11.5156C11.7831 9.00031 12 9.21719 12 9.48469V9.83906C12 9.94375 11.9659 10.0459 11.9031 10.1297L11.3175 10.9103C11.2731 10.9697 11.2428 11.0384 11.2291 11.1112L11.0947 11.8247C11.0753 11.9275 11.0231 12.0213 10.9459 12.0922C10.6498 12.3634 10.3875 12.6693 10.1647 13.0034L9.7575 13.6144C9.67831 13.7332 9.57101 13.8306 9.44514 13.898C9.31927 13.9653 9.17871 14.0006 9.03594 14.0006C8.7075 14.0006 8.40719 13.815 8.26031 13.5212C8.08911 13.1788 7.99998 12.8013 8 12.4184V11.4844C8 11.2169 7.78312 11 7.51562 11H6.70687C6.25406 11 5.82 10.82 5.49969 10.5C5.17962 10.1798 4.99977 9.74557 4.99969 9.29281V8.85344C4.99969 8.31625 5.25281 7.81031 5.6825 7.48781L6.54437 6.84125C6.83992 6.61963 7.19934 6.49978 7.56875 6.49969H7.59656C7.86156 6.49969 8.12312 6.56125 8.36 6.68L8.82 6.91C8.935 6.9675 9.06781 6.97688 9.18969 6.93625L10.6681 6.44344C10.8659 6.3775 10.9994 6.1925 10.9994 5.98406C10.9994 5.71656 10.7825 5.49969 10.515 5.49969H10.1997C10.0713 5.49969 9.94812 5.44875 9.85719 5.35781L9.64094 5.14156C9.59597 5.09657 9.54257 5.06089 9.4838 5.03654C9.42504 5.0122 9.36205 4.99968 9.29844 4.99969H6.48438C6.21688 4.99969 6 4.78281 6 4.51531V4.37781C6 4.15562 6.15125 3.96188 6.36688 3.90781L6.81844 3.795C6.93531 3.76562 7.03719 3.69406 7.10406 3.59375L7.35656 3.21531C7.44625 3.08063 7.5975 2.99969 7.75938 2.99969H8.51594C8.78344 2.99969 9.00031 2.78281 9.00031 2.51531V1.83719C11.4759 2.23844 13.4644 4.09437 14.0603 6.5H13.4844C13.2169 6.5 13 6.71688 13 6.98438Z" fill="#8A8A8A"/>
                                </svg> -->
                    <input type="text" id="lieu"  placeholder="Lieu" name="lieu" required/>
                           
                </div>
            </div>
                        
        </div>
        <div class="qd9">
            <input name="description" type="text-area" id="description" class="queDire" placeholder="Qu’est ce qu'il y a de nouveau aujourd’hui ?">
                <div class="medias d-flex">
                    <div class="photo d-flex">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 16V4C22 2.9 21.1 2 20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16ZM11 12L13.03 14.71L16 11L20 16H8L11 12ZM2 6V20C2 21.1 2.9 22 4 22H18V20H4V6H2Z" fill="#0FA958"/>
                        </svg>
                        <input type="file" id="photo" name="photo"  hidden/>
                        <label for="photo" class="ml-3">Photo</label>
                    </div>
                    <div class="media">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.4134 6.66666H2.58671C2.2543 6.66666 1.93551 6.7987 1.70047 7.03375C1.46542 7.26879 1.33337 7.58759 1.33337 7.91999V20.08C1.33337 20.4124 1.46542 20.7312 1.70047 20.9662C1.93551 21.2013 2.2543 21.3333 2.58671 21.3333H21.4134C21.7458 21.3333 22.0646 21.2013 22.2996 20.9662C22.5347 20.7312 22.6667 20.4124 22.6667 20.08V7.91999C22.6667 7.58759 22.5347 7.26879 22.2996 7.03375C22.0646 6.7987 21.7458 6.66666 21.4134 6.66666ZM16.12 14.5533L9.60671 17.46C9.50529 17.5056 9.39408 17.5251 9.2832 17.5167C9.17232 17.5083 9.06529 17.4724 8.97186 17.4121C8.87844 17.3518 8.80158 17.2691 8.74828 17.1715C8.69498 17.0739 8.66694 16.9645 8.66671 16.8533V11.04C8.66694 10.9288 8.69498 10.8194 8.74828 10.7218C8.80158 10.6242 8.87844 10.5415 8.97186 10.4812C9.06529 10.4209 9.17232 10.385 9.2832 10.3766C9.39408 10.3682 9.50529 10.3877 9.60671 10.4333L16.12 13.3333C16.2383 13.3855 16.3389 13.4709 16.4095 13.5792C16.4801 13.6875 16.5177 13.814 16.5177 13.9433C16.5177 14.0726 16.4801 14.1991 16.4095 14.3074C16.3389 14.4157 16.2383 14.5012 16.12 14.5533Z" fill="#D27C2C"/>
                            <path d="M20.0934 2.00001C20.0934 1.8232 20.0231 1.65363 19.8981 1.52861C19.7731 1.40358 19.6035 1.33334 19.4267 1.33334H4.76005C4.58324 1.33334 4.41367 1.40358 4.28865 1.52861C4.16362 1.65363 4.09338 1.8232 4.09338 2.00001V2.66668H20.0934V2.00001Z" fill="#D27C2C"/>
                            <path d="M21.4134 4.66667C21.4134 4.48986 21.3431 4.32029 21.2181 4.19526C21.0931 4.07024 20.9235 4 20.7467 4H3.41337C3.23656 4 3.06699 4.07024 2.94197 4.19526C2.81694 4.32029 2.7467 4.48986 2.7467 4.66667V5.33333H21.4134V4.66667Z" fill="#D27C2C"/>
                        </svg>   
                        <input name="video" type="file" id="video"  hidden/>
                        <label for="video" class="ml-3">Vidéo</label> 
                    </div>
                    <div class="media">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 13H15M9 17H12M4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8.342C20 8.07556 19.9467 7.81181 19.8433 7.56624C19.7399 7.32068 19.5885 7.09824 19.398 6.912L14.958 2.57C14.5844 2.20466 14.0826 2.00007 13.56 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V4Z" stroke="#FFD233" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 2V6C14 6.53043 14.2107 7.03914 14.5858 7.41421C14.9609 7.78929 15.4696 8 16 8H20" stroke="#FFD233" stroke-width="2" stroke-linejoin="round"/>
                        </svg>   
                        <input type="file" id="file"  hidden/>
                        <label for="file" class="ml-3">Document</label> 
                    </div>
                    <div class="publier">
                        <input type="submit" id="publier" value="Publier">
                    </div>
            </div>
        </div>
</form>
@endauth