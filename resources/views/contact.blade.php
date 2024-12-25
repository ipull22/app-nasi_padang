@extends('master.layout')

@section('tittle')
   Kontak Kami
@endsection

@section('content')
<div class="container-fluid px-0">
    <!-- Hero Section with Gradient Background -->
    <div class="hero d-flex justify-content-center align-items-center text-center text-white" style="background: linear-gradient(to right, #0066ff, #00cc99); min-height: 50vh;">
        <div class="hero-content">
            <h1 class="display-4 font-weight-bold animate__animated animate__fadeIn">Kontak Kami</h1>
            <p class="lead animate__animated animate__fadeIn animate__delay-1s">Kami siap membantu Anda. Hubungi kami untuk pertanyaan atau bantuan lebih lanjut.</p>
        </div>
    </div>

    <!-- Main Content Section for Contact (like an article) -->
    <div class="container py-5">
        <div class="row">
            <!-- Contact Information Section (Article-style) -->
            <div class="col-lg-12 mb-5">
                <h2 class="text-primary mb-4">Informasi Kontak</h2>
                <div class="contact-info bg-white p-4 shadow-lg rounded">
                    <h4 class="font-weight-bold">Kami siap membantu Anda dengan berbagai pertanyaan dan informasi yang Anda butuhkan!</h4>
                    <p class="lead">Jika Anda memiliki pertanyaan terkait Nasi padang jenangan atau membutuhkan dukungan lebih lanjut, berikut adalah cara untuk menghubungi kami:</p>

                    <div class="info-card bg-light shadow-sm rounded p-4 mb-3">
                        <i class="bi bi-envelope text-primary" style="font-size: 2rem;"></i>
                        <h5>Email</h5>
                        <p>Untuk pertanyaan umum, Anda dapat menghubungi kami melalui email di <strong>nasipadang@gmail.com</strong></p>
                    </div>

                    <div class="info-card bg-light shadow-sm rounded p-4 mb-3">
                        <i class="bi bi-telephone text-primary" style="font-size: 2rem;"></i>
                        <h5>Telepon</h5>
                        <p>Jika Anda membutuhkan bantuan lebih lanjut, Anda dapat menghubungi kami melalui telepon di <strong>+62 123 456 789</strong></p>
                    </div>

                    <div class="info-card bg-light shadow-sm rounded p-4">
                        <i class="bi bi-geo-alt text-primary" style="font-size: 2rem;"></i>
                        <h5>Alamat</h5>
                        <p>Kami juga menerima kunjungan langsung di alamat berikut: <strong>Jl. Pahlawan 20, Ponorogo, Indonesia</strong></p>
                    </div>
                </div>
            </div>

@endsection

@section('scripts')
<!-- Add Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<!-- Add custom CSS for new design -->
<style>
    /* Hero Section Styles */
    .hero {
        background: linear-gradient(45deg, #FF7A00,rgb(255, 255, 0));
    }

    /* Contact Info Section (styled like an article) */
    .contact-info {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .contact-info h4 {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .contact-info p {
        font-size: 1rem;
        margin-bottom: 15px;
    }

    .contact-info .info-card {
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 15px;
        background-color: #f9f9f9;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .contact-info .info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    }

    .contact-form {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .contact-form input, .contact-form textarea {
        border-radius: 10px;
        border: 1px solid #ddd;
        padding: 1rem;
        transition: all 0.3s ease;
    }

    .contact-form input:focus, .contact-form textarea:focus {
        border-color: #0066FF;
        box-shadow: 0 0 0 0.25rem rgba(0, 102, 255, 0.25);
    }

    .contact-form button {
        border-radius: 25px;
        background-color: #0066FF;
        border: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
        background-color: #0055cc;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
        .contact-info {
            margin-bottom: 30px;
        }
    }
</style>
@endsection
