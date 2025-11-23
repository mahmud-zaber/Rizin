<?php
$data = json_decode(file_get_contents("php://input"), true);

if (!empty($data["data"])) {
    $text = implode("\n\n", $data["data"]);
    $filename = "rizin_memory_maze_" . date("Y-m-d_H-i-s") . ".txt";

    file_put_contents($filename, $text);
    echo "saved";
} else {
    echo "error";
}
?>
