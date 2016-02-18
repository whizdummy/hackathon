<?php

	class UrlReportController extends BaseController{

		public function createReportURL(){

			$validator = Validator::make([
					'url' => 'url'
				]);

			if (!$validator->fails()){

				if (strlen(Request::input('name')) < 0){
					//call error
				}
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

				//call success

			}else{

				//call error message

			}

		}

	}



