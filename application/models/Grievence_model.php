<?php
class Grievence_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        } 

        public function get_grievence($org = NULL)
        {
        	if ($org === NULL)
        	{
        		$query = $this->db->get('grievence');
        		return $query->result_array();
        	}
        	$query = $this->db->get_where('grievence',array('org_name' => $org));
        	return $query->result_array();
        }

        public function set_grievence()
        {
            $this->load->helper('url');

            //$org_name = url_title($this->input->post('org_name'), 'dash', TRUE);

            $data = array(
                'org_name' => $this->input->post('org_name'),
                'place' => $this->input->post('place'),
                'issue' => $this->input->post('issue'),
                'contact' => $this->input->post('contact')
            );

            return $this->db->insert('grievance', $data);
        }
}