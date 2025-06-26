<div class="flex items-center justify-center my-12">
  <span class="w-1/5 h-px bg-yellow-500"></span>
  <div class="mx-3 w-4 h-4 bg-yellow-500 rounded-full shadow-yellow-400/30 shadow-md"></div>
  <span class="w-1/5 h-px bg-yellow-500"></span>
</div>

<section class="px-6 py-20 bg-gray-950">
  <div class="max-w-3xl mx-auto">
    <h3 class="text-3xl font-bold text-center gold mb-8">Contactez-nous</h3>
    <p class="text-gray-400 text-center mb-12">
      Une question, une suggestion ou une envie de vendre vos trésors ? Remplissez ce formulaire, on vous répond très vite.
    </p>

    <form class="space-y-6">
      <!-- Nom -->
      <div>
        <label for="name" class="block mb-2 text-sm font-medium text-gray-300">Nom complet</label>
        <input type="text" id="name" class="shadow-sm bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Votre nom" required>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-300">Adresse email</label>
        <input type="email" id="email" class="shadow-sm bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="you@email.com" required>
      </div>

      <!-- Message -->
      <div>
        <label for="message" class="block mb-2 text-sm font-medium text-gray-300">Votre message</label>
        <textarea id="message" rows="5" class="shadow-sm bg-gray-800 border border-gray-600 text-white text-sm rounded-lg focus:ring-yellow-500 focus:border-yellow-500 block w-full p-2.5" placeholder="Posez votre question ici..." required></textarea>
      </div>

      <!-- Submit -->
      <div class="text-center">
        <button type="submit" class="gold-bg hover:bg-yellow-600 text-black font-semibold py-2 px-6 rounded-lg transition-all">
          Envoyer
        </button>
      </div>
    </form>
  </div>
</section>
