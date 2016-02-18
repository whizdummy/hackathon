<?php

	class UrlReportController extends BaseController{

		public function createReportURL(){

			$strName = Request::('name');
			$strUrl = Request::('url');
			$strRemarks = Request::('remarks');

			DB::table('Report')
				->insert([
						'name' = $strName;
						'urlReport' = $strUrl;
						'datReport' = date('m/d/Y h:i:s a', time());
						'remarks' = $strRemarks;
					]);

		}

	}



