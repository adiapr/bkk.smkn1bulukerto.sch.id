@extends('front.pages.main')

@section('title')
    Beranda
@endsection

@section('content')
            <!-- Carousel Start -->
            <div class="carousel">
                <div class="container-fluid">
                    <div class="owl-carousel">
                        <div class="carousel-item">
                            <div class="carousel-img">
                                <img src="https://smkn1bulukerto.sch.id/wp-content/uploads/2021/04/BUMEN.jpg" alt="Image">
                            </div>
                            <div class="carousel-text">
                                <h1>Smart <span>with</span>Technology</h1>
                                <p>
                                    Peserta didik harus sehat dan melek teknologi
                                </p>
                                <div class="carousel-btn">
                                    <a class="btn custom-btn" href="">View Menu</a>
                                    <a class="btn custom-btn" href="">Book Table</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-img">
                                <img src="https://smkn1bulukerto.sch.id/wp-content/uploads/2021/04/19.jpg" alt="Image">
                            </div>
                            <div class="carousel-text">
                                <h1>World’s <span>Best</span> Chef</h1>
                                <p>
                                    Morbi sagittis turpis id suscipit feugiat. Suspendisse eu augue urna. Morbi sagittis, orci sodales varius fermentum, tortor
                                </p>
                                <div class="carousel-btn">
                                    <a class="btn custom-btn" href="">View Menu</a>
                                    <a class="btn custom-btn" href="">Book Table</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-img">
                                <img src="https://smkn1bulukerto.sch.id/wp-content/uploads/2021/07/DSC_0087-1536x1025.jpg" alt="Image">
                            </div>
                            <div class="carousel-text">
                                <h1>Fastest Order <span>Delivery</span></h1>
                                <p>
                                    Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula euismod quam. Proin pellentesque odio
                                </p>
                                <div class="carousel-btn">
                                    <a class="btn custom-btn" href="">View Menu</a>
                                    <a class="btn custom-btn" href="">Book Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel End -->


            <!-- Welcome Start -->
            <div class="booking">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="booking-content">
                                <div class="section-header">
                                    <p>Selamat Datang</p>
                                    <h2>BKK SMKN 1 Bulukerto</h2>
                                </div>
                                <div class="about-text">
                                    <p>
                                        Galau cari kerja? Ingin lebih kompeten? Mau mengembangkan diri tanpa pusing memikirkan biaya? Yuk gabung bersama <b>BKK Cutra Mandiri SMKN 1 Bulukerto</b> dan #SiapDariSekarang
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mt-3">
                            <img src="https://bkk.smkn5-sby.sch.id/ui-2/img/sticky-amikom.png"  style="width:100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Welcome End -->


            <!-- Flow Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 text-right">
                            {{-- <img src="https://www.prakerja.go.id/images/img-home-step-01.svg" alt=""> --}}
                            <h2>Bursa Kerja Khusus</h2>
                            Bursa Kerja Khusus (BKK) adalah sebuah lembaga yang dibentuk di Sekolah Menengah Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja, merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.
                        </div>
                        <div class="col-md-6">
                            <img src="https://bkk.smkn5-sby.sch.id/ui-2/img/step1-min.png" style="width: 100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Flow End -->


            <!-- Feature Start -->
            <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-header">
                                <p>Cepat dan Mudah</p>
                                <h2>Bersama BKK</h2>
                            </div>
                            <div class="feature-text">
                                <div class="feature-img">
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="FrontAssets/img/feature-1.jpg" alt="Image">
                                        </div>
                                        <div class="col-6">
                                            <img src="FrontAssets/img/feature-2.jpg" alt="Image">
                                        </div>
                                        <div class="col-6">
                                            <img src="FrontAssets/img/feature-3.jpg" alt="Image">
                                        </div>
                                        <div class="col-6">
                                            <img src="FrontAssets/img/feature-4.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja, merupakan mitra Dinas Tenaga Kerja dan Transmigrasi.
                                </p>
                                <a class="btn custom-btn" href="">Daftar Sekarang</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="feature-item">
                                        <img src="https://www.prakerja.go.id/images/img-home-step-02.svg" alt="">
                                        <h3>Cari Lowongan</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-item">
                                        <img src="https://www.prakerja.go.id/images/img-home-step-07.svg" alt="">
                                        <h3>Lihat Rincian</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="feature-item">
                                        <img src="https://www.prakerja.go.id/images/img-home-step-04.svg" alt="">
                                        <h3>Daftarkan Diri</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-item">
                                        <img src="https://www.prakerja.go.id/images/img-home-step-01.svg" alt="">
                                        <h3>Isi Biodata</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="feature-item">
                                        <img src="https://www.prakerja.go.id/images/img-home-step-06.svg" alt="">
                                        <h3>Tungu Sebentar</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-item">
                                        <img src="https://www.prakerja.go.id/images/img-home-step-05.svg" alt="">
                                        <h3>Langsung Kerja</h3>
                                        <p>
                                            Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput metus tortor
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->

            <hr>

            <!-- Lowongan Start -->
            <div class="menu">
                <div class="container">
                    <div class="section-header">
                        <h2>Lowongan Terbaru</h2>
                    </div>
                    <div class="row">
                        @foreach ($datapekerjaan as $item)
                        <div class="col-md-12 mt-2">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-3 border-end align-self-center">
                                        <img src="img/company/{{ $item->logo }}" class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                        <h5>{{ $item->posisi }}</h5>
                                        <h2 class="card-title">{{ $item->perusahaan }}</h2>
                                        <hr>
                                        <table style="width:100%">
                                                <tr style="width:200%">
                                                    <td  width="30%">
                                                        <small class="text-muted"><i class="fa fa-map-marker"></i> {{ $item->lokasi }}</small>
                                                    </td>
                                                    <td width="40%">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<small class="text-muted"><i class="fa fa-graduation-cap"></i> {{ $item->lulusan }}</small>
                                                    </td>
                                                    <td width="30%">
                                                        <small class="text-muted"><i class="fa fa-calendar"></i> {{ $item->batas }}</small>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-right align-self-center">
                                        <button class="btn btn-primary mb-2 mr-3" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-bookmark"></i> Daftar</button>
                                        <!-- Modal -->
                                        <form action="" method="post">
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">{{ $item->perusahaan }}</h5>
                                                        </div>
                                                        <div class="modal-body text-left">
                                                            <h6 class="pull-left"><b>{{ $item->posisi }}</b></h6>
                                                            <img class="pull-right" src="img/company/{{ $item->logo }}" height="30" alt="">
                                                            <p style="font-size: -3">
                                                                {!! $item->deskripsi !!}
                                                            </p>
                                                            <hr>
                                                            <h5>Isi data dibawah untuk pendaftaran</h5>
                                                            <div class="form-group">
                                                                <label for="">Nama Lengkap</label>
                                                                <input type="text" name="nama" required placeholder="Masukkan nama legkap" class="form-control form-control-sm">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Tanggal Lahir</label>
                                                                <input type="date" name="tanggal" required class="form-control form-control-sm">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Alamat</label>
                                                                <input type="text" name="alamat" required placeholder="Masukkan alamat legkap" class="form-control form-control-sm">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Asal Sekolah</label>
                                                                <input type="text" name="asal" required placeholder="Masukkan asal sekolah" class="form-control form-control-sm">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Jurusan</label>
                                                                <input type="text" name="jurusan" required placeholder="TKR, RPL, AK" class="form-control form-control-sm">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Tahun lulus</label>
                                                                <input type="number" name="tahun" required placeholder="Masukkan nama legkap" class="form-control form-control-sm">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">No telp/Whatsapp</label>
                                                                <input type="number" name="telp" required placeholder="Awali dengan 62" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Kembali</button>
                                                            <button type="button" class="btn btn-primary btn-sm"> <i class="fa fa-paper-plane"></i> Kirim Lamaran</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- Menu End -->


            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Testimoni</p>
                        <h2>Pesan Kesan Alumni</h2>
                    </div>
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">

                            <p>
                                " Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput "
                            </p>
                            <div class="testimonial-img">
                                <img class="img-circle" src="FrontAssets/img/testimonial-1.jpg" alt="testimony">
                            </div>
                            <h2>Anya Geraldine</h2>
                            <h3>RPL 3 - 2016</h3>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="FrontAssets/img/testimonial-2.jpg" alt="Image">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                            </p>
                            <h2>Client Name</h2>
                            <h3>Profession</h3>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="FrontAssets/img/testimonial-3.jpg" alt="Image">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                            </p>
                            <h2>Client Name</h2>
                            <h3>Profession</h3>
                        </div>
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <img src="FrontAssets/img/testimonial-4.jpg" alt="Image">
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasel nec preti mi. Curabit facilis ornare velit non vulput
                            </p>
                            <h2>Client Name</h2>
                            <h3>Profession</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header text-center">
                        <h2>Partner Kami</h2>
                    </div>
                    <div class="row align-self-center" >
                        <div class="col-md-3 align-self-center">
                            <img src="https://rajasanews.com/wp-content/uploads/2016/07/Info-Loker-PT-Astra-Daihatsu-Motor.jpg" style="width:100%">
                        </div>
                        <div class="col-md-3 align-self-center mt-4">
                            <img src="https://i2.wp.com/lokerpintar.id/wp-content/uploads/2019/07/Lowongan-Kerja-PT-Mayora-Indah-Tbk.png" style="width:100%">
                        </div>
                        <div class="col-md-3 align-self-center mt-4">
                            <img src="https://s3-id-jkt-1.kilatstorage.id/fastnlow/2020/02/Logo-Quick-Maintenance.png" style="width:100%">
                        </div>
                        <div class="col-md-3 align-self-center mt-4">
                            <img src="https://pngimage.net/wp-content/uploads/2018/06/logo-alfamart-png.png" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->
@endsection
