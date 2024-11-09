@extends('master.layout')

@section('tittle')
    Home
@endsection

@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100 carousel-img" alt="menu_nasi_padang">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-with-stroke">Kelezatan Nasi Padang</h5>
        <p class="text-with-stroke">Nikmati kelezatan masakan Padang asli dengan cita rasa yang otentik, dibuat dari bahan-bahan pilihan yang segar dan berkualitas.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="2.jpeg" class="d-block w-100 carousel-img" alt="masakan_padang">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-with-stroke">Rasakan Sensasi Masakan Padang</h5>
        <p class="text-with-stroke">Setiap suapan Nasi Padang kami adalah perpaduan sempurna antara bumbu rempah yang kaya dan kehangatan tradisi Minangkabau.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="3.jpeg" class="d-block w-100 carousel-img" alt="nasi_padang">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-with-stroke">Nikmati Perpaduan Rempah dan Cita Rasa Nasi Padang</h5>
        <p class="text-with-stroke">Dari rendang yang lembut hingga sambal hijau yang pedas, setiap menu di sini siap memanjakan lidah Anda dengan kelezatan yang tak terlupakan.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection

<style>
  /* Menambahkan efek stroke putih pada teks */
  .text-with-stroke {
    color: black; /* Warna teks hitam */
    text-shadow: 
      2px 2px 4px rgba(255, 255, 255, 0.8),  /* Shadow putih untuk stroke di bawah teks */
      -2px -2px 4px rgba(255, 255, 255, 0.8), /* Shadow putih untuk stroke di atas teks */
      2px -2px 4px rgba(255, 255, 255, 0.8),  /* Shadow putih untuk stroke di kanan atas */
      -2px 2px 4px rgba(255, 255, 255, 0.8);  /* Shadow putih untuk stroke di kiri bawah */
  }

  /* Style untuk caption gambar */
  .carousel-caption {
    position: relative;
    z-index: 1; /* Pastikan teks tetap di atas gambar */
  }

  /* Mengubah ukuran gambar dan carousel */
  .carousel-inner {
    max-width: 100%; /* Mengatur lebar maksimal carousel */
    margin: 0 auto; /* Memusatkan carousel */
  }

  /* Memperkecil ukuran gambar di carousel */
  .carousel-img {
    object-fit: cover; /* Menjaga rasio gambar tanpa merusak kualitas */
    height: 600px; /* Menentukan tinggi gambar (bisa diubah sesuai kebutuhan) */
  }

  /* Menyesuaikan ukuran font dan teks caption */
  .carousel-caption h5 {
    font-size: 1.5rem; /* Ukuran font judul */
  }

  .carousel-caption p {
    font-size: 1rem; /* Ukuran font deskripsi */
  }

</style>
