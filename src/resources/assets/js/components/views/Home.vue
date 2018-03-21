<template>
	<div>
    <div class="home-header header-bgimage">

      <nav class="home-header-navbar navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
          <router-link class="navbar-brand d-flex flex-row align-items-center text-uppercase" :to="{ name: 'home' }" exact>
            <img class="mr-2" src="/images/logo.png" width="36" height="36">
            <span>PPDB BANTEN</span>
          </router-link>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item"><a   class="nav-link" href="#asas"">Prinsip Utama</a></li>
               
              <li v-if="authenticated" class="nav-item">
                <a @click.prevent="logout" class="nav-link" href="#">
                  <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> Logout
                </a>
              </li>
              <template v-else>
                <li class="nav-item">
                  <router-link class="nav-link" :to="{ name: 'login' }"><i class="fa fa-sign-in" aria-hidden="true"></i> Log In</router-link>
                </li>
              </template>
            </ul>
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navbar -->

      <div class="container">
        <div class="home-header-content d-flex flex-column justify-content-center py-5">
          <div>
            <h1 class="home-header-title">PPDB <strong class="text-warning"> 2018</strong></h1>
          <p class="home-header-description mb-5 wow fadeInUp">Pendaftaran Peserta Didik Baru <br>SMA SMK Negeri Provinsi Banten.</p>
            <p class="home-header-description mb-5">PPDB akan dimulai dalam:<br>
            <Countdown class="btn btn-lg btn-outline-light d-block d-sm-inline-block px-5 mx-2 mb-3 mb-sm-0 animated zoomIn" deadline="June 01, 2018"></Countdown></p>
            <div class="clearfix"></div>
            <p class="mb-0 wow fadeInDown">
              <router-link class="btn btn-lg btn-light d-block d-sm-inline-block px-5 mx-2 mb-3 mb-sm-0 animated slideInLeft" :to="{ name: 'dashboard' }"><i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</router-link>
              <router-link v-if="!authenticated" class="btn btn-lg btn-outline-light d-block d-sm-inline-block px-5 mx-2 mb-3 mb-sm-0 animated slideInRight" :to="{ name: 'register' }"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> Daftar</router-link>
            </p>
          </div>
        </div>
      </div><!-- /.container -->

      
	  </div><!-- /.banner -->

		<section id="asas" class="home-section home-section-1a">
	    <div class="container">
        <h2>Asas PPDB</h2>
        <p class="lead">Pendidikan merupakan hak setiap warga negara yang harus dipenuhi pemerintah dengan tidak memandang perbedaan suku, ras, agama, maupun ekonomi.</p>
        <div class="row">
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="200ms"> <i class="fa fa-bullseye ikon"></i>
            <h4><strong>Objektif</strong></h4>
            <p>Penerimaan Peserta Didik Baru harus memenuhi ketentuan umum serta sesuai ketentuan peraturan perundang-undangan yang berlaku.</p>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="400ms"> <i class="fa fa-search ikon"></i>
            <h4><strong>Transparan</strong></h4>
            <p>Pelaksanaan penerimaan Peserta Didik Baru bersifat terbuka dan dapat diketahui oleh masyarakat, untuk menghindari penyimpangan yang mungkin terjadi.</p>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms"> <i class="fa fa-check-square ikon"></i>
            <h4><strong>Akuntabel</strong></h4>
            <p>Proses penerimaan Peserta Didik Baru dapat dipertanggung jawabkan baik prosedur maupun hasilnya.</p>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="800ms"> <i class="fa fa-balance-scale ikon"></i>
            <h4><strong>Berkeadilan</strong></h4>
            <p>Penerimaan Peserta Didik Baru tidak membeda-bedakan ras, suku, agama, tingkat ekonomi, maupun keterbatasan lainnya serta sesuai ketentuan umum dan perundang-undangan yang berlaku.</p>
          </div>
        </div>        
	    </div>      
		</section>

		<section class="home-section home-section-2a">
	    <div class="container">
         <div class="section-title text-center wow fadeInDown">
              <h4>Tentang <strong>PPDB</strong> Online</h4>
              <div class="clearfix"></div>
              <p >PPDB Online adalah Sebuah sistem Aplikasi penerimaan Calon Siswa Baru SMA dan SMK Negeri Se-Provinsi Banten, Pelaksanaan PPDB online merupakan kolaborasi antara <a href="http://dindikbud.bantenprov.go.id" target="_blank"> Dindikbud</a> dan <a href="https://diskominfo.bantenprov.go.id/" target="_blank">Diskominfosp</a> Provinsi Banten.</p>
            </div>
            <div class="row">
              <div class="col-md-6 wow fadeInLeft"> <img src="/images/tentang2.png" class="img-responsive"> </div>
              <div class="col-md-6 wow fadeInRight">
                  <h4 class="ratakiri">Kenapa Online ?</h4>
                  <p class="ratakirikanan">Semangat Utama adalah keterbukaan sistem dan Informasi dalam proses seleksi Calon Siswa Baru di SMA/SMK Negeri Se-Provinsi Banten. Tujuannya adalah transparansi yaitu siapapun kapan dan dimanapun setiap orang dapat melihat hasil dari proses seleksi sampai tahap akhir</p>
                  <div class="space"></div>
                  <p class="ratakirikanan">Untuk Mendukung semua itu kami telah berusaha sebaik mungkin dengan mempersiapkan Hardware maupun software yang memadai diantaranya:</p>
                  <div class="space"></div><div class="list-style">
                    <div class="row ratakirikanan">
                      <div class="col-lg-6 col-sm-6 col-xs-12">
                        <ul>
                          <li>Peningkatatan Hardware dan software Server</li>
                          <li>Peningkatan Bandwidth</li>
                          <li>Sistem Aplikasi yang mudah dan cepat diakses</li>
                          <li>Penyederhaan Sistem Seleksi</li>
                          <li>Helpdek ditiap Kabupaten / Kota</li>
                        </ul>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-xs-12">
                        <ul>
                          <li>Data Peringkat Realtime setelah aktivasi dari sekolah tujuan</li>
                          <li>Calon Siswa dapat memantau dan pindah tujuan sekolah kapan saja</li>
                          <li>Mengutamakan calon Siswa terdekat kesekolah</li> 
                        </ul>
                      </div>
                    </div>
                  </div>     
              </div>
            </div>	      
      </div>
     
		</section>

		<section class="home-section home-section-3">
	    <div class="container">
        <h2>Informasi Dasar PPDB</h2>
        <div class="row">
          <div class="col-sm-4 mb-3">
            <div class="card text-white bg-primary h-100">
              <div class="card-body">
                <h5 class="card-title">Primary card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div><!-- /col -->
          <div class="col-sm-4 mb-3">
            <div class="card text-white bg-success h-100">
              <div class="card-body">
                <h5 class="card-title">Success card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div><!-- /col -->
          <div class="col-sm-4 mb-3">
            <div class="card text-white bg-warning h-100">
              <div class="card-body">
                <h5 class="card-title">Info card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div><!-- /col -->
        </div><!-- /.row -->
	    </div>
    </section>

		<footer class="footer foothome">
      <div class="container mt-5">
        <div class="row">
          <div class="col-8">
            <h4 class="footer-title text-dark">Title One</h4>
            <ul class="footer-nav text-dark">
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Footer link</a></li>
            </ul>
          </div>
          <div class="col-4">
              <h4 class="footer-title text-dark">Dinas Pendidikan dan Kebudayaan Provinsi Banten</h4>
              <p>Kawasan Pusat Pemerintahan Provinsi Banten<br>JL. Syech Nawawi Al-Bantani - Curug - Palima<br>Kota Serang - Provinsi Banten<br>Telp/Fax : (0254)  267064 / 267065.</p>
          </div>
        </div>        
      </div><!-- /.container-fluid -->
    </footer>

    <footer class="footer darkgblue">
      <div class="container">
         <div class="footer-description text-center">
          <p><i class="fa fa-code" aria-hidden="true"></i> Copyright: 2018 Design and Developed by <a href="https://github.com/bantenprov">@bantenprov</a></p>
        </div>
      </div><!-- /.container-fluid -->
    </footer>

	</div>
