<?php
    require 'function.php';

    $id = $_GET["id"];
    
    if(hapusCustomer($id) > 0) {
        echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = './dataCustomer.php';
            </script>
        ";
    }

?>
