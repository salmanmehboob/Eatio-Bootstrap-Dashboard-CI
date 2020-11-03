<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends Admin_Controller
{

	public function index()
	{
		$this->render_template_admin('index');
	}

	public function page_analytics()
	{
		$this->render_template_admin('page_analytics');
	}

	public function page_review()
	{
		$this->render_template_admin('page_review');
	}

	public function page_order()
	{
		$this->render_template_admin('page_order');
	}

	public function page_order_list()
	{
		$this->render_template_admin('page_order_list');
	}

	public function page_general_customers()
	{
		$this->render_template_admin('page_general_customers');
	}

	public function app_profile()
	{
		$this->render_template_admin('app_profile');
	}
	public function app_calender()
	{
		$this->render_template_admin('app_calender');
	}
	public function ecom_product_grid()
	{
		$this->render_template_admin('ecom_product_grid');
	}
	public function ecom_product_list()
	{
		$this->render_template_admin('ecom_product_list');
	}
	public function ecom_product_detail()
	{
		$this->render_template_admin('ecom_product_detail');
	}
	public function ecom_product_order()
	{
		$this->render_template_admin('ecom_product_order');
	}
	public function ecom_checkout()
	{
		$this->render_template_admin('ecom_checkout');
	}
	public function ecom_invoice()
	{
		$this->render_template_admin('ecom_invoice');
	}
	public function ecom_customers()
	{
		$this->render_template_admin('ecom_customers');
	}



	public function chart_flot()
	{
		$this->render_template_admin('chart_flot');
	}
	public function chart_morris()
	{
		$this->render_template_admin('chart_morris');
	}
	public function chart_chartjs()
	{
		$this->render_template_admin('chart_chartjs');
	}
	public function chart_chartist()
	{
		$this->render_template_admin('chart_chartist');
	}
	public function chart_sparkline()
	{
		$this->render_template_admin('chart_sparkline');
	}
	public function chart_peity()
	{
		$this->render_template_admin('chart_peity');
	}


	public function ui_accordion()
	{
		$this->render_template_admin('ui_accordion');
	}
	public function ui_alert()
	{
		$this->render_template_admin('ui_alert');
	}
	public function ui_badge()
	{
		$this->render_template_admin('ui_badge');
	}
}
