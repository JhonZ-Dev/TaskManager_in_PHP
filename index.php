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
    public function deleteTask($taskId) {
        // Eliminar una tarea por su ID
        unset($this->tasks[$taskId]);
        $this->tasks = array_values($this->tasks); // Reindexar el array
        $this->saveTasks();
    }
    public function showTasks() {
        // Mostrar la lista de tareas pendientes
        foreach ($this->tasks as $index => $task) {
            echo "Tarea #$index: $task\n";
        }
    }

}


?>