<?php


class teste extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data = array(
            'titulo' => 'Título da página',
            'cabecalho' => 'Conteúdo do cabeçalho na página.',
            'topicos' => array(
                            array('topico' => 'Primeiro tópico.'),
                            array('topico' => 'Segundo tópico'),
                            array('topico' => 'Terceiro tópico')
                        )
        );

        $this->parser->parse('tela',$data);

    }
}