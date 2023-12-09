<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Calculadora PHP</title>
    </head>
    <body>
        <div class="calculadora">
            <fieldset>
                <legend>Calculadora</legend>
                <form action="resultado.php" method="post">
                    <input type="text" name="num1" placeholder="Número 1" required>
                    <select name="operador" required>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                    <input type="text" name="num2" placeholder="Número 2" required>
                    <button type="submit" name="submit">Calcular</button>
                    <input type="reset" value="Limpar"></input>
                </form>


            </fieldset>
            
            
        </div> 
</html>          