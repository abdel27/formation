<?php
 namespace Security;


 //Class validation des champs
 class Validation 
 {

  protected $error = array();



  //Fonction qui permet de verifier le compteur d'erreurs
  public function isValide($error) {

    foreach ($error as $key => $value) {
      if(!empty($value)) { // a verifier
        return false;
      }
    }

    return true;
  }


  //Methodfe qui test deux password entre eux et la longueur passé en argument
  public function testPassword($password1,$password2,$min) {
     $error = '';

      if($password1 != $password2) {
        $error = 'Les mots de passes ne sont pas identiques.';
      }
      elseif(strlen($password1) <= $min) {
        $error = 'Votre mot de passe doit contenir au moins '.$min.' caracteres ';
      }

    return $error;
  }



  //Methode qui permet de valider les champs input, longueur minimum et maximum passés en arguments
   public function checkValidation($valeur,$champ,$min,$max) {
     $error = '';

       if (!empty($valeur)){
                 if(strlen($valeur) < $min ) {
                   $error = 'Votre champ '.$champ.' est trop court. (minimum '.$min.' caracteres)';
                 } elseif(strlen($valeur) > $max) {
                   $error = 'Votre champ '.$champ.' est trop long. (maximum '.$max.' caracteres)';
                   }
                  
       } else {
                 $error = 'Champ '.$champ.' vide !!';
       }

     return $error;



                    
   }


   public function test($data){

     $data = trim(strip_tags($data));
   }




   public function validateMail($email, $max = 50) {

     $error='';
     if(!empty($email)) {
             if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                 $error = 'Adresse email invalide.';
             }
             elseif(strlen($email) > $max) {
                 $error = 'Votre adresse e-mail est trop longue.';
             }
         } else {
             $error = 'Veuillez renseigner un email.';
         }

     return $error;

   } 



   public function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
 
  
}

 

//$check = $valid->checkValidation


//$errors['name'] = $validation->textValid($contact_name,'nom',2,50);
//if($validation->isValid($errors))

