document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('submit').addEventListener('click', function () {

    var flw_ref = "", chargeResponse = "", trxref = "FDKHGK"+ Math.random(), API_publicKey = "FLWPUBK_TEST-777b90242f595e161688bed7a95e9bfb-X";

    getpaidSetup(
      {
        PBFPubKey: API_publicKey,
        customer_email: "<?php echo $email;?>",
        amount: "<?php echo $amt;?>",
        customer_phone: "234099940409",
        currency: "NGN",
        payment_method: "both",
        txref: "0011235813",
        meta: [{metaname:"flightID", metavalue: "AP1234"}],
        onclose:function(response) {
        },
        customizations: {
        title: "My store",
        description: "Payment for items in cart",
        logo: "https://assets.piedpiper.com/logo.png",
      },
        callback:function(response) {
          txref = response.tx.txRef, chargeResponse = response.tx.chargeResponseCode;
          if (chargeResponse == "00" || chargeResponse == "0") {
            window.location = "paymentsuccess.php?txref="+txref; //Add your success page here
          } else {
            window.location = "paymentfailed.php?txref="+txref;  //Add your failure page here
          }
        }
      }
    );
    });
  });