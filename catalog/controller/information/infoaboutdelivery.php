<?php
class ControllerInformationInfoaboutdelivery extends Controller {
public function index() {
 
$this->load->language('information/infoaboutdelivery');
 
$this->document->setTitle($this->language->get('infoaboutdelivery'));
 
$data['breadcrumbs'] = array();
 
$data['breadcrumbs'][] = array(
'text' => $this->language->get('text_home'),
'href' => $this->url->link('common/home')
);
 
$data['breadcrumbs'][] = array(
'text' => $this->language->get('heading_title'),
'href' => $this->url->link('information/infoaboutdelivery')
);
 
$data['column_left'] = $this->load->controller('common/column_left');
$data['column_right'] = $this->load->controller('common/column_right');
$data['content_top'] = $this->load->controller('common/content_top');
$data['content_bottom'] = $this->load->controller('common/content_bottom');
$data['footer'] = $this->load->controller('common/footer');
$data['header'] = $this->load->controller('common/header');
 
$this->response->setOutput($this->load->view('information/infoaboutdelivery', $data));
}
}