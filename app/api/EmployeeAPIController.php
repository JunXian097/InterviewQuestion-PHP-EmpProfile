<?php

class EmployeeApiController {
    
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = json_decode(file_get_contents('php://input'), true);
            if (
                isset($data['name']) && isset($data['gender']) && isset($data['phone']) &&
                isset($data['email']) && isset($data['address']) && isset($data['dob']) &&
                isset($data['hire_date']) && isset($data['department'])
            ) {
                $response = [
                    'status' => 'success',
                    'message' => 'Employee added successfully',
                    'data' => $data
                ];
                header('Content-Type: application/json');
                echo json_encode($response);
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Missing required fields'
                ];
                header('Content-Type: application/json');
                echo json_encode($response);
            }
        } else {
            http_response_code(405);
            echo json_encode(['message' => 'Method Not Allowed']);
        }
    }
    public function index() {
        $employees = [
            ['id' => 1, 'name' => 'Khor Jun Xian', 'department' => 'IT'],
            ['id' => 2, 'name' => 'Tan Yong Ling', 'department' => 'HR']
        ];
        header('Content-Type: application/json');
        echo json_encode($employees);
    }
}
