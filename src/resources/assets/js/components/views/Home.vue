<template>
 <div>
    <div class="home-header header-bgimage" style="margin-bottom: 0px;">
      <nav class="home-header-navbar navbar navbar-expand-lg navbar-light bg-light border-bottom border-info">


        <div class="container">
          <router-link class="navbar-brand d-flex flex-row align-items-center text-uppercase" :to="{ name: 'home' }" exact>
            <img class="mr-2" src="/images/portal-logo.png" width="auto" height="40">
            
          </router-link> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
          <scrollactive class="nav navbar-nav ml-auto"  active-class="active" :offset="80" :duration="800" bezier-easing-value=".5,0,.35,1">
        
          <ul class="nav navbar-nav ml-auto">
               <li class="nav-item"><a  class="nav-link scrollactive-item" href="#beranda">Beranda</a></li>
               <li class="nav-item"><a   class="nav-link scrollactive-item" href="#asas">Layanan</a></li>
               <li class="nav-item"><a   class="nav-link scrollactive-item" href="#anggaran">Anggaran</a></li>
               <li class="nav-item"><a   class="nav-link scrollactive-item" href="#tentang">Tentang</a></li> 
                           
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
            </scrollactive>           
          </div>
        </div><!-- /.container -->
      </nav><!-- /.navbar -->

      <div id="beranda" class="container">
        <div class="home-header-content d-flex flex-column justify-content-center py-5">
          <div>
             <h1 class="home-header-title">Portal <strong class="text-warning"> Banten</strong></h1>
          <p class="home-header-description mb-5 wow fadeInUp">Gerbang Informasi dan Layanan<br>Pemerintah Provinsi Banten.</p>            
            <div class="home-header-description mb-5 input-group justify-content-center py-5 wow slideInUp">       
                <input type="text" class="form-control form-control-lg rounded-left col-8" placeholder="Cari Layanan / Informasi yang Anda inginkan..." aria-label="" aria-describedby="basic-addon1">                
                <div class="input-group-prepend">
                  <router-link class="btn btn-tanara btn-lg rounded-right " :to="{ name: 'home' }"><i class="middle fa fa-search"></i></router-link>
                </div>  
            </div> 
            <div class="clearfix"></div>
            <p class="mb-0 wow fadeInDown">
              <router-link class="btn btn-lg btn-light d-block d-sm-inline-block px-5 mx-2 mb-3 mb-sm-0 animated slideInLeft" :to="{ name: 'dashboard' }"><i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</router-link>              
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
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="mumbul-box brand-bg text-center z-depth-1">
                  <div class="mumbul-wrapper">
                    <div class="intro-header">
                      <i class="fa fa-sign-in ikon"></i>
                      <h4 class="service-title">Banten Satu Login</a></strong></h4>
                    </div>
                    <div class="content white-text">
                      <p>Satu tempat untuk mengakses Aplikasi Layanan Pemerintah Provinsi Banten bagi ASN dan Masyarakat.<br>                      
                      <router-link class="btn btn-tanara rounded" :to="{ name: 'home' }"><i class="fa fa-external-link"></i> Kunjungi</router-link></p> 
                    </div>
                  </div>
                </div>      
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="mumbul-box brand-bg text-center z-depth-1">
                  <div class="mumbul-wrapper">
                    <div class="intro-header">
                      <i class="fa fa-database ikon"></i>
                      <h4 class="service-title">Banten Satu Data</a></strong></h4>
                    </div>
                    <div class="content white-text">
                      <p>Basis data tunggal Guna mewujudkan sistem informasi dan aplikasi Pemerintah Provinsi Banten yang terintegrasi.<br>                      
                      <router-link class="btn btn-tanara rounded" :to="{ name: 'home' }"><i class="fa fa-external-link"></i> Kunjungi</router-link></p>               
                    </div>
                  </div>
                </div>             
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms"> 
                <div class="mumbul-box brand-bg text-center z-depth-1">
                  <div class="mumbul-wrapper">
                    <div class="intro-header">
                      <i class="fa fa-comments ikon"></i>
                      <h4 class="service-title">Pelaporan Elektronik</a></strong></h4>
                    </div>
                    <div class="content white-text">
                      <p>Layanan penyampaian laporan dan Aspirasi untuk menampung aspirasi maupun laporan masyarakat.<br>                      
                      <router-link class="btn btn-tanara rounded" :to="{ name: 'home' }"><i class="fa fa-external-link"></i> Kunjungi</router-link></p> 
                    </div>
                  </div>
                </div> 
          </div>
          <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="800ms"> 
                <div class="mumbul-box brand-bg text-center z-depth-1">
                  <div class="mumbul-wrapper">
                    <div class="intro-header">
                      <i class="fa fa-medkit ikon"></i>
                      <h4 class="service-title">Layanan Kesehatan</a></strong></h4>
                    </div>
                    <div class="content white-text">
                      <p>Dapat memberikan informasi secara cepat, tepat dan terpadu bagi masyarakat yang membutuhkan informasi layanan kesehatan.<br>                      
                      <router-link class="btn btn-tanara rounded" :to="{ name: 'home' }"><i class="fa fa-external-link"></i> Kunjungi</router-link></p> 
                    </div>
                  </div>
                </div> 
          </div>
        </div>        
      </div>      
    </section>

    <section id="tentang" class="home-section home-section-2">
      <div class="container">
         <div class="section-title text-center wow fadeInDown">
              <h2>Portal  <strong class="text-warning">Banten</strong></h2>
              <div class="clearfix"></div>
              <p >Portal Pemerintah Provinsi Banten, merupakan pintu gerbang bagi masyarakat untuk mengetahui hasil pembangunan yang telah dilaksanakan yang informasinya secara detil dapat dilihat pada situs situs terkait juga dapat menemukan navigasi atau petunjuk tentang layanan yang diselenggarakan Pemerintah Provinsi Banten.</p>
            </div>
            <div class="row">
              <div class="col-md-6 wow fadeInLeft"> <img src="/images/portal.png" class="img-responsive"> </div>
              <div class="col-md-6 wow fadeInRight">
                  <p class="ratakirikanan">Semangat keterbukaan yang dituangkan dalam sistem Informasi dan aplikasi memudahkan proses pelaksanaan kegiatan pemerintahan dan pengawasan jalannya roda pemerintahan yang dilaksanakan melalui berbagai perangkat daerah</p>
                  <div class="space"></div>
                  <p class="ratakirikanan">Fitur Layanan:</p>
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

    <section id="anggaran" class="home-section home-section-3">
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
        <div class="row col-12">
          <div class="col-8">
            <h4 class="footer-title text-white">Peta situs</h4>
            <ul class="footer-nav">
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Layanan</a></li>
              <li class="footer-nav-item "><a href="#" class="footer-nav-link">Produk Hukum</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Anggaran dan Penyerapan</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Informasi Publik</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Perijinan Satu Pintu</a></li>
            </ul>
          </div>
          <div class="col-4">
              <h4 class="footer-title text-white">Pemerintah Provinsi Banten</h4>
              <p>Kawasan Pusat Pemerintahan Provinsi Banten<br>JL. Syech Nawawi Al-Bantani - Curug - Palima<br>Kota Serang - Provinsi Banten</p>
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
  background: url('/images/banner-portal-2.jpg') no-repeat bottom center;
  background-attachment: fixed !important; 
  background-size: cover;
}
.ikon {
  font-size: 30px;
  padding: 5px;
  color: #7891a3;
  padding-bottom:2px;
}

