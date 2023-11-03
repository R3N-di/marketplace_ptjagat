<nav class="bg-merah-tua p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white font-semibold text-lg">Admin</div>
        <div class="space-x-4">
            <a href="{{ route('admin.barang') }}" class="text-white hover:text-gray-300">Barang</a>
            <a href="{{ route('admin.kategori') }}" class="text-white hover:text-gray-300">Kategori Barang</a>
            <a href="{{ route('admin.event') }}" class="text-white hover:text-gray-300">Event</a>
            <a href="{{ route('admin.carousel') }}" class="text-white hover:text-gray-300">Carousel</a>
        </div>
        <div class="relative group">
            <button id="profileButton" class="text-white hover:text-gray-300 focus:outline-none">
                Profil
            </button>
            <div id="profileDropdown"
                class="absolute hidden bg-white text-gray-800 mt-2 py-2 w-36 border border-gray-300 rounded-lg z-10">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="block hover:bg-gray-200 w-full">Logout</button>
                </form>
            </div>
        </div>
    </div>
    <!-- ... (bagian lain dari navbar) ... -->
</nav>


<script>
    const profileButton = document.getElementById('profileButton');
    const profileDropdown = document.getElementById('profileDropdown');
    const logoutButton = document.getElementById('logoutButton');

    // Menampilkan dropdown saat tombol "Profil" diklik
    profileButton.addEventListener('click', () => {
        profileDropdown.classList.toggle('hidden');
    });

    // Contoh tindakan ketika tombol "Logout" diklik
    logoutButton.addEventListener('click', () => {
        // Lakukan tindakan logout di sini
        console.log('Logout');
    });
</script>

