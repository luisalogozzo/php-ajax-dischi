<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title></title>
  </head>
  <body>
    <header>
      <div class="header-cont">
        <img class="logo" src="img/logo-small.png" alt="">
        <input type="text" name="" value="" placeholder="digita un artista...">
      </div>
    </header>

    <main>
      <div class="container">
      </div>
    </main>


    <script id="entry-template" type="text/x-handlebars-template">


          <div class="disc">
            <img class='poster'src="{{poster}}" alt="">
            <h2 class="title">{{title}}</h2>
            <h3 class="author">{{author}} </h3>
            <h4 class="genre">{{genre}} </h4>
            <h4 class="year">{{year}} </h4>

          </div>




    </script>
    <script src="dist/app.js" charset="utf-8"></script>
  </body>

</html>
