<?php
header("Content-disposition: attachment; filename=Documento.xlsx");
header("Content-type: MIME");
readfile("Documento.xlsx");
echo "<script>window.close();</script>";

?>