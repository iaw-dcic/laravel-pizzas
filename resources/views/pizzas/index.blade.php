<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <title>Sal's Pizza</title>
        <link id="cssRef" href="css/app.css" type="text/css" rel="stylesheet">
		<script
		  src="https://code.jquery.com/jquery-1.12.4.min.js"
		  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
		  crossorigin="anonymous"></script>

        <script type="text/javascript" src="js/vistaPedidoJQuery.js"></script>
        <script type="text/javascript" src="js/jQueryAjax.js"></script>
        <script type="text/javascript" src="js/controladorPedido.js"></script>
    </head>
	
    <body>
        <div class="container">
            <div class="titulo">
                <h1>Sal's Pizza - V3</h1>
            </div>
            <div class="menu">
                <table id="tabla">
                    <tr><th>Comprar</th><th>Pizzas</th><th>Precio</th></tr>
                </table>
            </div>
            <div class="calculo">
                <span class="total">
                    Total: $ <span id="total">0.00</span>
                </span>
            </div>
        </div>
    </body>
</html>

<!-- 	@foreach ($pizzas as $pizza)
		<li>{{$pizza->nombre}}</li>
	@endforeach
 -->
