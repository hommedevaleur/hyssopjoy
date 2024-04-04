document.addEventListener("DOMContentLoaded", () => {
    Swal.fire({
        icon: "error",
        title: "Oops...<br>Page en construction !",
        html: "Bientôt disponible...",
        confirmButtonText: "Fermer",
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = "index.php"
        }
    })

 

})


