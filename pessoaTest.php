<?php

use wamp64\www\Arquitetura\Pessoa;
use PHPUnit\Framework\TestCase;
class PessoaTest extends TestCase {

    /*public function testClassPessoaExiste(){
        $this->assertTrue(class_exists('Pessoa', 'Class Pessoa Não Encontrada'));
    }*/
    /**
     * @depends testClassPessoaExiste
     */
        
    //Testar atributo de altura\#
    // @test
    public function testType(){
        $pessoa = new Pessoa();
        $this->assertInternaType('int', $pessoa->getIdade());
        $this->assertInternaType('float', $pessoa->getAltura());
    }
    /**
     * @depends testClassPessoaExiste
     */
    //Testar a função envelhecer, deve retornar 23\#
    public function testEnvelhecer(){
        $pessoa = new Pessoa();
        $pessoa->envelhecer(20);
        $pessoa->envelhecer(3);
        $this->assertEquals(23,$pessoa->getIdade());
    }
    //Testar a função crescer e colocando uma dependencia na execução!\#
    /**
     * @depends testType 
     */
    
    public function testCrescer(){
        $pessoa = newPessoa();
        $pessoa->crescer(1);
        $pessoa->crescer(0.68);
        $this->assertEquals(1.68, $pessoa->getAltura());
    }
    

}