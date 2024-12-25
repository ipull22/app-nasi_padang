@extends('master.layout')

@section('title')
    Daftar Menu
@endsection

@section('content')
    <!-- Container di bawah slider -->
<div class="container mt-5">
  <h1>DAFTAR MENU</h1>

  <!-- Grid dengan 3 kolom per baris untuk 12 menu -->
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/post/20230802/fromandroid-757a21b07d3891c59f075a5190733fbc-29c2620ffb72ed662e7909243e76ebbf.jpg" class="card-img-top" alt="menu_1">
        <div class="card-body">
          <h5 class="card-title">1. Ikan asam padeh</h5>
          <p class="card-text">Nikmati segarnya ikan yang dimasak dengan kuah asam pedas yang kaya rasa, perpaduan sempurna antara asam, pedas, dan gurih, membawa cita rasa Minangkabau yang tak terlupakan.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/post/20230802/fromandroid-5c9dc8ed83cd7a68596a05eeb4875dfe-81ca003de3419c26d05cd84000daae8f.jpg" class="card-img-top" alt="menu_2">
        <div class="card-body">
          <h5 class="card-title">2. Gulai cumi</h5>
          <p class="card-text">Rasakan kelembutan cumi yang dimasak dalam kuah gulai rempah khas Padang, dengan rasa pedas dan gurih yang menghangatkan, memberikan pengalaman rasa laut yang segar.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/post/20230802/kerupuk-jangek-3eba3d3bd7713d93e893d78a6f57e31c-db135b203b68d89946828651f625b2b1-762b418fb305f7b77d356faff0087db6.jpg" class="card-img-top" alt="menu_3">
        <div class="card-body">
          <h5 class="card-title">3. Kerupuk jangek</h5>
          <p class="card-text">Kerupuk jangek, kerupuk khas Padang yang renyah dan gurih, terbuat dari tepung tapioka yang digoreng hingga kecokelatan, siap menambah kenikmatan setiap hidangan.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Repeat the same grid structure for 9 more menus -->
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/community/2022/04/resep-rendang-filosofi-rendang-makna-rendang-arti-rendang-rendang-dari-mana-makanan-indonesia-filosofi-9cde86371d7fc78c91ae80a6ffab250e-e0b9344da253b8e653bd42c7df03d6d9.jpg" class="card-img-top" alt="menu_4">
        <div class="card-body">
          <h5 class="card-title">4. Rendang</h5>
          <p class="card-text">Rendang, hidangan daging sapi yang dimasak dengan rempah-rempah kaya rasa dan santan, menghasilkan rasa yang lezat, empuk, dan penuh cita rasa yang mendalam. Pemenang hati, selalu.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/community/2021/01/130194047-385199386119961-8886866583634376823-n-0b2e3fe55c98e8dc089991ca6127b017-c2ce65b4525ccf543f14e455ac2df3a0.jpg" class="card-img-top" alt="menu_5">
        <div class="card-body">
          <h5 class="card-title">5. Ayam pop</h5>
          <p class="card-text">Ayam pop, ayam goreng khas Minangkabau yang empuk dengan rasa gurih, dipadukan dengan sambal hijau pedas yang siap menggugah selera Anda di setiap suapan.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/community/2021/07/fromandroid-eb987df73f8003cfb26fd68882798494.jpg" class="card-img-top" alt="menu_6">
        <div class="card-body">
          <h5 class="card-title">6. Dendeng batokok</h5>
          <p class="card-text">Dendeng batokok, daging sapi yang dipanggang sempurna, kemudian dipukul agar lebih empuk dan disajikan dengan sambal yang pedas, cocok sebagai teman makan nasi hangat.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Add 3 more rows for the remaining menus (7 to 12) -->
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/community/2020/12/80306157-173701807169955-5784361692471724527-n-ed9964bb2b9b2fad16904d368249d4d1-02e3ec3d4911b848191ac6ad3eca306f.jpg" class="card-img-top" alt="menu_7">
        <div class="card-body">
          <h5 class="card-title">7. Gulai otak</h5>
          <p class="card-text">Gulai otak, hidangan unik dengan tekstur lembut otak sapi yang dimasak dalam kuah gulai rempah yang kaya, menggoda siapa saja yang ingin mencoba sesuatu yang berbeda namun lezat.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/post/20200917/118813150-2710132395869504-6021290183484363500-n-b878035a8c04ac1c7f1d0d5871c10bfa.jpg" class="card-img-top" alt="menu_8">
        <div class="card-body">
          <h5 class="card-title">8. Gulai tunjang</h5>
          <p class="card-text">Gulai tunjang, potongan kikit sapi yang dimasak dalam kuah gulai yang pedas dan gurih, menjadikannya hidangan yang penuh rasa, sempurna untuk pecinta daging.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/community/2021/08/fromandroid-2e7a4fc9488a65453f71dac38958fb5f.jpg" class="card-img-top" alt="menu_9">
        <div class="card-body">
          <h5 class="card-title">9. Sambal hijau</h5>
          <p class="card-text">Sambal hijau, sambal khas Padang yang terbuat dari cabai hijau segar dengan rasa pedas yang tajam dan sedikit manis, sempurna untuk menemani hidangan utama.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/community/2022/02/220610017-513613519929006-7490945075061119432-n-bfb992da3e868dc126514a39313affd2-58b088c5e98686f736ea743cb6b36af1.jpg" class="card-img-top" alt="menu_10">
        <div class="card-body">
          <h5 class="card-title">10. Nasi Padang</h5>
          <p class="card-text">Nasi Padang, nasi putih hangat yang disajikan dengan berbagai pilihan lauk pauk dan sambal khas Padang, menggugah selera setiap orang yang mencicipinya.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/community/2020/12/106001323-120226919438102-1208550399335935680-n-ed9964bb2b9b2fad16904d368249d4d1-77a301162df245b6e917ce3b939848c0.jpg" class="card-img-top" alt="menu_11">
        <div class="card-body">
          <h5 class="card-title">11. Soto Padang</h5>
          <p class="card-text">Soto Padang, sup daging sapi dengan kuah bening yang kaya rempah, dihidangkan dengan potongan daging empuk, tauge, dan nasi, pas untuk makan siang yang menyegarkan.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="https://cdn.idntimes.com/content-images/community/2020/12/80306157-173701807169955-5784361692471724527-n-ed9964bb2b9b2fad16904d368249d4d1-02e3ec3d4911b848191ac6ad3eca306f.jpg" class="card-img-top" alt="menu_12">
        <div class="card-body">
          <h5 class="card-title">12. Sayur daun singkong</h5>
          <p class="card-text">Sayur daun singkong, daun singkong yang dimasak dengan santan dan rempah-rempah, menawarkan rasa segar dan gurih yang sempurna untuk melengkapi hidangan Padang Anda.</p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

<style>
/* Mengatur padding dan margin di seluruh container */
.container {
  padding: 2rem; /* Menambahkan padding dalam container */
}

/* Mengatur margin dan padding pada setiap card untuk memberikan jarak yang konsisten */
.card {
  margin-bottom: 1.5rem; /* Menambahkan jarak bawah pada setiap card */
  padding: 1rem; /* Memberikan padding pada card agar konten tidak terlalu rapat */
}

/* Memastikan semua gambar dalam menu memiliki ukuran yang konsisten */
.card-img-top {
  object-fit: cover;  /* Memastikan gambar memenuhi area tanpa distorsi */
  height: 250px; /* Set height yang konsisten untuk gambar */
  width: 100%; /* Membuat gambar mengisi lebar card */
}

/* Menambahkan jarak antara kolom di grid */
.row {
  margin-top: 2rem; /* Menambahkan jarak atas pada setiap baris */
}

/* Menambahkan jarak antar elemen carousel */
.carousel-item {
  margin-bottom: 1rem; /* Memberikan jarak bawah antar gambar dalam carousel */
}

/* Menambahkan margin antara carousel dan container */
.carousel {
  margin-bottom: 3rem; /* Menambahkan margin bawah pada carousel */
}
</style>

