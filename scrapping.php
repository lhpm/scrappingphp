<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
    .semana {        
        color: gray;
    }
    table{
        font-size: 0.8em;
    }
    .titulo1{
        color: white !important;
        padding-bottom: 3%;
    }
    </style> 
  </head>
  <body style="background-color: #FFFFFF">
  <div class="container py-5">
		  <div class="row d-flex">
        	
           <?php

                require 'simple_html_dom.php';
                $html = file_get_html('http://www.ganarchance.com/resultados-loterias-colombia');
                
                $titulo = $html->find('div[class=grid8 col]',0);

                echo "<div class='sep sep-big remove-bottom'>";
                echo $titulo->find('h2',0);
                echo "</div>";

                $loteria = $html->find('div[class=resultado_loteria]');

                $i = 0;


                foreach ($loteria as $lot) {
                echo "<div class='col-md-4 col-sm-12'>";

                        $nombre = $lot->find('div[class=nombre]',0);
                        $numero = $lot->find('div[class=numero]',0);
                        
                        echo $nombre,"\n",$numero;

                echo "</div>";
                if (++$i == 17) break;
                }


           ?>

		  </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

  </body>
</html>
	


