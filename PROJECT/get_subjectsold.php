<?php
include 'db_connect.php'; 

$sql = "SELECT subject_id, subject_name FROM subjects"; // Use correct table & columns
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // show subject_id and subject_name in dropdown
        echo "<option value='" . $row['subject_id'] . "'>" . $row['subject_id'] . " - " . $row['subject_name'] . "</option>";
    }
} else {
    echo "<option value=''>No subjects available</option>";
}

$conn->close();
?>
