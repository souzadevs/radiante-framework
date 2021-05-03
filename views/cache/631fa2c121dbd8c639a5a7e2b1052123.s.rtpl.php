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
                    <button class="btn btn-success w-25">
                        Novo <i class="fas fa-plus    "></i>
                    </button>
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
                                <tbody id="datatable1" >
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