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

<table>
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
        <tr>
            <td>precoDe</td>
            <td>Preço de início para o intervalo de pesquisa</td>
        </tr>
        <tr>
            <td>precoAte</td>
            <td>Preço de fim para o intervalo de pesquisa</td>
        </tr>
        <tr>
            <td>origem</td>
            <td>Origem do veículo, para mais de uma origem deve ser enviado separado por '-'. Ex: ?origem=particular-revenda</td>
        </tr>
        <tr>
            <td>estado</td>
            <td>Estado do veículo, para mais de um estado deve ser enviado separado por '-'. Ex: ?estado=novo-seminovo</td>
        </tr>
        <tr>
            <td>placaId</td>
            <td>Placa ou código do veículo</td>
        </tr>
</table>