# Calculator_PHP
Simple calculator in php

<!DOCTYPE html>
	<head>
		<title>Kalkulator</title>
	</head>
	<body>
		<form method='post' action='wyniki.php'>
			<table>
				<tr>
					<td>Podaj pierwsza liczbe:</td> <td><input required type='text' name='liczba1'><br/></td>
				</tr>
				<tr>
					<td>Podaj druga liczbe:</td><td><input required type='text' name='liczba2'><br/></td>
				</tr>
					<td>Co mam wykonać:</td><td>
									<input type='radio' name='doing' value='dodawanie'> Dodawanie
									<input type='radio' name='doing' value='odejmowanie'> Odejmowanie
									<input type='radio' name='doing' value='mnożenie'> Mnożenie
									<input type='radio' name='doing' value='dzielenie'> Dzielenie 
									<input type='radio' name='doing' value='silnia'> Silnia 
								</td><br/>
				<tr>
				<td><input type='submit' value='Oblicz!'></td>
				</tr>
			</table>
		</form>
	</body>
</html>
