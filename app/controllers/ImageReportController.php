<?php

	class ImageReportController{

		public function reportImage(){

			$file = Request::('fileImage');
			$milliseconds = round(microtime(true) * 1000);
			$path = $file->getRealPath();;
			$pos = strpos($path,'/public/');
			if ($pos != false) {
			    $path = substr($path, $milliseconds);
			}

		}

	}