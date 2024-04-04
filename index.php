<?php
require_once 'component/header.php';
require_once 'component/menu.php';
?>
<main>
  <!--home-->
  <div id="hero" class="hm">
    <div class="owl-carousel-wrapper">
      <div class="box-92819">
        <h1 class="text-white mb-3">Rejoignez le mouvement pour aider la petite enfance</h1>
        <p><a href="donate.php" class="btn btn-primary btn-lg btn-violet">Faire un don</a></p>
      </div>
      <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_2.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_3.jpg');"></div>
      </div>
    </div>
  </div>

  <!--mission-->
  <div id="mission" class="hm">
    <div class="container">
      <h1 class="title">Notre mission</h1>
      <div class="row">
        <div class="col-md-4 d-flex">
          <div class="cause shadow-sm">
            <div class="content">
              <img src="images/img_3_gray.jpg" alt="" style="object-fit: cover;width:100%">
              <div class="overlay-success"></div>
            </div>
            <div class="px-3 pt-3">
              <span class="badge-danger py-1 small px-2 rounded mb-3 d-inline-block bg-orange">Collecte</span>
              <ul>
                <li>Collecter des vêtements, chaussures, livres et jouets de seconde main auprès de particuliers.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex">
          <div class="cause shadow-sm">
            <div class="content">
              <img src="images/img_2.jpg" alt="" style="object-fit: cover;width:100%">
              <div class="overlay-danger"></div>
            </div>
            <div class="px-3 pt-3">
              <span class="badge-primary py-1 small px-2 rounded mb-3 d-inline-block">Assistance</span>
              <ul>
                <li>Organiser des journées “partage” au sein des établissements (orphelinats et pouponnières) dans le but de distribuer les éléments collectés.</li>
                <li>Fournir les nécessiteux via des maraudes</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-4 d-flex">
          <div class="cause shadow-sm">
            <div class="content">
              <img src="images/img_3.jpg" alt="" style="object-fit: cover;width:100%">
              <div class="overlay-warning"></div>
            </div>
            <div class="px-3 pt-3">
              <span class="badge-warning py-1 small px-2 rounded mb-3 d-inline-block bg-violet text-white">Epanouissement</span>
              <ul>
                <li>Mettre en relation les établissements et des professionnels du pays pour améliorer les conditions de vies des enfants</li>
                <li>Matérialiser des projets en faveur des établissements en collaboration avec des structures locales dans une démarche de gestion locale des projets</li>
                <li>Contribuer aux enjeux liés à la RSE</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--slogan-->
  <div id="slogan" class="mb-5 hm">
    <div class="row bg-primary p-5">
      <div class="col-md-12 text-center">
        <h2 class="title text-cursive text-white">Notre slogan</h2>
        <p class="h2 text-white">Réchauffons leurs cœurs, donnons du notre !</p>
      </div>
    </div>
  </div>


  <!-- <div class="site-section bg-image overlay-primary" style="background-image: url('images/img_1.jpg');">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-md-6">
          <img src="images/img_1.jpg" alt="Image" class="img-fluid shadow">
        </div>
        <div class="col-md-6">
          <div class="bg-white h-100 p-4 shadow">
            <h3 class="mb-4 text-cursive">Faire un don</h3>
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Amount in dollar">
              </div>
              <div class="form-group">
                <input type="submit" value="Donate Now" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div> -->

</main>
<?php
require_once 'component/footer.php'
?>
<script>
  let page = "home"
  const active = document.querySelector('#' + page)
  active.classList.add('active')
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  const btn_donate = document.querySelector("#btn_donate")
  btn_donate.addEventListener("click", () => {
    Swal.fire({
      icon: "info",
      title: "Voulez-vous faire un don ?",
      html: "HyssopJoy sera très heureux de recevoir vos dons! <br> pour l'aide aux enfants!",
      confirmButtonText: "Faire un don",
    })
  })

  const header = document.querySelector('header')
  hms = document.querySelectorAll(".hm")
  height = header.offsetHeight
  for (h of hms) {
    h.setAttribute("style", "padding-top:" + height + "px");
  }
</script>
</body>

</html>