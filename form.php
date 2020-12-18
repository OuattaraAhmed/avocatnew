<form action="" method="POST" id="full_client" class="sign-in-form">
            <h2 class="title">Prendre un DRV</h2>
        <div id="message" ></div>
    <div class="form-group">
        
        <input type="text" name="nom" id="full_nom" class="input-field" placeholder="nom & prenoms">
    </div>
    <div class="form-group">
             
        <input type="tel" name="tel" id="full_tel" class="input-field" placeholder="numero">
    </div>
    <div class="form-group">
             
        <input type="email" name="email" id="full_email" class="input-field" placeholder="email">
    </div>
    <div class="form-group">
             
        <input type="text" name="ville" id="full_ville" class="input-field" placeholder="ville">
    </div>
    <div class="form-group">
            
         <input type="text" name="raison" id="full_raison" class="input-field" placeholder="les raisons">
    </div>
    <div class="form-group">
        <SELECT name="pays" size="1" class="input-field">
            <OPTION>Choisir une option          
            <OPTION>Ivory Coast
            <OPTION>Ghana
            <OPTION>togo
            <OPTION>Benin  
            <OPTION>afrique du sud
      </SELECT>
    </div>
    <div class="form-group">
        <SELECT name="type_rdv" size="1" class="input-field">
            <OPTION>Choisir une option
            <OPTION>en ligne (10.000Fr)
            <OPTION>presentiel (50.000)
        </SELECT>
    </div>
    <div class="form-group">
        <textarea name="description" id="full_description" class="input-field" style="height:100%;width:90%"></textarea>
    </div>
    <div class="float-right">
      <button type="submit" class=" btn btn-primary" id="mysubmit" name="send" value="send"> Prendre un RDV </button>
      </div>
      <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
 </form>