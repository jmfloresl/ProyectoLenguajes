<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        body{

        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        form{
        padding: 50px 45px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        border-radius: 20px;
        text-align: center;
        width: 430px;
        }

        img {
        width: 79px;
        position: absolute;
        top: 69px;
        left: 36%;
        }

        .encabezado{
        font-size: 25px;
        color: #ff600a;
        }

        .input-group{
        display: flex;
        flex-direction: column;
        text-align: left;
        }

        .input-box{

        box-sizing: border-box;
        }

        .input-box header {
        text-align: center;
        margin-bottom: 30px;
        }

        .input-field{
        display: flex;
        flex-direction: column;
        position: relative;
        padding: 0 10px 0 10px;
        }

        .input{
        height: 45px;
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid rgba(0,0,0,0.2);
        outline: none;
        margin-bottom: 20px;
        color: #40414a;
        }

        .input-box .input-field label{
        position: absolute;
        top: 10px;
        left: 10px;
        pointer-events: none;
        transition: .5s;
        }
        .input-field .input:focus ~ label{
        top: -10px;
        font-size: 13px;
        }
        .input-field .input:valid ~ label{
        top: -10px;
        font-size: 13px;
        color: #5d5076;
        }
        .input-field .input:focus, .input-field .input:valid{
        border-bottom: 1px solid #ff600a;
        }

        .btn{
        margin-bottom: 12px;
        }

        .btn:not(.nav-btns button){
        background-color: #fff;
        color: #ff600a;
        padding: 10px 28px;
        border-radius: 25px;
        border: 1px solid #ff600a;
        }

        .btn:not(.nav-btns button):hover{
        background-color: #ff600a;
        color: #fff;
        border-color: #ff600a;
        }


    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style_registro.css">
    <link rel="shortcut icon" href="images/Logo_icono.ico">
    <title>Registro | Siinbal </title>
</head>
<body>
  
    <form method="POST"action="{{route('cliente.registrar')}}">
        @csrf

        <div>
            <div class="input-box">
                <img src="images/Siinbal_Texto.png" alt="" >
               <header class="encabezado">Registrate</header>
               
               <div class="input-field">
                    <input type="text" class="input" name="name">
                    <label for="name">Nombre</label>
               </div>

               <div class="input-field">
                <input type="text" class="input" name="apellido">
                <label for="name">Apellido</label>
                </div>
               
               <div class="input-field">
                   <input type="text" class="input" name="email" required>
                   <label for="email">Correo Electronico</label>
               </div>
               <div class="input-field">
                    <input type="text" class="input" name="telefono">
                    <label for="name">Telefono</label>
               </div>
               <div class="input-field">
                    <input type="text" class="input" name="direccion">
                    <label for="name">Direccion</label>
               </div>
               <div class="input-field">
                   <input type="password" class="input" name="password">
                   <label for="password">Contraseña</label>
               </div>
               <div class="input-field">
                    <button class="btn btn-primary mt-3" type="submit" >Registrar</button>    
               </div>
               <div class="signin">
                   <a href="#">Politicas de privacidad</a>
                   <a href="#">Terminos y condiciones</a>
               </div>
            </div>
       </div>
    </form>
   
        

     <!--CSS y JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</body>
</html>