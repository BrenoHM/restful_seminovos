## Api de carros

### Instalação da API

    $ git clone https://github.com/BrenoHM/restful_seminovos.git
    $ cd restful_seminovos
    $ composer install

### Criação da tabela do banco de dados

    $ php artisan migrate:refresh --seed

### Rodando o servidor

    $ php artisan serve

### Ex: Listagem de todos os veículos

    Request:

    http://localhost:8000/api/cars/

    Response:

    [
        {
            "id": 1,
            "tipoVeiculo": 1,
            "marca": 4,
            "modelo": 25,
            "ano": 2015,
            "preco": 20000,
            "origem": "particular",
            "estado": "seminovo",
            "placaId": "HUN-2550",
            "created_at": "2019-11-01 18:35:55",
            "updated_at": null
        },
        {
            "id": 2,
            "tipoVeiculo": 2,
            "marca": 5,
            "modelo": 50,
            "ano": 2018,
            "preco": 10000,
            "origem": "revenda",
            "estado": "novo",
            "placaId": "1550",
            "created_at": "2019-11-01 18:35:55",
            "updated_at": null
        },
        {
            "id": 3,
            "tipoVeiculo": 3,
            "marca": 10,
            "modelo": 55,
            "ano": 2019,
            "preco": 150000,
            "origem": "particular",
            "estado": "novo",
            "placaId": "1551",
            "created_at": "2019-11-01 18:35:55",
            "updated_at": null
        },
        {
            "id": 4,
            "tipoVeiculo": 1,
            "marca": 10,
            "modelo": 55,
            "ano": 2017,
            "preco": 30000,
            "origem": "revenda",
            "estado": "seminovo",
            "placaId": "HMV-2567",
            "created_at": "2019-11-01 18:35:55",
            "updated_at": null
        }
    ]

### Ex: Listagem de um determinado veículo

    Request:

    http://localhost:8000/api/cars/1

    Response:

    {
        "id": 1,
        "tipoVeiculo": 1,
        "marca": 4,
        "modelo": 25,
        "ano": 2015,
        "preco": 20000,
        "origem": "particular",
        "estado": "seminovo",
        "placaId": "HUN-2550",
        "created_at": "2019-11-01 18:35:55",
        "updated_at": null
    }

### Ex: Listagem utilizando todos os filtros

    Request: 
    
    http://localhost:8000/api/cars/?tipoVeiculo=1&marca=4&modelo=25&anoDe=2015&anoAte=2017&precoDe=20000&precoAte=150000&origem=particular-revenda&estado=novo-seminovo&placaId=HUN-2550

    Response:

    [
        {
            "id": 1,
            "tipoVeiculo": 1,
            "marca": 4,
            "modelo": 25,
            "ano": 2015,
            "preco": 20000,
            "origem": "particular",
            "estado": "seminovo",
            "placaId": "HUN-2550",
            "created_at": "2019-11-01 18:35:55",
            "updated_at": null
        }
    ]

### Parametros

<table style="width:100%;">
    <thead>
        <tr>
            <td><strong>Parâmetro</strong></td>
            <td><strong>Descriçao</strong></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>tipoVeiculo</td>
            <td>Tipo do veículo: carro, moto ou caminhão (1,2,3)</td>
        </tr>
        <tr>
            <td>marca</td>
            <td>Marca do veículo</td>
        </tr>
        <tr>
            <td>modelo</td>
            <td>Modelo do veículo</td>
        </tr>
        <tr>
            <td>anoDe</td>
            <td>Ano de início para o intervalo</td>
        </tr>
        <tr>
            <td>anoAte</td>
            <td>Ano de fim para o intervalo</td>
        </tr>
    </tbody>
</table>

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
