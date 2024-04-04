<?php
require_once 'component/header.php'
?>


<!-- <div class="site-wrap" id="home-section"> -->

<?php require_once 'component/menu.php' ?>

<main>

  <div class="hero">
    <div class="owl-carousel-wrapper">
      <div class="box-92819">
        <h1 class="text-white mb-3">A propos de nous</h1>
      </div>
      <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_2.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_3.jpg');"></div>
      </div>
    </div>
  </div>

  <div id="history" class="hm">
    <div class="container">
      <h3 class="title text-center">Notre histoire</h3>
      <div class="row">
        <div class="col-md-6">
          <img src="images/img_2.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6">
          <p>Dans un monde où l’appât du gain est au coeur des sociétés, on en oublie presque l’essentiel...à savoir : l’humain. L’année 2019 et les conséquences du COVID-19 ont davantage confirmé cette réalité. C’est dans ce contexte et dans le souci de revenir à cette priorité avec une volonté profonde de répondre à un réel besoin qu’est né HYSSOP JOY.
            Les activités débutent officiellement en 2024 et l’association est ouverte à tout bénévoles.
            A l’initiative de ce projet : 3 soeurs dont :</p>
          <ul>
            <li>Urielle la fondatrice et représentante de l’association</li>
            <li>Ines et Elvire, co-fondatrice</li>
          </ul>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container hm py-5" id="vision">
    <h2 class="title text-center">Notre vision</h2>
    <div class="row">
      <div class="col-md-6">
        <img src="images/img_1.jpg" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <p> Nous souhaitons est un véritable support et soutien des établissements qui oeuvrent pour l’amélioration des conditions de vies et d’insertion dans la société des enfants orphelins. Nos interventions se concentrent en Côte d’Ivoire avec un espoir d’étendre notre projet au limites du continent africain.</p>
      </div>
    </div>
  </div>

  <div id="valor">
    <div class="row align-items-center bg-primary p-5">
      <div class="col-12">
        <div class="heading-20219">
          <h2 class="title text-white mb-4 text-cursive text-center">Nos valeurs</h2>
        </div>

        <div class="row">
          <div class="col-md-3 mb-5">
            <div class="feature-29012 text-center">
              <div class="number mr-4"><span>1</span></div>
              <div>
                <h3>Humilité</h3>
                <p>Hyssop Joy ou en français “Joie des hysopes” tire son appellation de cette valeur. L’hysope est une fleur qui symbolise l’humilité et la pureté : face au vent, elle demeure ferme et solide, un état d’esprit que nous transmettons à travers nos actions.</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-5">
            <div class="feature-29012 text-center">
              <div class="number mr-4"><span>2</span></div>
              <div>
                <h3>Respect</h3>
                <p>Hyssop Joy, c’est, l’ambition d’œuvrer tout en apportant de la considération aux enfants quelques soient leurs antécédents.</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-5">
            <div class="feature-29012 text-center">
              <div class="number mr-4"><span>3</span></div>
              <div>
                <h3>Solidarité</h3>
                <p>Hyssop Joy c’est grandir ensemble, favoriser le partage et l’échange pour mettre au service des moins nanti nos savoir-faire.</p>
              </div>
            </div>
          </div>

          <div class="col-md-3 mb-5">
            <div class="feature-29012 text-center">
              <div class="number mr-4"><span>4</span></div>
              <div>
                <h3>Probité</h3>
                <p>Hyssop Joy, c’est une raison d’être : celle de s’engager auprès des orphelinats et pouponnières pour soutenir leurs conditions de vie avec intégrité et désintéressement sans jamais poursuivre in intérêt personnel dans le cadre du service.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</main>
<?php
require_once 'component/footer.php'
?>
<script>
  let page = "about"
  const active = document.querySelector('#' + page)
  active.classList.add('active')

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