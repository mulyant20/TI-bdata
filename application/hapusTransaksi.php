<?php
    require 'function.php';

    $id = $_GET["id"];
    
    if(hapusTransaksi($id) > 0) {
        echo "
            <script>
                alert('data berhasil dihapus');
                document.location.href = '../index.php';
            </script>
        ";
    }

?>