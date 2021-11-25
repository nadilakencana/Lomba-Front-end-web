@extends('layouts.main')
@section('container')

{{-- start slide --}}
<div class="container">
    <Section class="jumbotron">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/periode.png" class="d-block w-100"  alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="img/sampul1.png" class="d-block w-100" alt="...">

                    </div>
                     <div class="carousel-item">
                    <img src="img/sampul2.png" class="d-block w-100" alt="...">

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

{{-- end slide --}}

{{-- About --}}
        <div class="container" data-aos="fade-down" data-aos-delay= "300">
                <div class="struktur" data-aos="fade-in" data-aos-delay="200">
                    <h3 class="judul"><img src="img/bookmark.png" alt="" width="40px"> About </h3>
                    <hr class="garis" data-aos-mirror="true">
                </div>
        </div>

        <div class="container gy-5">
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="carousel-item active">
                        <img src="img/hmif.png" class="d-block w-80" alt="..." data-aos="fade-right" data-aos-delay="200">
                    </div>
                </div>
                <div class="col-md-6">
                <h3 class="judul" data-aos="fade-up">HMIF - UMJ</h3>
                <p style="margin-top: 40px; text-align: justify;" data-aos="fade-left">
                    Himpunan Mahasiswa Teknik Informatika Universitas Muhammadiyah Jakarta. Sebuah organisasi yang juga bergerak di bidang akademik
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fuga explicabo praesentium in, qui aperiam corporis iste
                    labore atque debitis nihil quo saepe iure itaque quaerat dolor animi expedita voluptates.
                </p>
                </div>
            </div>
        </div>
{{-- end about --}}

{{-- Prestrasi --}}

        <section class="features-overview" id="features-section">
            <div class="container" data-aos="fade-down" data-aos-delay= "300">
                <div class="struktur" data-aos="fade-in" data-aos-delay="200">
                    <h3 class="judul"><img src="img/trophy.png" alt="" width="40px"> Prestasi Kami </h3>
                    <hr class="garis" data-aos-mirror="true">
                </div>
            </div>
                <div class="d-md-flex justify-content-between">
                <div class="grid-margin d-flex justify-content-start">
                    <div class="features-width" data-aos="fade-in">
                        <div class="text-center">
                            <img src="img/Group12.svg" alt="" class="img-icons">
                            <h5 class="py-3">Juara <br>Lomba Startup Inovation</h5>
                        </div>
                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto commodi corrupti quo, voluptatum laborum ipsam at enim facere animi fugit, obcaecati debitis veniam voluptatem laboriosam sed esse consectetur illo. Quis!</p>
                    <a href="#">
                        <p class="btn btn-primary readmore-link">Readmore</p>
                    </a>
                    </div>
                </div>
                <div class="grid-margin d-flex justify-content-center">
                    <div class="features-width" data-aos="fade-in">
                        <div class="text-center">
                            <img src="img/clapperboard.png" height="65" width="65" alt="" class="img-icons">
                            <h5 class="py-3">Juara <br>Lomba Short Movie</h5>
                        </div>

                    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet necessitatibus debitis officiis illum praesentium nulla quam rem blanditiis, aut hic qui fuga repellat, voluptatem culpa, harum veritatis! Vel, corrupti laboriosam?</p>
                    <a href="#">
                        <p class="btn btn-primary readmore-link">Readmore</p>
                    </a>
                    </div>
                </div>
                <div class="grid-margin d-flex justify-content-end">
                    <div class="features-width" data-aos="fade-in">
                    <div class="text-center">
                        <img src="img/computer.png" height="65" width="65" alt="" class="img-icons">
                        <h5 class="py-3">Juara <br>Lomba Design Grafis</h5>
                    </div>

                    <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae molestiae voluptates quos asperiores corrupti voluptatum quaerat illum magni maxime sapiente, cupiditate et harum. Perspiciatis, iusto esse perferendis dicta cumque quisquam!</p>
                    <a href="#">
                        <p class="btn btn-primary readmore-link">Readmore</p>
                    </a>
                    </div>
                </div>
                </div>
        </section>

{{-- end prestasi --}}

