<?php
//$pdfPath = "D:\..\..\pdfs";

    $pdfPath = "..\..\\pdfs\\";

    $maxSize = 102400000000;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_pdf'])) {   
	    if (is_uploaded_file($_FILES['filepdf']['tmp_name'])) {
		    if ($_FILES['filepdf']['type'] != "application/pdf") {
			    echo '<p>Il file non &#232; un PDF</p>';
		    } else if ($_FILES['filepdf']['size'] > $maxSize) {
			    echo '<p class="error">File troppo grande. Dimensione massima: ' . $maxSize . 'KB</p>';
		    } else {
			    
                $nombreArchivo = $_POST['nombre'];
                $nombreArchivo=$nombreArchivo .  ".pdf";
                
			    $result = move_uploaded_file($_FILES['filepdf']['tmp_name'], $pdfPath .$nombreArchivo);
			    if ($result == 1) {
				    echo '<p class="error">archivo subido</p>';
			    } else {
				    echo '<p class="error">Si &#232; verficato un errore</p>';
			    }
		    }
	    }
    }
?>