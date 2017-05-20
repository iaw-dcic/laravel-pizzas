## Clase Laravel


### Crear proyecto con Code Envy

[![Contribute](http://beta.codenvy.com/factory/resources/codenvy-contribute.svg)](https://codenvy.io/f?id=factory8am4z8kcpq1mkpgp)

Una vez creada la máquina virtual, se debe crear la base de datos correspondiente y ejecutar los comandos

`php artisan migrate`

`php artisan db:seed`

Configuración inicial para ejecutar despues de que la máquina virtual estuvo pausada

Command line: 

```
sudo service mysql start &&
cd ${current.project.path} &&
cp .env.example .env &&
composer update &&
php artisan key:generate && 
php artisan serve --host=0.0.0.0 --port=3000
```

Preview URL: 

```
http://${server.port.3000}
```

Configuración normal, una vez que ya está en funcionamiento el proyecto

Command line: 

```
cd ${current.project.path} && php artisan serve --host=0.0.0.0 --port=3000
```

Preview URL: 

```
http://${server.port.3000}
```

`composer create-project --prefer-dist laravel/laravel pizzas`

`php artisan migrate`

`php artisan make:model Pizza -mc`

`php artisan migrate`

# model:

```
            $table->string('nombre');
            $table->integer('precio');
            $table->string('tipo');
```

`php artisan tinker`

# controller:

```
		use App\Pizza;

		$pizzas = Pizza::all();
		return view('pizzas.index', compact('pizzas'));
```

# view: (pizzas.index.blade.php)

```
	<?php foreach ($pizzas as $pizza) : ?>
		<li><?= $pizza->nombre ?></li>	
	<?php endforeach ?>
```
```
	@foreach ($pizzas as $pizza)
		<li>{{$pizza->nombre}}</li>	
	@endforeach
```
```
 						@foreach ($pizzas as $pizza)
							<tr id='{{$pizza->id}}'>
								<td><input type="checkbox"></td>
								<td>{{$pizza->nombre}}</td>
								<td>{{$pizza->precio}}</td>
							</tr>	
						@endforeach
```

# Route:

`Route::get('/pizzas', 'PizzaController@index');`

`Route::get('/pizzas/json', 'PizzaController@json');`


# Controller

```
	public function json() {
		return Pizza::all();
	}
```

```
 wget https://raw.githubusercontent.com/iaw-dcic/js-dom/master/images/background-760x760.jpg
 wget https://raw.githubusercontent.com/iaw-dcic/js-dom/master/images/background-wood.jpg
 wget https://raw.githubusercontent.com/iaw-dcic/js-dom/master/images/pattern.png
```


# ajax

```
$(function() {
    $.ajax({
        url: "/pizzas/json",
        context: document.body,
        success: function (data) {
            pedido = data;
            mostrarPizzas(ordenarPizzas(data));
        }
    });
});
```







<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- **[Codecourse](https://www.codecourse.com)**
- [Fragrantica](https://www.fragrantica.com)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
