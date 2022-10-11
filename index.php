<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link href="assets/css/login.css" rel="stylesheet" />
    <script type="text/javascript" src="assets/js/login.js"></script>
</head>
<body>
    <div class="wrapLogin">
        <div class="contentLogeo">
            
            <div class="contentForm">
                <h1>BIENVENIDO</h1>
                <div class="contentInput">
                    <label class="labelInput">
                        <span>USUARIO</span>
                        <input type="text" class="input"
                               name="userInput" id="userInput" placeholder="Usuario">
                    </label>
                </div>
                <div class="contentInput">
                    <label class="labelInput">
                        <span>CONTRASEÑA</span>
                        <input type="password" class="input"
                                name="claveInput" id="claveInput" placeholder="Contraseña">
                    </label>
                </div>
                              
                <div class="contentBtnEnter">
                    <button id="botonIngreso">INGRESAR</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="assets/js/login.js"></script>
</body>
</html>