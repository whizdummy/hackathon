<?php

	class UrlReportController extends BaseController{

		public function createReportURL(){

			$validator = Validator::make([
					'url' => 'url'
				]);

			if (!$validator->fails()){
				$strName = Request::input('name');
				$strUrl = Request::input('url');
				$strRemarks = Request::input('remarks');

				DB::table('Report')
					->insert([
							'name' => $strName,
							'urlReport' => $strUrl,
							'datReport' => date('m/d/Y h:i:s a', time()),
							'remarks' => $strRemarks
						]);

			}

		}

	}



