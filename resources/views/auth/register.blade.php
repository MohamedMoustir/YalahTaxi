<script src="https://cdn.tailwindcss.com"></script>
<style>
  input[type="radio"]:checked+label {
    border-color: #fbbf24;
    background-color: #fef3c7;
    font-weight: bold;
  }
</style>
<div class="min-h-screen bg-gray-50 flex items-center justify-center p-4">
  <div class="w-full max-w-md bg-white rounded-xl shadow-md p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Créer un compte</h2>

    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="space-y-4"
      id="registration-form">
      @csrf
      <div class="grid grid-cols-2 gap-4 mb-4">



        <label for="passenger" id="passenger-btn"
          class="p-3 border-2 rounded-lg border-gray-300 hover:border-amber-400 cursor-pointer block text-center">
          🧑 Passager
          <input type="radio" id="passenger" name="role" value="passenger" class="hidden">
        </label>

        <label for="driver" id="driver-btn"
          class="p-3 border-2 rounded-lg border-gray-300 hover:border-amber-400 cursor-pointer block text-center">
          🚗 Chauffeur
          <input type="radio" id="driver" name="role" value="driver" class="hidden">
        </label>

      </div>


      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">image</label>
        <input type="file" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400"
          name="profile_photo">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Nom complet</label>
        <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400"
          name="name" :value="old('name')">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
        <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400"
          name="email" :value="old('email')">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
        <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400"
          name="phone" required>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Mot de passe</label>
        <input type="password" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400"
          name="password" required autocomplete="new-password">
      </div>

      <div id="driver-fields" class="hidden">

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2" for="license_number">les line</label>
          <select id="line" name="line"
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400">
            <option value="">Sélectionner les line</option>
            @foreach ( $nomLine as $nom )
           <option value="{{ $nom->id }}">{{ $nom->nom }}</option>
           @endforeach
            
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-2">Localisation actuelle</label>
          <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-400"
            name="current_location" :value="old('location')">
        </div>
      </div>

      <button class="w-full bg-amber-400 text-gray-900 py-3 rounded-lg font-semibold hover:bg-amber-500 transition">
        S'inscrire
      </button>
    </form>
  </div>
</div>

<script>
  document.getElementById("passenger").addEventListener("change", function () {
    document.getElementById("driver-fields").classList.add("hidden");
  });

  document.getElementById("driver").addEventListener("change", function () {
    document.getElementById("driver-fields").classList.remove("hidden");
  });



</script>