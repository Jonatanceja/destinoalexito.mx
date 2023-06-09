<section class="h-screen flex items-center relative w-full" id="hero">
    <div class="container mx-auto max-w-5xl z-20 px-5 md:px-0 relative h-screen flex items-center">
        <h1 class="text-6xl md:text-9xl text-white wow fadeInLeft"><span class="text-4xl md:text-6xl">Cumple tus</span><br> Sueños</h1>
        <div class="absolute md:text-lg w-full md:w-1/2 md:bottom-24 bottom-32 left-0 px-5 md:px-0 wow fadeInLeft space-y-3"
        data-wow-delay="0.5s">
            <p>Hay algo en común que tienen todas los grandes artistas en la historia de la música; alguien confió en ellos para poder mostrar su talento al público.</p> 
            <div class="block md:hidden" x-data="{ isOpen: false }">
                <button @click="isOpen = true" class="bg-transparent hover:bg-white text-white hover:text-black font-bold py-2 px-4 rounded border-2 border-white transition">
                  Ver Video 
                </button>
              
                <div x-show="isOpen" class="fixed z-50 inset-0 flex items-center justify-center">
                  <div @click.away="isOpen = false" class="fixed inset-0 bg-black opacity-75"></div>
              
                  <div class="bg-black p-10 rounded max-w-3xl relative">
                    <div class="relative pb-9/16">
                      <iframe
                        src="https://www.youtube.com/embed/3R551xXk2n4"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                      ></iframe>
                    </div>
                    <button @click="isOpen = false" class="absolute top-0 right-0 text-white hover:text-gray-200 p-2">
                      <i class="lni lni-close"></i>
                    </button>
                  </div>
                </div>
            </div>
            <div class="hidden md:block" x-data="{ isOpen: false }">
                <button @click="isOpen = true" class="bg-transparent hover:bg-white text-white hover:text-black font-bold py-2 px-4 rounded border-2 border-white transition">
                Ver Video 
                </button>
            
                <div x-show="isOpen" class="fixed z-50 inset-0 flex items-center justify-center">
                <div @click.away="isOpen = false" class="fixed inset-0 bg-black opacity-75"></div>
            
                <div class="bg-black p-10 rounded max-w-3xl relative">
                    <div class="relative pb-9/16">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3R551xXk2n4" title="Destino al Éxito" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>                    </div>
                    <button @click="isOpen = false" class="absolute top-0 right-0 text-white hover:text-gray-200 p-2">
                    <i class="lni lni-close"></i>
                    </button>
                </div>
                </div>
            </div>    
        </div>
    </div>
    <div class="md:flex top-0 left-0 h-screen w-full absolute">
        <div class="w-full md:w-1/2 h-1/2 md:h-full bg-cover bg-top md:bg-center md:hidden wow fadeIn" style="background-image: url(/assets/images/hero.jpg)" data-wow-delay="0.75s"></div>
        <div class="w-full md:w-1/2 h-1/2 md:h-full"></div>
        <div class="w-full md:w-1/2 h-1/2 md:h-full bg-cover bg-center hidden md:block wow fadeIn" style="background-image: url(/assets/images/hero.jpg)" data-wow-delay="0.75s"></div>
    </div>
    <div class="absolute bottom-10 flex justify-center w-full wow fadeIn" data-wow-delay="1s">
        <div class="block text-white mx-auto text-center">
            <div class="motion-safe:animate-bounce text-2xl transition"><i class="lni lni-arrow-down"></i></div>
            <p class="uppercase text-xs tracking-widest">continua</p>
        </div>
    </div>
</section>