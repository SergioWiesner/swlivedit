<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8" />
  <title>SW editor</title>
  <meta name="keywords" content="editor, realtime editor, jsfiddle, codepen, stackoverflow, HTML, CSS, JavaScript" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href="{{URL('livedit/css/main.css')}}" rel="stylesheet">
  <link href="{{URL('livedit/css/bootstrap.min.css')}}" rel="stylesheet">
  {{-- <link href="{{URL('livedit/css/shCore.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{URL('livedit/css/shThemeDefault.css')}}" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="{{URL('livedit/js/shcore.js')}}" type="text/javascript"></script>
  <script type="text/javascript" src="{{URL('livedit/js/shBrushJScript.js')}}" type="text/javascript"></script> --}}
  <script src="{{URL('livedit/js/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{URL('livedit/js/editor.js')}}" type="text/javascript"></script>
  </head>
    <body>
      <div class="container-fluid">
        <div class="panel-main">
        <div class="row">
          <div class="col-md-4">
            <div class="row">
              {!!$landscape!!}
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
            <div class="col-md-12 panelopce">
              <h1>Visualizador</h1>
            <button type="button" id="guardar" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
            <button type="button" id="borrar" class="btn btn-danger"><i class="fab fa-html5"></i> Borrar</button>
            <button type="button" id="borrar" class="btn btn-danger"><i class="fab fa-css3-alt"></i> Borrar</button>
            <button type="button" id="borrar" class="btn btn-danger"><i class="fab fa-js-square"></i> Borrar</button>
            </div>
            <div class="col-md-12">
           <iframe id="preview">
           </iframe>
           </div>
           </div>
          </div>
        </div>
        </div>
      </div>}
  {{-- <a class="clearLink" href="#" title="Click to clear all">clear</a> --}}
  <script type="text/javascript">
       SyntaxHighlighter.all()
  </script>
  <script src="{{URL('livedit/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>
</html>
