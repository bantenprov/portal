<template>
	<div>
    <div class="home-header header-bgimage">

      <nav class="home-header-navbar navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
          <router-link class="navbar-brand d-flex flex-row align-items-center text-uppercase" :to="{ name: 'home' }" exact>
            <img class="mr-2" src="/images/logo.png" width="36" height="36">
            <span>Portal Banten</span>
          </router-link>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item"><a   class="nav-link" href="#asas"">Layanan</a></li>
               
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
            <h1 class="home-header-title">Portal <strong class="text-warning"> Banten</strong></h1>
          <p class="home-header-description mb-5 wow fadeInUp">Gerbang Informasi dan Layanan<br>Pemerintah Provinsi Banten.</p>
            <p class="home-header-description mb-5">Cari layanan / informasi yang anda inginkan:<br>
            <div class="btn btn-lg btn-outline-light d-block d-sm-inline-block px-5 mx-2 mb-3 mb-sm-0 animated zoomIn" deadline="June 01, 2018"></div>
            </p>
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
        <h2>Layanan</h2>
        <p class="lead">Pemerintah Provinsi Banten memberikan layanan dalam bentuk sistem informasi / aplikasi yang dapat diakses oleh masyarakat.</p>
        <div class="row">
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="200ms"> <i class="fa fa-bullseye ikon"></i>
            <h4><strong>Banten Satu Login</strong></h4>
            <p>Selain dipergunakan oleh ASN di lingkup pemerintahan juga dapat digunakan untuk mengakses Layanan Pemerintah Provinsi Banten oleh masyarakat.</p>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="400ms"> <i class="fa fa-search ikon"></i>
            <h4><strong>Banten Satu Data</strong></h4>
            <p>Guna mewujudkan sistem informasi dan aplikasi yang terintegrasi, Pemerintah Provinsi Banten menyiapkan basis data tunggal.</p>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms"> <i class="fa fa-check-square ikon"></i>
            <h4><strong>Pelaporan Elektronik</strong></h4>
            <p>Mendekatkan dengan masyarakat dalam hal menampung aspirasi maupun laporan, Epormas dipersiapkan untuk memudahkan penyampaian laporan.</p>
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="800ms"> <i class="fa fa-balance-scale ikon"></i>
            <h4><strong>Layanan Kesehatan</strong></h4>
            <p>Dapat memberikan informasi secara cepat, tepat dan terpadu bagi masyarakat yang membutuhkan informasi layanan kesehatan.</p>
          </div>
        </div>        
	    </div>      
		</section>

		<section class="home-section home-section-2a">
	    <div class="container">
         <div class="section-title text-center wow fadeInDown">
              <h4>Tentang <strong>Portal</strong> Banten</h4>
              <div class="clearfix"></div>
              <p >Portal Pemerintah Provinsi Banten, merupakan pintu gerbang bagi masyarakat untuk mengetahui hasil pembangunan yang telah dilaksanakan yang informasinya secara detil dapat dilihat pada situs situs terkait juga dapat menemukan navigasi atau petunjuk tentang layanan yang diselenggarakan Pemerintah Provinsi Banten.</p>
            </div>
            <div class="row">
              <div class="col-md-6 wow fadeInLeft"> <img src="/images/tentang2.png" class="img-responsive"> </div>
              <div class="col-md-6 wow fadeInRight">
                  <h4 class="ratakiri">Kenapa Online ?</h4>
                  <p class="ratakirikanan">Semangat keterbukaan yang dituangkan dalam sistem Informasi dan aplikasi memudahkan proses pelaksanaan kegiatan pemerintahan dan pengawasan jalannya roda pemerintahan yang dilaksanakan melalui berbagai perangkat daerah</p>
                  <div class="space"></div>
                  <p class="ratakirikanan">Untuk Mendukung semua itu kami telah berusaha sebaik mungkin dengan mempersiapkan Hardware maupun software yang memadai untuk melayani:</p>
                  <div class="space"></div><div class="list-style">
                    <div class="row ratakirikanan">
                      <div class="col-lg-6 col-sm-6 col-xs-12">
                        <ul>
                          <li>Informasi mengenai produk hukum</li>
                          <li>Informasi mengenai layanan</li>
                          <li>Informasi mengenai anggaran dan penyerapan</li>
                          <li>Informasi mengenai tarif dan jenis retribusi</li>
                          <li>Informasi mengenai perijinan satu pintu</li>
                        </ul>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-xs-12">
                        <ul>
                          <li>Kemudahan mengakses sistem informasi / layanan</li>
                          <li>Kemudahan mendapatkan informasi publik sesuai perundang-undanganan</li>
                          <li>Kemudahan menyumbangkan ide dalam pengembagan sistem informasi / aplikasi</li> 
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
        <h2>Anggaran dan Penyerapan</h2>
        <div class="row">
          <div class="col-sm-3 mb-3">
            <div class="card text-white bg-primary h-100">
              <div class="card-body">
                <h5 class="card-title">Anggaran dan Realisasi APBN</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div><!-- /col -->
          <div class="col-sm-3 mb-3">
            <div class="card text-white bg-success h-100">
              <div class="card-body">
                <h5 class="card-title">Anggaran dan Realisasi APBD</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div><!-- /col -->
          <div class="col-sm-3 mb-3">
            <div class="card text-white bg-warning h-100">
              <div class="card-body">
                <h5 class="card-title">Bankeu</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div><!-- /col -->
          <div class="col-sm-3 mb-3">
            <div class="card text-white bg-danger h-100">
              <div class="card-body">
                <h5 class="card-title">Indikator Makro</h5>
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
            <h4 class="footer-title text-dark">Peta situs</h4>
            <ul class="footer-nav text-dark">
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Layanan</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Produk Hukum</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Anggaran dan Penyerapan</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Informasi Publik</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Perijinan Satu Pintu</a></li>
            </ul>
          </div>
          <div class="col-4">
              <h4 class="footer-title text-dark">Pemerintah Provinsi Banten</h4>
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
