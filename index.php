<?php 

echo "Hello World!";
class TaskManager {

    private $tasks = [];
    private $filename = 'tasks.txt';

    public function __construct() {
        // Cargar tareas desde el archivo al inicializarse
        $this->loadTasks();
    }


}


?>