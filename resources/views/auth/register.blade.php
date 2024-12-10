@extends('layout')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white rounded-lg shadow-md p-6">
    <h1 class="text-2xl font-semibold text-center text-green-600 mb-4">Complétez vos informations</h1>
    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Username -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nom d'utilisateur</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" 
                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" 
                placeholder="Nom d'utilisateur" autofocus>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" 
                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" 
                placeholder="Votre email">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
            <input id="password" type="password" name="password" 
                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" 
                placeholder="Votre mot de passe">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password Confirmation -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmation du mot de passe</label>
            <input id="password_confirmation" type="password" name="password_confirmation" 
                class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm py-2 px-3 focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" 
                placeholder="Retapez votre mot de passe">
        </div>

        <!-- Role Selection -->
        <div>
            <p class="text-sm font-medium text-gray-700 mb-2">Je veux être :</p>
            <div class="flex items-center space-x-6">
                <label for="freelance" class="flex items-center">
                    <input type="radio" value="1" id="freelance" name="role_id" 
                        class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-600">Freelance</span>
                </label>
                <label for="client" class="flex items-center">
                    <input type="radio" value="2" id="client" name="role_id" 
                        class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300">
                    <span class="ml-2 text-sm text-gray-600">Client</span>
                </label>
            </div>
            @error('role_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" 
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Créer mon compte
            </button>
        </div>
    </form>
</div>
@endsection