{{-- galeri  --}}

        <div class="container" data-aos="fade-down" data-aos-delay= "300">
                <div class="struktur" data-aos="fade-in" data-aos-delay="200">
                    <h3 class="judul"><img src="img/gallery.png" alt="" width="40px"> Galery </h3>
                    <hr class="garis" data-aos-mirror="true">
                </div>
        </div>

        <div class="container py-5">
            <div class="row gy-5">
                <div class="col-lg-6 col-md-6">
                    <div class="carousel-item active">
                        <img src="img/foto1.jpg" class="d-block w-100" alt="..." data-aos="fade-right"  width="50%" data-aos-delay="200">
                    </div>
                </div>
                <div class="col-lg-6 md-6">
                    <div class="carousel-item active">
                        <img src="img/foto2.jpg" class="d-block w-100" alt="..." data-aos="fade-left" width="50%" data-aos-delay="200">
                    </div>
                </div>
                        <div class="col-lg-6 md-6">
                    <div class="carousel-item active">
                        <img src="img/foto3.jpg" class="d-block w-100" alt="..." data-aos="fade-right"  width="50%" data-aos-delay="200">
                    </div>
                </div>
                <div class="col-lg-6 md-6">
                    <div class="carousel-item active">
                        <img src="img/foto4.jpg" class="d-block w-100" alt="..." data-aos="fade-left" width="50%" data-aos-delay="200">
                    </div>
                </div>
            </div>
        </div>

{{-- galery --}}

{{-- Struktural --}}

        <div class="container" data-aos="fade-down"  data-aos-delay="100">
                <div class="struktur" data-aos="fade-in">
                    <h3 class="judul"><img src="img/hmif.png" alt="" width="50px"> Struktural</h3>
                    <hr class="garis" data-aos-mirror="true">
                </div>
        </div>

        <section id="team" class="team">
                <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"></div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"><br>
                        <div class="member">
                            <img src="img/ketua Himpunan.jpg" class="img-thumbnail"  alt="">
                        <div class="member-info">
                        <div class="member-info-content">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300"><br>
                        <div class="member">
                            <img src="img/wakil Ketua Himpunan.jpg" class="img-thumbnail"  alt="">
                        <div class="member-info">
                        <div class="member-info-content">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"></div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"><br>
                        <div class="member">
                            <img src="img/Sekretaris 1.jpg" class="img-thumbnail"  alt="">
                        <div class="member-info">
                        <div class="member-info-content">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"><br>
                        <div class="member">
                            <img src="img/Sekretaris 2.jpg" class="img-thumbnail"  alt="">
                            <div class="member-info">
                            <div class="member-info-content">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300"><br>
                        <div class="member">
                            <img src="img/Bendahara 1.jpg" class="img-thumbnail"  alt="">
                        <div class="member-info">
                        <div class="member-info-content">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300"><br>
                        <div class="member">
                            <img src="img/Bendahara 2.jpg" class="img-thumbnail" alt="">
                        <div class="member-info-content">
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"><br>
                    <div class="member">
                        <img src="img/Kaderisasi.jpg" class="img-thumbnail"  alt="">
                        <div class="member-info">
                        <div class="member-info-content">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200"><br>
                        <div class="member">
                            <img src="img/PENMAS.jpg" class="img-thumbnail"  alt="">
                        <div class="member-info">
                        <div class="member-info-content">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300"><br>
                        <div class="member">
                            <img src="img/IPTEK.png" class="img-thumbnail"  alt="">
                        <div class="member-info">
                        <div class="member-info-content">
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300"><br>
                        <div class="member">
                            <img src="img/PRHP.png" class="img-thumbnail"  alt="">
                        <div class="member-info">
                        <div class="member-info-content">
                        </div>
                        </div>
                    </div>
                    </div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300"><br>
                        <div class="member">
                            <img src="img/KOMINFO.jpg" class="img-thumbnail"  alt="">
                        <div class="member-info">
                        <div class="member-info-content">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
        </section><br>

{{-- end Struktural --}}

{{-- Acara HMIF --}}

        <div class="container" data-aos="fade-down">
                <div class="struktur" data-aos="fade-in">
                    <h3 class="judul"><img src="img/event.png" alt="" width="40px"> Acara HMIF </h3>
                    <hr class="garis" data-aos-mirror="true">
                </div>
        </div>

        <section id="speakers">
                <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/agenda opening.jpg" alt="Speaker 1" class="img-fluid">
                    <div class="details">
                        <h3><a href="#">Opening Ceremony</a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                    <img src="img/agenda workshop.jpg" alt="Speaker 2" class="img-fluid">
                    <div class="details">
                        <h3><a href="#">Workshop</a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                    <img src="img/agenda front end.jpg" alt="Speaker 3" height="500" width="500" class="img-fluid">
                    <div class="details">
                        <h3><a href="#">Front End Web</a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="100">
                    <img src="img/agenda balap.jpg" alt="Speaker 4" height="500" width="800" class="img-fluid">
                    <div class="details">
                        <h3><a href="#">Balap Ngoding</a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="200">
                    <img src="img/agenda ml.jpg" alt="Speaker 5" width="350" class="img-fluid">
                    <div class="details">
                        <h3><a href="#">Virtual Gaming</a></h3>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="speaker" data-aos="fade-up" data-aos-delay="300">
                    <img src="img/agenda webinar.jpg" alt="Speaker 6" width="400" class="img-fluid">
                    <div class="details">
                        <h3><a href="#">Webinar</a></h3>
                    </div>
                    </div>
                </div>
                </div>
        </section>

