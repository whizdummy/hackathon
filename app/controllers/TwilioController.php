<?php

    class TwilioController extends BaseController{

        public function sendMessage(){
            $AccountSid = "AC8f699f149ac900569129740443346dac";
            $AuthToken = "982d2b805a3b31dd974d583149a53c5f";
         
            // Step 3: instantiate a new Twilio Rest Client
            $client = new Services_Twilio($AccountSid, $AuthToken);
         
            // Step 4: make an array of people we know, to send them a message. 
            // Feel free to change/add your own phone number and name here.

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

            $sms = $client->account->messages->sendMessage("804-491-3997", $number, "Mahal kita. <3");

            echo "Msg sent";
        }
    }