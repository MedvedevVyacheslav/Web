<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$dbconn = pg_connect("host=localhost port=5432 dbname=carsdb user=admin password=12345")
or die('Не удалось соединиться c субд: ' . pg_last_error());

require __DIR__ . '/../config/db.php';
//require __DIR__ . '/../web/markup/in.php';

//$config = require __DIR__ . '/../web/markup/in.php';

//(new yii\web\Application($config))->run();

//для входа
if ($_POST[ilogin] != '' and $_POST[ipass]){
    $qi = "SELECT COUNT(*) as cn FROM users WHERE login = '$_POST[ilogin]' and password = '$_POST[ipass]'";
    $ri = pg_query($qi) or die('Ошибка запроса: ' . pg_last_error());
    $buf = pg_fetch_array($ri, null, PGSQL_ASSOC);
    if ($buf[cn] > 0){
        echo "<script>alert('Вход успешен!');</script>";
        $log = $_POST[ilogin];
    }else{
        echo "<script>alert('Ошибка авторизации!');</script>";
        $log = '';
    }
}

//для регистрации
if (isset($_POST[login]) and isset($_POST[password]) and isset($_POST[mail]) and ($_POST[login] != '' and $_POST[password] != '' and $_POST[mail] != '')){
    $odb['login'] = $_POST[login];
    $odb['password'] = $_POST[password];
    $odb['mail'] = $_POST[mail];
    $odb['phone'] = $_POST[phone];
    $odb['city'] = $_POST[city];
    add_user($odb);
} else {

}

if (isset($_GET['query'])) {
    $id = $_GET['query'];
} else {
    $id = 1;
}

$query = "SELECT * FROM cars WHERE id = '$id'";
$result = pg_query($query) or die('Ошибка запроса: ' . pg_last_error());

$querymar = 'SELECT distinct marka FROM cars';
$marki = pg_query($querymar) or die('Ошибка запроса: ' . pg_last_error());


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
echo "                                  <span class='text-info' style='margin-left: 20px;font-size: 25px; font-family: cursive'>$log</span>";
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
echo "					<form method='post' class=\"form-inline\">	\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Name</div>\n";
echo "							</div>\n";
echo "							<input type=\"text\" name='ilogin' class=\"form-control\" id=\"inlineFormInputGroupUsername2\" placeholder=\"Логин\">\n";
echo "						</div>\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Password</div>\n";
echo "							</div>\n";
echo "							<input type=\"Password\" name='ipass' class=\"form-control\" id=\"inlineFormInputGroupUsername2\" placeholder=\"Пароль\">\n";
echo "						</div>\n";
echo "\n";
echo "				</div>\n";
echo "				<div class=\"modal-footer\">\n";
echo "					<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Закрыть</button>\n";
echo "					<button type=\"submit\" class=\"btn btn-primary\">Войти</button>\n";
echo "				</div>\n";
echo "					</form>\n";
echo "			</div>\n";
echo "		</div>\n";
echo "	</div>\n";
echo "\n";
echo "\n";
echo "	<div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">\n";
echo "		<div class=\"modal-dialog\" role=\"document\">\n";
echo "			<div class=\"modal-content\">\n";
echo "				<div class=\"modal-header\">\n";
echo "					<h5 class=\"modal-title\" id=\"exampleModalLabel\">Окошко регистрации</h5>\n";
echo "					<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">\n";
echo "						<span aria-hidden=\"true\">&times;</span>\n";
echo "					</button>\n";
echo "				</div>\n";
echo "				<div class=\"modal-body\">\n";
echo "\n";
echo "					<form class=\"form-inline\" method='post'>	\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">login</div>\n";
echo "							</div>\n";
echo "							<input type=\"text\" class=\"form-control\" name='login' id=\"inlineFormInputGroupUsername2\" placeholder=\"Имя пользователя\">\n";
echo "						</div>\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Password</div>\n";
echo "							</div>\n";
echo "							<input type=\"Password\" class=\"form-control\" name='password' id=\"inlineFormInputGroupUsername2\" placeholder=\"Пароль\">\n";
echo "						</div>\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Email</div>\n";
echo "							</div>\n";
echo "							<input type=\"Email\" class=\"form-control\" name='mail' id=\"inlineFormInputGroupUsername2\" placeholder=\"example@mail.ru\">\n";
echo "						</div>\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">Phone</div>\n";
echo "							</div>\n";
echo "							<input type=\"text\" class=\"form-control\" name='phone' id=\"inlineFormInputGroupUsername2\" placeholder=\"8-963-741-55-32\">\n";
echo "						</div>\n";
echo "						<div class=\"input-group mb-2 mr-sm-2\">\n";
echo "							<div class=\"input-group-prepend\">\n";
echo "								<div class=\"input-group-text\">City</div>\n";
echo "							</div>\n";
echo "							<input type=\"text\" class=\"form-control\" name='city' id=\"inlineFormInputGroupUsername2\" placeholder=\"Белгород\">\n";
echo "						</div>\n";
echo "				        <div class=\"container-fluid\">\n";
echo "					        <button type=\"submit\" class=\"btn btn-primary float-right\">Зарегестрировать</button>\n";
echo "					        <button type=\"button\" class=\"btn btn-secondary float-right\" data-dismiss=\"modal\">Закрыть</button>\n";
echo "				        </div>\n";
echo "					</form>\n";
echo "\n";
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
                            //формирование списка марок
