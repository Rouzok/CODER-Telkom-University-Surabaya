<div>

    {{-- Header Start --}}
    <header class="flex items-center justify-between mb-6 mt-7">
        <h2 class="text-2xl font-bold text-white md:text-3xl">Perbarui Profil</h2>
    </header>
    {{-- Header End --}}

    <section class="flex flex-col gap-6 mb-6 md:flex-row">
        <div class="flex flex-col gap-6 md:w-5/12">
            <div class="w-full p-6 text-center rounded-lg bg-glasses h-fit">
                <div class="w-40 h-40 mx-auto mb-6 overflow-hidden rounded-full">
                    <img src="{{ asset('assets/images/avatar.png') }}" alt="Avatar" class="object-cover w-full h-full">
                </div>
                <div class="w-full">
                    <input type="file" id="file-input" class="hidden">
                    <label for="file-input"
                        class="flex items-center gap-2 p-3 text-white rounded-md cursor-pointer bg-lightGray">
                        <span class="text-xs bg-[#43474C] py-1 px-1.5">Pilih File</span>
                        <span class="text-xs" id="file-name">Belum ada file yang dipilih.</span>
                    </label>
                </div>
            </div>
            <div class="w-full p-6 rounded-lg text-start bg-glasses h-fit">
                <label for="github-input" class="block mb-2 font-medium text-white">Github
                    <span class="text-xs text-[#7a7a81]">(opsional)</span></label>
                <input type="url" id="github-input" class="block w-full p-3 text-white rounded-lg bg-lightGray"
                    placeholder="">
            </div>
        </div>
        <div class="flex flex-col gap-6 md:w-full">
            <div class="w-full p-6 bg-glasses rounded-xl">
                <h4 class="mb-6 text-xl font-semibold text-white ">Informasi Profil</h4>
                <div class="flex flex-wrap gap-6">
                    <div class="flex flex-col w-full gap-6 md:flex-row">
                        <div class="md:w-1/2">
                            <label for="name-input" class="block mb-2 font-medium text-white">Nama</label>
                            <input type="text" id="name-input"
                                class="block w-full p-3 text-white rounded-lg bg-lightGray" placeholder="">
                        </div>
                        <div class="md:w-1/2">
                            <label for="nim" class="block mb-2 font-medium text-white">Nim</label>
                            <input type="text" inputmode="numeric" id="nim"
                                class="block w-full p-3 text-white rounded-lg bg-lightGray" placeholder="">
                        </div>
                    </div>
                    <div class="flex flex-col w-full gap-6 md:flex-row">
                        <div class="md:w-1/2">
                            <label for="program-studi-input" class="block mb-2 font-medium text-white">Program
                                Studi</label>
                            <select id="program-studi-input"
                                class="block w-full p-3 text-white rounded-lg pe-9 bg-lightGray">
                                <option selected="" disabled>Pilih Prodi</option>
                                <option>Rekayasa Perangkat Lunak</option>
                                <option>Sains Data</option>
                                <option>Informatika</option>
                                <option>Sistem Informasi</option>
                                <option>Teknologi Informasi</option>
                                <option>Bisnis Digital</option>
                                <option>Teknik Telekomunikasi</option>
                                <option>Teknik Industri</option>
                                <option>Teknik Elektro</option>
                                <option>Teknik Komputer</option>
                                <option>Teknik Logistik</option>
                            </select>
                        </div>
                        <div class="md:w-1/2">
                            <label for="angkatan" class="block mb-2 font-medium text-white">Tahun Angkatan</label>
                            <input type="text" inputmode="numeric" id="angkatan" maxlength="4"
                                class="block w-full p-3 text-white rounded-lg bg-lightGray" placeholder="">
                        </div>
                    </div>
                    <div class="flex flex-col w-full gap-6 md:flex-row">
                        <div class="md:w-1/2">
                            <label for="phone-input" class="block mb-2 font-medium text-white">Nomer Telepon</label>
                            <input type="tel" id="phone-input" pattern="^0\d{9,12}$""
                                class="block w-full p-3 text-white rounded-lg bg-lightGray" placeholder="">
                        </div>
                        <div class="md:w-1/2">
                            <label for="divisi-input" class="block mb-2 font-medium text-white">Divisi</label>
                            <select id="divisi-input" class="block w-full p-3 text-white rounded-lg pe-9 bg-lightGray">
                                <option selected="" disabled>Pilih Divisi</option>
                                <option>Web Development</option>
                                <option>Mobile Development</option>
                                <option>UI/UX</option>
                                <option>Data Engineering</option>
                                <option>Artificial Intelligence</option>
                                <option>Competitive Programming</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full p-6 bg-glasses rounded-xl">
                <h4 class="mb-6 text-xl font-semibold text-white ">Informasi Akun</h4>
                <div class="flex gap-6">
                    <div class="flex flex-col w-full gap-6 md:flex-row">
                        <div class="md:w-1/2">
                            <label for="name-input" class="block mb-2 font-medium text-white">Email</label>
                            <input type="email" id="email-input"
                                class="block w-full p-3 text-white rounded-lg bg-lightGray" placeholder="">
                        </div>
                        <div class="md:w-1/2">
                            <label class="block mb-2 font-medium text-white">Kata Sandi</label>
                            <div class="relative">
                                <input id="hs-toggle-password" type="password"
                                    class="block w-full p-3 text-white rounded-lg bg-lightGray" placeholder="">
                                <button type="button" data-hs-toggle-password='{"target": "#hs-toggle-password"}'
                                    class="absolute inset-y-0 z-20 flex items-center px-3 text-gray-400 cursor-pointer end-0 rounded-e-md focus:outline-none focus:text-blue-600">
                                    <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24">
                                        </path>
                                        <path class="hs-password-active:hidden"
                                            d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                                        </path>
                                        <path class="hs-password-active:hidden"
                                            d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                                        </path>
                                        <line class="hs-password-active:hidden" x1="2" x2="22"
                                            y1="2" y2="22"></line>
                                        <path class="hidden hs-password-active:block"
                                            d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle class="hidden hs-password-active:block" cx="12" cy="12"
                                            r="3"></circle>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="flex justify-end mb-6">
        <a href="{{ route('app.profile') }}" wire:navigate
            class="inline-block px-5 py-3 text-sm font-semibold text-gray-400 border border-gray-400 rounded-md hover:text-black hover:bg-white">Batal</a>
        <button type="submit"
            class="flex items-center px-5 py-3 text-sm font-semibold text-black bg-white rounded-md ms-3">Simpan
            Profil
            <iconify-icon icon="material-symbols:save-outline" class="text-2xl ms-2"></iconify-icon>
        </button>
    </div>

</div>

<script>
    const fileInput = document.getElementById('file-input');
    const fileName = document.getElementById('file-name');

    fileInput.addEventListener('change', (event) => {
        const files = event.target.files;
        if (files.length > 0) {
            fileName.textContent = files[0].name;
        } else {
            fileName.textContent = 'Belum ada file yang dipilih.';
        }
    });

    document.getElementById("nim").addEventListener("input", (e) => {
        const value = e.target.value;
        const notDigit = /\D/;
        if (notDigit.test(value)) {
            e.target.value = value.replace(notDigit, "");
        }
    });

    document.getElementById("angkatan").addEventListener("input", (e) => {
        const value = e.target.value;
        const notDigit = /\D/;
        if (notDigit.test(value)) {
            e.target.value = value.replace(notDigit, "");
        }
    });
</script>