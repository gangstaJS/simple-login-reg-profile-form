<h3>Регистрация нового профайла</h3>

<form method="post" onsubmit="return false;" id="reg_form">

<table>
	<tr>
		<td>Логин</td>
		<td><input type="text" name="login"></td>
	</tr>

	<tr>
		<td>Пароль</td>
		<td><input type="password" name="password"></td>
	</tr>

	<tr>
		<td>Повторите пароль</td>
		<td><input type="password" name="password_confirm"></td>
	</tr>

	<tr>
		<td>Имя</td>
		<td><input type="text" name="first_name"></td>
	</tr>

	<tr>
		<td>Фамилия</td>
		<td><input type="text" name="last_name"></td>
	</tr>

	<tr>
		<td>Отчество</td>
		<td><input type="text" name="patronymic"></td>
	</tr>

	<tr>
		<td>Семейное положение</td>
		<td><input type="text" name="marital_status"></td>
	</tr>

	<tr>
		<td>Телефон</td>
		<td><input type="text" name="phone"></td>
	</tr>

	<tr>
		<td>Электронная почта</td>
		<td><input type="text" name="email"></td>
	</tr>

	<tr>
		<td>Дата рождения</td>
		<td>
			<input type="text" placeholder="день" name="b_day"> 
			<select name="b_month">
				<option value="1">Январь</option>
				<option value="2">Февраль</option>
				<option value="3">Март</option>
			</select> 
			<input type="text" placeholder="год" name="b_year">
		</td>
	</tr>

	<tr>
		<td>Образование</td>
		<td>
			<input type="text" name="edu"> 
		</td>
	</tr>

	<tr>
		<td>Опыт работы</td>
		<td>
			<input type="text" name="experience"> 
		</td>
	</tr>

	<tr>
		<td>Место проживания</td>
		<td>
			<input type="text" name="locations"> 
		</td>
	</tr>

	<tr>
		<td>Пол</td>
		<td>
			<label>
				Мужской: 
				<input type="radio" name="gender" value="1">
			</label>

			<label>
				Женский:
				<input type="radio" name="gender" value="2">
			</label>
			
		</td>
	</tr>

	<tr>
		<td>Дополнительные сведения о себе</td>
		<td>
			<textarea name="about"></textarea>
		</td>
	</tr>
</table>

<button type="submit" id="go_reg">Зарегестрироваться</button>

</form>

<script type="text/javascript" src="/js/registration.js"></script>