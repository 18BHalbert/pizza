<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <pre>
    <?php
    /*
     * ----var_dump($_POST);----
     array(7) {
      ["firstName"]=>
      string(5) "dadsa"
      ["lastName"]=>
      string(5) "fghjk"
      ["address"]=>
      string(7) "ertyuio"
      ["method"]=>
      string(6) "pickup"
      ["toppings"]=>
      array(1) {
        [0]=>
        string(9) "pepperoni"
      }
      ["size"]=>
      string(5) "large"
      ["terms"]=>
      string(2) "on"
    }
     */

    //get the form data
    $fname = $_POST['firstName'];
    $lname = $_POST["lastName"];
    $address = $_POST["address"];
    $size = $_POST["size"];
    $toppings = $_POST["toppings"];
    $toppingString = implode(", ", $toppings);

    //display the form data
    echo "<h1>Thank you for your order!, $fname</h1>";
    echo "<h2>Order Summary</h2>";
    echo "<p>Name: $fname $lname</p>";
    echo "<p>Address: $address</p>";
    echo "<p>Pizza: $size $toppingString</p>";

    //Send email
    $fromAddress = "poppa@gmail.com";
    $toAddress = "bhalbert2@mail.greenriver.edu";
    $subject ="Order Confirmation";
    $header = "From: Poppa's Pizza <$fromAddress>";
    $message = "Your order has been confirmed\r\n";
    $message .= "Name: $fname $lname\r\n";
    $message .= "Address: $address\r\n";
    //mail($toAddress, $subject, $message, $header);


    ?>
    </pre>

</body>
</html>
