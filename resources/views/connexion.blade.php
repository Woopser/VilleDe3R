<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 


  <link rel="stylesheet" href="{{ asset('connexion.css') }}"> 

 </head> 

 <body> 

  <section>  

   <div class="signin"> 

    <div class="content"> 


     <div class="blanc"><img src="{{ asset('img/logo_v3r_n_et_blanc.svg') }}" alt="Logo" width="90"></div>

     <div class="form"> 

      <div class="inputBox"> 

       <input type="text" id="matricule" required> <i>Matricule</i> 

      </div> 

      <div class="inputBox"> 

       <input type="password" id="password" required> <i>Mot de passe</i> 

      </div> 

      <div class="links"> <a href="#">Mot de passe oublié ?</a> <a href="#"></a> 

      </div> 

      <div class="inputBox"> 

       <input type="submit" method="post" action="{{route(/connexionn/login)}}" value="Connexion"> 

      </div> 

     </div> 

    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>

</html>