<template>
 <div>
    <div class="page-header header-pagebgimage" style="margin-bottom: 0px; height:100px;">
      <nav class="page-header-navbar navbar navbar-expand-lg navbar-light bg-light border-bottom border-info">


        <div class="container">
          <router-link class="navbar-brand d-flex flex-row align-items-center text-uppercase" :to="{ name: 'home' }" exact>
            <img class="mr-2" src="/images/portal-logo.png" width="auto" height="40">            
          </router-link> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar">
          <scrollactive class="nav navbar-nav ml-auto"  active-class="active" :offset="80" :duration="800" bezier-easing-value=".5,0,.35,1">        
          <ul class="nav navbar-nav ml-auto collapse">
               <li class="nav-item"><router-link  class="nav-link scrollactive-item" :to="{ name: 'home' }">Beranda</router-link></li>               
               <li v-if="authenticated" class="nav-item">
                <router-link class="nav-link" :to="{ name: 'dashboard' }">
                  <i class="fa fa-th-large" aria-hidden="true"></i> Dashboard</router-link>
              </li>                           
              <li v-if="authenticated" class="nav-item">
                <a @click.prevent="logout" class="nav-link" :to="{ name: 'dashboard' }">
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

      <div id="beranda" class="container text-center">
        <div class="page-header-content d-flex flex-column justify-content-center py-5">
          <div>
             <h1 class="page-header-title">Informasi dan Layanan</h1>          
            <div class="clearfix"></div>            
          </div>
        </div>
      </div><!-- /.container -->      
    </div><!-- /.banner -->

     <section class="page-title ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Kategori</h2>
                        <ul class="breadcrumb">
                            <li><a href="/#" class="text-bold text-white"><i class="fa fa-home" aria-hidden="true"></i>Beranda </a></li>
                            <li>/</li>                            
                            <li class="active"> Kategori</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

   <section class="section-padding default-blog grid-blog tanara-bgconten">
            <div class="container">

              <div class="row">

                <div class="col-md-3">
                     <div class="tt-sidebar-wrapper" role="complementary">
                          <div class="widget widget_search">
                            <form role="search" method="get" class="search-form">
                              <input type="text" class="form-control" value="" name="s" id="s" placeholder="Cari Layanan...">
                              <button type="submit" class="tanara-bgcolor"><i class="fa fa-search"></i></button>
                            </form>
                          </div>

                      <sector-egovernment-list> </sector-egovernment-list>
                      <group-egovernment-list> </group-egovernment-list>
       
                    </div>
                </div>
                
                <div class="col-md-9">
                  <div class="row">                    
                    <div class="col-md-6">
                        <article class="post-wrapper">
                          <div class="thumb-wrapper">
                            <img src="/images/artikel/articles.jpg" class="img-responsive" alt="" >
                            <div class="entry-header">
                              <h2 class="entry-title"><router-link :to="{ name: 'detailcontent' }">Layanan Kesehatan</router-link></h2>
                            </div> 
                          </div>
                          <div class="entry-content">
                            <p>Layanan Kesehatan Adalah layanan untuk kesehatan.</p>
                          </div>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <article class="post-wrapper">
                          <div class="thumb-wrapper">
                            <img src="/images/artikel/articles.jpg"class="img-responsive" alt="" >
                            <div class="entry-header"><h2 class="entry-title"><a href="#">Judul Layanan Kedua</a></h2>
                            </div>
                          </div>
                          <div class="entry-content">
                            <p>Deskripsi Layanan apa saya sie..</p>
                          </div>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <article class="post-wrapper">
                          <div class="thumb-wrapper">
                            <img src="/images/artikel/articles.jpg" class="img-responsive" alt="" >
                            <div class="entry-header">
                             <h2 class="entry-title"><a href="#">Anggaran Belanja Daerah</a></h2>
                            </div> 
                          </div>
                          <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <article class="post-wrapper">
                          <div class="thumb-wrapper">
                            <img src="/images/artikel/articles.jpg" class="img-responsive" alt="" >
                            <div class="entry-header"> 
                              <h2 class="entry-title"><a href="#">Layanan Perizinan Online</a></h2>
                            </div> 
                          </div>
                          <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                          </div>
                        </article>
                    </div>
                  </div>
                </div>

              </div>
              <ul class="pagination post-pagination text-center mt-50">
                <li><a href="#" class="btn portal-bgcolor"><i class="fa fa-angle-left"></i></a></li>
                <li><span class="btn portal-bgcolor">1</span></li>
                <li><a href="#" class="btn portal-bgcolor">2</a></li>
                <li><a href="#" class="btn portal-bgcolor"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
        </section>  
    
    <footer class="footer foothome">
      <div class="container mt-5">
        <div class="row col-md-12">
          <div class="col-md-8">
            <h4 class="footer-title text-white">Peta situs</h4>
            <ul class="footer-nav">
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Layanan</a></li>
              <li class="footer-nav-item "><a href="#" class="footer-nav-link">Produk Hukum</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Anggaran dan Penyerapan</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Informasi Publik</a></li>
              <li class="footer-nav-item"><a href="#" class="footer-nav-link">Perijinan Satu Pintu</a></li>
            </ul>
          </div>
          <div class="col-md-4">
              <h4 class="footer-title text-white">Pemerintah Provinsi Banten</h4>
              <p>Kawasan Pusat Pemerintahan Provinsi Banten<br>JL. Syech Nawawi Al-Bantani - Curug - Palima<br>Kota Serang - Provinsi Banten</p>
          </div>
        </div>        
      </div>
    </footer>
    <footer class="footer darkgblue">
      <div class="container">
         <div class="footer-description text-center">
          <p><i class="fa fa-code" aria-hidden="true"></i> Copyright: 2018 Design and Developed by <a href="https://github.com/bantenprov">@bantenprov</a></p>
        </div>
      </div>
    </footer>

  </div>
</template>
<style scoped>

.header-pagebgimage {
  background: url('/images/bg-page.jpg') no-repeat top center;
  //background-attachment: fixed !important; 
  //background-size: cover; 
}

.header-color{
  background-color:#000;
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

  .tanara-bgconten{
  background-color: #E8EEEF !important;
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

  .portal-color:hover{
  color:#fff
  }

  .portal-bgcolor{
  background-color:#298470 !important;
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
  .tanara-bayang {
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
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

  .widget-title>ul {
    list-style-type: none !important;
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
    var header = document.querySelector('.page-header-navbar');

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
