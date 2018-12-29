<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
//require __DIR__ . '/../web/markup/in.php';

//$config = require __DIR__ . '/../web/markup/in.php';

//(new yii\web\Application($config))->run();



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo "<!DOCTYPE html>\n";
echo "<html lang=\"en\">\n";
echo "<head>\n";
echo "	<meta charset=\"UTF-8\">\n";
echo "	<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\n";
echo "    <!-- Bootstrap CSS -->\n";
echo "    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">\n";
echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.css\">\n";
echo "	<title>характеристики автомобилей</title>\n";
echo "</head>\n";
echo "<body>\n";
echo "	<div class=\"pos-f-t\">\n";
echo "		<div class=\"collapse\" id=\"navbarToggleExternalContent\">\n";
echo "			<div class=\"bg-dark\">\n";
echo "				<div class=\"container-fluid\">\n";
echo "					<div class=\"row\">\n";
echo "						<div class=\"col-4\">\n";
echo "							<div class=\"float-left\">\n";
echo "								<div class=\"links\">\n";
echo "									<a class=\"navbar-brand\" href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal1\">Вход</a>\n";
echo "									<a class=\"navbar-brand\" href=\"#\" data-toggle=\"modal\" data-target=\"#exampleModal2\">Регистрация</a>\n";
echo "								</div>\n";
echo "							</div>\n";
echo "						</div>\n";
echo "						<div class=\"col-6\">\n";
echo "							<div class=\"justify-content-center\">\n";
echo "								<div class=\"text-light\">\n";
echo "									<h1>Добро пожаловать к нам на сайт</h1>\n";
echo "								</div>\n";
echo "							</div>\n";
echo "						</div>\n";
echo "						<div class=\"col-2\">\n";
echo "							<div class=\"float-right\">\n";
echo "								<span class=\"navbottom\">\n";
echo "									<div class=\"text-light\">\n";
echo "										<img class=\"iconBot\" src=\"angle-double-down-solid.svg\" alt=\"\">\n";
echo "										<div class=\"links\">\n";
echo "											<a href=\"#\">Вниз</a>	\n";
echo "										</div>\n";
echo "									</div>\n";
echo "								</span>\n";
echo "							</div>\n";
echo "						</div>\n";
echo "					</div>\n";
echo "				</div>\n";
echo "			</div>\n";
echo "		</div>\n";
echo "		<nav class=\"navbar navbar-dark bg-dark\">\n";
echo "			<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggleExternalContent\" aria-controls=\"navbarToggleExternalContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">\n";
echo "				<span class=\"navbar-toggler-icon\"></span>\n";
echo "			</button>\n";
echo "			<div class=\"mx-auto text-light\" style=\"width: 800px;\">\n";
echo "				<h2>Автомобильные технические характеристики</h2>\n";
echo "			</div>\n";
echo "		</nav>\n";
echo "	</div>\n";
echo "\n";
echo "\n";
echo "	<div class=\"modal fade\" id=\"exampleModal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">\n";
echo "		<div class=\"modal-dialog\" role=\"document\">\n";
echo "			<div class=\"modal-content\">\n";
echo "				<div class=\"modal-header\">\n";
echo "					<h5 class=\"modal-title\" id=\"exampleModalLabel\">Вход</h5>\n";
echo "					<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">\n";
echo "						<span aria-hidden=\"true\">&times;</span>\n";
echo "					</button>\n";
echo "				</div>\n";
echo "				<div class=\"modal-body\">\n";
echo "\n";
echo "					<form class=\"form-inline\">	\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Name</div>\n";
echo "							</div>\n";
echo "							<input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroupUsername2\" placeholder=\"Имя пользователя\">\n";
echo "						</div>\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Password</div>\n";
echo "							</div>\n";
echo "							<input type=\"Password\" class=\"form-control\" id=\"inlineFormInputGroupUsername2\" placeholder=\"Пароль\">\n";
echo "						</div>\n";
echo "					</form>\n";
echo "\n";
echo "				</div>\n";
echo "				<div class=\"modal-footer\">\n";
echo "					<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Закрыть</button>\n";
echo "					<button type=\"button\" class=\"btn btn-primary\">Войти</button>\n";
echo "				</div>\n";
echo "			</div>\n";
echo "		</div>\n";
echo "	</div>\n";
echo "\n";
echo "\n";
echo "	<div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">\n";
echo "		<div class=\"modal-dialog\" role=\"document\">\n";
echo "			<div class=\"modal-content\">\n";
echo "				<div class=\"modal-header\">\n";
echo "					<h5 class=\"modal-title\" id=\"exampleModalLabel\">Окно регистрации</h5>\n";
echo "					<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">\n";
echo "						<span aria-hidden=\"true\">&times;</span>\n";
echo "					</button>\n";
echo "				</div>\n";
echo "				<div class=\"modal-body\">\n";
echo "\n";
echo "					<form class=\"form-inline\">	\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Name</div>\n";
echo "							</div>\n";
echo "							<input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroupUsername2\" placeholder=\"Имя пользователя\">\n";
echo "						</div>\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Password</div>\n";
echo "							</div>\n";
echo "							<input type=\"Password\" class=\"form-control\" id=\"inlineFormInputGroupUsername2\" placeholder=\"Пароль\">\n";
echo "						</div>\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Email</div>\n";
echo "							</div>\n";
echo "							<input type=\"Email\" class=\"form-control\" id=\"inlineFormInputGroupUsername2\" placeholder=\"example@mail.ru\">\n";
echo "						</div>\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Phone</div>\n";
echo "							</div>\n";
echo "							<input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroupUsername2\" placeholder=\"8-963-741-55-32\">\n";
echo "						</div>\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">City</div>\n";
echo "							</div>\n";
echo "							<input type=\"text\" class=\"form-control\" id=\"inlineFormInputGroupUsername2\" placeholder=\"Белгород\">\n";
echo "						</div>\n";
echo "					</form>\n";
echo "\n";
echo "				</div>\n";
echo "				<div class=\"modal-footer\">\n";
echo "					<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Закрыть</button>\n";
echo "					<button type=\"button\" class=\"btn btn-primary\">Зарегестрировать</button>\n";
echo "				</div>\n";
echo "			</div>\n";
echo "		</div>\n";
echo "	</div>\n";
echo "\n";
echo "	<div class=\"list\">\n";
echo "		<div class=\"container-fluid bg-light\">\n";
echo "			<div class=\"row\">\n";
echo "				<div class=\"col-2\">\n";
echo "					<ul class=\"list-group\">\n";
echo "						<li class=\"list-group-item d-flex justify-content-between align-items-center\">\n";
echo "							<div class=\"alist\"><a class=\"alist\" href=\"#\">ВАЗ</a></div>\n";
echo "							<span class=\"badge badge-dark badge-pill\">14</span>\n";
echo "						</li>\n";
echo "						<li class=\"list-group-item d-flex justify-content-between align-items-center\">\n";
echo "							<div class=\"alist\"><a href=\"#\">Nissan</a></div>\n";
echo "							<span class=\"badge badge-dark badge-pill\">2</span>\n";
echo "						</li>\n";
echo "						<li class=\"list-group-item d-flex justify-content-between align-items-center\">\n";
echo "							<div class=\"alist\"><a href=\"#\">Hyndai</a></div>\n";
echo "							<span class=\"badge badge-dark badge-pill\">7</span>\n";
echo "						</li>\n";
echo "						<li class=\"list-group-item d-flex justify-content-between align-items-center\">\n";
echo "							<div class=\"alist\"><a href=\"#\">BMV</a></div>\n";
echo "							<span class=\"badge badge-dark badge-pill\">2</span>\n";
echo "						</li>\n";
echo "						<li class=\"list-group-item d-flex justify-content-between align-items-center\">\n";
echo "							<div class=\"alist\"><a href=\"#\">Mersedes</a></div>\n";
echo "							<span class=\"badge badge-dark badge-pill\">4</span>\n";
echo "						</li>\n";
echo "						<li class=\"list-group-item d-flex justify-content-between align-items-center\">\n";
echo "							<div class=\"alist\"><a href=\"#\">Audi</a></div>\n";
echo "							<span class=\"badge badge-dark badge-pill\">3</span>\n";
echo "						</li>\n";
echo "						<li class=\"list-group-item d-flex justify-content-between align-items-center\">\n";
echo "							<div class=\"alist\"><a href=\"#\">Chevrolet</a></div>\n";
echo "							<span class=\"badge badge-dark badge-pill\">5</span>\n";
echo "						</li>\n";
echo "						<li class=\"list-group-item d-flex justify-content-between align-items-center\">\n";
echo "							<div class=\"alist\"><a href=\"#\">Renault</a></div>\n";
echo "							<span class=\"badge badge-dark badge-pill\">9</span>\n";
echo "						</li>\n";
echo "					</ul>\n";
echo "				</div>\n";
echo "				<div class=\"col-10\">\n";
echo "					<div class=\"container-fluid\">\n";
echo "						<div class=\"mx-auto\" style=\"width: 700px;\">\n";
echo "							<div class=\"card\" style=\"width: 35rem;\">\n";
echo "								<img class=\"card-img-top\" src=\"audi.jpg\" alt=\"Card image cap\">\n";
echo "								<div class=\"card-body\">\n";
echo "									<h4>Audi RS7</h4>\n";
echo "								</div>\n";
echo "							</div>\n";
echo "						</div>\n";
echo "\n";
echo "						<table class=\"table\">\n";
echo "							<colgroup>\n";
echo "								<col class=\"col-md-4 col-ml-4\">\n";
echo "								<col class=\"col-md-8 col-ml-4\">\n";
echo "							</colgroup>\n";
echo "							<thead class=\"thead-light\">\n";
echo "								<tr>\n";
echo "									<th colspan=\"2\">Основные характеристики</th>\n";
echo "								</tr>\n";
echo "							</thead>\n";
echo "							<tbody>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Тип кузова</th>\n";
echo "									<td>Купе</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Количество дверей</th>\n";
echo "									<td>5</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Количество мест</th>\n";
echo "									<td>5</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Класс автомобиля</th>\n";
echo "									<td>F</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Положение руля</th>\n";
echo "									<td>Слева</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Страна производитель</th>\n";
echo "									<td>Германия</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Выпуск с, год</th>\n";
echo "									<td>2017</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Выпуск по, год</th>\n";
echo "									<td>2018</td>\n";
echo "								</tr>\n";
echo "							</tbody>\n";
echo "						</table>\n";
echo "\n";
echo "						<table class=\"table\">\n";
echo "							<colgroup>\n";
echo "								<col class=\"col-md-4\">\n";
echo "								<col class=\"col-md-8\">\n";
echo "							</colgroup>\n";
echo "							<thead class=\"thead-light\">\n";
echo "								<tr>\n";
echo "									<th colspan=\"2\">Двигатель</th>\n";
echo "								</tr>\n";
echo "							</thead>\n";
echo "							<tbody>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Объем</th>\n";
echo "									<td>3993</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Мощность лс/КВт/об мин</th>\n";
echo "									<td>560/412/6600</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Крутящий момент Н/об мин</th>\n";
echo "									<td>700/5500</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Наддув</th>\n";
echo "									<td>Турбонаддув</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Система подачи топлива</th>\n";
echo "									<td>Инжекторный, непосредственный</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Клапанов на цилиндр</th>\n";
echo "									<td>4</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Топливо</th>\n";
echo "									<td>АИ-95</td>\n";
echo "								</tr>\n";
echo "							</tbody>\n";
echo "						</table>\n";
echo "\n";
echo "						<table class=\"table\">\n";
echo "							<colgroup>\n";
echo "								<col class=\"col-md-4\">\n";
echo "								<col class=\"col-md-8\">\n";
echo "							</colgroup>\n";
echo "							<thead class=\"thead-light\">\n";
echo "								<tr>\n";
echo "									<th colspan=\"2\">Трансмиссия</th>\n";
echo "								</tr>\n";
echo "							</thead>\n";
echo "							<tbody>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Тип привода</th>\n";
echo "									<td>Постоянный, на все колеса</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Тип КПП</th>\n";
echo "									<td>Автоматическая 8 ст.</td>\n";
echo "								</tr>\n";
echo "							</tbody>\n";
echo "						</table>\n";
echo "\n";
echo "						<table class=\"table\">\n";
echo "							<colgroup>\n";
echo "								<col class=\"col-md-4\">\n";
echo "								<col class=\"col-md-8\">\n";
echo "							</colgroup>\n";
echo "							<thead class=\"thead-light\">\n";
echo "								<tr>\n";
echo "									<th colspan=\"2\">Подвеска</th>\n";
echo "								</tr>\n";
echo "							</thead>\n";
echo "							<tbody>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Передняя</th>\n";
echo "									<td>Независимая</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Задняя</th>\n";
echo "									<td>Независимая</td>\n";
echo "								</tr>\n";
echo "							</tbody>\n";
echo "						</table>\n";
echo "\n";
echo "						<table class=\"table\">\n";
echo "							<colgroup>\n";
echo "								<col class=\"col-md-4\">\n";
echo "								<col class=\"col-md-8\">\n";
echo "							</colgroup>\n";
echo "							<thead class=\"thead-light\">\n";
echo "								<tr>\n";
echo "									<th colspan=\"2\">Расход и динамика</th>\n";
echo "								</tr>\n";
echo "							</thead>\n";
echo "							<tbody>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Разгон до 100 км/ч</th>\n";
echo "									<td>3,9</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Расход город л на 100 км</th>\n";
echo "									<td>13,9</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Расход трасса л на 100 км</th>\n";
echo "									<td>7,5</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Расход смешанный л на 100 км</th>\n";
echo "									<td>9,8</td>\n";
echo "								</tr>\n";
echo "							</tbody>\n";
echo "						</table>\n";
echo "					</div>\n";
echo "				</div>\n";
echo "			</div>\n";
echo "		</div>\n";
echo "	</div>\n";
echo "	\n";
echo "	<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>\n";
echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>\n";
echo "    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\" crossorigin=\"anonymous\"></script>\n";
echo "</body>\n";
echo "</html>\n";