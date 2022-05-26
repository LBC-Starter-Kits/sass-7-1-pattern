<?php 
    defined( '_JEXEC' ) or die( 'Restricted access' );

    $templatePath = $this->baseurl . '/templates/' . $this->template; 
    $contenedor = $this->params['fluidContainer'] == 1 ? "container-fluid" : "container" ;

    use Joomla\CMS\Factory as CMSFactory;
    use Joomla\CMS\Application\CMSWebApplicationInterface as WebApp;
    
    /** @var WebApp */
    $app = CMSFactory::getApplication();
    // $app = JFactory::getApplication();

    $menu = $app->getMenu();
    $activo = $menu->getActive();
?>


<!DOCTYPE html>

<html 
    xmlns="http://www.w3.org/1999/xhtml"  
    xml:lang="<?php echo $this->language; ?>" 
    lang="<?php echo $this->language; ?>" 
>

<head>
    <jdoc:include type="head" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        if($this->params['bootstrap']){
            switch($this->params['bootstrapVersion']){
                case "3":                    
                    echo "<link href='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu' crossorigin='anonymous'>";
                    break;
                case "4":                    
                    echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>";
                    break;  
                case "5":
                    echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' integrity='sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I' crossorigin='anonymous'>";
                    break;
            }
        }

        if($this->params['googleFont']){
            $fuentes = explode(",",$this->params['googleFontName']);
            foreach($fuentes as $fuente){
                echo "<link href='https://fonts.googleapis.com/css2?family=" . trim($fuente) . ":ital,wght@0,400;0,700;1,400;1,700&display=swap' rel='stylesheet'>";
            }
        }
    ?>

    <script src="https://kit.fontawesome.com/9a8051c774.js"></script>

    <link rel="stylesheet" href="<?php echo $templatePath ?>/css/main.css" type="text/css" />

    <style>
        :root{
            --color-principal: <?php echo $this->params['templateColor'] ?>;
            --color-fondo: <?php echo $this->params['templateBackgroundColor'] ?>;
        }
    </style>
</head>

<body class="<?php echo strtolower($activo->alias); ?> color-fondo ooo">
    <div class="contenedor <?php echo $contenedor; ?>">
        
        <header>
            <nav class="mainNav">
                
                <div class="nav__menu nav__menu--desktop">
                    <jdoc:include type="modules" name="position-menu-top-izq" />
                    <a href="."><img class="nav__logo" src="images/2020/logo2020.png"></img></a>
                    <jdoc:include type="modules" name="position-menu-top-der" />
                </div>

                <div class="nav__menu nav__menu--movil">
                    <i class="nav__icono nav__icono--abrir fas fa-bars" onclick="abreMenu();"></i>

                    <jdoc:include type="modules" name="position-menumovil" />
                    
                    <div id="nav__menudiv" class="nav__menudiv">
                        <i class="nav__icono nav__icono--cerrar fas fa-times-circle" onclick="cierraMenu();"></i>
                        <jdoc:include type="modules" name="position-menumovil-0" />
                    </div>
                </div>    

            </nav>                    
        </header>

        <main>
            <div class="hero">
                <jdoc:include type="modules" name="position-top" />
            </div>
            
            <div class="clearfix-hero"></div>

            <div class="contenido">                  
                <div class="contenido__sidebar--izq">
                    <jdoc:include type="modules" name="position-1" />
                </div> 
                <section class="contenido__central">
                    <jdoc:include type="component" />                    
                </section>     
                <div class="contenido__sidebar--der">
                <jdoc:include type="modules" name="position-2" />
                </div>
            </div>        

            <jdoc:include type="modules" name="position-bottom" />
        </main>

        <footer>
            <jdoc:include type="modules" name="footer" />
        </footer>
    </div>


<?php
    if($this->params['bootstrap']){
        switch($this->params['bootstrapVersion']){
            case "3":
                echo "<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>";
                echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>";                    
                echo "<script src='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js' integrity='sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd' crossorigin='anonymous'></script>";
                break;
            case "4":
                echo "<script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>";
                echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>";                    
                echo "<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js' integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'></script>";
            break;
            case "5":
                echo "<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js' integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'></script>";
                echo "<script src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js' integrity='sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/' crossorigin='anonymous'></script>";
        }
    }
?>

    <script type="text/javascript" src="<?php echo $templatePath . '/js/vendors.js' ?>"></script>
    <script type="text/javascript" src="<?php echo $templatePath . '/js/main.js' ?>"></script>    

</body>
</html>