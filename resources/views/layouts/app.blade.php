
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/"> -->

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>

  <body>

    <main role="main" class="container">

      <div class="starter-template">
        <br/><br/>
        @yield('content')
      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script>window.jQuery || document.write('<script src="{{ asset('bootstrap/assets/js/vendor/jquery-slim.min.js') }}"><\/script>')</script> -->
    <script src="{{ asset('bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
      $("select[name='kecamatan']").change(function(){
          var idkec = $(this).val();
          console.log(idkec);
          var token = $("input[name='_token']").val();
          $.ajax({
              url: "<?php echo route('getKelurahan') ?>",
              method: 'POST',
              data: {idkec:idkec, _token:token},
              success: function(data) {
                  $("select[name='kelurahan'").html('');
                  $("select[name='kelurahan'").html(data.data_kel);
              }
          });
      });
    </script>
  </body>
</html>
