<?php

namespace App\Helpers;

class ArrayOfTestemonials
{
    public static function getArray()
    {
        $agents = [
          [
            "image_filename" => "testimonial-1.jpg",
            "mini_image_filename" => "mini-testimonial-1.jpg",
            "names" => "Pablo & Emma",
            "en" => ["text" => "We had a great experience working with Ranchi Real Estate.
             We recommend their services, becouse their agents are amazing."],
            "hi" => ["text" => "रांची रियल एस्टेट के साथ काम करने का हमारा अनुभव बहुत बढ़िया रहा। 
			हम उनकी सेवाओं की अनुशंसा करते हैं, क्योंकि उनके एजेंट अद्भुत हैं।"],
            "hrv" => ["text" => "Suradnja sa Nekretnine Ranch je bila odlična.
             Svima preporučamo ovu agenciju jer su im agenti jako profesionalni."]
          ],
          [
            "image_filename" => "testimonial-2.jpg",
            "mini_image_filename" => "mini-testimonial-2.jpg",
            "names" => "John & Lisa",
            "en" => ["text" => "Thanks to Ranchi Real Estate we found perfect house.
            Their agents are very profesional and great at their craft."],
            "hi" => ["text" => "रांची रियल एस्टेट की बदौलत हमें एक बेहतरीन घर मिला। 
			उनके एजेंट बहुत ही पेशेवर हैं और अपने काम में माहिर हैं।"],
            "hrv" => ["text" => "Zahvaljujući Nekretnine Ranchi našli smo savršenu kuću.
            Agenti su jako profesionalni i dobri u svom poslu."]
          ]
        ];

        return $agents;
    }
}
