<html>
    <div>
        <form action="../Controll/formulario.php?action=salvar" method="post">

            <label>Nome</label>
            <input name="nome" type="text">

            <label>Email</label>
            <input name="email" type="text">
            
            <label>Senha</label>
            <input name="senha" type="password">

            <label>Confirmar Senha</label>
            <input name="senha2" type="password">

            <input type="submit">
        </form>
    </div>

    <?php
        require("../Model/formularioModel.php");

        $formularioModel = new FormularioModel();

        while(mysqli_fetch_assoc($formularioModel->getProjetos()))
        {
            
        }
    ?>

</html>