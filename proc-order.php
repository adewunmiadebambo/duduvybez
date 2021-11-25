<?php

include('admin/pages/connect.php');


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$product_name = $_POST['product_name'];
$filename = $_POST['filename'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$size = $_POST['size'];

$total_sum = $price * $quantity;

$from = "From: sales@duduvybez.com";
$to = "duduvybez@gmail.com";
$subject = 'Order From Website';
$content = 'Name: '.$name."\n"
.'Email: '.$email."\n"
.'Phone: '.$phone."\n"
.'Address: '.$address."\n"
.'Product Name: '.$product_name."\n"
.'Quantity: '.$quantity."\n"
.'Price: '.$price."\n"
.'Size: '.$size."\n";

mail($to,$subject,$content,$from);

$customer_mail = 'Dear '.$name.','."\n\n"
.'Thank you for shopping with us.'."\n\n"
.'You will be contacted shortly. However, if you want to make payments via transfer, kindly use the details below.'."\n\n"
.'GTB - 743648286483 - DuduVybez Collectsion'."\n\n"
.'Thank you.'."\n\n";

$subject2 = 'Thank you for your Order';
mail($email,$subject2,$customer_mail,$from);



?>
<html>
    <head>

    <script src="https://js.paystack.co/v1/inline.js"></script> 

<script language="javascript">
    function payWithPaystack() {

var handler = PaystackPop.setup({ 
    key: 'pk_live_8a6d8e919088302aca997de2356dffa8ff00b316', //put your public key here
    email: '<?php echo $email; ?>', //put your customer's email here
    amount: <?php echo $total_sum; ?>00, //amount the customer is supposed to pay
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
            if(response['status'] == "success")
            {
                //successful transaction
                window.location = "thankyou.php?name=<?php echo $name; ?>";
            }
                
    },
    onClose: function () {
        //when the user close the payment modal
        alert('Transaction cancelled');
        
                //transaction failed
                window.location = "index.php";
        
    }
});
handler.openIframe(); //open the paystack's payment modal
}
    </script>
    </head>
<body onLoad="payWithPaystack()">
</body>
</html>
