<?php
require_once 'component/header.php';
require_once 'component/menu.php';
?>

<main>

    <div class="container hm">
        <h1 class="title">Faire un don</h1>
        <p>Soutenez le projet en faisant paiement PAYPAL</p>
        <div id="paypal-button-container"></div>
    </div>
</main>
<?php
require_once 'component/footer.php'
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AS3kEAKv6fkMZsEm-qw7Nazde7jjbXIe41HZM2EF55afT5Yf6-Lfe_1VqxMLD5y3WQ4bxfqpuD79_Yq6"></script>
<script>
    const header = document.querySelector('header')
    hms = document.querySelectorAll(".hm")
    height = header.offsetHeight
    for (h of hms) {
        h.setAttribute("style", "padding-top:" + height + "px");
    }

    window.onload = function() {
        paypal.Buttons({
            // Set up your environment
            env: 'sandbox', // 'sandbox' for testing or 'production' for production

            // Set up your PayPal App client ID
            client: {
                sandbox: 'AS3kEAKv6fkMZsEm-qw7Nazde7jjbXIe41HZM2EF55afT5Yf6-Lfe_1VqxMLD5y3WQ4bxfqpuD79_Yq6',
                //production: 'YOUR_PRODUCTION_CLIENT_ID'
            },

            // Set up the payment method
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '10.00',
                            currency_code: 'USD'
                        }
                    }]
                });
            },

            // Execute the payment
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Payment is successful, you can redirect or display a success message here
                    alert('Payment successful!');
                });
            },

            // Handle errors
            onError: function(err) {
                // Handle any errors that occur during the transaction
                console.error(err);
            }
        }).render('#paypal-button-container');
    };
</script>
</body>

</html>
