<?php


function deleteUser($id, $filename)
{
    $usuarios = getUsers($filename);
    array_splice($usuarios, $id, 1);
    //unset($usuarios[$_POST['id']]);
    
    file_put_contents('usuarios.txt',implode("\n",$usuarios));
    
    return $id;
    
}