<?php
     require_once('tcpdf/tcpdf.php'); 

     function fetch_data()  
     {     
          $id = $_GET['id'];
          $output = '';  
          $connect = mysqli_connect("localhost", "root", "", "utazas123");  
          $sql = "select szalloda_az, indulas, idotartam, ar from tavasz where sorszam=".$id;
          $result = mysqli_query($connect, $sql);  
          while($row = mysqli_fetch_array($result))  
          {       
          $output .= '<tr>  
                              <td>'.$row["szalloda_az"].'</td>  
                              <td>'.$row["indulas"].'</td>  
                              <td>'.$row["idotartam"].'</td>  
                              <td>'.$row["ar"].'</td>  
                              
                         </tr>  
                              ';  
          }  
          return $output;  
     }

     $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
     $obj_pdf->SetCreator(PDF_CREATOR);  
     $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
     $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
     $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
     $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
     $obj_pdf->SetDefaultMonospacedFont('helvetica');  
     $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
     $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
     $obj_pdf->setPrintHeader(false);  
     $obj_pdf->setPrintFooter(false);  
     $obj_pdf->SetAutoPageBreak(TRUE, 10);  
     $obj_pdf->SetFont('helvetica', '', 12);  
     $obj_pdf->AddPage();  
     $content = '';  
     $content .= '  
     <h3 align="center">KECSKE TRAVEL</h3><br /><br />  
     <table border="1" cellspacing="0" cellpadding="5">  
          <tr>  
          <th>Szálloda azonosítója:</th>
          <th>Indulás dátuma:</th>
          <th>Utazás hossza:</th>
          <th>Utazás ára:</th>
               
          </tr>  
     ';  
     $content .= fetch_data();  
     $content .= '</table>'; 
     
     $obj_pdf->writeHTML($content);  
     $obj_pdf->Output('sample.pdf', 'I'); 
 ?>  




