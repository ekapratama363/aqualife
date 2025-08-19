<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->model('frontend/Home_model');
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data['header'] = $this->Home_model->getDataBanner();
        $data['categories'] = $this->Home_model->getDataCategories();
        $data['categories_mobile'] = $this->Home_model->getDataCategories();
        $data['about'] = $this->Home_model->getDataAbout();
        $data['about_detail'] = $this->Home_model->getDataAboutDetail();
        $data['service'] = $this->Home_model->getDataService();
        $data['news'] = $this->Home_model->getDataNews();
        $data['reviews'] = $this->Home_model->getDataReview();
        $data['faq'] = $this->mappingFaqs($this->Home_model->getDataFaq());
        $data['companies_sosmed'] = $this->Home_model->getSocialMedia();
        
        $this->load->view('frontend/_partials/head', $data);
        $this->load->view('frontend/home/index');
        $this->load->view('frontend/_partials/footer');
    }

    private function mappingFaqs($faqs)
    {
        $dataFaq = [];
        foreach($faqs ?? [] as $faq) {
            $dataFaq[] = [
                'question' => $faq->title,
                'answer' => $faq->description,
            ];
        }

        return $dataFaq;
    }

    public function simpan_ajax() 
    { 
        $your_name = $this->input->post('your-name', TRUE);
        $last_name = $this->input->post('last-name', TRUE);
        $address = $this->input->post('address', TRUE);
        $city = $this->input->post('city', TRUE);
        $state_province = $this->input->post('state-province', TRUE);
        $email = $this->input->post('email', TRUE);
        $phone_number = $this->input->post('phone-number', TRUE);
        $consultation_time = $this->input->post('consultation-time', TRUE);
        $masalah = $this->input->post('masalah', TRUE);
        $wt = $this->input->post('wt', TRUE);
        $ws = $this->input->post('ws', TRUE);
        $dw = $this->input->post('dw', TRUE);

        $data = array(
            'your_name' => $your_name,
            'last_name' => $last_name,
            'address' => $address,
            'city' => $city,
            'state' => $state_province,
            'email' => $last_name,
            'phone' => $phone_number,
            'consultation_date' => $consultation_time,
            'issue' => $masalah,
            'created_date' => date("Y-m-d H:i:s"),
            'water_treatment' => $wt,
            'water_softener' => $ws,
            'drinking_water' => $dw,
        );

        $this->db->insert('consultation', $data);

        echo '<script>alert("You Have Successfully submit this Record!");window.location = "'.base_url().'frontend/Index"</script>';
    }
}

