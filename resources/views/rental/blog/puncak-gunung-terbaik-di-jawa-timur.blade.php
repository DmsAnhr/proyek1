@extends('rental')

@section('content')
<main class="bg_gray">
    <div class="container margin_60_35 add_bottom_30">
        <div class="breadcrumbs">
            <ul>
                <li><a href="{{url ('/blogRental')}}">Blog</a></li>
                <li></li>
            </ul>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="">
                <div class="box_about">
                    <img src="{{asset ('assets/blog/img/puncak-gunung-terbaik-jatim.jpg') }}" alt="" width="auto" height="auto">
                    <h2>Puncak Gunung Terbaik di Jawa Timur</h2>
                    <h5>23 June 2023</h5> <br>
                    <p>Malang merupakan salah satu kota pilihan favorit sewa tenda malang untuk wisata di Jawa Timur. Malang mempunyai banyak destinasi wisata alam yang menarik seperti pantai, coban atau air terjun, dan dari semua pilihan itu gunung trip bromo lah yang paling terkenal. Sebenarnya tidak hanya gunung bromo, Kota malang dikelilingi oleh banyak gunung yang mempunyai keindahan berbeda – beda di setiap puncaknya. Berikut ini adalah gunung-gunung disekitar kota malang yang wajib dan patut untuk kamu kunjungi sebagai destinasi liburan atau sebagai lokasi camping malang sewa tenda malang :</p>
                    <ul>
                        <li>Gunung Panderman</li>
                        <p>Memiliki ketinggian 2000 mdpl gunung ini termasuk dalam komplek gunung kawi. Gunung panderman bisa menjadi pilihan bagi para pemula dan bagi anda yang mempunyai waktu terbatas untuk liburan, waktu yang diperlukan untuk mendaki ke puncak gunung panderman ini yaitu sekitar 2-3 jam dimulai dari kota batu. Jika anda ingin menikmati pemandangan lereng gunung panderman lebih lama anda bisa mendirikan tenda di Latar Ombo tepatnya berada di pos satu pendakian yang merupakan satu-satunya shelter panderman atau anda bisa mendirikan tenda di puncak gunung ini. Jangan khawatir tidak bisa menemukan air bersih ketika anda menginap di gunung ini,karna disini sudah tersedia sumber air bersih.</p>
                        <li>Gunung Butak</li>
                        <p>Masih di sekitar malang gunung ini terletak diantara kabupaten malang dan blitar, gunung butak memiliki ketinggian 2868 mdpl. Gunung butak sering disebut gunung putri tidur, anda bisa melihatnya dari arah kota seperti siluet wajah seorang wanita yang sedang tidur. Puncak gunung ini juga merupakan tempat terbaik untuk berkemah karna anda bisa melihat pemandangan yang eksotis dari atas puncak gunung selain itu anda juga bisa menikmati sabana yang dihiasi puluhan bunga edelweis, Untuk mencapain puncak gungung ini ada 2 jalur yang bisa anda lewati yaitu jalur via Sirah kencong dan panderman. 2 jalur ini memiliki karakteristik yang berbeda, untuk anda yang suka tantangan jalur via sirah kencong bisa menjadi rekomendasi karna anda akan menempuh jalur yang cukup ekstrem walaupun ekstrem jalur ini merupakan jalur tercepat untuk menuju puncak gunung butak. Sedangkan untuk jalur panderman  memiliki jalur yang datar dan merupakan jalur favorit bagi para pendaki walaupun akan lebih lama sampai di puncak.</p>
                        <li>Gunung Welirang</li>
                        <p>Merupakan gunung berapi yang masih aktif mengalirkan belerangnya. Terletak diantara perbatasan kota batu, kabupaten pasuruan,kabupaten mojokerto, serta juga bersebelahan dengan gunung arjuno, gunung ini memiliki ketinggian 3.156 mdpl. Karna gunung ini masih aktif jadi saat mendaki anda pasti akan bertemu banyak para Penambang belerang. Anda bisa melihat tumbuhan endemic diatas puncak gunung welirang ini,jalur yang terkenal untuk mendaki gunung ini adalah via tretes.</p>
                        <li>Gunung Arjuno</li>
                        <p>Merupakan gunung tertinggi ketiga di Jawa Timur, gunung ini memiliki ketinggian sekitar 3,339 mdpl. Untuk mencapai puncak gunung ini terdapat 3 jalur yang bisa dilalui yaitu jalur Batu, lawang dan tretes,  biasanya yang menjadi favorit para pendaki yaitu jalur tretes karna mereka bisa sekaligus mendaki gungung welirang. TIdak hanya mempunyai pemandangan yang indah  dan cerita mistisnya, gunug ini juga mempunyai beberapa destinasi wisata. Salah satunya anda bisa memilih jalur yang ada air terjun kakek bodo. Jangan khawatir tidak akan menemukan air yang bersih karna gunung ini merupakan sumber air sungai brantas.</p>
                        <li>Gunung Semeru</li>
                        <p>Bagi para pendaki & para pecinta film 5 cm pasti sudah tidak asing lagi dengan nama gunung ini ya. Gunung semeru mempunyai ketinggiann 3.676 mdpl, untuk mendaki gunung ini anda bisa melewati jalur via ranu pani.  Meskipun terasa Lelah saat mendaki gunung ini,  rasa lelah anda akan terbayarkan oleh indahnya pemandangan diatas puncak mahameru dan menakjubkannya ranu kumbolo.</p>
                    </ul>
                    <p>Untuk mendaki gunung tidak bisa asal  semua harus dipersiapkan dengan baik seperti fisik , perlengkapan naik gunung, Serta perbekalan selama mendaki, selain itu yang paling penting untuk para pendaki adalah etika selama pendakian. Ingat selalu sebagai pendaki yang bertanggung jawab tinggalkan jejakmu tapi tidak dengan sampahmu.</p>

                    <div class="share-buttons">
                        <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" target="_blank" class="btn-share whatsapp"><i class="fab fa-whatsapp"></i> Share on WhatsApp</a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="btn-share facebook"><i class="fab fa-facebook-f"></i> Share on Facebook</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('css')
<link href="{{asset ('assets/userNew/css/about.css')}}" rel="stylesheet">

<style>
    .box_about {
        padding: 20px;
        text-align: justify;
    }

    .box_about img {
        display: block;
        margin: 20px auto 20px;
        max-width: 100%;
        height: auto;
    }

    .share-buttons {
        margin-top: 20px; /* Menambahkan jarak atas untuk tombol berbagi */
        display: flex;
        justify-content: flex-end;
    }
    
    .btn-share {
        display: inline-block;
        padding: 10px 20px;
        margin: 20px 10px 20px;
        border-radius: 5px;
        color: #fff;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    
    .btn-share.whatsapp {
        background-color: #25D366;
    }
    
    .btn-share.facebook {
        background-color: #3b5998;
    }
    
    .btn-share i {
        margin-right: 5px;
    }
</style>

@endpush
