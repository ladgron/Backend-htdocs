<?php

class View
{

    public function viewHeader($title)
    {
        $html = <<<HTML
            <!doctype html>
            <html lang="sv">
            <head>
            <meta charset="utf-8">
            <title>$title</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="styles/bootstrap.css">
            <link rel="stylesheet" href="styles/styles.css">
            </head>
            <body class="container">
            <h1 class="text-center">
            <a href="index.php">$title</a>
            </h1>
            <div class='row'>

        HTML;

        echo $html;
    }

    public function viewFooter()
    {
        $date = date('Y');

        $html = <<<HTML
            </div> <!-- row -->
            <footer class="text-center text-muted">
            <hr>
            <p>Copyright &copy; $date</p>
            </footer>
            </body>
            </html>
        HTML;

        echo $html;
    }

    public function viewOneProduct($product)
    {
        $html = <<<HTML
            <div class="col-md-6">
                <a href="?id=$product[product_id]">
                    <div class="card m-1">
                        <img class="card-img-top" src="$product[product_image]"
                             alt="$product[product_name]">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h4>$product[product_name]</h4>
                                <h5>Price: $product[product_price] kr</h5>
                                <p><b>Product description:</b> $product[product_description]</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>  <!-- col -->
            <form>
            <input type="submit" class="form-control my-2 btn btn-lg btn-outline-success" 
                            value="Place order">
                </form>
        HTML;

        echo $html;
    }


    public function viewAllProducts($product)
    {
        foreach ($product as $key => $product) {
            $this->viewOneProduct($product);
        }
    }





    public function viewOrderForm($product)
    {

        $html = <<<HTML
            <div class="col-md-6">
                <h3 class='text-center text-primary'>Order form</h3>
            
                <form action="#" method="post">
                    <input type="hidden" name="product_id" 
                            value="$product[product_id]">
                    <input type="number" name="customer_id" required 
                            class="form-control form-control-lg my-2" 
                            placeholder="Type your customer number">
                
                    <input type="submit" class="form-control my-2 btn btn-lg btn-outline-success" 
                            value="Place order">
                </form>
                
            <!-- col avslutas efter en alert -->

        HTML;

        echo $html;
    }

    public function viewConfirmMessage($customer, $lastInsertId)
    {
        $this->printMessage(
            "<h4>Thanks $customer[customer_name] !</h4>
            <p>You will receive your order at your given address:</p>
            <p>$customer[customer_address]</p>
            <p>Your order number is $lastInsertId </p>
            ",
            "success"
        );
    }

    public function viewErrorMessage($customer_id)
    {
        $this->printMessage(
            "<h4>Customer number $customer_id does not exist in our customer records!</h4>
                <h5>Contact customer service</h5>
                ",
            "warning"
        );
    }

    /**
     * En funktion som skriver ut ett felmeddelande
     * $messageType enligt Bootstrap Alerts
     * https://getbootstrap.com/docs/5.0/components/alerts/
     */
    public function printMessage($message, $messageType = "danger")
    {
        $html = <<< HTML
            <div class="my-2 alert alert-$messageType">
                $message
            </div>
            </div> <!-- col  the end of the order form -->

        HTML;

        echo $html;
    }
}
?>
Thank you for shopping with us! <br>
<a href="index.php">Click here to continue shopping!</a>