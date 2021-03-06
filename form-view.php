<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Order food & drinks</title>
</head>
<body>
<div class="container">
    <h1>Order food in restaurant "the Personal Ham Processors"</h1>
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="?food=1">Order food</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?food=0">Order drinks</a>
            </li>
        </ul>
    </nav>

    <!-- error message -->
    <div class="alert alert-primary <?php if( empty($emailErr)){echo "display";}?> " role="alert">
    <?php echo $emailErr; ?>
    </div>

    <div class="alert alert-primary <?php if( empty($streetErr)){echo "display";}?> " role="alert">
    <?php echo $streetErr; ?>
    </div>

    <div class="alert alert-primary <?php if( empty($streetnumberErr)){echo "display";}?> " role="alert">
    <?php echo $streetnumberErr; ?>
    </div>

    <div class="alert alert-primary <?php if( empty($cityErr)){echo "display";}?> " role="alert">
    <?php echo $cityErr; ?>
    </div>

    <div class="alert alert-primary <?php if( empty($zipcodeErr)){echo "display";}?> " role="alert">
    <?php echo $zipcodeErr; ?>
    </div>

    <div class="alert alert-primary <?php if( empty($mailSent)){echo "display";}?> " role="alert">
    <?php echo $mailSent; ?>
    </div>

    <div class="alert alert-primary <?php if( empty($expressDelivery)){echo "display";}?> " role="alert">
    <?php echo $expressDelivery; ?>
    </div>

    <!-- form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail:</label><span class="error">*</span>
                <input type="text" id="email" name="email" class="form-control" value="<?php echo $email;?>">
            </div>
        </div>

        <fieldset>
            <legend>Address</legend>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street">Street:</label><span class="error">*</span>
                    <input type="text" name="street" id="street" class="form-control" value="<?php echo $street;?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="streetnumber">Street number:</label><span class="error">*</span>
                    <input type="text" id="streetnumber" name="streetnumber" class="form-control" value="<?php echo $streetnumber;?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City:</label><span class="error">*</span>
                    <input type="text" id="city" name="city" class="form-control" value="<?php echo $city;?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="zipcode">Zipcode</label><span class="error">*</span>
                    <input type="text" id="zipcode" name="zipcode" class="form-control" value="<?php echo $zipcode;?>">
                </div>
            </div>
        </fieldset>

        <fieldset>
            <legend>Products</legend>
            <?php foreach ($products AS $i => $product): ?>
                <label>
                    <input type="checkbox" value="1" name="products[<?php echo $i ?>]"/> <?php echo $product['name'] ?> -
                    &euro; <?php echo number_format($product['price'], 2) ?></label><br />
            <?php endforeach; ?>
        </fieldset>
        
        <label>
            <input type="checkbox" name="express_delivery" value="5" /> 
            Express delivery (+ 5 EUR) 
        </label>
            
        <button type="submit" class="btn btn-primary" onclick="bootstrapAlert()">Order!</button>
    </form>
    

    <footer>You already ordered <strong>&euro; <?php echo $totalValue ?></strong> in food and drinks.</footer>
</div>

<style>
    footer {
        text-align: center;
    }
    .error {color: #FF0000;}

    .display{
        display:none;
    }
</style>
</body>
</html>
