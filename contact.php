<!-- Bootstrap Testing Page --->

<html lang="en">
  <head>
    <title>Mad Rockers Team 2973</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3797761e42.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='/css/boot.css' type="text/css">
  </head>
  <body class='text-center js-focus-visible h-100 text-white' style='background: linear-gradient(to top left, #171d22, #1F47A9, #1F47A9, #CC483F); background-size: cover; background-position: center; min-height: 100%;'>
    <header class='bg-translucent'>
      <div class='container'>
        <nav class='navbar p-3'>
          <div class='navbar-header'>
            <img style='line-height: 50px' src='/images/MRText.svg' height='25px'/>
          </div>
          <ul class='nav justify-content-end'>
            <li class='nav-item'>
              <a class='nav-link' href='/index.php'>Home</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='/about.php'>About</a>
            </li>
            <!--<li class='nav-item'>
              <a class='nav-link' href='/bootblog.php'>Blog</a>
            </li>--->
            <li class='nav-item'>
              <a class='nav-link' href='/competitions.php'>Competitions</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link active' href='/contact.php'>Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main role='main' class='h-100'>
      <div class='container p-3 mb-2'>
        <section class='text-center'>
          <div class='jumbotron h-50 shadow' style='background-image: url("/images/MR Team Photo.jpg"); background-size: cover; background-position: top;'></div>
          <div class='row'>
            <div class='col-md-6'>
              <i class="fas fa-paper-plane mx-auto fa-3x mb-3"></i>
              <h3>Email us</h3>
              <p>Interested in sponsoring or joining our team? Want to know more? Email us at <b><a href="mailto:jbailey@madisoncity.k12.al.us" target="_top" style='text-decoration: underline; cursor: pointer; color: #FFF !important;'>jbailey@madisoncity.k12.al.us</a></b></p>
            </div>
            <div class='col-md-6'>
              <i class="fab fa-instagram mx-auto fa-3x mb-3"></i>
              <h3>Follow us</h3>
              <p>The best way to keep up with everything the Mad Rockers do is by following us on Instagram! We post multiple times a week, and you can learn more about the progress we are making as we head toward competition.</p>
              <button class='btn btn-primary shadow' onclick='location.replace("https://www.instagram.com/madrockers2973/");'>Instagram</button>
            </div>
          </div>
        </section>
      </div>
      <footer role='footer' class='mb-0 py-3 bg-translucent text-white'>
        <div class='container'>
          <a>© 2022 Mad Rockers</a> | 
          <a href='/privacy.php'>Privacy Policy</a>
          <!-- | <a href='/terms.php'>Terms of Service</a>-->
          <!--<a>Site coded by
              <?php/*
               //Fair 'created by' :) now we all feel good about ourselves
               $terms = array("Evan","Riley","Tom");
               shuffle($terms);
               echo $terms[0].", ".$terms[2]." and ".$terms[1];*/
              ?>
          </a>--->
        </div>
      </footer>
    </main>
  </body>
</html>