</template>
<style scoped>
.header-bgimage {
  background: url('/images/banner-ppdb-2.jpg') no-repeat bottom center;
  background-attachment: fixed !important; 
  background-size: cover;
}
.ikon {
  font-size: 30px;
  padding: 5px;
  color: #7891a3;
}
.home-section-1a {
  position: relative;
  padding-top: 60px;
  padding-bottom: 30px;
  color: #333;
  background-color: #E8EEEF;
  }

.home-section-2a {
  position: relative;
  padding-top: 30px;
  padding-bottom: 30px;
  color: #fff;
  background-color: #5B7981;
  }

  .ratakirikanan {
    text-align: justify;
  }
  .ratakiri {
    text-align: left;
  }

  //imageresponsive
  img {
  vertical-align: middle;
  }
  .img-responsive,
  .thumbnail > img,
  .thumbnail a > img,
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    display: block;
    max-width: 100%;
    height: auto;
  }
  
  .darkgblue{
  background-color:#0F2028;
  padding-top: 5px;
  padding-bottom: 5px;
  }
  .foothome{
    background-color:#278da5;
    padding-top: 20px;
  padding-bottom: 20px;
  }
</style>

<script>
import { mapGetters } from 'vuex';
import Countdown from 'vuejs-countdown';

export default {
  components: { Countdown },
  computed: mapGetters({
    user: 'authUser',
    authenticated: 'authCheck'
  }),
  methods: {
    async logout () {
      // Log out the user.
      await this.$store.dispatch('logout')

      // Redirect to login.
      this.$router.push({ name: 'login' })
    }
  },
  mounted () {
    var scrollpos = window.scrollY;
    var header = document.querySelector('.home-header-navbar');

    header.classList.add('animated');

    window.addEventListener('scroll', function() {
      scrollpos = window.scrollY;

      if (scrollpos > 78) {
        header.classList.remove('navbar-dark','bg-transparent');
        header.classList.add('border-bottom','border-info','navbar-light','fixed-top', 'slideInDown', 'bg-light');
      } else {
        header.classList.remove('border-bottom','border-info','fixed-top', 'slideInDown', 'navbar-light');
        header.classList.add('navbar-dark','bg-transparent');
        header.classList.remove('bg-light');
      }
    });
  }
}
</script>
