<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link href="css/registar1.css" rel="stylesheet"/>

</head>
<body>
    <header>
        <nav>
            <a href="index_test.html" class="logo">
                <img src="img/logo.svg">
            </a>

            <a class="signin" href="https://www.netflix.com/login">
                Sign In
            </a>
        </nav>
    </header>

    <div class="content-2">
        <p class="step">STEP <b>1</b> OF <b>3</b></p>
        <p class="instruction">Create a password to start your membership.</p>
        <p class="introce">Just a few more steps and you're done!<br>We hate paperwork, too.</p>
        <form>
            <input type="text" class="form-control home_email_input" placeholder="Email">
            <input type="text" class="form-control home_email_input" placeholder="Add a password">
            <button type="submit" class="continue1" name="continue">
                <a href="planform.html" class="transfer_link">CONTINUE</a></button>

        </form>
    </div>


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