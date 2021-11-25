<?php
class Atendimento{
    private string $protocolo;
    private Grupo $grupo;
    private Atendente $atendente;
    private Tecnico $tecnico;
    private Aluno $aluno;
    private TipoServico $tipo;
    private int $idCategoria;
    private int $idSubcategoria;
    private int $idItem;

    public function alteraStatusAtendimento()
    {
        echo "Alterando o estado";
    }

    public function finalizaAntendimento()
    {
        echo "Finalizando o atendimento";
    }

    public function repassaAntendimento(){
        echo "Repassando atendimento";
    }
}



?>