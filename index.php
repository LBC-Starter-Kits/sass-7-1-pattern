<?php 
    defined( '_JEXEC' ) or die( 'Restricted access' );

    $templatePath = $this->baseurl . '/templates/' . $this->template; 
    $contenedor = $this->params['fluidContainer'] == 1 ? "container-fluid" : "container" ;
?>


<!DOCTYPE html>

<html 
    xmlns="http://www.w3.org/1999/xhtml"  
    xml:lang="<?php echo $this->language; ?>" 
    lang="<?php echo $this->language; ?>" 
>

<head>
    <jdoc:include type="head" />

    <?php
        if($this->params['bootstrap']){
            switch($this->params['bootstrapVersion']){
                case "3":
                    echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/cjs/popper.min.js'></script>";
                    echo "<link href='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu' crossorigin='anonymous'>";
                    echo "<script src='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js' integrity='sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd' crossorigin='anonymous'></script>";
                    break;
                case "4":
                    echo "<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>";
                    echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>";
                    echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>";
                    echo "<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>";
                    break;                    
            }
        }
    ?>

    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $templatePath ?>/css/main.css" type="text/css" />

    <style>
        :root{
            --color-principal: <?php echo $this->params['templateColor'] ?>;
            --color-fondo: <?php echo $this->params['templateBackgroundColor'] ?>;
        }
    </style>
</head>

<body class="color-fondo">
        <div class="<?php echo $contenedor; ?>">
            <header>
                <nav>
                    <div class="nav-movil invisible-desktop">                        
                        <jdoc:include type="modules" name="nav" />
                        <jdoc:include type="modules" name="idiomas" />
                    </div>
                    <div class="nav-desktop invisible-movil">                        
                        <jdoc:include type="modules" name="nav" />
                        <jdoc:include type="modules" name="idiomas" />
                    </div>                    
                </nav>        
            </header>

            <div class="contenido">
                <main>
                    <section>
                        <jdoc:include type="component" />
                        <?php var_dump($this->params); ?>
                        <hr>
                        <button class="btn btn-primary">Hola</button>
                    </section>        
                </main>
            </div>
            

            <footer>
                <jdoc:include type="modules" name="footer" />
            </footer>
        </div>
    


    <script type="text/javascript" src="<?php echo $templatePath . '/js/main.js' ?>"></script>
</body>
</html>