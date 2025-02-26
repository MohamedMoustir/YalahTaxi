
<script src="https://cdn.tailwindcss.com"></script>
<div class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
  <div class="w-full max-w-md bg-white rounded-xl shadow-md p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Connexion</h2>

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
        <input type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
        <input type="password" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400"
          name="password" for="password" :value="__('Password')">
      </div>
      <!-- Remember Me -->
      <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
          <input id="remember_me" type="checkbox"
            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
            name="remember">
          <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
        </label>
      </div>
      <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
      <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
        href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
      </a>
    @endif

        <x-primary-button class="ms-3">
          {{ __('Log in') }}
        </x-primary-button>

      </div>
      <button class="w-full bg-amber-400 text-gray-900 py-3 rounded-lg font-semibold hover:bg-amber-500 transition">
        Se connecter
      </button>
    </form>
  </div>
</div>