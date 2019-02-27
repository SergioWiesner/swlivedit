$(document).ready(function() {
  var archivo,
    header,
    footer,
    html,
    css,
    js,
    php;
  // html = "<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'><style>body{background: rgba(0,0,0, .1);}.bod{width: 100%;height: 100%;display:flex;align-items:center;vertical-align: middle;}h1{font-size:300%;margin-left:50%;transform: translateX(-50%);font-family: 'Raleway', sans-serif;}
  // </style><div class='bod'><h1>Escribe tu codigo acá</h1></div>";
// Inicializador de complementos
  header = '<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>';
  footer = '<script defer src="https://code.jquery.com/jquery-3.3.1.min.js"></script>';
//bootstrap
  header += '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
  footer += '<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>';
  footer += '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>';
  footer += '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>';
//bootstrap
//Semantic-ui
    header += '<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css">';
    footer += '<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js"></script>';
//Semantic-ui
// Inicializador de complementos
// Detector de codigos
  html = ' ';
  if ($('#html')) {
    $('#html').keyup(function() {
      html = $(this).val();
    });
  }
  if ($('#css')) {
    $('#css').keyup(function() {
      css = $(this).val();
    });
  }
  if ($('#js')) {
    $('#js').keyup(function() {
      js = $(this).val();
    });
  }
  // Detector de codigos
  // Renderizador de codigo
  onload = (document).onkeyup = function() {
    (document.getElementById("preview").contentWindow.document).write(header + html + "<style>" + css + "<\/style>" + "<script>" + js + "<\/script>" + footer
    );
    (document.getElementById("preview").contentWindow.document).close()
  };
  // Renderizador de codigo
  //
$('#guardar').click(function(){
    alert("Si guarda");
    // $.ajax({
    //   url: "/Notas/invoice/",
    //   dataType: "json",
    //   data: "",
    //   method: "post",
    //   success: function(result) {
    //
    //   },
    //   error: function(result) {
    //
    //   },
    //   beforeSend: function() {}
    // });
  });

  $('#borrar').click(function(){

    });
});
