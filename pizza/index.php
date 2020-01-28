<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyles.css">
    <title>Poppa's Pizza</title>

</head>
<body>
<div id="main" class="container">

    <div class="jumbotron">
        <h1 class="display-4">Welcome to Poppa's Pizza</h1>
        <p class="lead">Making awesome pizza since 1950</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>

    <?php
        include ("pizza-form.html");
    ?>

    <form id="pizzaform" action="confirm.php" method="post">
        <!-- Contact Information -->
        <fieldset class="form-group">
            <legend>Contact Info</legend>
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
                <span class="err" id="errFname">Please enter a first name</span>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName">
                <span class="err" id="errLname">Please enter a last name</span>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                <span class="err" id="errAddress">Please enter an address</span>
            </div>
        </fieldset>

        <!-- Pick-up or Delivery -->
        <fieldset class="form-group">
            <legend>Pick-up or Delivery</legend>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="method"
                       id="pickup" value="pickup" checked>
                <label class="form-check-label" for="pickup">
                    Pick-up
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="method"
                       id="delivery" value="delivery">
                <label class="form-check-label" for="delivery">
                    Delivery
                </label>
            </div>
        </fieldset>

        <!-- Toppings -->
        <fieldset class="form-group">
            <legend>Select Toppings</legend>

            <div class="form-check">
                <input class="form-check-input" type="checkbox"
                       name="toppings[]" id="pepperoni" value="pepperoni" >
                <label class="form-check-label" for="pepperoni">
                    Pepperoni
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox"
                       name="toppings[]" id="olives" value="olives" >
                <label class="form-check-label" for="olives">
                    Olives
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox"
                       name="toppings[]" id="anchovies" value="anchovies" >
                <label class="form-check-label" for="anchovies">
                    Anchovies
                </label>
            </div>
            <span class="err" id="errToppings">Please select at least one topping</span>
        </fieldset>

        <!-- Pizza size -->
        <fieldset class="form-group">
            <legend>Pizza Size</legend>

            <select class="form-control" id="size" name="size">
                <option value="none">Select a Size</option>
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
            </select>
            <span class="err" id="errSize">Please select a size</span>

        </fieldset>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="terms" name="terms">
            <label class="form-check-label" for="terms">I agree to the terms</label>

        </div>
        <button type="submit" class="btn btn-primary">Place Your Order</button>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="pizza.js"></script>

</body>
</html>