<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Caeli Comunicação';
        $data['description'] = 'SOMOS UMA AGÊNCIA QUE UNE CRIAÇÃO E ESTRATÉGIA PARA OTIMIZAÇÃO DE RESULTADOS.';
        $data['keywords'] = 'BRANDING; DIGITAL; ESTRATÉGIAS PROMOCIONAIS; MÍDIA ESTRATÉGICA; PLANEJAMENTO; CONCEITUAÇÃO DE PRODUTO; MARKETING DE VAREJO; DESIGN; CAMPANHAS ON E OFF; ENDOMARKETING; TRADE / PDV; MERCHANDISING';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade()
    {
        $data['title'] = 'Caeli Comunicação';
        $data['description'] = 'SOMOS UMA AGÊNCIA QUE UNE CRIAÇÃO E ESTRATÉGIA PARA OTIMIZAÇÃO DE RESULTADOS.';
        $data['keywords'] = 'BRANDING; DIGITAL; ESTRATÉGIAS PROMOCIONAIS; MÍDIA ESTRATÉGICA; PLANEJAMENTO; CONCEITUAÇÃO DE PRODUTO; MARKETING DE VAREJO; DESIGN; CAMPANHAS ON E OFF; ENDOMARKETING; TRADE / PDV; MERCHANDISING';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadecookies()
    {
        $data['title'] = 'Caeli Comunicação';
        $data['description'] = 'SOMOS UMA AGÊNCIA QUE UNE CRIAÇÃO E ESTRATÉGIA PARA OTIMIZAÇÃO DE RESULTADOS.';
        $data['keywords'] = 'BRANDING; DIGITAL; ESTRATÉGIAS PROMOCIONAIS; MÍDIA ESTRATÉGICA; PLANEJAMENTO; CONCEITUAÇÃO DE PRODUTO; MARKETING DE VAREJO; DESIGN; CAMPANHAS ON E OFF; ENDOMARKETING; TRADE / PDV; MERCHANDISING';
        $menu['politicadecookies'] = 'active';
        $conteudo['pagina_view'] = 'politicadecookies_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/home.php */