while ($marka = pg_fetch_array($marki, null, PGSQL_ASSOC)) {
    echo "						<li class=\"list-group-item d-flex justify-content-between align-items-center\">\n";
    echo "							<div class=\"alist\"><strong>$marka[marka]</strong></div>\n";
$str = $marka[marka];
str_replace(' ', '', $str);
$query1 = "SELECT count(*) as cnt FROM cars WHERE marka = '$str'";
$count = pg_query($query1) or die('Ошибка запроса: ' . pg_last_error());
$cnt = pg_fetch_array($count, null, PGSQL_ASSOC);
    echo "							<span class=\"badge badge-dark badge-pill\">$cnt[cnt]</span>\n";
//выбрать все машины данной марки
    $querymar1 = "SELECT nameauto FROM cars where marka = '$str'";
    $name = pg_query($querymar1) or die('Ошибка запроса: ' . pg_last_error());
    while ($nameline = pg_fetch_array($name, null, PGSQL_ASSOC)) {
        echo "						<li class=\"list-group-item d-flex justify-content-between align-items-center\">\n";
        $getid = "SELECT id FROM cars WHERE nameauto = '$nameline[nameauto]'";
        $idcar = pg_query($getid) or die('Ошибка запроса: ' . pg_last_error());
        $q = pg_fetch_array($idcar, null, PGSQL_ASSOC);
        echo "							<div class=\"alist\"><a href=\"index.php?query=$q[id]\">$nameline[nameauto]</a></div>\n";
    }
    echo "						</li>\n";
}

echo "					</ul>\n";
echo "				</div>\n";
$line = pg_fetch_array($result, null, PGSQL_ASSOC);
echo "				<div class=\"col-10\">\n";
echo "					<div class=\"container-fluid\">\n";
echo "						<div class=\"mx-auto\" style=\"width: 700px;\">\n";
echo "							<div class=\"card\" style=\"width: 35rem;\">\n";
echo "								<img class=\"card-img-top\" src=$line[path] alt=\"Card image cap\">\n";
echo "								<div class=\"card-body\">\n";
echo "									<h4>$line[nameauto]</h4>\n";
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
echo "									<td>$line[type]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Количество дверей</th>\n";
echo "									<td>$line[colvodver]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Количество мест</th>\n";
echo "									<td>$line[colvomest]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Класс автомобиля</th>\n";
echo "									<td>$line[class]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Положение руля</th>\n";
echo "									<td>$line[rul]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Страна производитель</th>\n";
echo "									<td>$line[madein]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Выпуск с, год</th>\n";
echo "									<td>$line[years]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Выпуск по, год</th>\n";
echo "									<td>$line[yearpo]</td>\n";
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
echo "									<td>$line[v]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Мощность лс/КВт/об мин</th>\n";
echo "									<td>$line[n]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Крутящий момент Н/об мин</th>\n";
echo "									<td>$line[moment]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Наддув</th>\n";
echo "									<td>$line[naduv]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Система подачи топлива</th>\n";
echo "									<td>$line[podachatopliva]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Клапанов на цилиндр</th>\n";
echo "									<td>$line[colclapan]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Топливо</th>\n";
echo "									<td>$line[toplivo]</td>\n";
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
echo "									<td>$line[typepriv]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Тип КПП</th>\n";
echo "									<td>$line[typekpp]</td>\n";
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
echo "									<td>$line[pered]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Задняя</th>\n";
echo "									<td>$line[zad]</td>\n";
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
echo "									<td>$line[razgon]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Расход город л на 100 км</th>\n";
echo "									<td>$line[gorod]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Расход трасса л на 100 км</th>\n";
echo "									<td>$line[trassa]</td>\n";
echo "								</tr>\n";
echo "								<tr>\n";
echo "									<th scope=\"row\">Расход смешанный л на 100 км</th>\n";
echo "									<td>$line[combi]</td>\n";
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

pg_close($dbconn);

?>

<script>

</script>
