<body>
  <h2 style="text-align: center;">Formulaire d'inscription</h2>
  <form name="RegForm" action="/submit.php" onsubmit="return W3docs()" method="post" class="w3docs">
    <div>
      <label for="Nom">Nom:</label>
      <input type="text" id="Nom" size="60" name="Nom" />
    </div>
    <br />
    <div>
      <label for="adresse">Adresse:</label>
      <input type="text" id="adresse" size="60" name="Adresse" />
    </div>
    <br />
    <div>
      <label for="E-mail" l>Adresse électronique:</label>
      <input type="text" id="E-mail" size="60" name="Email" />
    </div>
    <br />
    <div>
      <label for="Mot de passe">Mot de passe:</label>
      <input type="text" id="Mot de passe" size="60" name="Mot de passe" />
    </div>
    <br />
    <div>
      <label for="Téléphone">Téléphone: </label>
      <input type="text" id="Téléphone" size="60" name="Téléphone" />
    </div>
    <br />
    <div>
      <label>Sélectionnez le Livre</label>
      <select type="text" value="" name="Sujet">
        <option></option>
        <option>HTML</option>
        <option>CSS</option>
        <option>PHP</option>
        <option>JavaScript</option>
      </select>
    </div>
    <br />
    <div>
      <label for="commentaire">Commentaires: </label>
      <textarea cols="62" id="commentaire" rows="10" name="Commentaire"></textarea>
    </div>
    <div class="buttons">
      <input type="submit" value="Envoyer" name="Envoyer" />
      <input type="reset" value="Rénit" name="Reset" />
    </div>
  </form>
</body>
<style>
  .w3docs {
    margin-left: 70px;
    font-weight: bold;
    text-align: left;
    font-family: sans-serif, bold, Arial, Helvetica;
    font-size: 14px;
  }
  .buttons {
    display: flex;
    align-items: center;
    width: 100%;
  }
  div input {
    margin-right: 10px;
  }
  form {
    margin: 0 auto;
    width: 600px;
  }
  form input {
    padding: 10px;
  }
  form select {
    background-color: #ffffff;
    padding: 5px;
  }
  form textarea {
    padding: 10px;
    margin-bottom: 5px;
  }
  form label {
    display: block;
    width: 100%;
    margin-bottom: 5px;
  }
</style>
<script>
function W3docs()                                    
{ 
    var name = document.forms["RegForm"]["Nom"];               
    var email = document.forms["RegForm"]["Email"];    
    var phone = document.forms["RegForm"]["Téléphone"];  
    var what =  document.forms["RegForm"]["Sujet"];  
    var password = document.forms["RegForm"]["Mot de passe"];  
    var address = document.forms["RegForm"]["Adresse"];  
    var comment = document.forms["RegForm"]["Commentaire"];  

    if (name.value == "")                                  
    { 
        alert("Mettez votre nom."); 
        name.focus(); 
        return false; 
    }    
    if (address.value == "")                               
    { 
        alert("Mettez votre adresse."); 
        address.focus(); 
        return false; 
    }        
    if (email.value == "")                                   
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (phone.value == "")                           
    { 
        alert("Mettez votre numéro de téléphone."); 
        phone.focus(); 
        return false; 
    }    
    if (password.value == "")                        
    { 
        alert("Saisissez votre mot de passe"); 
        password.focus(); 
        return false; 
    }    
    if (what.selectedIndex < 1)                  
    { 
        alert("Mettez votre cours."); 
        what.focus(); 
        return false; 
    } 
    if (comment.value == "")                  
    { 
        alert("Écrivez un commentaire."); 
        comment.focus(); 
        return false; 
    } 
    return true; 
}
</script>