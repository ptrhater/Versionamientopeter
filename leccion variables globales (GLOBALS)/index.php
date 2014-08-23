

<?php

        //UNA VARIABLE GLOBAL O SUPERGLOBAL SON VARIABLES QUE SE COMUNICAN EN TODO EL CONTEXTO 
        /**
         * PHP TIENE PREDEFINIDAS VARIABLES GLOBALES Y SUPERGLOBALES 
         * POR EJEMPLO UNA VARIABLE GLOBAL COMO YA ANTES VISTAS SON 
         * LAS VARIABLES 
         * $_GET
         * $_POST
         * $_REQUEST
         * 
         * POR NATURALEZA DEL INTERPRETE SON GLOBALES , SE PUEDEN COMUNICAR EN TODO EL CONTEXTO WEB 
         * 
         * OTRAS VARAIBLES GLOBALES PERO MAS BIEN CONOCIDAS COMO SUPERGLOBALES
         * 
         *  $GLOBALS
            $_SERVER
            $_FILES
            $_ENV
            $_COOKIE
            $_SESSION
         * 
         * DE ESAS VARIABLES NOS ENFOCAREMOS EN DOS QUE SERAN $GLOBALS Y $_SESSION
         * 
         */


         /* nosotros tambien podemos crear variables globales con la clausula $GLOBALS*
          * 
          * ejemplo:
          */

          $GLOBALS['SOY_GLOBAL'] = "HOLA SOY GLOBAL...";
          /**ESTA VARAIBLE SE PUEDE UTILIZAR EN TODO EL CONTEXTO PHP ...*/
          
          /**
           * AHORITA SOLO QUIERO QUE CONOZCAS ALGUNAS VARAIBLES GLOBALES 
           * MAS ADELANTE NOS METEREMOS EN EL USO 
           * 
           * REFERENCIAS:
           * http://php.net/manual/es/reserved.variables.globals.php
           * http://php.net//manual/es/reserved.variables.server.php
           * http://php.net/manual/es/reserved.variables.session.php
           * 
           * LEETE LAS REFERENCIAS DE ESTAS VARIABLES SUPERGLOBALES
           * 
           */

            

?> 