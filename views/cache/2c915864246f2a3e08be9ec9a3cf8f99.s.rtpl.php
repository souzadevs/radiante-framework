<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container-fluid">
    <div class="row">

    </div>
    <div class="row mt-5">
        PRODUTOS
    </div>
    <div class="space mt-5">
        space
    </div>
    <div class="row mt-5">
        <button class="btn btn-success">
            Novo <i class="fas fa-plus    "></i>
        </button>
    </div>
    <div class="row mt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Descrição</td>
                    <td>Preço</td>
                    <td>Qnt. Estoque</td>
                    <td>Editar</td>
                    <td>Ver</td>
                    <td>Excluir</td>
                </tr>
            </thead>
            <tbody>
                <?php $counter1=-1;  if( isset($produtos) && ( is_array($produtos) || $produtos instanceof Traversable ) && sizeof($produtos) ) foreach( $produtos as $key1 => $value1 ){ $counter1++; ?>
                <tr>
                    <td><?php echo $value1["id"]; ?></td>
                    <td><?php echo $value1["descricao"]; ?></td>
                    <td><?php echo $value1["preco"]; ?></td>
                    <td><?php echo $value1["estoque"]; ?></td>
                    <td><i class="fas fa-edit"></i></td>
                    <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                    <td><i class="fa fa-trash" aria-hidden="true"></i></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>