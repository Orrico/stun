{{% BLOCKS }}
<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$ title }}{{siteInfo.title}}{{/ title }}</title>

    {{$ stylesheets }}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.css" integrity="sha256-BQwSEeLxuDggfePeFdo3V906rcvcJpkSAYr/Lqc2oSo=" crossorigin="anonymous">
        <link rel="stylesheet" href="{{siteInfo.theme_url}}/assets/css/main.css">
    {{/ stylesheets }}
</head>
<body>
    <header>
      {{$ header }}
          <!-- Following Menu -->
          <div class="ui large top fixed hidden menu">
              <div class="ui container">
                  <a class="active item">Fixed Menu</a>
                  <a class="item">Work</a>
                  <a class="item">Company</a>
                  <a class="item">Careers</a>
                  <div class="right menu">
                      <div class="item">
                          <a class="ui button">Log in</a>
                      </div>
                      <div class="item">
                          <a class="ui primary button">Sign Up</a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Sidebar Menu -->
          <div class="ui vertical inverted sidebar menu">
              <a class="active item">Sidebar Menu</a>
              <a class="item">Work</a>
              <a class="item">Company</a>
              <a class="item">Careers</a>
              <a class="item">Login</a>
              <a class="item">Signup</a>
          </div>
      {{/ header }}
    </header>
    <section id="content" class="ui segment">
      {{$ content }}
        <p>Hello, World!</p>
      {{/ content }}
    </div>

    <footer>
        {{$ footer }}

        {{/ footer }}
    </footer>

    {{$ scripts }}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.min.js" integrity="sha256-BlYXc67JeIFZfxjseL6XCBWFi7MwxKoUEF6rPIzHmBM=" crossorigin="anonymous"></script>
        <script src="{{siteInfo.theme_url}}/assets/js/plugins.js"></script>
        <script src="{{siteInfo.theme_url}}/assets/js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
              function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
              e=o.createElement(i);r=o.getElementsByTagName(i)[0];
              e.src='https://www.google-analytics.com/analytics.js';
              r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
              ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    {{/ scripts }}
    </body>
</html>
