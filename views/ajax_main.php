
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-2-1920x500.jpg);">
<script type = "text/javascript" src = "ajax_js/jquery.min.js"></script>
  <script type = "text/javascript" src = "ajax_js/ajax.js"></script>
  
  
  

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h2>Ajax</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	<div class="best-features">
      <div class="container">
       
         
            <div class="section-heading">
              <h2>Ajax</h2>
            </div>
         
    
      <label for='orszagcimke'>Válasszon országot:</label>
      <select id = 'orszagselect'></select>
      <br><br>
      <label for = 'varoscimke'>Válasszon szállodát:</label>
      <select id = 'szallodaselect'></select>
      <br><br>
      <label for = 'varoscimke'>Válasszon összeget:</label>
      <select id = 'intezmenyselect'></select>
      <br><br>
      
      <table style="width:100%">
  <tr>
    <th>Szálloda azonosítója:</th>
    <th>Indulás dátuma:</th>
    <th>Utazás hossza:</th>
    <th>Utazás ára:</th>
  </tr>
  <tr>
    
    <td><span id="nev" class="adat"></span></td>
    <td><span id="cim" class="adat"></span></td>
    <td><span id="tel" class="adat"></span></td>
    <td><span id="mail" class="adat"></span></td>
  </tr>
  
</table>

        
                      <form action="proba.php" method="post">  
                          <input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF" />  
                     </form> 
  
    </div>
    
	


