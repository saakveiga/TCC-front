<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!--NÃO ALTERAR-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedores</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <!--NÃO ALTERAR-->
    <!--ADICIONE ICONS, CSS ABAIXO-->
</head>

<body>
    <!--NÃO ALTERAR NAV BAR-->
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 sidebar">
                <div class="logo">
                    <h2 class="text-center text-white">Logo do Cliente</h2>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Produtos
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><a href="">Cadastrar Produto</a></li>
                                    <li><a href="">Listar Produtos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Pedidos
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><a href="">Realizar Pedido</a></li>
                                    <li><a href="">Listar Pedidos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Fornecedores
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><a href="">Cadastrar Fornecedor</a></li>
                                    <li><a href="">Listar Fornecedores</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Funcionários
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><a href="">Cadastrar Funcionários</a></li>
                                    <li><a href="">Listar Funcionarios</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Estoque
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><a href="">Atualizar Estoque</a></li>
                                    <li><a href="visualizar-estoque.html">Visualizar Estoque</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn btn-link Z" type="button" data-toggle="collapse"
                                    data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Equipamentos
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <ul>
                                    <li><a href="">Registrar Equipamentos</a></li>
                                    <li><a href="">Listar Equipamentos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!--NÃO ALTERAR-->
            <main class="col-md-10 main-content">
                <div class="header">
                    <h1>TÍTULO DO TRABALHO</h1>
                    <div class="user-info">
                        <img src="https://via.placeholder.com/40" alt="User Avatar">
                        <div class="text">
                            <p>Funcionário666</p>
                            <p>Função xyz</p>
                        </div>
                    </div>
                </div>
                <!--NÃO ALTERAR-->
                <!--ADICIONE OS CAMPOS ABAIXO-->
                <form action="create.php" method="POST">
                <form class="row g-3">
  <div class="col-md-6">
    <label for="produto_id" class="form-label">ID do produto</label>
    <input type="ID" class="form-control" id="produto_id">
  </div>
  <div class="col-md-6">
    <label for="quantidade" class="form-label">Quantidade de produtos</label>
    <input type="INT" class="form-control">
  </div>
  <div class="col-md-4">
    <label for="tipo_movimentacao" class="form-label"></label>
    <select id="tipo_movimentacao" class="form-select">
      <option selected>TIPO DE MOVIMENTAÇÃO</option>
      <option>ENTRADA</option>
      <option>SAÍDA</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">ENVIAR</button>
  </div>
</form>
    </form>

                <!--NÃO ALTERAR-->
            </main>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--NÃO ALTERAR-->
    <!--ADICIONE O JS ABAIXO-->

</body>

</html>