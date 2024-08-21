<div>
  {{-- Header Start --}}
  <header class="flex items-center justify-between my-7">
    <h2 class="text-2xl font-bold text-white md:text-3xl">Daftar Presensi</h2>

    @role(['admin'])
      <div class="hidden md:block">
        <a href="{{ route('app.presence.create') }}" wire:navigate
          class="flex items-center px-5 py-3 text-sm font-semibold text-black bg-white rounded-md">Buat
          Presensi Baru <iconify-icon icon="mingcute:arrow-right-line" class="text-xl ms-2"></iconify-icon></a>
      </div>

      <div class="block md:hidden">
        <a href="{{ route('app.presence.create') }}" wire:navigate
          class="flex items-center justify-center w-10 h-10 text-sm font-semibold text-black bg-white rounded-full"><iconify-icon
            icon="majesticons:plus-line" class="text-2xl"></iconify-icon></a>
      </div>
    @endrole
  </header>
  {{-- Header End --}}

  {{-- View All Presence Section Start --}}
  <section class="mb-10">
    @foreach ($presences as $presence)
        <a href="{{ route('app.presence.show', ['id'=>$presence->id]) }}" wire:navigate class="block">
        <div class="p-5 mb-4 rounded-lg bg-glass hover:border hover:border-gray-500">
            <header class="flex items-center justify-between mb-3 text-white">
            <div class="flex items-center">
                <iconify-icon icon="iconoir:calendar" class="text-2xl me-3"></iconify-icon>
                <span class="text-sm font-light">{{\Carbon\Carbon::parse($presence->date_time)->translatedFormat('l, d F Y')}}</span>
                <span class="text-sm font-light ms-2"> - {{\Carbon\Carbon::parse($presence->date_time)->format('H:i') }} WIB</span>
            </div>
            @if ($presence->status == "active")
                <div
                    class="flex gap-1 rounded-md items-center text-base font-medium bg-[#3934c7] text-white px-2 md:px-4 py-1.5">
                    <span>Aktif</span>
                </div>
            @else
                <div
                    class="flex gap-1 rounded-md items-center text-base font-medium bg-[#34C759] text-white px-2 md:px-4 py-1.5">
                    <span>Selesai</span>
                </div>
            @endif


            </header>
            <div>
            <div class="my-5">
                <h3 class="text-2xl font-semibold text-white">{{$presence->section}}</h3>
            </div>

            <div class="flex items-center justify-between w-full mt-4">
                {{-- Icon meeting type start --}}
                <div class="flex items-center w-full">
                <a href="{{ route('app.presence.show', ['id'=>$presence->id]) }}"
                    class="flex gap-1 rounded-md items-center text-base font-medium bg-[#27272A] text-white hover:bg-white hover:text-[#27272A] px-2 md:px-4 py-1.5">
                    <span>Lihat Presensi</span>
                </a>
                </div>
                {{-- Icon meeting type end --}}


                @role(['admin'])
                {{-- Icon action start --}}
                <div class="inline md:flex md:justify-between">
                    <div class="flex gap-2 text-gray-400 md:gap-4">
                    <button type="button" wire:click="delete({{$presence->id}})"
                        class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-red-600 border-[#27272A] px-2 md:px-4 py-1">
                        <iconify-icon icon="tabler:trash"></iconify-icon><span class="hidden md:block">Hapus</span>
                    </button>
                    <a href="{{ route('app.presence.edit', ['id'=>$presence->id]) }}"
                        class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-yellow-600 border-[#27272A] px-2 md:px-4 py-1">
                        <iconify-icon icon="lucide:edit"></iconify-icon><span class="hidden md:block">Edit</span>
                    </a>
                    <a href=""
                        class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-cyan-600 border-[#27272A] px-2 md:px-4 py-1">
                        <iconify-icon icon="mage:share-fill"></iconify-icon><span class="hidden md:block">Bagikan</span>
                    </a>
                    </div>
                </div>
                {{-- Icon action end --}}
                @endrole
            </div>
            </div>
        </div>
        </a>
    @endforeach
  </section>
  {{-- View All Meeting Section End --}}
</div>
