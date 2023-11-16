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
    private function loadTasks() {
        // Cargar tareas desde el archivo
        if (file_exists($this->filename)) {
            $contents = file_get_contents($this->filename);
            $this->tasks = explode("\n", $contents);
        }
    }
    private function saveTasks() {
        // Guardar las tareas en el archivo
        file_put_contents($this->filename, implode("\n", $this->tasks));
    }

    //Ejemplo de uso
    

}
$taskManager = new TaskManager();
$taskManager->addTask("Hacer la compra");
$taskManager->addTask("Preparar la presentación");



?>