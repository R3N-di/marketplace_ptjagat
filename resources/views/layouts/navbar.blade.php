<div class="relative">
    <div
        class="bg-gradient-to-b from-black/75 text-white p-10 h-48 absolute w-full top-0 left-1/2 transform -translate-x-1/2 z-40">
        <div class="grid grid-cols-3 justify-between">
            <div class="grid grid-cols-3">
                <div class="text-end">
                    <a href="#">SPECIAL DEAL</a>
                </div>

                <div class="text-center">
                    <a href="#">SHOP</a>
                </div>

                <div>
                    <a href="">ABOUT</a>
                </div>
            </div>

            <div>
                <a href="#" class="grid grid-rows-1 text-3xl text-center">
                    <span
                        style="font-family: Geometric-706-Std-Black; letter-spacing: 6px; margin-bottom: -8px;">EBLIETHOS</span>
                    <span style="letter-spacing: 3px; font-weight:100;">INDONESIA</span>
                </a>
            </div>

            <div class="grid grid-cols-8">
                <div class="w-7 col-start-5">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                </div>

                <div class="w-7">
                    <div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="w-8 bg-inherit" onclick="return confirm('Yakin Ingin Logout?')">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M22 12C22 6.49 17.51 2 12 2C6.49 2 2 6.49 2 12C2 14.9 3.25 17.51 5.23 19.34C5.23 19.35 5.23 19.35 5.22 19.36C5.32 19.46 5.44 19.54 5.54 19.63C5.6 19.68 5.65 19.73 5.71 19.77C5.89 19.92 6.09 20.06 6.28 20.2C6.35 20.25 6.41 20.29 6.48 20.34C6.67 20.47 6.87 20.59 7.08 20.7C7.15 20.74 7.23 20.79 7.3 20.83C7.5 20.94 7.71 21.04 7.93 21.13C8.01 21.17 8.09 21.21 8.17 21.24C8.39 21.33 8.61 21.41 8.83 21.48C8.91 21.51 8.99 21.54 9.07 21.56C9.31 21.63 9.55 21.69 9.79 21.75C9.86 21.77 9.93 21.79 10.01 21.8C10.29 21.86 10.57 21.9 10.86 21.93C10.9 21.93 10.94 21.94 10.98 21.95C11.32 21.98 11.66 22 12 22C12.34 22 12.68 21.98 13.01 21.95C13.05 21.95 13.09 21.94 13.13 21.93C13.42 21.9 13.7 21.86 13.98 21.8C14.05 21.79 14.12 21.76 14.2 21.75C14.44 21.69 14.69 21.64 14.92 21.56C15 21.53 15.08 21.5 15.16 21.48C15.38 21.4 15.61 21.33 15.82 21.24C15.9 21.21 15.98 21.17 16.06 21.13C16.27 21.04 16.48 20.94 16.69 20.83C16.77 20.79 16.84 20.74 16.91 20.7C17.11 20.58 17.31 20.47 17.51 20.34C17.58 20.3 17.64 20.25 17.71 20.2C17.91 20.06 18.1 19.92 18.28 19.77C18.34 19.72 18.39 19.67 18.45 19.63C18.56 19.54 18.67 19.45 18.77 19.36C18.77 19.35 18.77 19.35 18.76 19.34C20.75 17.51 22 14.9 22 12ZM16.94 16.97C14.23 15.15 9.79 15.15 7.06 16.97C6.62 17.26 6.26 17.6 5.96 17.97C4.44 16.43 3.5 14.32 3.5 12C3.5 7.31 7.31 3.5 12 3.5C16.69 3.5 20.5 7.31 20.5 12C20.5 14.32 19.56 16.43 18.04 17.97C17.75 17.6 17.38 17.26 16.94 16.97Z"
                                            fill="#ffffff"></path>
                                        <path
                                            d="M12 6.92969C9.93 6.92969 8.25 8.60969 8.25 10.6797C8.25 12.7097 9.84 14.3597 11.95 14.4197C11.98 14.4197 12.02 14.4197 12.04 14.4197C12.06 14.4197 12.09 14.4197 12.11 14.4197C12.12 14.4197 12.13 14.4197 12.13 14.4197C14.15 14.3497 15.74 12.7097 15.75 10.6797C15.75 8.60969 14.07 6.92969 12 6.92969Z"
                                            fill="#ffffff"></path>
                                    </g>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="w-8">
                    <div class="relative">
                        <svg viewBox="0 -0.5 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.194 7.55504H8.76001L9.41201 13.944L16.7 13.214C17.1551 13.2156 17.5783 12.9809 17.818 12.594L19.312 9.49404C19.5529 9.09564 19.5581 8.59777 19.3255 8.19445C19.093 7.79112 18.6595 7.54617 18.194 7.55504Z"
                                    stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.167 19.063C10.1648 19.5777 9.74612 19.9934 9.23136 19.992C8.7166 19.9905 8.30029 19.5724 8.30103 19.0576C8.30176 18.5429 8.71926 18.126 9.23402 18.126C9.48199 18.1265 9.7196 18.2255 9.89458 18.4012C10.0695 18.577 10.1675 18.815 10.167 19.063V19.063Z"
                                    stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.767 19.063C15.7648 19.5777 15.3461 19.9934 14.8313 19.992C14.3166 19.9905 13.9003 19.5724 13.901 19.0576C13.9017 18.5429 14.3192 18.126 14.834 18.126C15.082 18.1265 15.3196 18.2255 15.4946 18.4012C15.6695 18.577 15.7675 18.815 15.767 19.063V19.063Z"
                                    stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                                <path
                                    d="M8.03326 7.74034C8.13561 8.14171 8.54395 8.38411 8.94532 8.28176C9.34669 8.17941 9.58909 7.77106 9.48674 7.36969L8.03326 7.74034ZM8.136 5.10801L8.86281 4.92267L8.86017 4.91288L8.136 5.10801ZM7.993 5.00001V5.75009L8.00342 5.74994L7.993 5.00001ZM5.5 4.25001C5.08579 4.25001 4.75 4.5858 4.75 5.00001C4.75 5.41423 5.08579 5.75001 5.5 5.75001V4.25001ZM9.44322 14.6934C9.85707 14.6761 10.1786 14.3267 10.1614 13.9128C10.1441 13.4989 9.79464 13.1774 9.38078 13.1947L9.44322 14.6934ZM9.412 16.25L9.38078 16.9994C9.39118 16.9998 9.40159 17 9.412 17L9.412 16.25ZM16.054 17C16.4682 17 16.804 16.6642 16.804 16.25C16.804 15.8358 16.4682 15.5 16.054 15.5V17ZM9.48674 7.36969L8.86274 4.92269L7.40926 5.29334L8.03326 7.74034L9.48674 7.36969ZM8.86017 4.91288C8.75358 4.51729 8.39224 4.2444 7.98258 4.25009L8.00342 5.74994C7.72726 5.75378 7.48369 5.56982 7.41183 5.30315L8.86017 4.91288ZM7.993 4.25001H5.5V5.75001H7.993V4.25001ZM9.38078 13.1947C8.36094 13.2371 7.55603 14.0763 7.55603 15.097H9.05603C9.05603 14.8804 9.22682 14.7024 9.44322 14.6934L9.38078 13.1947ZM7.55603 15.097C7.55603 16.1177 8.36094 16.9569 9.38078 16.9994L9.44322 15.5007C9.22682 15.4916 9.05603 15.3136 9.05603 15.097H7.55603ZM9.412 17H16.054V15.5H9.412V17Z"
                                    fill="#ffffff"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="rounded-full top-10 right-[106px] w-4 absolute h-4 bg-amber-400 text-center text-xs">7
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $i = 0;
        $jumlahSlideDefault = 3;
    @endphp

    <div class="w-full h-72 md:h-screen overflow-hidden relative">
        <!-- Carousel wrapper -->
        <div class="flex h-full transition-transform duration-500 ease-in-out transform relative">
            @if ($dataCarousel->isEmpty())
                @for ($i = 0; $i < $jumlahSlideDefault; $i++)
                    <div class="w-full h-full flex-shrink-0">
                        <img src="https://via.placeholder.com/150" class="w-full h-full object-cover" alt="...">
                    </div>
                @endfor
            @else
                @foreach ($dataCarousel as $data)
                    <div class="w-full h-full flex-shrink-0">
                        <img src="{{ asset('gambar/carousel/' . $data->gambar) }}" class="w-full h-full object-cover"
                            alt="...">
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Slider indicators -->
    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        @if ($dataCarousel->isEmpty())
            @for ($i = 0; $i < $jumlahSlideDefault; $i++)
                <button type="button"
                    class="w-3 h-3 rounded-full bg-[#D9D9D9] transform scale-100 transition-transform duration-300"
                    aria-current="false" aria-label="{{ 'Slide ' . $i }}"
                    onclick="changeSlide({{ $i }})"></button>
            @endfor
        @else
            @foreach ($dataCarousel as $data)
                <button type="button"
                    class="w-3 h-3 rounded-full bg-[#D9D9D9] transform scale-100 transition-transform duration-300"
                    aria-current="false" aria-label="{{ 'Slide ' . $i }}"
                    onclick="changeSlide({{ $i++ }})"></button>
            @endforeach
        @endif
    </div>


    <script>
        const carousel = document.querySelector('.flex');
        const buttons = document.querySelectorAll('button[type="button"]');
        let currentIndex = 0;

        function changeSlide(index) {
            currentIndex = index;
            const translateValue = -currentIndex * 100;
            carousel.style.transform = `translateX(${translateValue}%)`;

            // Menghapus kelas 'bg-[#FFFFFF]' dan mengatur skala kembali menjadi 100 dari semua tombol
            buttons.forEach(button => {
                button.classList.remove('bg-[#FFFFFF]');
                button.style.transform = 'scale(1)';
            });

            // Menambahkan kelas 'bg-[#FFFFFF]' dan mengatur skala menjadi 1.2 pada tombol yang aktif
            buttons[currentIndex].classList.add('bg-[#FFFFFF]');
            buttons[currentIndex].style.transform = 'scale(1.2)';
        }

        buttons.forEach((button, index) => {
            button.addEventListener('click', () => {
                changeSlide(index);
            });
        });

        setInterval(() => {
            var jumlahSlide = {{ $i }};
            currentIndex = (currentIndex + 1) % jumlahSlide;
            const translateValue = -currentIndex * 100;
            carousel.style.transform = `translateX(${translateValue}%)`;

            // Menghapus kelas 'bg-[#FFFFFF]' dan mengatur skala kembali menjadi 100 dari semua tombol
            buttons.forEach(button => {
                button.classList.remove('bg-[#FFFFFF]');
                button.style.transform = 'scale(1)';
            });

            // Menambahkan kelas 'bg-[#FFFFFF]' dan mengatur skala menjadi 1.2 pada tombol yang aktif
            buttons[currentIndex].classList.add('bg-[#FFFFFF]');
            buttons[currentIndex].style.transform = 'scale(1.2)';
        }, 3000); // Change slide every 3 seconds
    </script>
