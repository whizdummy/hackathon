<?php

    class TwilioController extends BaseController{

        public function sendMessage(){
            try{
                $AccountSid = "AC8f699f149ac900569129740443346dac";
                $AuthToken = "982d2b805a3b31dd974d583149a53c5f";
             
                $http = new Services_Twilio_TinyHttp(
                    'https://api.twilio.com',
                    array('curlopts' => array(
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_SSL_VERIFYHOST => 0,
                    ))
                );

                $client = new Services_Twilio($AccountSid, $AuthToken, "2010-04-01", $http);
                $client->http->debug = true;

                $number = "+639753664645";
             
                // Step 5: Loop over all our friends. $number is a phone number above, and 
                // $name is the name next to it
                /*foreach ($people as $number => $name) {
             
                    $sms = $client->account->messages->sendMessage(
             
                    // Step 6: Change the 'From' number below to be a valid Twilio number 
                    // that you've purchased, or the (deprecated) Sandbox number
                        "YYY-YYY-YYYY", 
             
                        // the number we are sending to - Any phone number
                        $number,
             
                        // the sms body
                        "Hey $name, Monkey Party at 6PM. Bring Bananas!"
                    );
             
                    // Display a confirmation message on the screen
                    echo "Sent message to $name";
                }*/

                $sms = $client->account->messages->sendMessage("804-491-3997", $number, "asdasdsadasdasd");
                
                echo "Msg sent";
            }
            
            catch (Services_Twilio_RestException $e) {
            echo $e->getMessage();
            }
        }

        public function replyMessage(){
            $number = Request::input('contactNumber');
            $message = Request::input('message');
            try{
                $AccountSid = "AC8f699f149ac900569129740443346dac";
                $AuthToken = "982d2b805a3b31dd974d583149a53c5f";
             
                $http = new Services_Twilio_TinyHttp(
                    'https://api.twilio.com',
                    array('curlopts' => array(
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_SSL_VERIFYHOST => 0,
                    ))
                );

                $client = new Services_Twilio($AccountSid, $AuthToken, "2010-04-01", $http);
                $client->http->debug = true;

                $sms = $client->account->messages->sendMessage("804-491-3997", $number, $message);
            }
            
            catch (Services_Twilio_RestException $e) {
                echo $e->getMessage();
            }
        }

        public function receiveMessage(){
            $sender_Number = Request::input('From');
            $sender_Received = Request::input('Body');
            $sender_City;
            $sender_Province;
            $sender_Name;
            $sender_Message;
            $temp = array();

            list($sender_Name, $sender_Message) = explode("//", $sender_Received);

            try{
                $sender_City = Request::input('FromCity');
                $sender_Province = Request::input('FromState');
            }
            catch (Exception $e){

            }

            DB::table('tblreport')
                ->insert([
                        'strFullname' => $sender_Name,
                        'strRemarks' => $sender_Message,
                        'strContactNum' => $sender_Number,
                        'strCity' => $sender_City,
                        'strProvince' => $sender_Province,
                        'dtmReport' => DB::Raw('NOW()')
                    ]);


            $this->sendAutoGeneratedMessage($sender_Number);
        }

        private function sendAutoGeneratedMessage($sender_Number){
            $autoGeneratedMessage = "Natanggap namin ang isinumite mong ulat. Maraming salamat sa iyong kooperasyon. -DSWD";

            try{
                $AccountSid = "AC8f699f149ac900569129740443346dac";
                $AuthToken = "982d2b805a3b31dd974d583149a53c5f";
             
                $http = new Services_Twilio_TinyHttp(
                    'https://api.twilio.com',
                    array('curlopts' => array(
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_SSL_VERIFYHOST => 0,
                    ))
                );

                $client = new Services_Twilio($AccountSid, $AuthToken, "2010-04-01", $http);
                $client->http->debug = true;

                $sms = $client->account->messages->sendMessage("804-491-3997", $sender_Number, $autoGeneratedMessage);
            }
            catch (Exception $e){

            }
        }

        private function sendAutoGeneratedError(){
            $sender_Number = Request::input('From');
            $autoGeneratedMessage = "Mali ang ginamit mong format. Makiulit lamang po ang iyong ulat gamit ang tamang format Pangalan//Mensahe.";

            try{
                $AccountSid = "AC8f699f149ac900569129740443346dac";
                $AuthToken = "982d2b805a3b31dd974d583149a53c5f";
             
                $http = new Services_Twilio_TinyHttp(
                    'https://api.twilio.com',
                    array('curlopts' => array(
                        CURLOPT_SSL_VERIFYPEER => false,
                        CURLOPT_SSL_VERIFYHOST => 0,
                    ))
                );

                $client = new Services_Twilio($AccountSid, $AuthToken, "2010-04-01", $http);
                $client->http->debug = true;

                $sms = $client->account->messages->sendMessage("804-491-3997", $sender_Number, $autoGeneratedMessage);
            }
            catch (Exception $e){

            }
        }


    }