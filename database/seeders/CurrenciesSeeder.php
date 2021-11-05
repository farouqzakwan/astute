<?php

namespace Database\Seeders;

use App\Models\Currencies;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        $data = array();

        //        ISO - Name - 
        //seeding USD - US Dollar 
        $data[] = array('id'=> Currencies::USD,'name' => 'US Dollar','ISO' => 'USD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding AED - Emirati Dirham
        $data[] = array('id' => Currencies::AED,'name' => 'Emirati Dirham','ISO' => 'AED','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding AFN - Afghan Afghani
        $data[] = array('id'=> Currencies::AFN,'name' => 'Afghan Afghani','ISO' => 'AFN','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding ALL - Albanian Lek 
        $data[] = array('id' => Currencies::ALL,'name' => 'Albanian Lek','ISO' => 'ALL','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding AMD - Armenian Dram
        $data[] = array('id' => Currencies::AMD,'name' => 'Armenian Dram','ISO' => 'AMD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding ANG - Dutch Guilder
        $data[] = array('id' => Currencies::ANG,'name' => 'Dutch Guilder','ISO' => 'ANG','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding AOA - Angolan Kwanza
        $data[] = array('id' => Currencies::AOA,'name' => 'Angolan Kwanza','ISO' => 'AOA','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding ARS - Argentine Peso
        $data[] = array('id' => Currencies::ARS,'name' => 'Argentine Peso','ISO' => 'ARS','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding AUD - Australian Dollar
        $data[] = array('id' => Currencies::AUD,'name' => 'Australian Dollar','ISO' => 'AUD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding AWG - Aruban Florin
        $data[] = array('id' => Currencies::AWG,'name' => 'Aruban Florin','ISO' => 'AWG','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding AZN - Azerbaijan Manat
        $data[] = array('id' => Currencies::AZN,'name' => 'Azerbaijan Manat','ISO' => 'AZN','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BAM - Bosnian Convertible Mark
        $data[] = array('id' => Currencies::BAM,'name' => 'Bosnian Convertible Mark','ISO' => 'BAM','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BDT - Bangladeshi Taka
        $data[] = array('id' => Currencies::BDT,'name' => 'Bangladeshi Taka','ISO' => 'BDT','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BGN - Bulgarian Lev
        $data[] = array('id' => Currencies::BGN,'name' => 'Bulgarian Lev','ISO' => 'BGN','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BIF - Burundian Franc
        $data[] = array('id' => Currencies::BIF,'name' => 'Burundian Franc','ISO' => 'BIF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BMD - Bermudian Dollar
        $data[] = array('id' => Currencies::BMD,'name' => 'Bermudian Dollar','ISO' => 'BMD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BND - Bruneian Dollar
        $data[] = array('id' => Currencies::BND,'name' => 'Bruneian Dollar','ISO' => 'BND','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BOB - Bolivian Boliviano
        $data[] = array('id' => Currencies::BOB,'name' => 'Bolivian Boliviano','ISO' => 'BOB','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BRL - Brazilian Real
        $data[] = array('id' => Currencies::BRL,'name' => 'Brazilian Real','ISO' => 'BRL','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BSD - Bahamian Dollar
        $data[] = array('id' => Currencies::BSD,'name' => 'Bahamian Dollar','ISO' => 'BSD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BWP - Botswana Pula
        $data[] = array('id' => Currencies::BWP,'name' => 'Botswana Pula','ISO' => 'BWP','created_at' => Carbon::now(),'updated_at' => Carbon::now()); 

        //seeding BYN - Belarusian Ruble
        $data[] = array('id' => Currencies::BYN,'name' => 'Belarusian Ruble','ISO' => 'BYN','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding BZD - Belizean Dollar
        $data[] = array('id' => Currencies::BZD,'name' => 'Belizean Dollar','ISO' => 'BZD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding CAD - Canadian Dollar
        $data[] = array('id' => Currencies::CAD,'name' => 'Canadian Dollar','ISO' => 'CAD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding CDF - Congolese Franc
        $data[] = array('id' => Currencies::CDF,'name' => 'Congolese Franc','ISO' => 'CDF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding CHF - Swiss Fran
        $data[] = array('id' => Currencies::CHF,'name' => 'Swiss Franc','ISO' => 'CHF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding CLP - Chilean Peso
        $data[] = array('id' => Currencies::CLP,'name' => 'Chilean Peso','ISO' => 'CLP','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding CNY - Chinese Yuan Renminbi
        $data[] = array('id' => Currencies::CNY,'name' => 'Chinese Yuan Renminbi','ISO' => 'CNY','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding COP - Colombian Peso
        $data[] = array('id' => Currencies::COP,'name' => 'Colombian Peso','ISO' => 'COP','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding CRC - Costa Rican Colon
        $data[] = array('id' => Currencies::CRC,'name' => 'Costa Rican Colon','ISO' => 'CRC','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding CVE - Cape Verdean Escudo
        $data[] = array('id' => Currencies::CVE,'name' => 'Cape Verdean Escudo','ISO' => 'CVE','created_at' => Carbon::now(),'updated_at' => Carbon::now()); 

        //seeding CZK - Czech Koruna
        $data[] = array('id' => Currencies::CZK,'name' => 'Czech Koruna','ISO' => 'CZK','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding DJF - Djiboutian Franc
        $data[] = array('id' => Currencies::DJF,'name' => 'Djiboutian Franc','ISO' => 'DJF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding DKK - Danish Krone
        $data[] = array('id' => Currencies::DKK,'name' => 'Danish Krone','ISO' => 'DKK','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding DOP - Dominican Peso
        $data[] = array('id' => Currencies::DOP,'name' => 'Dominican Peso','ISO' => 'DOP','created_at' => Carbon::now(),'updated_at' => Carbon::now()); 

        //seeding DZD - Algerian Dinar
        $data[] = array('id' => Currencies::DZD,'name' => 'Algerian Dinar','ISO' => 'DZD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding EGP - Egyptian Pound
        $data[] = array('id' => Currencies::EGP,'name' => 'Egyptian Pound','ISO' => 'EGP','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding ETB - Ethiopian Birr
        $data[] = array('id' => Currencies::ETB,'name' => 'Ethiopian Birr','ISO' => 'ETB','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding EUR - Euro
        $data[] = array('id' => Currencies::EUR,'name' => 'Euro','ISO' => 'EUR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding FJD - Fijian Dollar
        $data[] = array('id' => Currencies::FJD,'name' => 'Fijian Dollar','ISO' => 'FJD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding FKP - Falkland Island Pound
        $data[] = array('id' => Currencies::FKP,'name' => 'Falkland Island Pound','ISO' => 'FKP','created_at' => Carbon::now(),'updated_at'=> Carbon::now());

        //seeding GBP - British Pound
        $data[] = array('id' => Currencies::GBP,'name' => 'British Pound','ISO' => 'GBP','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding GEL - Georgian Lari
        $data[] = array('id' => Currencies::GEL,'name' => 'Georgian Lari','ISO' => 'GEL','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding GIP - Gibraltar Pound
        $data[] = array('id' => Currencies::GIP,'name' => 'Gibraltar Pound','ISO' => 'GIP','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding GMD - Gambian Dalasi
        $data[] = array('id' => Currencies::GMD,'name' => 'Gambian Dalasi','ISO' => 'GMD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding GNF - Guinean Franc
        $data[] = array('id' => Currencies::GNF,'name' => 'Guinean Franc','ISO' => 'GNF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding GTQ - Guatemalan Quetzal
        $data[] = array('id' => Currencies::GTQ,'name' => 'Guatemalan Quetzal','ISO' => 'GTQ','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding GYD - Guyanese Dollar
        $data[] = array('id' => Currencies::GYD,'name' => 'Guyanese Dollar','ISO' => 'GYD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding HKD - Hong Kong Dollar
        $data[] = array('id' => Currencies::HKD,'name' => 'Hong Kong Dollar','ISO' => 'HKD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding HNL - Honduran Lempira
        $data[] = array('id' => Currencies::HNL,'name' => 'Honduran Lempira','ISO' => 'HNL','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding HRK - Croatian Kuna
        $data[] = array('id' => Currencies::HRK,'name' => 'Croatian Kuna','ISO' => 'HRK','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding HTG - Haitian Gourde
        $data[] = array('id' => Currencies::HTG,'name' => 'Haitian Gourde','ISO' => 'HTG','created_at' => Carbon::now(),'updated_at' => Carbon::now()); 

        //seeding HUF - Hungarian Forint
        $data[] = array('id' => Currencies::HUF,'name' => 'Hungarian Forint','ISO' => 'HUF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding IDR - Indonesian Rupiah
        $data[] = array('id' => Currencies::IDR,'name' => 'Indonesian Rupiah','ISO' => 'IDR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding INR - Indian Rupee
        $data[] = array('id' => Currencies::INR,'name' => 'Indian Rupee','ISO' => 'INR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding ISK - Icelandic Krona
        $data[] = array('id' => Currencies::ISK,'name' => 'Icelandic Krona','ISO' => 'ISK','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding JMD - Jamaican Dollar
        $data[] = array('id' => Currencies::JMD,'name' => 'Jamaican Dollar','ISO' => 'JMD','created_at' => Carbon::now(),'updated_at' => Carbon::now()); 

        //seeding JPY - Japanese Yen
        $data[] = array('id' => Currencies::JPY,'name' => 'Japanese Yen','ISO' => 'JPY','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding KES - Kenyan Shiling
        $data[] = array('id' => Currencies::KES,'name' => 'Kenyan Shiling','ISO' => 'KES','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding KGS - Kyrgyzstani Som
        $data[] = array('id' => Currencies::KGS,'name' => 'Kyrgyzstani Som','ISO' => 'KGS','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding KHR - Cambodian Riel
        $data[] = array('id' => Currencies::KHR,'name' => 'Cambodian Riel','ISO' => 'KHR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding KMF - Comorian Franc
        $data[] = array('id' => Currencies::KMF,'name' => 'Comorian Franc','ISO' => 'KMF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding KRW - South Korean Won
        $data[] = array('id' => Currencies::KRW,'name' => 'South Korean Won','ISO' => 'KRW','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding KYD - Caymanian Dollar
        $data[] = array('id' => Currencies::KYD,'name' => 'Caymanian Dollar','ISO' => 'KYD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding KZT - Kazakhstani Tenge
        $data[] = array('id' => Currencies::KZT,'name' => 'Kazakhstani Tenge','ISO' => 'KZT','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding LAK - Lao Kip
        $data[] = array('id' => Currencies::LAK,'name' => 'Lao Kip','ISO' => 'LAK','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding LBP - Lebanese Pound
        $data[] = array('id' => Currencies::LBP,'name' => 'Lebanese Pound','ISO' => 'LBP','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding LKR - Sri Lankan Rupee
        $data[] = array('id' => Currencies::LKR,'name' => 'Sri Lankan Rupee','ISO' => 'LKR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding LRD - Liberian Dollar
        $data[] = array('id' => Currencies::LRD,'name' => 'Liberian Dollar','ISO' => 'LRD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding LSL - Basotho Loti
        $data[] = array('id' => Currencies::LSL,'name' => 'Basotho Loti','ISO' => 'LSL','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MAD - Moroccan Dirham
        $data[] = array('id' => Currencies::MAD,'name' => 'Moroccan Dirham','ISO' => 'MAD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MDL - Moldovan Leu
        $data[] = array('id' => Currencies::MDL,'name' => 'Moldovan Leu','ISO' => 'MDL','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MGA - Malagasy Ariary
        $data[] = array('id' => Currencies::MGA,'name' => 'Malagasy Ariary','ISO' => 'MGA','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MKD - Macedonian Denar
        $data[] = array('id' => Currencies::MKD,'name' => 'Macedonian Denar','ISO' => 'MKD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MMK - Burmese Kyat
        $data[] = array('id' => Currencies::MMK,'name' => 'Burmese Kyat','ISO' => 'MMK','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MNT - Mongolian Tughrik   
        $data[] = array('id' => Currencies::MNT,'name' => 'Mongolian Tughrik','ISO' => 'MNT','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MOP - Macau Pataca
        $data[] = array('id' => Currencies::MOP,'name' => 'Macau Pataca','ISO' => 'MOP','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MRO - Mauritian Ouguiya
        $data[] = array('id' => Currencies::MRO,'name' => 'Mauritian Ouguiya','ISO' => 'MRO','created_at' => Carbon::now(),'updated_at'=> Carbon::now());

        //seeding MUR - Mauritian Rupee
        $data[] = array('id' => Currencies::MUR,'name' => 'Mauritian Rupee','ISO' => 'MUR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MVR - Maldivian Rufiyaa
        $data[] = array('id' => Currencies::MVR,'name' => 'Maldivian Rufiyaa','ISO' => 'MVR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MWK - Malawian Kwacha
        $data[] = array('id' => Currencies::MWK,'name' => 'Malawian Kwacha','ISO' => 'MWK','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MXN - Mexican Peso
        $data[] = array('id' => Currencies::MXN,'name' => 'Mexican Peso','ISO' => 'MXN','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MYR - Malaysian Ringgit
        $data[] = array('id' => Currencies::MYR,'name' => 'Malaysian Ringgit','ISO' => 'MYR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding MZN - Mozambican Metical
        $data[] = array('id' => Currencies::MZN,'name' => 'Mozambican Metical','ISO' => 'MZN','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding NAD - Namibian Dollar
        $data[] = array('id' => Currencies::NAD,'name' => 'Namibian Dollar','ISO' => 'NAD','created_at' => Carbon::now(),'updated_at' => Carbon::now());
        
        //seeding NGN - Nigerian Naira
        $data[] = array('id' => Currencies::NGN,'name' => 'Nigerian Naira','ISO' => 'NGN','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding NIO - Nicaraguan Cordoba
        $data[] = array('id' => Currencies::NIO,'name' => 'Nicaraguan Cordoba','ISO' => 'NIO','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding NOK - Norwegian Krone
        $data[] = array('id' => Currencies::NOK,'name' => 'Norwegian Krone','ISO' => 'NOK','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding NPR - Nepalese Rupee
        $data[] = array('id' => Currencies::NPR,'name' => 'Nepalese Rupee','ISO' => 'NPR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding NZD - New Zealand Dollar
        $data[] = array('id' => Currencies::NZD,'name' => 'New Zealand Dollar','ISO' => 'NZD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding PAB - Panamanian Balboa
        $data[] = array('id' => Currencies::PAB,'name' => 'Panamian Balboa','ISO' => 'PAB','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding PEN - Peruvian Sol
        $data[] = array('id' => Currencies::PEN,'name' => 'Peruvian Sol','ISO' => 'PEN','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding PGK - Papua New Guinean Kina
        $data[] = array('id' => Currencies::PGK,'name' => 'Papua New Guinean Kina','ISO' => 'PGK','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding PHP - Philipine Peso
        $data[] = array('id' => Currencies::PHP,'name' => 'Philipine Peso','ISO' => 'PHP','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding PKR - Pakistani Rupee
        $data[] = array('id' => Currencies::PKR,'name' => 'Pakistani Rupee','ISO' => 'PKR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding PLN - Polish Zloty
        $data[] = array('id' => Currencies::PLN,'name' => 'Polish Zloty','ISO' => 'PLN','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding PYG - Paraguayan Guarani
        $data[] = array('id' => Currencies::PYG,'name' => 'Paraguayan Guarani','ISO' => 'PYG','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding QAR - Qatari Riyal
        $data[] = array('id' => Currencies::QAR,'name' => 'Qatari Riyal','ISO' => 'QAR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding RON - Romanian Leu
        $data[] = array('id' => Currencies::RON,'name' => 'Romanian Leu','ISO' => 'RON','created_at' => Carbon::now(),'updated_at' => Carbon::now());        

        //seeding RSD - Serbian Dinar
        $data[] = array('id' => Currencies::RSD,'name' => 'Serbian Dinar','ISO' => 'RSD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding RUB - Russian Ruble
        $data[] = array('id' => Currencies::RUB,'name' => 'Russian Ruble','ISO' => 'RUB','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding RWF - Rwandan Franc
        $data[] = array('id' => Currencies::RWF,'name' => 'Rwandan Franc','ISO' => 'RWF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding SAR - Saudi Arabian Riyal
        $data[] = array('id' => Currencies::SAR,'name' => 'Saudi Arabian Riyal','ISO' => 'SAR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding SBD - Soloman Islander Dollar
        $data[] = array('id' => Currencies::SBD,'name' => 'Soloman Islander Dollar','ISO' => 'SBD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding SCR - Seychellois Rupee
        $data[] = array('id' => Currencies::SCR,'name' => 'Seychellois Rupee','ISO' => 'SCR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding SEK - Sweedish Krona
        $data[] = array('id' => Currencies::SEK,'name' => 'Sweedish Krona','ISO' => 'SEK','created_at' => Carbon::now(),'updated_at' => Carbon::now());
    
        //seeding SGD - Singapore Dollar
        $data[] = array('id' => Currencies::SGD,'name' => 'Singapore Dollar','ISO' => 'SGD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding SHP - Saint Helenian Pound
        $data[] = array('id' => Currencies::SHP,'name' => 'Saint Helenian Pound','ISO' => 'SHP','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding SLL - Sierra Leonean Leone
        $data[] = array('id' => Currencies::SLL,'name' => 'Sierra Leonean Leone','ISO' => 'SLL','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding SOS - Somali Shilling 
        $data[] = array('id' => Currencies::SOS,'name' => 'Somali Shilling','ISO' => 'SOS','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding SRD - Surinamese Dollar   
        $data[] = array('id' => Currencies::SRD,'name' => 'Surinamese Dollar','ISO' => 'SRD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding SZL - Swazi Lilangeni
        $data[] = array('id' => Currencies::SZL,'name' => 'Swazi Lilangeni','ISO' => 'SZL','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding THB - Thai Baht
        $data[] = array('id' => Currencies::THB,'name' => 'Thai Baht','ISO' => 'THB','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding TJS - Tajikistani Somoni
        $data[] = array('id' => Currencies::TJS,'name' => 'Tajikistani Somoni','ISO' => 'TJS','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding TOP - Tongan Pa'anga
        $data[] = array('id' => Currencies::TOP,'name' => 'Tongan Pa\'anga','ISO' => 'TOP','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding TRY - Turkish Lira
        $data[] = array('id' => Currencies::TRY,'name' => 'Turkish Lira','ISO' => 'TRY','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding TTD - Trinidadian Dollar
        $data[] = array('id' => Currencies::TTD,'name' => 'Trinidadian Dollar','ISO' => 'TTD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding TWD - Taiwan New Dollar
        $data[] = array('id' => Currencies::TWD,'name' => 'Taiwan New Dollar','ISO' => 'TWD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding TZS - Tanzanian Shilling
        $data[] = array('id' => Currencies::TZS,'name' => 'Tanzanian Shilling','ISO' => 'TZS','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding UAH - Ukrainian Hryvnia
        $data[] = array('id' => Currencies::UAH,'name' => 'Ukrainian Hryvnia','ISO' => 'UAH','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding UGX - Ugandan Shilling
        $data[] = array('id' => Currencies::UGX,'name' => 'Ugandan Shilling','ISO' => 'UGX','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding UYU - Uruguayan Peso
        $data[] = array('id' => Currencies::UYU,'name' => 'Uruguayan Peso','ISO' => 'UYU','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding UZS - Uzbekistani Som
        $data[] = array('id' => Currencies::UZS,'name' => 'Uzbekistani Som','ISO' => 'UZS','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding VND - Vietnamese Dong
        $data[] = array('id' => Currencies::VND,'name' => 'Vietnamese Dong','ISO' => 'VND','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding VUV - Ni-Vanuatu Vatu
        $data[] = array('id' => Currencies::VUV,'name' => 'Ni-Vanuatu Vatu','ISO' => 'VUV','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding WST - Samoan Tala
        $data[] = array('id' => Currencies::WST,'name' => 'Samoan Tala','ISO' => 'WST','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding XAF - Central African CFA Franc BEAC
        $data[] = array('id' => Currencies::XAF,'name' => 'Central African CFA Franc BEAC','ISO' => 'XAF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding XCD - East Caribbean Dollar
        $data[] = array('id' => Currencies::XCD,'name' => 'East Caribbean Dollar','ISO' => 'XCD','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding XOF - CFA Franc
        $data[] = array('id' => Currencies::XOF,'name' => 'CFA Franc','ISO' => 'XOF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding XPF - CFP Franc
        $data[] = array('id' => Currencies::XPF,'name' => 'CFP Franc','ISO' => 'XPF','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding YER - Yemeni Rial
        $data[] = array('id' => Currencies::YER,'name' => 'Yemeni Rial','ISO' => 'YER','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding ZAR - South African Rand
        $data[] = array('id' => Currencies::ZAR,'name' => 'South African Rand','ISO' => 'ZAR','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        //seeding ZMW - Zambian Kwacha
        $data[] = array('id' => Currencies::ZMW,'name' => 'Zambian Kwacha','ISO' => 'ZMW','created_at' => Carbon::now(),'updated_at' => Carbon::now());

        $currencies = Currencies::insert($data);
    }
}
