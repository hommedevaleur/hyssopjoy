<?php
require_once 'component/header.php';
require_once 'component/menu.php';
?>


<main>

    <div class="container hm">
        <h1 class="title">Nos projets</h1>
    </div>
</main>
<?php
require_once 'component/footer.php'
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    const header = document.querySelector('header')
    hms = document.querySelectorAll(".hm")
    height = header.offsetHeight
    for (h of hms) {
        h.setAttribute("style", "padding-top:" + height + "px");
    }
</script>
</body>

</html>