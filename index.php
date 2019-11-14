<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<title>Trivia Virtualizacion</title>
	<link href="assets/img/brand/favicon.png" rel="icon" type="image/png">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  
  	<link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  	<link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    	<link type="text/css" href="assets/css/argon.css?v=1.1.0" rel="stylesheet">
</head>
<body>
  <main style="">
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-white pb-5">
                <center><h1>Trivia de Virtualizacion</h1></center>
              </div>
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-4">
                  <small>Escribe tu nombre y Presiona Iniciar para Jugar</small>
                </div>
                <form action="Controlador/controlador.php" method="POST" name="Nombre">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" placeholder="Nombre" type="text" required name="nom">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Iniciar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Core -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/popper/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.1.0"></script>
</body>
</html>