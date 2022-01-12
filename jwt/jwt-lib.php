<?php

require_once "../vendor/autoload.php";
require_once "./Pessoa.php";

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;

function setToken(Pessoa $pessoa)
{
    $configuration = Configuration::forSymmetricSigner(
        // You may use any HMAC variations (256, 384, and 512)
        new Sha256(),
        // replace the value below with a key of your own!
        InMemory::base64Encoded('Ajhdkajsg665612AAA80')
        // You may also override the JOSE encoder/decoder if needed by providing extra arguments here
    );
    
    $time = new DateTimeImmutable();
    
    $token = $configuration->builder()
                           ->issuedBy("http://localhost:8000/api/")
                           ->permittedFor("http://localhost:8000/api/")
                           ->identifiedBy("123456", true)
                           ->issuedAt($time)
                           ->canOnlyBeUsedAfter($time->modify('+1 minute'))
                           ->expiresAt($time->modify('+1 hour'))
                           ->withClaim('nome', $pessoa->getNome())
                           ->withClaim('email', $pessoa->getEmail())
                           ->withClaim('profissao', $pessoa->getProfissao())
                           ->withClaim('escolaridade', $pessoa->getEscolaridade())
                           ->getToken($configuration->signer(), $configuration->signingKey());
    
    // echo "Token JWT: ". $token->toString();
    $pessoa->setToken($token);
}

    $pessoa1 = new Pessoa("gabriel","gabriel@email.com","dev","Ensino sup");
    $pessoa2 = new Pessoa("pedro","pedro@email.com","vendedor","Ensino médio");
    $pessoa3 = new Pessoa("joaquin","joaquin@email.com","gerente","Ensino superior");
    $pessoa4 = new Pessoa("igor","igor@email.com","engenheiro","Ensino superior");
    $pessoa5 = new Pessoa("joana","joana@email.com","entregador","Ensino Medio");

    $pessoas = [$pessoa1,$pessoa2, $pessoa3, $pessoa4, $pessoa5];

    foreach($pessoas as $pessoa){
        setToken($pessoa);
    }
    
    var_dump($pessoa1);




