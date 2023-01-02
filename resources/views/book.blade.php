@extends('templates/layout')

@section('title', 'Book')

@section('content')
<main id="main">
    <section class="hero-section inner-page">
        <div class="wave">
            <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#F8F9FA">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="col-md-7 text-center hero-text">
                            <h1 data-aos="fade-up" data-aos-delay="">Reservasi</h1>
                            <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card" style="border-radius: 15px;" data-aos="fade-up">
                        <div class="card-body p-5">
                            <form action="../config/" method="POST" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="mb-3">
                                        <label for="usermame" class="form-label">Nama Lengkap</label>
                                        <input type="username" class="form-control" id="username" name="username"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="usermame" class="form-label">Nomor Telepon</label>
                                        <input type="username" class="form-control" id="username" name="username"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="usermame" class="form-label">Email</label>
                                        <input type="username" class="form-control" id="username" name="username"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="service" class="form-label">Layanan</label>
                                        <select class="form-select" aria-label="service" name="service" required>
                                            <option value="Penjemputan">Penjemputan</option>
                                            <option value="Penjemputan">Pengantaran</option>
                                            <option value="Pengolahan">Pengolahan</option>
                                            <option value="Pembelian">Pembelian</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pilih Tanggal
                                            Reservasi</label>
                                        <input type="date" class="form-control" id="exampleFormControlInput1"
                                            name="date" required>
                                    </div>
                                    <div class="d-grid gap-1 col-6 mx-auto">
                                        <button class="btn btn-primary mt-4" type="submit"
                                            name="submit">Reservasi</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection