$endpoint = $_GET['endpoint'] ?? '';

if($endpoint === 'example') {
    // Aquí puedes manejar la lógica para la ruta /api/example
    echo json_encode(['message' => '¡Hola desde la API!']);
} else {
    // Si el endpoint no coincide, puedes devolver un error o una respuesta por defecto
    http_response_code(404);
    echo json_encode(['error' => 'Endpoint no encontrado']);
}