
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil</title>
    <style>
      
* {
  margin: 0;
  padding: 0;
}

 
body {
  background-color: #eff1f2;
  font-family: sans-serif;
}
 
.content {
  grid-area: content;
}
 
.sidebar {
  grid-area: sidebar;
  background: linear-gradient(
    to right,
    rgb(107, 200, 158),
    rgb(105, 214, 250),
    rgb(205, 110, 253)
  );
  justify-content: center;
}
 
.footer {
  grid-area: footer;
  background: white;
}
 
.container {
  font-size: 1.5em;
  width: 100%;
  height: 100;
  height: 100vh;
  display: grid;
  grid-template-areas: 'sidebar' 'content' 'footer';
  grid-template-columns: 1fr;
  grid-template-rows: 130px 800px 250px;
}
 
.content,
.sidebar,
.footer {
  padding: 1em;
}
 
nav ul {
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: space-between;
  text-align: center;
}
 
nav li {
  list-style: none;
  padding: 1em 0;
}
 
nav li a {
  color: white;
  font-weight: 700;
  opacity: 0.6;
  text-decoration: none;
  transition: 0.3s;
}
 
nav li a:hover {
  opacity: 1;
}
 
.hero {
  max-width: 90 px;
  margin: 0 auto;
  text-align: center;
}
 
.hero img {
  width: 200px;
}
 
.hero h1 {
  font-size: 2em;
  font-weight: 300;
  color: #373046;
}
 
.hero p {
  font-weight: 300;
  line-height: 1.3em;
  color: #000000;
}
 
.action-btn {
  display: inline-block;
  text-decoration: none;
  color: white;
  font-weight: 700;
  background: #567bfb;
  padding: 0.5em 2em;
  border-radius: 60px;
  margin: 1em 0;
  transition: 0.3s;
}
 
footer ul {
  max-width: 640px;
  margin: 2em auto;
  padding: 0;
  text-align: center;
  display: flex;
  flex-direction: row;
}
 
footer ul li {
  list-style: none;
  align-self: flex-end;
}
 
footer ul li a {
  text-decoration: none;
  color: #c1c6ce;
}
 
footer ul li img {
  width: 30%;
}
 
footer p {
  font-size: 0.8em;
}
 
@media (min-width: 1040px) {
  .container {
    grid-template-areas: 'sidebar content' 'sidebar footer';
    grid-template-rows: 1fr auto;
    grid-template-columns: 300px 1f;
  }
 
  nav ul {
    display: flex;
    justify-content: space-between;
    flex-direction: column;
  }
 
  .sidebar {
    background: linear-gradient(
      rgba(200, 107, 142, 1),
      rgba(218, 105, 250, 1),
      rgba(110, 125, 253, 1)
    );
    padding-top: 10em;
  }
 
  .hero {
    text-align: left;
    margin: 7em 0;
  }
 
  .hero img {
    width: 500px;
    float: right;
  }
 
  .hero h1 {
    font-size: 3em;
  }
 
  .hero p {
    width: 60%;
  }
 
  footer ul {
    max-width: 900px;
    margin: 0 auto;
    padding: 1em 0;
  }
 
  footer ul li a img {
    width: 20%;
  }
  
}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <nav>
          <ul>
            <li><a href="">About</a></li>
            <li><a href="">Portofolio</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Contact</a></li>
          </ul>
        </nav>
      </div>
      <main class="content">
        <section class="hero">
          <img src="https://lh3.googleusercontent.com/7F3GJhmkiI5icZKMwLgYco_ikND8y4Yh1Lm8Sfl1tcU1axe4YCJfjXalrtnkGxaOw602i7nSMKezhtS-e0I77R2u_j0skykBfq_QwoC72fQED4zr7XIqBQ2l5WwYgGI1LsUvK6QVFA=w2400?source=screenshot.guru" alt="" />
          <div class="hero-content">
            <h1>M Fahmi Alfaris</h1>
            <br />
            <h2>Videographer</h2>
            <br /><br />
            <p>
                Sebagai seorang videografer yang berdedikasi dan berpengalaman, saya telah menciptakan konten-konten video
                berkualitas tinggi untuk berbagai jenis klien dan proyek. Dalam karir saya yang berkembang, saya telah
                memperoleh keahlian yang luas dalam hal produksi video, mulai dari pre-produksi hingga pengeditan
                dan penyuntingan video. Saya senang berkolaborasi dengan tim kreatif dan bersedia belajar hal
                baru untuk meningkatkan kualitas konten yang dihasilkan.
            </p>
            <a href="" class="action-btn">Profile Saya</a>
          </div>
        </section>
      </main>
      <div class="footer">
        <footer>
          <ul>
            <li>
              <img src="instagram.png" alt="" /><a><p>Instagram</p></a>
            </li>
            <li>
              <img src="facebook.png" alt="" /><a><p>Facebook</p></a>
            </li>
            <li>
              <img src="twitter.png" alt="" /><a><p>Twitter</p></a>
            </li>
            <li>
              <img src="telegram.png" alt="" /><a><p>Telegram</p></a>
            </li>
          </ul>
        </footer>
      </div>
    </div>
  </body>
</html>