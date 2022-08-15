<?php
$conn = new mysqli('localhost', 'root', '', 'rayehit');
if ($conn) {
?>
    <script>
        alert("Connection Successful");
    </script>
<?php
} else {
?>
    <script>
        alert("Connection Failed!!");
    </script>
<?php
}


?>