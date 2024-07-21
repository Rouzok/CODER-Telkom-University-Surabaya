<div>
  {{-- Header Start --}}
  <header class="flex items-center justify-between my-7">
    <h2 class="text-2xl font-bold text-white md:text-3xl">Daftar Tugas</h2>

    <div class="hidden md:block">
      <a href="{{ route('app.e-learning.task.create') }}" wire:navigate
        class="flex items-center px-5 py-3 text-sm font-semibold text-black bg-white rounded-md">
        Buat Tugas Baru <iconify-icon icon="mingcute:arrow-right-line" class="text-xl ms-2"></iconify-icon>
      </a>
    </div>

    <div class="block md:hidden">
      <a href="{{ route('app.e-learning.task.create') }}" wire:navigate
        class="flex items-center justify-center w-10 h-10 text-sm font-semibold text-black bg-white rounded-full">
        <iconify-icon icon="majesticons:plus-line" class="text-2xl"></iconify-icon>
      </a>
    </div>
  </header>
  {{-- Header End --}}

  {{-- View All Task Section Start --}}
  <section class="mb-10">
    @for ($i = 1; $i < 3; $i++)
      <div>
        <div class="flex items-center gap-4 mb-2 text-white">
          <iconify-icon class="" icon="lucide:calendar"></iconify-icon>
          <h2 class="flex-shrink-0">Pertemuan {{ $i }}</h2>
          <div class="flex-grow border border-gray-600"></div>
        </div>

        @for ($j = 1; $j < 3; $j++)
          <a href="{{ route('app.e-learning.task.detail') }}" wire:navigate class="block">
            <div class="p-5 mb-4 rounded-lg bg-glass hover:border hover:border-gray-500">
              <h3 class="text-2xl font-semibold text-white">Tugas {{ $j }}</h3>
              <p class="font-light text-gray-400">Membuat website menggunakan HTML dan CSS</p>

              <div class="flex items-center justify-between w-full mt-4">
                <div class="flex items-center w-full">
                  <a href="{{ route('app.e-learning.task.submission') }}" wire:navigate
                    class="inline-flex items-center px-4 py-3 text-sm font-semibold text-white rounded-lg gap-x-2 bg-glass hover:bg-white hover:text-black">
                    Lihat pengumpulan
                  </a>
                </div>

                <div class="inline md:flex md:justify-between">
                  <div class="flex gap-2 text-gray-400 md:gap-4">
                    <a href=""
                      class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-red-600 border-[#27272A] px-2 md:px-4 py-1">
                      <iconify-icon icon="tabler:trash"></iconify-icon><span class="hidden md:block">Hapus</span>
                    </a>
                    <a href=""
                      class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-yellow-600 border-[#27272A] px-2 md:px-4 py-1">
                      <iconify-icon icon="lucide:edit"></iconify-icon><span class="hidden md:block">Edit</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </a>
        @endfor
      </div>
    @endfor
  </section>
  {{-- View All Task Section End --}}
</div>