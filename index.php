<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Calculadora em PHP">
        <meta name="keywords" content="">
        <meta name="author" content="Thyago França">

        <title>Calculadora em PHP</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	</head>

	<body>

		<?php
              
            if (isset($_POST['acao'])) {
                  
                $resultado = "";
                  
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
  
                switch ($_POST['operacao']) {
                    case "somar":
                        $resultado = $num1 + $num2;
                        break;
                    case "subtrair": 
                        $resultado = $num1 - $num2;
                        break;
                    case "multiplicar":
                        $resultado = $num1 * $num2;
                            break;
                    case "dividir":
                        if( $num2 != "0") {
                            $resultado = $num1 / $num2;
                        }else {
                            $resultado = "Não é possivel dividir por zero";
                            break;
                        }
                }     
            }
        ?>

		<section id="culculadora">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="jumbotron text-center mb-5">Calculadora em PHP</h1>

						<form method="post">
							<div class="form-row">
							    <div class="form-group col-md-4">
							      	<input type="number" name="num1" class="form-control" placeholder="Digite um número" required>
							    </div>
							    <div class="form-group col-md-4">
								    <input type="number" name="num2" class="form-control" placeholder="Digite um número" required>
							    </div>

							    <div class="form-group col-md-4">
									<select name="operacao" class="form-control">
										<option value="">Selecione uma operação</option>
										<option value="somar">Adição</option>
										<option value="subtrair">Subtração</option>
										<option value="multiplicar">Multiplicação</option>
										<option value="dividir">Divisão</option>
									</select>
								</div>
							</div>
				
							<div class="row justify-content-center">
								<div class="col-md-3 text-center">
									<button type="submit" class="btn btn-primary" name="acao" value="Calcular">Calcular</button>
								</div>
							</div>
	
							<div class="form-group col-md-12">
								<label>Resultado:</label>
							    <input type="text" name="resultado" id="resultado" class="form-control" placeholder="Resultado" value="">
						    </div>
						</form>

					</div><!-- /col-md-12 -->
				</div><!-- /row -->
			</div><!-- /container -->
		</section><!-- /calculadora -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	</body>

	<script>
        document.getElementById('resultado').value = '<?php echo $resultado; ?>';
    </script>

</html>