{{-- end Acara --}}

{{-- Agenda --}}

        <div class="container" data-aos="fade-down"  data-aos-delay="100">
            <div class="struktur" data-aos="fade-in">
                <h3 class="judul"><img src="img/open-book.png" alt="" width="40px"> Agenda HMIF </h3>
                <hr class="garis" data-aos-mirror="true">
            </div>
        </div>

        <div class="row grid-margin">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-5 text-center flex-item grid-margin" data-aos="fade-right">
                    <img src="img/tent.png" alt="" height="336" width="306" class="img-fluid">
                    </div>
                    <div class="col-5 col-lg-5 flex-item grid-margin py-4" data-aos="fade-left">
                    <h3 class="m-0 text-start">INFORMATIC<br>BOOTCAMP</h3>
                    <div class="col-lg-9 col-xl-8 p-0">
                        <p class="py-4 m-0 text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, asperiores voluptatem iure saepe impedit explicabo quod adipisci. Quia ea, sunt illum quas est debitis aut incidunt eius vitae, eos exercitationem. </p>
                    </div>

                    </div>
                </div>
                <br><br>
                <div class="row align-items-center justify-content-center">
                    <div class="col-5 col-lg-5 flex-item grid-margin py-4" data-aos="fade-left">
                    <h3 class="m-0 text-start">MAINTENANCE  <br>UPDATE KONTENT WEB</h3>
                    <div class="col-lg-12 col-xl-8 p-0">
                        <p class="py-4 m-0 text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita modi quasi similique tempora perferendis voluptas, voluptatibus officia animi delectus doloremque cumque, quibusdam repellendus a magnam provident velit commodi in ipsam.</p>
                    </div>
                    </div>
                    <div class="col-12 col-lg-3 text-center flex-item grid-margin" data-aos="fade-right">
                    <img src="img/web-maintenance.png" alt="" height="236" width="306" class="img-fluid">
                    </div>
                </div>
                <br><br>
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-lg-5 text-center flex-item grid-margin" data-aos="fade-right">
                    <img src="img/talking.png" alt="" height="236" width="306" class="img-fluid">
                    </div>
                    <div class="col-5 col-lg-5 flex-item grid-margin py-4" data-aos="fade-left">
                    <h3 class="m-0 text-start">TECH TALK</h3>
                    <div class="col-lg-9 col-xl-8 p-0">
                        <p class="py-4 m-0 text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, molestias! Eligendi saepe rerum dicta quia neque officia, autem amet eaque nemo placeat. Molestiae asperiores fugiat eaque facere impedit cupiditate provident.</p>
                    </div>

                    </div>
                </div>
                <br><br>
                <div class="row align-items-center justify-content-center">
                    <div class="col-5 col-lg-5 flex-item grid-margin py-4" data-aos="fade-left">
                    <h3 class="m-0 text-start">FORUM<br>DISKUSI</h3>
                    <div class="col-lg-12 col-xl-8 p-0">
                        <p class="py-4 m-0 text-start"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem nihil modi aliquid tempore rem, dicta deserunt, impedit iste in quam adipisci ad quidem, esse cum exercitationem. Cumque hic unde minus!</p>
                    </div>
                    </div>
                    <div class="col-12 col-lg-3 text-center flex-item grid-margin" data-aos="fade-right">
                    <img src="img/meeting.png" alt="" height="236" width="306" class="img-fluid">
                    </div>
        </div>

    </section>
</div>


{{-- Agenda --}}

{{-- Alamat --}}
        <div class="container" data-aos="fade-down">
                <div class="struktur" data-aos="fade-in">
                    <h3 class="judul"><img src="img/place.png" alt="" width="40px"> Alamat </h3>
                    <hr class="garis" data-aos-mirror="true">
                </div>
        </div>
        <div class="map-border py-5">
                    <div class="google-maps">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=fakultas%20teknik%20universitas%20muhammadiyah%20jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0""></iframe>
                    </div>
        </div>
{{-- end Alamat --}}

@endsection
