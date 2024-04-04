<?php
require_once 'component/header.php'
?>


<!-- <div class="site-wrap" id="home-section"> -->

<?php require_once 'component/menu.php' ?>

<main>


<div class="owl-carousel-wrapper">

<div class="box-92819">
  <h1 class="text-white mb-3">Notre vision</h1>
</div>

<div class="owl-carousel owl-1 ">
  <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg');"></div>
  <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_2.jpg');"></div>
  <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_3.jpg');"></div>
</div>
</div>


<div class="site-section">
    <div class="container">
    
      <div class="row">

        <div class="col-md-6">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
      
              
            </div>



        <div class="col-md-6">
        <p> Nous souhaitons est un véritable support et soutien des établissements qui oeuvrent pour l’amélioration des conditions de vies et d’insertion dans la société des enfants orphelins. Nos interventions se concentrent en Côte d’Ivoire avec un espoir d’étendre notre projet au limites du continent africain.</p>

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
  let page ="ambition"
  const active  = document.querySelector('#'+page)
  active.classList.add('active')

</script>


</body>

</html>