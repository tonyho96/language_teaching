<?php

use Illuminate\Database\Seeder;
use App\Models\LanguageGroup;
use App\Models\Language;
use App\Models\Country;
use App\Models\Subject;
use App\Models\TimeZone;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// $this->call(UsersTableSeeder::class);


		//language name
		$languageE = ['name' => 'English','is_popular'=>config('language.is_popular.popular')];
		$languageV = ['name' => 'Vietnamese', 'is_popular'=>config('language.is_popular.popular')];
		$languageJ = ['name' => 'Japanese', 'is_popular'=>config('language.is_popular.unpopular')];

		Language::insert($languageE);
		Language::insert($languageV);
		Language::insert($languageJ);

		$languageC = ['name' => 'Chinese', 'is_popular'=>config('language.is_popular.unpopular')];
		$languageG = ['name' => 'German', 'is_popular'=>config('language.is_popular.popular')];
		Language::insert($languageC);
		Language::insert($languageG);


		//location
		$countryAmerica = ['name' => 'America'];
		Country::insert($countryAmerica);

		$countryVietnam = ['name' => 'Vietnam'];
		Country::insert($countryVietnam);

		$countryArgentina = ['name' => 'Argentina'];
		Country::insert($countryArgentina);

		$countryColombia = ['name' => 'Colombia'];
		Country::insert($countryColombia);

		$countryMexico = ['name' => 'Mexico'];
		Country::insert($countryMexico);

		$countrySpain = ['name' => 'Spain'];
		Country::insert($countrySpain);

		$countryVenezuela = ['name' => 'Venezuela'];
		Country::insert($countryVenezuela);


		//subject
		$subBeginners = ['name' => 'Beginners'];
		Subject::insert($subBeginners);

		$subChildren = ['name' => 'Children'];
		Subject::insert($subChildren);

		$subTeenagers = ['name' => 'Teenagers'];
		Subject::insert($subTeenagers);

		$subVocabulary = ['name' => 'Vocabulary'];
		Subject::insert($subVocabulary);

		$subPreparation= ['name' => 'Preparation'];
		if(Subject::insert($subPreparation)){
			echo "Seeding data has done.\n";
		}

//		//time zone
//		$timeAnchorage = ['time' => 'UTC-09:00 Alaska','area_name' => 'America/Anchorage'];
//		TimeZone::insert($timeAnchorage);
//
//		$timePacific = ['time' => 'UTC-08:00 Pacific Time (US & Canada)','area_name' => 'Canada/Pacific'];
//		TimeZone::insert($timePacific);
//
//		$timeHalifax = ['time' => 'UTC-04:00 Atlantic - NS (most areas)','area_name' => 'America/Halifax'];
//		TimeZone::insert($timeHalifax);


    }
}
