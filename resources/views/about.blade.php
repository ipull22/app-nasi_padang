@extends('master.layout')

@section('title', 'Profil Rumah Makan Nasi Padang')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Profil Kami</h1>
    <br>
    <br>
    <div class="row">
        <div class="col-md-6">
            <img src="NASI padang.png" alt="Rumah Makan Nasi Padang" class="img-fluid rounded" style="max-width: 100%; height: auto;">
        </div>
        <div class="col-md-6">
            <h3>Tentang Kami</h3>
            <p style="text-align: justify;">Selamat datang di Rumah Makan Nasi Padang, tempat yang penuh dengan kelezatan dan cita rasa autentik dari Minangkabau! Kami merasa sangat senang dan bangga bisa menyambut Anda di rumah makan kami yang telah berdiri sejak tahun 2000. Sejak awal berdiri, kami berkomitmen untuk memberikan pengalaman kuliner terbaik bagi setiap pelanggan yang datang. Dengan menggunakan resep tradisional yang telah turun-temurun, setiap hidangan yang kami sajikan dipenuhi dengan rasa yang kaya dan bumbu yang khas.
            Rumah makan kami tidak hanya sekadar tempat untuk makan, namun juga merupakan sebuah pengalaman kuliner yang akan membawa Anda merasakan kehangatan dan keramahtamahan khas masyarakat Padang.</p>
            <p style="text-align: justify;">Di sini, kami menyajikan hidangan-hidangan yang penuh cita rasa, seperti rendang, gulai, ayam pop, sambal hijau, dan berbagai lauk-pauk lainnya yang diolah dengan penuh kasih sayang oleh tim koki kami yang berpengalaman.

            Kami menggunakan bahan-bahan berkualitas terbaik yang dipilih secara cermat untuk memastikan setiap hidangan yang keluar dari dapur kami memiliki rasa yang otentik dan lezat. Setiap suapan yang Anda nikmati membawa Anda lebih dekat dengan tradisi kuliner Minangkabau yang kaya akan rempah-rempah dan cita rasa yang mendalam. Kami selalu menggunakan bahan-bahan segar dan resep tradisional untuk menciptakan hidangan yang memuaskan selera Anda. Semoga setiap suapan yang Anda nikmati membawa kenangan tak terlupakan tentang cita rasa asli Padang.</p>
        </div>
    </div>

    <!-- Visi dan Misi -->
    <h3 class="mt-4">Visi Kami</h3>
    <p>Menjadi rumah makan Nasi Padang terkemuka yang menyajikan cita rasa autentik dengan kualitas terbaik dan pelayanan terbaik di Indonesia.</p>

    <h3 class="mt-4">Misi Kami</h3>
    <ul>
        <li>Menyajikan hidangan Padang dengan rasa autentik dan bahan berkualitas.</li>
        <li>Memberikan pelayanan yang ramah dan cepat untuk kenyamanan pelanggan.</li>
        <li>Menjaga tradisi kuliner Minangkabau yang telah turun temurun.</li>
        <li>Berinovasi dalam penyajian menu untuk menambah pilihan dan kepuasan pelanggan.</li>
    </ul>

    <!-- Profil Anggota Tim -->
    <div class="container mt-5">
        <h3 class="text-center">Tim Kami</h3>
        <p class="text-center">Berikut adalah beberapa anggota tim yang berperan penting dalam kesuksesan Rumah Makan Nasi Padang kami. Kami memiliki tim yang solid dan berdedikasi tinggi untuk memberikan layanan terbaik bagi Anda.</p>
        <div class="row text-center mt-4">
            <!-- Anggota Tim 1 -->
            <div class="col-md-4">
                <div class="team-member">
                    <img src="icon.jpg" alt="Anggota 1" class="img-fluid rounded-circle mb-3">
                    <h5>Rafi</h5>
                    <p><i class="bi bi-person-circle"></i> CEO</p>
                </div>
            </div>
            <!-- Anggota Tim 2 -->
            <div class="col-md-4">
                <div class="team-member">
                    <img src="icon.jpg" alt="Anggota 2" class="img-fluid rounded-circle mb-3">
                    <h5>Naufal</h5>
                    <p><i class="bi bi-person-circle"></i> Manajer Layanan</p>
                </div>
            </div>
            <!-- Anggota Tim 3 -->
            <div class="col-md-4">
                <div class="team-member">
                    <img src="icon.jpg" alt="Anggota 3" class="img-fluid rounded-circle mb-3">
                    <h5>Geo</h5>
                    <p><i class="bi bi-person-circle"></i> Pengelola Keuangan</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Menambahkan jarak bawah di bawah Tim Kami -->
    <div class="mt-5"></div> <!-- Ini akan memberi jarak tambahan di bawah Tim Kami -->

    <style>
    /* Styling untuk kontainer Tim Kami */
    .container {
        max-width: 1100px;
        margin: 0 auto;
    }

    /* Menambahkan jarak pada judul dan paragraf */
    .container h3 {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .container p {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 40px;
    }

    /* Styling untuk gambar anggota tim */
    .team-member img {
        width: 120px; /* Ukuran gambar anggota tim */
        height: 120px; /* Ukuran gambar anggota tim */
        object-fit: cover;
        margin-bottom: 15px;
        border: 3px solid #ddd; /* Menambahkan border ringan pada gambar */
        padding: 5px; /* Memberikan padding pada gambar */
    }

    /* Styling untuk nama anggota tim - mengubah warna menjadi putih */
    .team-member h5 {
        font-size: 1.3rem;
        font-weight: bold;
        color: #fff; /* Mengubah menjadi warna putih */
        margin-top: 10px;
    }

    /* Styling untuk posisi anggota tim - mengubah warna menjadi putih */
    .team-member p {
        font-size: 1rem;
        color: #fff; /* Mengubah menjadi warna putih */
        margin-top: 5px;
    }

    /* Styling untuk ikon anggota tim */
    .team-member i {
        font-size: 1.5rem;
        margin-right: 5px;
    }

    /* Styling untuk setiap kolom anggota tim */
    .team-member {
        background-color: rgba(255,178,0,255);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
        transition: transform 0.3s ease; /* Transisi saat hover */
    }

    .team-member:hover {
        transform: translateY(-10px); /* Efek hover untuk memberi kesan timbul */
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan lebih kuat saat hover */
    }

    /* Styling untuk kolom anggota tim pada perangkat kecil */
    @media (max-width: 768px) {
        .team-member {
            margin-bottom: 30px;
        }

        .team-member img {
            width: 100px;
            height: 100px;
        }

        .team-member h5 {
            font-size: 1.1rem;
        }

        .team-member p {
            font-size: 0.9rem;
        }
    }
</style>




@endsection

@section('style')
    <style>
        /* Styling untuk gambar anggota tim */
        .team-member img {
            width: 100px; /* Ukuran yang konsisten */
            height: 100px; /* Ukuran yang konsisten */
            object-fit: cover;
            margin-bottom: 15px;
        }

        /* Menambahkan space dan desain untuk nama dan posisi */
        .team-member h5 {
            margin-top: 10px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .team-member p {
            font-size: 1rem;
            color: #555;
        }

        /* Styling untuk ikon anggota tim */
        .bi-person-circle {
            font-size: 1.5rem;
            margin-right: 5px;
        }
    </style>
@endsection
