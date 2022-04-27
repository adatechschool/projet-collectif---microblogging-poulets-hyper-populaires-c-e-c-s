<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="{{URL::asset('css/app.css')}}" rel="stylesheet">
	<!-- Le titre de la page -->
	<title>Poulets hyper populaires</title>
	
	
</head>
<body>
<header>
            <div id="titre_principal">
                <div id="logo">
                    <img src="" />
            	<h1>Poulets hyper populaires</h1>    
                </div>
                <h2>Les meilleurs selfies de poulets</h2>
            </div>
            
            <nav>
                <ul>
                    <li><a href="/register">Inscription</a></li>
                    <li><a href="/login">Connexion</a></li>
                </ul>
            </nav>
        </header>
	<!-- Le contenu -->
	@yield("content")

</body>
</html>