.img-icon {
  height:49px;
  width:auto;
  padding-bottom:10px;
}

.home-section-1a {
  position: relative;
  padding-top: 80px;
  padding-bottom: 30px;
  color: #333;
  background-color: #E8EEEF;
  }

.home-section-2a {
  position: relative;
  padding-top: 50px;
  padding-bottom: 30px;
  color: #fff;
  background-color: #5B7981;
  }

  .home-section-2 {  
  background-color: #3AA18C;
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
    background-color:#298470; /*278da5;*/
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .service-title{
   color: #298470;
  }

  .portal-color{
  color:#298470;
  }
  
  .btn-tanara {
    color: #fff;
    background-color: #298470;
    border-color: #298470;
  }
  .btn-tanara:hover {
    color: #fff;
    background-color: #FFC107;
    border-color: #FFC107;
  }

  .footer-nav-item{
    color: #fff;
  }

  #tanarasearch:focus + .input-group-addon {
    z-index: 10;
  }

  #search-btn:hover {
    cursor: pointer;
    /*color: gold;*/
    background-color: #ffc107;
  }
  .navbar {     
      padding-top: 0;
      padding-bottom: 0;
  }

  .navbar-nav>li.active>a{
  background:#4fbfa8 !important;
  color:#fff !important;
  text-decoration:none !important;
  border-color:#3aa18c !important;
  }

  .navbar-nav>li>a{
  margin:0;
  padding:1.4rem 1rem 1.6rem;
  color:#555;font-weight:600;
  text-transform:uppercase;
  letter-spacing:0.1em;
  font-size:0.9rem;
  text-decoration:none;
  border-top:.3rem solid transparent;
  }
  .navbar-nav>li>a:hover{
  background:rgba(79,191,168,0.5);
  border-color:rgba(79,191,168,0.8);
  }
  .navbar-nav>li>a:focus{
  background:#4fbfa8 !important;
  color:#fff !important;
  text-decoration:none !important;
  border-color:#3aa18c !important;
  }  

</style>

<script>
var VueScrollactive = require('vue-scrollactive');
Vue.use(VueScrollactive);

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
        //header.classList.remove('navbar-dark','bg-transparent');
        header.classList.add('fixed-top');
        //header.classList.add('border-bottom','border-info','navbar-light','fixed-top', 'slideInDown', 'bg-light');
      } else {
          header.classList.remove('fixed-top');
        //header.classList.remove('border-bottom','border-info','fixed-top', 'slideInDown', 'navbar-light');
        //header.classList.add('navbar-dark','bg-transparent');
        //header.classList.remove('bg-light');
      }
    });
  }
}
</script>
