<?php 

echo "Hello World!";
class TaskManager {

    private $tasks = [];
    private $filename = 'tasks.txt';

    public function __construct() {
        // Cargar tareas desde el archivo al inicializarse
        $this->loadTasks();
    }

    public function addTask($task) {
        // Agregar una tarea
        $this->tasks[] = $task;
        $this->saveTasks();
    }


}


?>