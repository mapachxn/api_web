<<<<<<< HEAD
<?php

namespace App\Controllers;

class Dump extends BaseController{

    public function exportar(){


        $db = \Config\Database::connect();

            // Nombre y ruta del archivo de respaldo
        $RutaGuardar = 'C:\Users\Adan\Downloads\respaldito.sql';
        $rutaActual = getcwd();
        chdir('C:\Program Files\MySQL');
        $rutaModificada = getcwd();  
            // Comando para exportar la base de datos
        $command = 'mysqldump -u root > "C:\Users\Adan\Downloads\respaldito.sql"';
        // mysqldump -u root -p estudiantec > "C:\Users\Moisés David\Desktop\estudiantec.sql"
            // Ejecutar el comando
        exec($command);
            echo "La exportación se realizó con éxito." . '<br>'; 
            echo 'Ruta actual: '.$rutaActual . '<br>';
            echo 'Ruta modificada: ' . $rutaModificada . '<br>';
    }
=======
<?php

namespace App\Controllers;

class Dump extends BaseController{

    public function exportar(){


        $db = \Config\Database::connect();

            // Nombre y ruta del archivo de respaldo
        $RutaGuardar = 'C:\Users\Adan\Downloads\respaldito.sql';
        $rutaActual = getcwd();
        chdir('C:\Program Files\MySQL');
        $rutaModificada = getcwd();  
            // Comando para exportar la base de datos
        $command = 'mysqldump -u root > "C:\Users\Adan\Downloads\respaldito.sql"';
        // mysqldump -u root -p estudiantec > "C:\Users\Moisés David\Desktop\estudiantec.sql"
            // Ejecutar el comando
        exec($command);
            echo "La exportación se realizó con éxito." . '<br>'; 
            echo 'Ruta actual: '.$rutaActual . '<br>';
            echo 'Ruta modificada: ' . $rutaModificada . '<br>';
    }
>>>>>>> 91cfe90 (MySQL Reloaded)
    }