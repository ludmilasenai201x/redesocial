<?php
//Create
function inserir($con,$dados){
    $stmt = $con->prepare(
        "INSERT INTO USUARIOS (nome, username,email,senha)"
    );
    $stmt -> execute([  $dados["nome"],
                        $dados["username"],
                        $dados["email"],
                        $dados["senha"]]);
        return $con->lastInsertId();
}
//Read
function listar($con){
    $stmt = $con -> query("SELECT * FROM usuarios");
    return $stmt ->fetchAll(PDO::FETCH_ASSOC);
}
//Update
function atualizar($con,$id,$dados){
    $stmt = $con->prepare(
    "UPDATE usuarios SET senha = ?
        WHERE id_usuario=?"
);
$stmt -> execute([  $dados["senha"],
                    $id]);
}
//Delete
function remover($con,$id){
    $stmt = $con->prepare(
    "DELETE FROM usuarios WHERE id_usuario = ?"
    );
    $stmt -> execute([$id]);
