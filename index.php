<?php
include_once('templates/header.php');
?>

<div class="container">
    <?php if (isset($printMsg) && $printMsg != '') : ?>
        <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Lista de E-mails</h1>
    <?php if (count($emails) > 0) : ?>
        <table class="table" id="emails-table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Setor</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ramal</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($emails as $email) : ?>
                    <tr>
                        <td scope="row">
                            <?= $email["nome"] ?>
                        </td>
                        <td scope="row">
                            <?= $email["setor"] ?>
                        </td>
                        <td scope="row">
                            <?= $email["email"] ?>
                        </td>
                        <td scope="row">
                            <?= $email["ramal"] ?>
                        </td>
                        <td class="actions">
                            <a href="#"><i class="fas fa-eye check-icon"></i></a>
                            <a href="#"><i class="far fa-edit edit-icon"></i></a>
                            <button class="delete-btn" type="submit">
                                <i class="fa-solid fa-trash delete-icon"></i>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p id="empty-list-text">Não há e-mails cadastrados, <a href="<?= $BASE_URL ?>/create.php">clique aqui para adicionar</a>.</p>
    <?php endif; ?>
</div>

<?php
include_once('templates/footer.php');
?>