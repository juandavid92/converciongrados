<html>
 <head>
 <title>Convertir Temperatura </title>
 </head>
 <body>
 <h5>Centigrados a grados Celcius</h5>
 <form name='Celcius' method = 'POST' action = 'convercion.php'>
 <label>Ingresa grados centigrados:</label>
 <input style="width: 50px;" type='number' max="999" min="999" name='cent' required="" />
 <input type='submit' name='opcion1' value='Convertir' />
 </form>
 <h5>Farenheit a grados Centigrados</h5>
 <form name='farenheit' method = 'POST' action = 'convercion.php'>
 <label>Ingresa grados farenheit:</label>
 <input style="width: 50px;" type='number' max="999" min="999" name='far' required="" />
 <input type='submit' name='opcion2' value='Convertir' />
 </form>