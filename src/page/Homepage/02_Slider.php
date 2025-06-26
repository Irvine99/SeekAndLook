<section class="relative w-full min-h-[70vh]]">
  <div id="hero-carousel" class="relative w-full h-[70vh]">
    <div class="relative h-full overflow-hidden rounded-lg">
      
      <!-- Slide 1 -->
      <div class="absolute inset-0 opacity-100 transition-opacity duration-[2000ms] ease-in-out z-10 slide-fade">
        <img src="assets/goodie1.png" class="w-full h-full object-cover" alt="Slide 1" />
        <div class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center text-center px-6">
          <h2 class="text-4xl md:text-5xl gold font-extrabold mb-4 tracking-wider">Le repaire des collectionneurs</h2>
          <p class="max-w-2xl text-gray-300 text-lg">Explorez, trouvez, et revendez des objets geeks, rétro et insolites.</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="absolute inset-0 opacity-0 transition-opacity duration-[2000ms] ease-in-out z-0 slide-fade">
        <img src="assets/goodie2.png" class="w-full h-full object-cover" alt="Slide 2" />
        <div class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center text-center px-6">
          <h2 class="text-4xl md:text-5xl gold font-extrabold mb-4 tracking-wider">Objets rares & éditions limitées</h2>
          <p class="max-w-2xl text-gray-300 text-lg">Des trésors geek à portée de clic.</p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="absolute inset-0 opacity-0 transition-opacity duration-[2000ms] ease-in-out z-0 slide-fade">
        <img src="assets/goodie3.png" class="w-full h-full object-cover" alt="Slide 3" />
        <div class="absolute inset-0 bg-black/60 flex flex-col items-center justify-center text-center px-6">
          <h2 class="text-4xl md:text-5xl gold font-extrabold mb-4 tracking-wider">Un marché vivant</h2>
          <p class="max-w-2xl text-gray-300 text-lg">Achetez, revendez, échangez. Chaque jour, un nouveau loot vous attend.</p>
        </div>
      </div>
    </div>

    <!-- Bouton -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-30">
      <a href="?action=features" class="px-6 py-3 gold-bg text-black font-bold rounded-full hover:bg-yellow-600 transition">
        Voir les objets disponibles
      </a>
    </div>
  </div>
</section>

<!-- JS : fade loop sans slide -->
<script>
  const slides = document.querySelectorAll('.slide-fade');
  let current = 0;

  setInterval(() => {
    // Masquer l'actuel
    slides[current].classList.remove('opacity-100', 'z-10');
    slides[current].classList.add('opacity-0', 'z-0');

    // Passer au suivant
    current = (current + 1) % slides.length;

    // Afficher le suivant
    slides[current].classList.remove('opacity-0', 'z-0');
    slides[current].classList.add('opacity-100', 'z-10');
  }, 8000); // Toutes les 8 secondes
</script>
