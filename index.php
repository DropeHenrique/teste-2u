<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Cadastro</h2>
    <form action="salvar.php" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" required onkeypress="$(this).mask('00.000-000')">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
        <div class="alert alert-success mt-3">
            Cadastro salvo com sucesso!
        </div>
    <?php elseif (isset($_GET['success']) && $_GET['success'] == 'false'): ?>
        <div class="alert alert-danger mt-3">
            Erro ao salvar o cadastro: <?php echo $_GET['error']; ?>
        </div>
    <?php endif; ?>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="scripts/cep.js"></script>
<script src="scripts/toast.js"></script>
</body>
</html>
