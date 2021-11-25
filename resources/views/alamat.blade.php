@extends('layouts.main')
@section('container')

<div class="container">
    <section class="jumbotron">
        <div class="map-border">
			<div class="google-maps">
				<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=fakultas%20teknik%20universitas%20muhammadiyah%20jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0""></iframe>
		    </div>
		</div>

        {{-- contact us --}}

        <div class="container" data-aos="fade-down" data-aos-delay= "300">
            <div class="struktur" data-aos="fade-in" data-aos-delay="200">
                <h3 class="judul"><img src="img/contact-us.png" alt="" width="40px"> Contact Us </h3>
                <hr class="garis" data-aos-mirror="true">
            </div>
        </div>


        <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Nama</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Nama Lengkap">
        </div>
        <div class="col-md-6">
            <label for="inputAddress" class="form-label">No Handphon</label>
            <input type="number" class="form-control" id="inputNumber" placeholder="Nome Hp">
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Subjek</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Subjek pesan">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Isi</label>
            <input type="text-area" class="form-control" id="inputCity">
        </div>

        <div class="col-md-6">
            <button type="submit" class="btn btn-success">Kirim</button>
        </div>
    </form>
        {{-- end contact us --}}
    </section>
</div>
@endsection
