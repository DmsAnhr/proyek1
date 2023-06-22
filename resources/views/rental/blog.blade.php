@extends('rental')

@section('content')
<main class="bg_gray">
    <div class="container margin_30">
        <div class="page_header">
            <h1>Blog &amp; News</h1>
        </div>
        <!-- /page_header -->
        <div class="row">
                <div class="widget search_blog d-block d-sm-block d-md-block d-lg-none">
                </div>
                <!-- /widget -->
                <div class="row">
                    <div class="col-md-6">
                        <article class="blog">
                            <figure>
                                <a href="{{url ('/puncak-gunung-terbaik-di-jawa-timur')}}"><img src="{{asset ('assets/blog/img/puncak-gunung-terbaik-jatim.jpg')}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>23 Nov. 2020</small>
                                <h2><a href="{{url ('/puncak-gunung-terbaik-di-jawa-timur')}}">Puncak Gunung Terbaik di Jawa Timur</a></h2>
                                <p>Berikut ini adalah gunung-gunung disekitar kota malang yang wajib dan patut untuk kamu kunjungi sebagai destinasi liburan atau sebagai lokasi camping malang</p>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                    <div class="col-md-6">
                        <article class="blog">
                            <figure>
                                <a href="{{url ('/pantai-malang-selatan-surga-camping-anti-mainstream')}}"><img src="{{asset ('assets/blog/img/ciliwungcamp-pantai-selatan.jpg')}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>19 Aug. 2020</small>
                                <h2><a href="{{url ('/pantai-malang-selatan-surga-camping-anti-mainstream')}}">Pantai Malang Selatan, Surga Camping Anti Mainstream</a></h2>
                                <p>Beberapa pantai di malang selatan yang recommended banget buat liburan dan camping</p>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                    <div class="col-md-6">
                        <article class="blog">
                            <figure>
                                <a href="{{url ('/mau-healing-gak-perlu-pusing')}}"><img src="{{asset ('assets/blog/img/mau-healing-gak-pusing.jpg')}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>08 Aug. 2022</small>
                                <h2><a href="{{url ('/mau-healing-gak-perlu-pusing')}}">Mau Healing? Gak Perlu Pusing</a></h2>
                                <p>Rekomendasi wisata alam di malang yang cocok buat kamu berwisata sekaligus healing</p>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                    <div class="col-md-6">
                        <article class="blog">
                            <figure>
                                <a href="{{url ('/pecinta-paddling-wajib-tahu-tempat-ini')}}"><img src="{{asset ('assets/blog/img/pecinta-paddling.jpg')}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>12 Aug. 2022</small>
                                <h2><a href="{{url ('/pecinta-paddling-wajib-tahu-tempat-ini')}}">Pecinta Paddling Wajib Tahu Tempat Ini</a></h2>
                                <p>Pantai dimalang selatan yang cocok banget buat kalian yang suka paddling.Penasaran pantai apa aja? Ini dia daftarnya</p>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                    
                </div>
                <!-- /row -->

                {{-- <div class="pagination__wrapper no_border add_bottom_30">
                    <ul class="pagination">
                        <li><a href="#0" class="prev" title="previous page">&#10094;</a></li>
                        <li>
                            <a href="#0" class="active">1</a>
                        </li>
                        <li>
                            <a href="#0">2</a>
                        </li>
                        <li>
                            <a href="#0">3</a>
                        </li>
                        <li>
                            <a href="#0">4</a>
                        </li>
                        <li><a href="#0" class="next" title="next page">&#10095;</a></li>
                    </ul>
                </div> --}}
                <!-- /pagination -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
@endsection

@push('css')
<link href="{{asset ('assets/userNew/css/blog.css')}}" rel="stylesheet">
@endpush