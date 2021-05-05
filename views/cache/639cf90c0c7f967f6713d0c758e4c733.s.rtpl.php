<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Vendas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Início</a></li>
                        <li class="breadcrumb-item active">Vendas</li>
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
                        Venda realizada com sucesso! <i class="fas fa-check-circle"></i>
                    </div>
                    <?php } ?>

                    <?php if( $store_failure ){ ?>
                    <div class="alert alert-danger mt-2">
                        Falha ao salvar venda! <i class="fas fa-window-close    "></i>
                    </div>
                    <?php } ?>

                    <!-- Modal 'Novo +'-->

                    <div class="card mt-2">
                        <div class="card-header">
                            <h3 class="card-title">Vendas</h3>
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
                                        <th>Cliente</th>
                                        <th>Produto</th>
                                        <th>Data/Hora</th>
                                        <th>Editar</th>
                                        <th>Ver</th>
                                        <th>Excluir</th>
                                    </tr>

                                </thead>
                                <tbody id="datatable1">
                                    <?php $counter1=-1;  if( isset($vendas) && ( is_array($vendas) || $vendas instanceof Traversable ) && sizeof($vendas) ) foreach( $vendas as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                        <td><?php echo $value1["id"]; ?></td>
                                        <td><?php echo $value1["cliente"]; ?></td>
                                        <td><?php echo $value1["produto"]; ?></td>
                                        <td><?php echo $value1["datetime"]; ?></td>
                                        <td><i class="mx-auto fas fa-edit"></i></td>
                                        <td><i class="mx-auto fas fa-eye"></i></td>
                                        <td><i class="mx-auto fas fa-trash"></i></td>
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