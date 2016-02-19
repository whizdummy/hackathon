<?php

	class ImageReportController extends BaseController{

		public function reportImage(){

			if (Request::input('url') != null){

				$strUrl = Request::input('url');

			}
			if (Request::input('fileImage') != null){

				$validator = Validator::make(
					['fileImage' => 'image'],
					['fileImage' => 'max:10000']);

				if (!$validator->fails()){

					$milliseconds = round(microtime(true) * 1000);
					$fileName = $milliseconds.".".Input::file('fileImage')->getClientOriginalExtension();
					$path = public_path() . "/reported_images/" ;
					// $pos = strpos($path,'/public/');
					// if ($pos !== false) {
					// 	var_dump("HEEEERE");
					//     $path = substr($path, $milliseconds);
					// }
					Input::file('fileImage')->move($path, $fileName);
					
				}

			}
			else{
				//call error validation
			}

			$strName = Request::input('name');
			$strRemarks = Request::input('remarks');

			if (strlen($strName) != 0){
				DB::table('tblReport')
					->insert([
							'strReportImagePath' => $path.$fileName,
							'strFullName' => $strName,
							'strRemarks' => $strRemarks,
							'strUrlReport' => $strUrl,
							'dtmReport' => DB::raw('NOW()');
						]);
				//call success screen

			}else{

				//call error screen

			}

		}

	}