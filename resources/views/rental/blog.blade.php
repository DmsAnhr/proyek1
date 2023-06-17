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
                                <a href="blog-post.html"><img src="{{asset ('assets/userNew/img/blog-1.jpg')}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>Info Umum - 23 Nov. 2020</small>
                                <h2><a href="{{url ('/puncak-gunung-terbaik-di-jawa-timur')}}">Puncak Gunung Terbaik di Jawa Timur</a></h2>
                                <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                    <div class="col-md-6">
                        <article class="blog">
                            <figure>
                                <a href="blog-post.html"><img src="{{asset ('assets/userNew/img/blog-2.jpg')}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>Category - 20 Nov. 2017</small>
                                <h2><a href="blog-post.html">At usu sale dolorum offendit</a></h2>
                                <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                    <div class="col-md-6">
                        <article class="blog">
                            <figure>
                                <a href="blog-post.html"><img src="{{asset ('assets/userNew/img/blog-3.jpg')}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>Category - 20 Nov. 2017</small>
                                <h2><a href="blog-post.html">Iusto nominavi petentium in</a></h2>
                                <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                    <div class="col-md-6">
                        <article class="blog">
                            <figure>
                                <a href="blog-post.html"><img src="{{asset ('assets/userNew/img/blog-4.jpg')}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>Category - 20 Nov. 2017</small>
                                <h2><a href="blog-post.html">Assueverit concludaturque quo</a></h2>
                                <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                    <div class="col-md-6">
                        <article class="blog">
                            <figure>
                                <a href="blog-post.html"><img src="{{asset ('assets/userNew/img/blog-5.jpg')}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>Category - 20 Nov. 2017</small>
                                <h2><a href="blog-post.html">Nec nihil menandri appellantur</a></h2>
                                <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                    <div class="col-md-6">
                        <article class="blog">
                            <figure>
                                <a href="blog-post.html"><img src="{{asset ('assets/userNew/img/blog-6.jpg')}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                            <div class="post_info">
                                <small>Category - 20 Nov. 2017</small>
                                <h2><a href="blog-post.html">Te congue everti his salutandi</a></h2>
                                <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->

                <div class="pagination__wrapper no_border add_bottom_30">
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
                </div>
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