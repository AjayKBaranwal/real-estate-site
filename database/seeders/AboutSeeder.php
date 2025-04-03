<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Helpers\GetAboutImage;
use App\Repositories\AboutRepositoryInterface;

class AboutSeeder extends Seeder
{
    private $aboutRepository;

    public function __construct(AboutRepositoryInterface $aboutRepository)
    {
        $this->aboutRepository = $aboutRepository;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = [
          'horizontal_image' => GetAboutImage::horizontal(),
          'vertical_image' => GetAboutImage::vertical(),
          'en' => [
            'title' => "We Do Great Design For Creative Folks",
            'subtitle' => "Find your dream home. View our exclusive listings.",
            "text" => "We offer the highest level of expertise, service, and integrity.
            Ranchi Real Estate is the premier real estate agency in Manhattan and has helped hundreds of buyers find their dream home in NYC,
             resulting in almost $1 Billion of closed residential real estate transactions in the last 10 years.
             We offer services related to luxury real estate: sales transactions,
              rental, and property management. With an international clientele and a worldwide reputation."
          ],
          'hi' => [
            'title' => "हम रचनात्मक लोगों के लिए बेहतरीन डिज़ाइन करते हैं",
            'subtitle' => "अपने सपनों का घर खोजें। हमारी विशेष लिस्टिंग देखें।",
            "text" => "हम उच्चतम स्तर की विशेषज्ञता, सेवा और निष्ठा प्रदान करते हैं।
            रांची रियल एस्टेट मैनहट्टन में प्रमुख रियल एस्टेट एजेंसी है और इसने सैकड़ों खरीदारों को NYC में अपने सपनों का घर खोजने में मदद की है, जिसके परिणामस्वरूप पिछले 10 वर्षों में लगभग 1 बिलियन डॉलर के आवासीय रियल एस्टेट लेनदेन बंद हो गए हैं।
             हम लक्जरी रियल एस्टेट से संबंधित सेवाएँ प्रदान करते हैं: बिक्री लेनदेन, किराया, और संपत्ति प्रबंधन। एक अंतरराष्ट्रीय ग्राहक और दुनिया भर में प्रतिष्ठा के साथ।"
          ],
          'hrv' => [
            'title' => "Agencija koja pruža izvrstan dizajn",
            "subtitle" => "Pronađite svoj dom iz snova. Pogledajte naše ekskluzivne oglase.",
            "text" => "Nudimo najvišu razinu stručnosti, usluge i integriteta.
            Nekretnine Ranchi je vodeća agencija za nekretnine na Manhattanu i pomogla je u tome stotine kupaca pronalaze svoj dom iz snova u New Yorku,
            što rezultira gotovo milijardom dolara zaključenih transakcija stambenih nekretnina u posljednjih 10 godina.
             Nudimo usluge povezane s luksuznim nekretninama: prodajne transakcije,
              najam i upravljanje nekretninama. S međunarodnom klijentelom i svjetskom reputacijom."
          ]
        ];

        $this->aboutRepository->create($about);
    }
}
