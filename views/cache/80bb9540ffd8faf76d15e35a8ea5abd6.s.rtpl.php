<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Produtos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Início</a></li>
                        <li class="breadcrumb-item active">Produtos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Button trigger modal -->
                    <button class="btn btn-success w-25" data-toggle="modal" data-target="#novo-produto">
                        Novo <i class="fas fa-plus    "></i>
                    </button>
                    <?php if( $store_success ){ ?>
                    <div class="alert alert-success">
                        Cliente cadastrado com sucesso! <i class="fas fa-check-circle"></i>
                    </div>
                    <?php } ?>

                    <?php if( true ){ ?>
                    <div class="alert alert-danger">
                        Falha ao salvar cliente! <i class="fas fa-window-close    "></i>
                    </div>
                    <?php } ?>

                    <!-- Modal 'Novo +'-->
                    <div class="modal fade" id="novo-produto" tabindex="-1" role="dialog" aria-labelledby="novo-produto"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Novo cliente</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <form method="POST" action="/cliente/novo">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="nome">Nome completo</label>
                                                    <input type="text" name="nome" class="form-control" id="nome"
                                                        placeholder="Nome completo...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="cpf">CPF</label>
                                                    <input type="text" name="rg" class="form-control" id="cpf"
                                                        placeholder="CPF...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">E-mail</label>
                                                    <input type="email" name="email" class="form-control" id="email"
                                                        placeholder="E-mail...">
                                                </div>
                                                <div class="form-group">
                                                    <label for="cpf">CPF</label>
                                                    <input type="text" name="rg" class="form-control" id="cpf"
                                                        placeholder="CPF...">
                                                </div>
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="senha">Senha</label>
                                                                    <input type="text" name="senha" class="form-control"
                                                                        id="senha" placeholder="Senha...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="senha">Confirme a senha</label>
                                                                    <input type="text" name="senha" class="form-control"
                                                                        id="senha" placeholder="Senha...">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Salvar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Produtos</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <input class="form-control" type="text" name="id" id="id"
                                            placeholder="Pesquisa...">
                                    </tr>
                                    <tr>
                                        <th>ID</th>
                                        <th>Descrição</th>
                                        <th>Preço</th>
                                        <th>Estoque</th>
                                        <th>Editar</th>
                                        <th>Ver</th>
                                        <th>Excluir</th>
                                    </tr>

                                </thead>
                                <tbody id="datatable1">
                                    <?php $counter1=-1;  if( isset($produtos) && ( is_array($produtos) || $produtos instanceof Traversable ) && sizeof($produtos) ) foreach( $produtos as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                        <td><?php echo $value1["id"]; ?></td>
                                        <td><?php echo $value1["descricao"]; ?></td>
                                        <td><?php echo $value1["preco"]; ?></td>
                                        <td><?php echo $value1["estoque"]; ?></td>
                                        <td><i class="fas fa-edit    "></i></td>
                                        <td><i class="fas fa-eye    "></i></td>
                                        <td><i class="fas fa-trash    "></i></td>
                                    </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>