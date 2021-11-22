<?php
interface Servicos{
    public function calculaSalario(
        int $diasTrabalhados, String $cargo):float;
        
    public function calculaSalarioMaisGratificacao(
        int $diasTrabalhados, String $valorGravacao);
}

class Funcionarios implements Servicos{

    public function calculaSalario( int $diasTrabalhados, String $cargo):float{
        $valorSalario = 6500;
        $valorSalarioDia = ($valorSalario/30);
        $totalSalario = $diasTrabalhados * $valorSalarioDia;
        $porcentagem = 0;
        if($diasTrabalhados >=15){
            echo "Salário do dia = R$ ";
            return $valorSalarioDia ;
        }else{
            $porcentagem = 30;
            $valorSalarioDia += ($valorSalarioDia * ($porcentagem/100));
            echo "Salario do dia com desconto = R$ ";
            return $valorSalarioDia  ;
        }
        
    }

    public function calculaSalarioMaisGratificacao( int $diasTrabalhados, String $valorGravacao){
        $valorSalario = 4970;
        $valorSalarioDia = ($valorSalario/30);
        $totalSalario = $diasTrabalhados * $valorSalarioDia;
        $porcentagem = 0;

        if($diasTrabalhados == 9){
            $porcentagem = 20;
            $valorSalarioDia += ($valorSalarioDia * ($porcentagem/100));
            echo "Salario Completo + $porcentagem = R$ $valorSalarioDia";

        }elseif($diasTrabalhados >=10 && $diasTrabalhados <=15){
            $porcentagem = 50;
            $valorSalarioDia += ($valorSalarioDia * ($porcentagem/100));
            echo "Salario Dia completo + $porcentagem % = R$ $valorSalarioDia";
        }

    }
}

$funcionario1 = new Funcionarios();
echo $funcionario1->calculaSalario(15, "Dev");
echo "<br>";
$funcionario1->calculaSalarioMaisGratificacao(15, "DEV");



?>