
<script src="https://js.paystack.co/v1/inline.js"></script> 

<script language="javascript">
    function payWithPaystack() {

var handler = PaystackPop.setup({ 
    key: 'pk_live_8a6d8e919088302aca997de2356dffa8ff00b316', //put your public key here
    email: 'customer@email.com', //put your customer's email here
    amount: 370000, //amount the customer is supposed to pay
    metadata: {
        custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678" //customer's mobile number
            }
        ]
    },
    callback: function (response) {
        //after the transaction have been completed
        //make post call  to the server with to verify payment 
        //using transaction reference as post data
        $.post("verify.php", {reference:response.reference}, function(status){
            if(status == "success")
                //successful transaction
                alert('Transaction was successful');
            else
                //transaction failed
                alert(response);
        });
    },
    onClose: function () {
        //when the user close the payment modal
        alert('Transaction cancelled');
    }
});
handler.openIframe(); //open the paystack's payment modal
}
    </script>
<form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-address" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="tel" id="amount" required />
  </div>
  <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
  </div>
  <div class="form-submit">
    <button type="button" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>