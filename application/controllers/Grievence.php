<?php
class Grievence extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('grievence_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
            $data['grievences'] = $this->grievence_model->get_grievence();
	        //$data['title'] = 'News archive';

	        $this->load->view('templates/header', $data);
	        $this->load->view('grievence/index', $data);
	        $this->load->view('templates/footer');
        }

        /*public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }

                foreach ($data['news_item'] as $eachdata) {
                        $Pagedata['news_item']['title'] = $eachdata['title'];
                        $Pagedata['news_item']['text'] = $eachdata['text'];
                        $Pagedata['title'] = $eachdata['title'];
                }
                //$data['title'] = $data['news_item']['title'];

                $this->load->view('templates/header', $Pagedata);
                $this->load->view('news/view', $Pagedata);
                $this->load->view('templates/footer');
        }*/

        public function create() // create a form 
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Submit a grievence';

            $this->form_validation->set_rules('org_name', 'OrgName', 'required');
            $this->form_validation->set_rules('issue', 'Issue', 'required');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/header', $data);
                $this->load->view('grievence/create');
                $this->load->view('templates/footer');

            }
            else
            {
                $this->grievence_model->set_grievence();
                $data['title'] = 'Success';
                $this->load->view('templates/header', $data);
                $this->load->view('grievence/success');
                $this->load->view('templates/footer');
            }
        }
}