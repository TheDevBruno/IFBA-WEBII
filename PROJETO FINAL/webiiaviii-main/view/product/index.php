<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Produtos</h2>
                </div>
                <div class="col-sm-6">
                    <i class="material-icons">&#xE147;</i> <span>Adicionar Novo Produto</span></a>
                </div>
            </div>
        </div>
        <table>
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            <?php $products = $data['products']; ?>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <td><?php echo $product->getIdproduct(); ?></td>
                    <td><a href="index.php?product=show&id=<?php echo $product->getIdproduct(); ?>"><?= $product->getDesproduct(); ?></a></td>
                    <td><?php echo 'R$'.$product->getVlprice(); ?></td>
                    <td>
                        <i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i>
                        <i class="material-icons" data-toggle="tooltip" title="Deletar">&#xE872;</i>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
