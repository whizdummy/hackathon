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

					if (strlen(Request::input('name')) < 0){

						//call error

					}
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

			
				$strName = Request::input('name');
				$strRemarks = Request::input('remarks');

				DB::table('Report')
					->insert([
							'imageReport' => $path.$fileName,
							'name' => $strName,
							'remarks' => $strRemarks
						]);

				//call success

			}
			else{
				//call error validation
			}

		}

	}