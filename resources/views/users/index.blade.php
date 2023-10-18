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
                <div class="blanc"><img src="{{ asset('img/logo_v3r_noir.svg') }}" alt="Logo" width="90"></div>
                <form action="{{ route('users.login')}}" method="POST">
                    @csrf
                    <div class="form"> 
                        <div class="inputBox"> 
                            <input type="text" id="matricule" name="matricule" required> <i>Matricule</i> 
                        </div> 
                        <div class="inputBox"> 
                            <input type="password" id="password" name="password" required> <i>Mot de passe</i> 
                        </div> 
                        <div class="links"> <a href="#">Mot de passe oublié ?</a> <a href="#"></a></div> 
                        <button type="submit">Connexion</button> 
                    </div> 
                </form>               
            </div> 
        </div> 
        </section> <!-- partial --> 
    </body>
    </html>