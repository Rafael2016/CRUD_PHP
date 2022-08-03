<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Listagem Usuários</h3>

            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Login</th>
                <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($dados as $dado): ?>   
                <tr>
                    <td><?= $dado['id'] ?></td>
                    <td><?= $dado['nome'] ?></td>
                    <td><?= $dado['email'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
           
        <div class=" col-md-3"></div>
    </div>
</div>