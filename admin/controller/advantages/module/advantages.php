<?php
class ControllerExtensionModuleAdvantages extends Controller {

  public function index() {

    // Загружаем "модель" модуля
    $this->load->model('extension/module/advantages');

    // Сохранение настроек модуля, когда пользователь нажал "Записать"
    if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
      // Вызываем метод "модели" для сохранения настроек
      $this->model_extension_module_advantages->SaveSettings();
      // Выходим из настроек с выводом сообщения
      $this->session->data['success'] = 'Настройки сохранены';
      $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
    }

    // Загружаем настройки через метод "модели"
    $data = array();
    $data['module_advantages_status'] = $this->model_extension_module_advantages->LoadSettings();
    // Загружаем языковой файл
    $data += $this->load->language('extension/module/advantages');
    // Загружаем "хлебные крошки"
    $data += $this->GetBreadCrumbs();

    // Кнопки действий
    $data['action'] = $this->url->link('extension/module/advantages', 'user_token=' . $this->session->data['user_token'], true);
    $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
    // Загрузка шаблонов для шапки, колонки слева и футера
    $data['header'] = $this->load->controller('common/header');
    $data['column_left'] = $this->load->controller('common/column_left');
    $data['footer'] = $this->load->controller('common/footer');

    // Выводим в браузер шаблон
    $this->response->setOutput($this->load->view('extension/module/advantages', $data));

  }

  // Хлебные крошки
  private function GetBreadCrumbs() {
    $data = array(); $data['breadcrumbs'] = array();
    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_home'),
      'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
    );
    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('text_extension'),
      'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
    );
    $data['breadcrumbs'][] = array(
      'text' => $this->language->get('heading_title'),
      'href' => $this->url->link('extension/module/advantages', 'user_token=' . $this->session->data['user_token'], true)
    );
    return $data;
  }

}
?>