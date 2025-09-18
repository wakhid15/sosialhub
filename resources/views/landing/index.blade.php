@extends('landing.layouts.main')

@section('container')
    <style>
            /* custom.css */
        #wa-floating-button {
            position: fixed;
            bottom: 10px;
            right: 200px;
            /* Ganti ukuran gambar sesuai kebutuhan */
            
            width: 10px;
            height: 10px;
        }

        .loadding-page {
            width: 100%;
            height: 100%;
            background:rgb(22, 153, 146);
            overflow: hidden;
            position: fixed;
            top: 0;
            z-index: 9999;
        }

        .cssload-box-loading {
            width: 49px;
            height: 49px;
            margin: auto;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        .cssload-box-loading:before {
            content: '';
            width: 49px;
            height: 5px;
            background: #000000;
            opacity: 0.1;
            position: absolute;
            top: 58px;
            left: 0;
            border-radius: 50%;
            animation: shadow 0.58s linear infinite;
            -o-animation: shadow 0.58s linear infinite;
            -ms-animation: shadow 0.58s linear infinite;
            -webkit-animation: shadow 0.58s linear infinite;
            -moz-animation: shadow 0.58s linear infinite;
        }

        .cssload-box-loading:after {
            content: '';
            width: 49px;
            height: 49px;
            background: #fff;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 3px;
            animation: cssload-animate 0.58s linear infinite;
            -o-animation: cssload-animate 0.58s linear infinite;
            -ms-animation: cssload-animate 0.58s linear infinite;
            -webkit-animation: cssload-animate 0.58s linear infinite;
            -moz-animation: cssload-animate 0.58s linear infinite;
        }

        @keyframes cssload-animate {
            17% {
                border-bottom-right-radius: 3px;
            }

            25% {
                transform: translateY(9px) rotate(22.5deg);
            }

            50% {
                transform: translateY(18px) scale(1, 0.9) rotate(45deg);
                border-bottom-right-radius: 39px;
            }

            75% {
                transform: translateY(9px) rotate(67.5deg);
            }

            100% {
                transform: translateY(0) rotate(90deg);
            }
        }

        @-o-keyframes cssload-animate {
            17% {
                border-bottom-right-radius: 3px;
            }

            25% {
                -o-transform: translateY(9px) rotate(22.5deg);
            }

            50% {
                -o-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
                border-bottom-right-radius: 39px;
            }

            75% {
                -o-transform: translateY(9px) rotate(67.5deg);
            }

            100% {
                -o-transform: translateY(0) rotate(90deg);
            }
        }

        @-ms-keyframes cssload-animate {
            17% {
                border-bottom-right-radius: 3px;
            }

            25% {
                -ms-transform: translateY(9px) rotate(22.5deg);
            }

            50% {
                -ms-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
                border-bottom-right-radius: 39px;
            }

            75% {
                -ms-transform: translateY(9px) rotate(67.5deg);
            }

            100% {
                -ms-transform: translateY(0) rotate(90deg);
            }
        }

        @-webkit-keyframes cssload-animate {
            17% {
                border-bottom-right-radius: 3px;
            }

            25% {
                -webkit-transform: translateY(9px) rotate(22.5deg);
            }

            50% {
                -webkit-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
                border-bottom-right-radius: 39px;
            }

            75% {
                -webkit-transform: translateY(9px) rotate(67.5deg);
            }

            100% {
                -webkit-transform: translateY(0) rotate(90deg);
            }
        }

        @-moz-keyframes cssload-animate {
            17% {
                border-bottom-right-radius: 3px;
            }

            25% {
                -moz-transform: translateY(9px) rotate(22.5deg);
            }

            50% {
                -moz-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
                border-bottom-right-radius: 39px;
            }

            75% {
                -moz-transform: translateY(9px) rotate(67.5deg);
            }

            100% {
                -moz-transform: translateY(0) rotate(90deg);
            }
        }

        @keyframes shadow {

            0%,
            100% {
                transform: scale(1, 1);
            }

            50% {
                transform: scale(1.2, 1);
            }
        }

        @-o-keyframes shadow {

            0%,
            100% {
                -o-transform: scale(1, 1);
            }

            50% {
                -o-transform: scale(1.2, 1);
            }
        }

        @-ms-keyframes shadow {

            0%,
            100% {
                -ms-transform: scale(1, 1);
            }

            50% {
                -ms-transform: scale(1.2, 1);
            }
        }

        @-webkit-keyframes shadow {

            0%,
            100% {
                -webkit-transform: scale(1, 1);
            }

            50% {
                -webkit-transform: scale(1.2, 1);
            }
        }

        @-moz-keyframes shadow {

            0%,
            100% {
                -moz-transform: scale(1, 1);
            }

            50% {
                -moz-transform: scale(1.2, 1);
            }
        }
    </style>
    <style>
        .masthead {
            background-image: url("{{ asset('storage/images/bg3.webp') }}") !important;
        }
    </style>
    <div class="loadding-page">
        <div class="cssload-box-loading"></div>
    </div>
    <div class="container">
        <div class="jumbotron">
            <h1>Page loaded</h1>
        </div>
    </div>
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0" style="color: white; background-color: rgba(0, 0, 0, 0.5);">Sosial-Hub</h1>
                <h2 class="masthead-subheading mb-0" style="color: white; background-color: rgba(0, 0, 0, 0.5);">Sistem Informasi Kehilangan Orang Berkebutuhan Khusus</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Klik di Sini</a>
            </div>
        </div>
    </header>
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid " src="{{ asset('storage/images/fit1.jpg') }}" />
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Daftar Akses Data Pasien</h2>
                        <p>Di sana Anda akan menemukan daftar pasien yang terdaftar, termasuk informasi seperti nama, nomor rekam medis, tanggal lahir, dan riwayat kesehatan.</p>
                        <a class="btn btn-primary" href="/barcode" role="button">Data Pasien</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img class="img-fluid "
                            src="{{ asset('storage/images/fit2.webp') }}" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Tentang Kami</h2>
                        <p>Klik di bawah ini untuk melihat tentang Sosial-Hub.</p>
                        <a class="btn btn-primary" href="/about" role="button">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid " src="{{ asset('storage/images/fit3.webp') }}"
                            alt="..." />
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Bantuan</h2>
                        <p>Klik di bawah ini untuk masuk ke laman bantuan.</p>
                        <a class="btn btn-primary" href="/helper" role="button">Bantuan</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- WhatsApp Floating Button -->
<!-- <script>
    // Ganti nomor WhatsApp sesuai dengan nomor yang ingin dihubungi
    var waNumber = '6281234567890';

    // Ganti pesan yang ingin ditampilkan
    var waMessage = 'Halo,';

    // Script WhatsApp melayang
    document.write('<div id="wa-floating-button"><a href="https://wa.me/' + waNumber + '?text=' + encodeURIComponent(waMessage) + '" target="_blank"><img src="storage/images/whatsapp.png" alt="WhatsApp"></a></div>');
</script> -->
    </section>
@endsection
