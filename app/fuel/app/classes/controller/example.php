<?php
class Controller_Example extends Controller_Template
{
  public $template = 'layout';

  public function action_modify()
  {
    $value = Session::get('value', 0);
    $mod = Input::param('amount', 0);
    $value = $value += $mod;
    Session::set('value', $value);
    $this->action_index();
  }

  public function action_reset()
  {
    Session::set('value', 0);
    $this->action_index();
  }

  public function action_index()
  {
    $value = Session::get('value', 0);
    $data = array('value' => $value);
    $this->template->title = 'Hello world!';
    $this->template->content = View::forge('example/index', $data);
  }

  public function get_ajax()
  {
    $modify = Input::param('modify', 0);
    $value = Session::get('value');
    $value += $modify;
    Session::set('value', $value);
    return View::forge('example/progress', array('value' => $value));
  }
}
?>
