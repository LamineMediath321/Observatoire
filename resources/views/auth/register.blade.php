<x-guest-layout>
    <!-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot> -->
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="content-form">
        <h1 class="cc">Créer un nouveau compte</h1>
        <p class="versLogin">
            A déjà un compte? <a href="{{ route('login') }}"> Connectez-vous !</a>
        </p>
        

        <form method="POST" action="{{ route('register') }}" class="formulaire">
            @csrf

            <div class="d-flex">
                <select class="inpout civilite" id="inputGroupSelect01" name="civilite" autofocus>
                    <!-- <option selected>Choisir</option> -->
                    <option value="madame">Mme</option>
                    <option value="monsieur">M.</option>
                </select>
                <!-- <select id="civilite" name="civilite"  class="inpout" required>
                    <option value="madame">Mme</option>
                    <option value="monsieur">M.</option>
                </select> -->
            </div>
            <!-- Prenom Nom -->
            <div class="mt-4 d-flex">   
                <input type="text" name="prenom" id="prenom" class="inpout mt-1" placeholder="Prénom" :value="old('name')" required autofocus>
                <input type="text" name="nom" id="nom" class="inpout mt-1" placeholder="Nom" :value="old('name')" required autofocus>
            </div>

            <!-- Adresse Profession -->
            <div class="mt-4 d-flex">   
                <input type="text" name="adresse" id="adresse" class="inpout mt-1" placeholder="Adresse" :value="old('name')" required>
                <input type="text" name="profession" id="profession" class="inpout mt-1" placeholder="Profession" :value="old('name')" required>
            </div>

            <!-- Type & nom Structure -->
            <div class="mt-4 d-flex">   
                <select id="typeStructure" name="typeStructure"  class="inpout mt-1" >
                    <option value="">Type de structure</option>
                    <option value="particulier">Particulier</option>
                    <option value="ong">ONG</option>
                    <option value="serviceEtat">Service de l'état</option>
                </select>
                <!-- <input type="" name="typeStructure" id="typeStructure" class="inpout mt-1" placeholder="Type de structure" :value="old('name')" required> -->
                <input type="text" name="nomStructure" id="nomStructure" class="inpout" placeholder="Nom de la structure" :value="old('name')" required>
            </div>

            <!-- Email Passeword -->
            <div class="mt-4 d-flex">
                <input type="email" name="email" id="email" class="inpout mt-1" placeholder="Email" :value="old('email')" required>
                <input type="password" name="password" id="password" class="inpout mt-1" placeholder="Mot de passe" required>
            </div>

            <!-- Password -->
            <div class="mt-6 d-flex">
                <x-input id="password" class=" mr-3 "
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
                <x-input id="password" class=" mt-1 "
                        type="password"
                        name="password"
                        required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
             <div class="mt-6 d-flex">
                <x-input id="password_confirmation" class="mr-3"
                        type="password"
                        name="password_confirmation" required />
                <x-input id="password_confirmation" class=" mt-1"
                        type="password"
                        name="password_confirmation" required />
             </div>

            <div class="flex items-center  mt-6">  
                <input type="submit" class="soumettre mt-1" value="S'inscrire">  
                <!-- <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button> -->
            </div>
        </form>
    </div>
        
    <!-- </x-auth-card> -->
</x-guest-layout>
