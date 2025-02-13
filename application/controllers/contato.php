<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Caeli Comunicação';
        $data['description'] = 'SOMOS UMA AGÊNCIA QUE UNE CRIAÇÃO E ESTRATÉGIA PARA OTIMIZAÇÃO DE RESULTADOS.';
        $data['keywords'] = 'BRANDING; DIGITAL; ESTRATÉGIAS PROMOCIONAIS; MÍDIA ESTRATÉGICA; PLANEJAMENTO; CONCEITUAÇÃO DE PRODUTO; MARKETING DE VAREJO; DESIGN; CAMPANHAS ON E OFF; ENDOMARKETING; TRADE / PDV; MERCHANDISING';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $assunto1 = $this->input->post('assunto1');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('[Novo Lead] LP - Caeli Comunicação');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@caelicomunicacao.com.br","Caeli Comunicação");
            $this->email->to('contato@caelicomunicacao.com.br');
            $this->email->cc('financeiro@caelicomunicacao.com.br, renata@caelicomunicacao.com.br, renata@spicycomm.com.br');
            //$this->email->cc('front.baronista@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Assunto:	{$assunto1}<br/>
                        Mensagem:	{$mensagem}<br/>
                            </body></html>");

            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }

        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'Caeli Comunicação';
        $data['description'] = 'SOMOS UMA AGÊNCIA QUE UNE CRIAÇÃO E ESTRATÉGIA PARA OTIMIZAÇÃO DE RESULTADOS.';
        $data['keywords'] = 'BRANDING; DIGITAL; ESTRATÉGIAS PROMOCIONAIS; MÍDIA ESTRATÉGICA; PLANEJAMENTO; CONCEITUAÇÃO DE PRODUTO; MARKETING DE VAREJO; DESIGN; CAMPANHAS ON E OFF; ENDOMARKETING; TRADE / PDV; MERCHANDISING';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'Caeli Comunicação';
        $data['description'] = 'SOMOS UMA AGÊNCIA QUE UNE CRIAÇÃO E ESTRATÉGIA PARA OTIMIZAÇÃO DE RESULTADOS.';
        $data['keywords'] = 'BRANDING; DIGITAL; ESTRATÉGIAS PROMOCIONAIS; MÍDIA ESTRATÉGICA; PLANEJAMENTO; CONCEITUAÇÃO DE PRODUTO; MARKETING DE VAREJO; DESIGN; CAMPANHAS ON E OFF; ENDOMARKETING; TRADE / PDV; MERCHANDISING';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */
