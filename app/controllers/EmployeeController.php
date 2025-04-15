<?php

class EmployeeController extends Controller {

    public function add() {
        $this->view('employee/add'); 
    }

    public function store() {
        header('Content-Type: application/json');
        $data = json_decode(file_get_contents('php://input'), true);

        if (!$data) {
            echo json_encode(['error' => 'Invalid input']);
            return;
        }
        $name = $data['name'] ?? '';
        $email = $data['email'] ?? '';

        echo json_encode(['success' => true, 'name' => $name, 'email' => $email]);
    }
}
