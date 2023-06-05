  <nav
    class="flex items-center justify-between flex-wrap p-4 fixed w-full z-50 top-0 text-white"
    x-data="{ isOpen: false }"
    @keydown.escape="isOpen = false"
    :class="{ 'shadow-xl bg-black/90' : isOpen , 'bg-transparent' : !isOpen}"
  >
    <!-- Logo -->
    <div class="flex items-center flex-shrink-0 mr-6 relative">
      <a class="z-20" href="{{ $page->Url }}/">
        <img class="w-24 md:w-36" src="/assets/images/logo.svg" alt="Logo">
      </a>
      <div class="absolute inset-0 animate-ping z-0">
        <img class="w-24 md:w-36" src="/assets/images/logo.svg" alt="Logo">
      </div>
    </div>

    <!-- Toggle button -->
    <button
      @click="isOpen = !isOpen"
      type="button"
      class="block p-2 text-white hover:text-pink-500 focus:outline-none bg-black/80"
      :class="{ 'transition-transform-180': isOpen }"
    >
      <svg
        class="h-8 w-8 fill-current"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
      >
        <path
          x-show="isOpen"
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
        />
        <path
          x-show="!isOpen"
          fill-rule="evenodd"
          d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
        />
      </svg>
    </button>

    <!-- Menu -->
    <div
      class="w-full"
      :class="{ 'hidden': !isOpen }"
      @click.away="isOpen = false"
      x-show.transition="true"
    >
        <div class="h-screen flex items-center justify-center">
          <ul class="text-center -mt-56 md:text-2xl text-xl">
            <li class="">
              <a
                class="block py-2 px-4 no-underline hover:text-amber-500 uppercase tracking-wider transition"
                href="{{ $page->Url }}/#hero"
                @click="isOpen = false"
              >
                Inicio
              </a>
            </li>
            <li class="">
              <a
                class="block py-2 px-4 no-underline hover:text-amber-500 uppercase tracking-wider transition"
                href="{{ $page->Url }}/#about"
                @click="isOpen = false"
              >
                Concurso
              </a>
            </li>
            <li class="">
              <a
                class="block py-2 px-4 no-underline hover:text-amber-500 uppercase tracking-wider transition"
                href="{{ $page->Url }}/#contestants"
                @click="isOpen = false"
              >
                Participantes
              </a>
            </li>
            <li class="">
              <a
                class="block py-2 px-4 no-underline hover:text-amber-500 uppercase tracking-wider transition"
                href="{{ $page->Url }}/#jury"
                @click="isOpen = false"
              >
                Jurado
              </a>
            </li>
          </ul>
        </div>
    </div>
  </nav>

