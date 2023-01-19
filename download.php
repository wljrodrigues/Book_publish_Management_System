<?php
//include('conn.php');
   // Conecta-se ao banco de dados
    $conn = new mysqli("localhost", "root", "", "library_management");
  // Verifica conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} 

// Monta a consulta SQL
$sql = "SELECT bookPdf FROM books WHERE BookId = 1";
<input type="hidden" name="bookId" value="<?php echo $pdts["bookId"] ?>">
// Executa a consulta
$result = $conn->query($sql);

// Verifica se há dados na tabela
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "bookPdf: " . $row["bookPdf"] . "<br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Fecha conexão
$conn->close();
?>