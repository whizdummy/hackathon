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

                $number = "+639296418144";
             
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

                $sms = $client->account->messages->sendMessage("804-491-3997", $number, "asiudhiuah");
                
                echo "Msg sent";
            }
            
            catch (Services_Twilio_RestException $e) {
            echo $e->getMessage();
            }
        }

        public function receiveMessage(Request $request){
            $sender_Number = $request->input('From');
            $sender_Received = $request->input('Body');
            $sender_City;
            $sender_Province;
            $sender_Name;
            $sender_Message;
            $temp = array();

            list($sender_Name, $sender_Message) = split("*", $sender_Received);

            try{
                $sender_City = $request->input('FromCity');
                $sender_Province = $request->input('FromState');

                $sender_Message = $sender_Message . " (" . $sender_City . "," . $sender_Province . ")";
            }
            catch (Exception $e){
                
            }

            DB:table('Report')
                ->insert([
                        'strFullname' => $sender_Name,
                        'strRemarks' => $sender_Message
                    ]);

        }


    }