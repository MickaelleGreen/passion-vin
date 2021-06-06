<?php include 'incheader.php' ?>

<div class="container">
                <div class="row first-row">
                    <div class="cat-header">
                        <h4><strong>Le Guide complet pour apprendre le vin</strong></h4>
                      <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur 
                        adipisicing elit. Soluta quisquam, voluptatem accusantium vel eius sapiente, fuga quo doloremque, 
                        assumenda voluptas natus ea voluptatibus voluptatum quaerat placeat quis adipisci error in?<br></p> 
                    
                    </div>
                </div>

<div class="row first-row">
 <a href="./images/couverture_livre.png" download><img src="./images/couverture_livre.png" alt="couverture livre"></a>

</div>
<br><br>
<!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>

<!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding.-->

 <div class="row first-row">
<button
  class="art-btn"
  id=""
  role="link"
  type="button">
<strong> Acheter le livre <br> 3€ TTC</strong>
</button>
</div>
<div id="error-message"></div>

<script>
(function() {
  var stripe = Stripe('stripe-key');

  var checkoutButton = document.getElementById('btn-key');
  checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
      lineItems: [{price: 'key', quantity: 1}],
      mode: 'payment',
      // Do not rely on the redirect to the successUrl for fulfilling
      // purchases, customers may not always reach the success_url after
      // a successful payment.
      // Instead use one of the strategies described in
      // https://stripe.com/docs/payments/checkout/fulfillment
      successUrl: window.location.protocol + 'book-page',
      cancelUrl: window.location.protocol + '//passion-vin.net/ebook.php',
    })
    .then(function (result) {
      if (result.error) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
})();
</script>
<div class="row first-row">

       <!-- <button class="art-btn"><strong><a href="page_tele_book.php">page telechargement</a></strong></button>-->

      </div>
</div>

<?php include 'incfooter.php'?>
