<!DOCTYPE html>
<html lang="en" data-theme="lofi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopcion Mascotas- Laravel</title> 
     <style>
        body{
            margin: 0;
            font-family: 'Lucida Sans', sans-serif;
            font-size: 14px;
            letter-spacing: -0.5px;
            background-color: #FFFFFF;
            color: #2e2e2e;
            line-height: 1,5;
        }

        header{  
            background-color: #162c9a;
            color: #FFFFFF;
            padding: 10px 30px;
            margin: 0px;
        }
        h1{
            font-size: 40px;
            font-weight: bold;
        }
        header p{
            font-size: 20px;
        }

        #btn-tema{
            margin-bottom: 10px;
            background-color: #2e2e2e;
            color: #FFFFFF;
            padding: 10px 25px;
            border: none;
            border-radius: 20px;
            font: inherit;
            box-shadow: 0px 5px 10px 1px #2e2e2e;
            font-weight: bold;
        }


        nav{
            background-color: #FFFFFF;
            padding: 10px 5px;
            box-shadow: 0px 5px 10px 1px #808080;
        }


        #btn-menu{
            display: none;
            
        }
        .hamburguesa{
            margin-bottom: 10px;
            background-color: #FFFFFF;
            color:  #2e2e2e;
            padding: 10px 25px;
            border: none;
            border-radius: 10px;
            font: inherit;
            box-shadow: 0px 5px 10px 1px #2e2e2e;
            font-weight: bold; 
        }

        nav ul{
            margin: 0;
            padding: 0;
            list-style: none;
            display: flex;
            justify-content: center; 
            gap: 30px;
        }

        nav a{
            color: #268afa;
            text-decoration: none;
            font-weight: bold;
        }

        main{
            max-width: 900px;
            margin: 0 auto;
            padding: 10px 15px;
        }

        section{
            margin: 30px;
        }

        #fotos{
            display: flex;
            justify-content: space-between;
            padding: 0;
        }

        #fotos li{
            background-color: #EAF3FF;
            border-radius: 10px;
            list-style: none;
            margin: 0;
            padding: 10px 10px;
            margin: 10px;
            color:  #2e2e2e;
        }
        img{
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .btn-mas{
            background-color: #FAAA20;
            color: #2e2e2e;
            padding: 5px 10px;
            border: none;
            border-radius: 25px;
            font: inherit;
            font-weight: bold;
        }

        .tarjeta{
            background-color: #268afa;
            padding: 10px 20px;
            margin: 0px;
            border-radius: 10px;    
            color:#FFFFFF;
            font-size: 16px;
            
        }
        .tarjeta article{
            margin-bottom: 20px;
            padding: 10px 20px;
            text-align: justify;
            border-left: 2px solid #162c9a;
        }
        form{
            background-color:#EAF3FF ;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding: 10px 20px;
            max-width: 600px;
            margin: 0 auto;
            border-radius: 10px;
        }
        form label{
            font-weight: bold;
            margin-top: 8px;
            margin-bottom: 5px;
            font: inherit;
        }
        form input, textarea, select{
            font: inherit;
            border: 1px solid #ccc;
            border-radius: 10px;    
            padding: 12px; 
        }
        form button{
            margin-top: 20px;
            background-color: #FAAA20;
            margin-bottom: 10px;
            color:  #2e2e2e;
            padding: 10px 25px;
            border: none;
            border-radius: 20px;
            font: inherit;
            font-weight: bold;
        }

        .aviso{
            /*display: none;*/
            margin-top: 14px;
            padding: 10px 14px;
            border-radius: 6px;
            font-weight: bold;
        }

        .aviso.error{
            display: block;
            background-color:#C62828;
            color:   #FDECEC;
        }

        .aviso.exito{
            display: block;
            background-color:#2E7D32;
            color:   #E8F5E9;
        }

        footer{
            background-color: #2e2e2e;
            color: #F2EFE9;
            padding: 20px;
        }

        @media(max-width: 600px){
    
            header{
                padding: 20px 12px 16px;  
            }
            #btn-menu{
                display: block;
            }
            nav ul{
                display: none;
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }
            nav ul.abierto{
                display: flex;
            }


            #fotos{
                display: flex;
                flex-direction: column;    
            }

        }

        body.oscuro{
            background-color:#121827;
            color:#E8EEF8;
        }
        body.oscuro header{
            background-color:#162C9A;
            color: #FFFFFF;
        }
        body.oscuro #btn-tema{
            background-color:  #FFFFFF;
            color: #2e2e2e;
        }
        body.oscuro nav{
            background-color: #1C2638;
            color: #E8EEF8;
            box-shadow: none;
        }
        body.oscuro nav a{
            color: #FFFFFF;
        }

        body.oscuro #fotos li{
            background-color:#1C2638 ;
            color:#E8EEF8 ;
        }

        body.oscuro .tarjeta{
            background-color:#203B66 ;

        }
        body.oscuro form{
            background-color: #2e2e2e;
        }
        body.oscuro footer{
            background-color: #0B101A;
            color: #F2EFE9;
        }
    </style>

    
</head>
<body >
    <header>
        <h1>
            <h1>Sistema de adopción de mascotas</h1>
        <p>Adoptar salva vidas</p>
        <button id="btn-tema">Modo oscuro🌙</button>
        </h1>
    </header>
    <nav class="navbar bg-base-100">
        <button type="button" id="btn-menu" class="hamburguesa">☰ Menú</button>
        <ul>
            <li><a href="/">Inicio</a></li>    
            <li><a href="adoptar">Adoptar</a></li>

            <li><a href="rescate/nuevo">Agregar rescate</a></li>
            <li><a href="refugio/nuevo">Agregar refugio</a></li>

            
            <li><a href="/tortas">Examen</a></li>

            <a href="panel">Iniciar Sesión</a>
        </ul>
    </nav>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <h3>Encuentra tu mascota</h3>
        <p>Proyecto Tecnologías en Internet UAB 2026  &copy; Valeria Gutiérrez</p>
        <a href="#">Contactanos</a>
    </footer>

    <script>
        const botonMenu=document.querySelector("#btn-menu");
        const menu=document.querySelector("nav ul");
        function cambiarmenu(){
            menu.classList.toggle("abierto");

        }
        botonMenu.addEventListener('click', cambiarmenu);
        
        const cuerpo = document.querySelector("body");
        const botonModo=document.querySelector("#btn-tema");
        let modonoche=false;
        function cambiarmodo (){
            cuerpo.classList.toggle("oscuro");
            modonoche=!modonoche;
            if (modonoche) {
                botonModo.textContent =  "☀️ Modo día";
            } else {
                botonModo.textContent = "🌙 Modo noche";
            }
        }
        botonModo.addEventListener('click', cambiarmodo);


    </script>
</body>
</html>