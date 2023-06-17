@extends('rental')

@section('content')
<main class="bg_gray">
    <div class="container margin_60_35 add_bottom_30">
        <div class="main_title">
            <a><img src="{{asset ('assets/user/img/LOGO-CILIWUNG-CAMP.png') }}" alt="" width="350" height="200"></a>
            <h2>About Us</h2>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="">
                <div class="box_about">
                    <p>PT. Ciliwungcamp Nusantara Group atau yang sering dikenal dengan nama Ciliwungcamp adalah perusahaan yang berfokus pada penyedia jasa, sarana dan prasarana yang mendukung aktivitas outdoor.</p>
                    <p>Ciliwungcamp memiliki tujuan memberikan sarana bagi para pecinta kegiatan outdoor serta dedikasi tinggi untuk memberikan pelayanan demi kepuasan konsumen. Semua kemajuan yang dicapai tidak lepas dari nilai-nilai yang telah kami yakini sejak awal serta terjalinnya hubungan kekeluargaan yang dekat dengan konsumen, karyawan, pemilik, dan pihak-pihak lain yang terkait.</p>
                    <p>Kehadiran kami adalah untuk selalu memenuhi kebutuhan konsumen. Oleh karena itu, kami terus berupaya untuk mengembangkan usaha dan menyempurnakan layanan serta kualitas produk-produk sesuai dengan kebutuhan konsumen, baik saat sekarang maupun akan datang.</p>
                </div>
            </div>

        </div>
        <!-- /row -->
        <div class="row justify-content-center align-items-center">
            <div class="">
                <div class="box_about">
                    <h2>Visi</h2>
                    <p>Menjadi perusahaan terkemuka di bidang pemberdayaan manusia yang mampu menciptakan sumber daya manusia yang makmur dan berkarakter.</p>
                    <p>Become a leading company in the field of human empowerment which is able to create prosperous and characterized human resources.</p>
                </div>
            </div>
        </div>
        <!-- /row -->
        <div class="row justify-content-center align-items-center ">
            <div class="">
                <div class="box_about">
                    <h2>Misi</h2>
                    <ol>
                        <li><p>Ciliwungcamp adalah orang-orang yang berkomitmen, berjiwa muda, berkarakter, berintegritas dan berinovasi.</p></li>
                        <li><p>Kami bekerja berdasarkan SOP dan 10 point budaya untuk memastikan bahwa semua orang yang tersentuh ataupun menyentuh team Ciliwungcamp akan mendapatkan pengalaman yang melebihi ekspetasi mereka.</p></li>
                        <li><p>KamiKami akan selalu menyelesaikan semua tugas dengan semangat kompetisi untuk mendapatkan 120% hasil melalui service di bidang persewaan alat outdoor, outbound service dan tour and travel.</p></li>
                        <li><p>KamiProduk dan layanan kami berkualitas terbaik sebanding dengan effort yang anda berikan.</p></li>
                        <li><p>KamiKlien Ciliwungcamp melingkupi perseorangan, grup, universitas, sekolah, BUMN, Corporate, EO, dan rekanan yang menginginkan kami untuk membantu mereka mencapai tujuan.</p></li>
                        <li><p>KamiKlien kami akan dipilih berdasarkan sikap dan kebutuhan, bukan ukurannya.</p></li>
                        <li><p>KamiKami dipilih bekerja sama dengan mereka karena kami memahami setiap klien adalah penting.</p></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    {{-- <div class="bg_white">
        <div class="container margin_60_35">
            <div class="main_title">
                <h2>Why Choose Allaia</h2>
                <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-medall-alt"></i>
                        <h3>+ 1000 Customers</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-help-alt"></i>
                        <h3>H24 Support</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-gift"></i>
                        <h3>Great Sale Offers</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-headphone-alt"></i>
                        <h3>Help Direct Line</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-wallet"></i>
                        <h3>Secure Payments</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box_feat">
                        <i class="ti-comments"></i>
                        <h3>Support via Chat</h3>
                        <p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris, cum no alii option, cu sit mazim libris. </p>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
    </div> --}}
    <!-- /bg_white -->

{{-- <div class="container margin_60">
    <div class="main_title">
        <h2>Meet Allaia Staff</h2>
        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
    </div>
    <div class="owl-carousel owl-theme carousel_centered">
        <div class="item">
            <a href="#0">
                <div class="title">
                    <h4>Julia Holmes<em>CEO</em></h4>
                </div><img src="{{asset ('assets/userNew/img/staff/1_carousel.jpg')}}" alt="">
            </a>
        </div>
        <div class="item">
            <a href="#0">
                <div class="title">
                    <h4>Lucas Smith<em>Marketing</em></h4>
                </div><img src="{{asset ('assets/userNew/img/staff/2_carousel.jpg')}}" alt="">
            </a>
        </div>
        <div class="item">
            <a href="#0">
                <div class="title">
                    <h4>Paul Stephens<em>Business strategist</em></h4>
                </div><img src="{{asset ('assets/userNew/img/staff/3_carousel.jpg')}}" alt="">
            </a>
        </div>
        <div class="item">
            <a href="#0">
                <div class="title">
                    <h4>Pablo Himenez<em>Customer Service</em></h4>
                </div><img src="{{asset ('assets/userNew/img/staff/4_carousel.jpg')}}" alt="">
            </a>
        </div>
        <div class="item">
            <a href="#0">
                <div class="title">
                    <h4>Andrew Stuttgart<em>Admissions</em></h4>
                </div><img src="{{asset ('assets/userNew/img/staff/5_carousel.jpg')}}" alt="">
            </a>
        </div>
    </div>
    <!-- /carousel -->
</div> --}}
<!-- /container -->
</main>
@endsection

@push('css')
<link href="{{asset ('assets/userNew/css/about.css')}}" rel="stylesheet">
@endpush
