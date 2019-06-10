<?php

class novo extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data = array(
                    'titulo' => 'Título da página',
                    'texto' => 'The Template Parser Class can perform simple text substitution for pseudo-variables contained within your view files. It can parse simple variables or variable tag pairs.',
                    'topicos' => array(
                                    array('topico' => 'Primeiro tópico', 'pagina' => '1'),
                                    array('topico' => 'Segundo tópico', 'pagina' => '2'),
                                    array('topico' => 'Terceiro tópico', 'pagina' => '4')
                    )
                );
        $this->parser->parse('pagina1',$data);
    }
}