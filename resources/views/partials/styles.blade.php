<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css">
<style>
/* header styles */
header  {
  background: #01426A;
  color: #fff;
  padding-right: 30px;
}
header #auraimg {
  display: inline-block;
}
header #auraimg img {
  width: 120px;
}
/* logo */
header #logo {
  color: #FFF;
  text-decoration: none;
  width: 49%;
  display: inline-block;
}
header #logo img {
  width: 130px;
  border-radius: 3px;
  margin-right: 8px;
  vertical-align: middle;
}

/* main navigation */
header #main-navigation {
  width: 40%;
  display: inline-block;
  text-align: right;
}
header #main-navigation ul {
  list-style: none;
  padding: 0;
}
header #main-navigation ul li {
  display: inline-block;
}
header #main-navigation ul li a {
  color: #FFF;
  text-decoration: none;
  padding: 10px 15px;
  border-radius: 3px;
  transition: 0.3s ease all;
}
header #main-navigation ul li a:hover {
  background: #2774AE
}

/* hero section */
.hero {
  min-height: 800px;
  text-align: center;
  /* background: #555 */
  background-image:
    url('../img/hero-a.png');
  background-size: cover;
}
.hero-content {
  color: #FFF;
  padding-top: 40px;
  line-height: 1;
}
.hero-content p {
  font-size: 50px;
  margin-bottom: 55px
}
.hero-content a {
  color: #FFF;
  border: 3px solid #FFF;
  border-radius: 3px;
  padding: 15px 30px;
  margin-right: 20px;
  text-decoration: none;
  font-size: 28px;
}
.hero-title {
  margin: 0;
  font-size: 100px;
}
/* site section stylines */
.site-section {
  padding-top: 50px;
  padding-bottom: 50px;
}
.site-section-secondary {
  background: #EFEFEF
}
.site-section-inside {
  width: 80%;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
}
.section-header {
  text-align: center;
  margin-bottom: 30px;
}
.section-header h2 {
  font-size: 30px;
  letter-spacing: 2px;
  text-transform: uppercase;
  font-weight: 300;
  color: #777;
}
.feature-box {
  display: inline-block;
  width: 33%;
  padding 20px 30px;
  line-height: 1;
  text-align: center;
}
.feature-box img {
  width: 80px;
  margin-bottom: 15px;
}
.feature-box h5 {
  margin-top: 0px;
  margin-bottom: 15px;
  font-size: 20px;
  color: #999;
  text-transform: uppercase;
  font-weight: 300;
  letter-spacing: 2px;

}
</style>

@stack('styles')
