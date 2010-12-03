<?php

class Pop_Template {

		public function __construct($request)
		{
				require_once 'dwoo/dwooAutoload.php';
				$this->dwoo = new Dwoo(TEMPLATE_COMPILE_PATH);
				$this->data = new Dwoo_Data();
				$this->data->assign('main_title', MAIN_TITLE);
				$this->data->assign('request', $request);
				$this->data->assign('msg', $request->get('msg'));
				$this->data->assign('app_root', trim($request->app_root,'/').'/');
				$this->template_path = TEMPLATE_PATH;
		}

		public function assign($key,$val)
		{
				$this->data->assign($key,$val);
		}

		public function fetch($resource_name)
		{
				$tpl = new Dwoo_Template_File($this->template_path.'/'.$resource_name);
				return $this->dwoo->get($tpl,$this->data);
		}
}
