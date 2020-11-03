<?php


namespace modules\controllers;
use \Controller;

class MainController extends Controller {

    protected $login;

    public function __construct() {

        $this->login = isset($_SESSION["login"]) ? $_SESSION["login"] : '';

        if(!$this->login) {

            $this->redirect(SITE_URL . "?page=login");
        }
    }

    protected function template($viewName, $data = array()) {
            $this->model('menu');
            $this->model('user');
            $asu = $_SESSION["login"]->username;
            
             $this->current_user = $this->user->getWhere(array(

                    'username'   => $asu
                ));

            // $this->current_user = $this->user->by_id($asu);
            // $current_menu = $this->uri->segment(2);
            //menu
            $menu_result = $this->menu->get_active_menu($this->current_user[0]->id_role, null,false);
            $i = 0;
            foreach ($menu_result as $menu) {
                $this->obj_id = $menu->menu_id;
                $child = $this->menu->get_active_menu($this->current_user[0]->id_role, $this->obj_id,false);
                $menu_result[$i]->submenu = $child;
                $i++;
            }
            $menu_master = $this->menu->get_active_menu($this->current_user[0]->id_role, null,true);
            $i = 0;
            foreach ($menu_master as $menu) {
                $this->obj_id = $menu->menu_id;
                $child = $this->menu->get_active_menu($this->current_user[0]->id_role, $this->obj_id,true);
                $menu_master[$i]->submenu = $child;
                $i++;
            }
            $data['menu_trans'] = (!empty($menu_result)) ? $menu_result : array();
            $data['menu_master'] = (!empty($menu_master)) ? $menu_master : array();
            $data['login_user'] = $this->current_user;
            // $data['current_menu'] = $current_menu;
            // $data['_content'] = $this->load->view($template, $data, true);
            // print_r($data['menu_master']);die();
        $view = $this->view('template');
        $view->bind('viewName', $viewName);
        $view->bind('data', array_merge($data, array(
                'login' => $this->login,
                'menu_trans' => $data['menu_trans'],
                'menu_master' => $data['menu_master']
            )));
    }
}
?>