<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Web Profil</title>
  <!-- Tailwind CDN -->
  @vite('resources/css/app.css')
</head>
<body class="text-gray-900">

  <!-- Navbar -->
  <nav class="border-b-2 border-blue-600 py-4 bg-white">
    <div class="container mx-auto flex items-center justify-between px-4">
      <!-- Logo -->
      <a href="#" class="flex items-center">
        <img src="{{ asset('images/logo.png')}}" alt="">
      </a>
      <!-- Hamburger -->
      <button id="menu-toggle" class="lg:hidden block text-gray-800 text-2xl">
        &#9776;
      </button>
      <!-- Menu -->
      <div id="navbarNav"
           class="max-h-0 overflow-hidden lg:max-h-none lg:flex lg:space-x-6
                  transition-all duration-500 ease-in-out flex-col lg:flex-row
                  w-full lg:w-auto mt-4 lg:mt-0">
        <a href="#" class="block text-blue-600 font-semibold hover:underline py-2 px-2">Beranda</a>
        <a href="#" class="block text-blue-600 hover:underline py-2 px-2">Profil</a>
        <a href="#" class="block text-blue-600 hover:underline py-2 px-2">Pendidikan dan Pekerjaan</a>
        <a href="#" class="block text-blue-600 hover:underline py-2 px-2">Kontak</a>
      </div>
    </div>
  </nav>

  <!-- Profil -->
  <section id="profil" class="bg-[#5271ff] min-h-[300px] py-8">
    <div class="container mx-auto grid md:grid-cols-2 gap-6 items-center px-4">
      <div id="profil-content">
        <h3 class="text-white text-2xl font-semibold">
          Hai, Nama saya Vokasioner
        </h3>
        <p class="text-white text-lg mt-3">
          Saya adalah seorang profesional dengan pengalaman di bidang TI.
          Saya memiliki berbagai keterampilan baik soft skill maupun hard skill
          yang mendukung karir saya.
        </p>
      </div>
      <div id="profil-img" class="flex justify-center">
        <img src="{{ asset('images/images.png')}}" alt="">
      </div>
    </div>
  </section>

  <!-- Pendidikan & Pekerjaan -->
  <section id="pendidikan" class="container mx-auto py-12 border-b border-gray-800 px-4">
    <div class="grid md:grid-cols-3 gap-8">
      <div class="md:col-span-2">
        <h4 class="text-xl font-semibold mb-4">Riwayat Pendidikan</h4>
        <div class="overflow-x-auto mb-6">
          <table class="min-w-full border border-black text-left text-sm">
            <thead class="bg-gray-200">
              <tr>
                <th class="border border-black px-3 py-2" rowspan="2">Tahun</th>
                <th class="border border-black px-3 py-2" colspan="2">Pendidikan</th>
              </tr>
              <tr>
                <th class="border border-black px-3 py-2">Jurusan</th>
                <th class="border border-black px-3 py-2">Universitas</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border border-black px-3 py-2">2015-2019</td>
                <td class="border border-black px-3 py-2">S1 Teknik Informatika</td>
                <td class="border border-black px-3 py-2">Universitas Brawijaya</td>
              </tr>
              <tr>
                <td class="border border-black px-3 py-2">2019-2023</td>
                <td class="border border-black px-3 py-2">S2 Sistem Informasi</td>
                <td class="border border-black px-3 py-2">Universitas Brawijaya</td>
              </tr>
            </tbody>
          </table>
        </div>

        <h4 class="text-xl font-semibold mb-4">Riwayat Pekerjaan</h4>
        <div class="overflow-x-auto">
          <table class="min-w-full border border-black text-left text-sm">
            <thead class="bg-gray-200">
              <tr>
                <th class="border border-black px-3 py-2">Tahun</th>
                <th class="border border-black px-3 py-2">Posisi</th>
                <th class="border border-black px-3 py-2">Perusahaan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border border-black px-3 py-2">2019-2021</td>
                <td class="border border-black px-3 py-2">Junior Web Developer</td>
                <td class="border border-black px-3 py-2">XYZ Corp</td>
              </tr>
              <tr>
                <td class="border border-black px-3 py-2">2021-2023</td>
                <td class="border border-black px-3 py-2">Senior Web Developer</td>
                <td class="border border-black px-3 py-2">ABC Ltd.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Skills -->
      <aside class="p-4 bg-[#bbb] min-h-[400px] rounded-lg">
        <h4 class="text-lg font-semibold">Soft Skills</h4>
        <ol class="list-decimal ml-6 mb-4">
          <li>Komunikasi</li>
          <li>Kepemimpinan</li>
          <li>Manajemen Waktu</li>
          <li>Kerja Tim</li>
        </ol>

        <h4 class="text-lg font-semibold">Hard Skills</h4>
        <ul class="list-disc ml-6">
          <li>HTML, CSS, JavaScript</li>
          <li>PHP, Python</li>
          <li>SQL, NoSQL</li>
          <li>Framework Laravel, Django</li>
        </ul>
      </aside>
    </div>
  </section>

  <!-- Kontak -->
  <section id="kontak" class="py-12 container mx-auto px-4">
    <div class="grid md:grid-cols-2 gap-8">
      <div>
        <h3 class="text-2xl font-semibold mb-6">Kontak Kami</h3>
        <form class="space-y-4">
          <div class="flex items-center">
            <label for="nama" class="w-24">Nama</label>
            <input type="text" id="nama" class="flex-1 border border-gray-400 rounded px-3 py-2" />
          </div>
          <div class="flex items-center">
            <label for="email" class="w-24">Email</label>
            <input type="email" id="email" class="flex-1 border border-gray-400 rounded px-3 py-2" />
          </div>
          <div class="flex items-center">
            <label for="topik" class="w-24">Topik</label>
            <select id="topik" class="flex-1 border border-gray-400 rounded px-3 py-2">
              <option selected>Pilih Topik</option>
              <option value="1">Saran</option>
              <option value="2">Kritik</option>
            </select>
          </div>
          <div class="flex items-start">
            <label for="saran" class="w-24">Saran</label>
            <textarea id="saran" rows="5" class="flex-1 border border-gray-400 rounded px-3 py-2"></textarea>
          </div>
          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Kirim
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-[#222] text-white text-center py-4 border-t-4 border-[#5271ff]">
    <div class="container mx-auto text-sm">
      &copy; 2025 WebQ. Semua hak cipta dilindungi.
    </div>
  </footer>

  <!-- Navbar Toggle Script -->
  <script>
    const toggleBtn = document.getElementById("menu-toggle");
    const navMenu = document.getElementById("navbarNav");

    toggleBtn.addEventListener("click", () => {
      if (navMenu.classList.contains("max-h-0")) {
        navMenu.classList.remove("max-h-0");
        navMenu.classList.add("max-h-screen"); 
      } else {
        navMenu.classList.add("max-h-0");
        navMenu.classList.remove("max-h-screen"); 
      }
    });
  </script>

</body>
</html>
