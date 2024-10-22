<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            [ "title" => 'Leke', "code" => 'ALL', "symbol" => 'Lek'],
            [ "title" => 'Dollars', "code" => 'USD', "symbol" => '$'],
            [ "title" => 'Afghanis', "code" => 'AFN', "symbol" => '؋'],
            [ "title" => 'Pesos', "code" => 'ARS', "symbol" => '$'],
            [ "title" => 'Guilders', "code" => 'AWG', "symbol" => 'ƒ'],
            [ "title" => 'Dollars', "code" => 'AUD', "symbol" => '$'],
            [ "title" => 'New Manats', "code" => 'AZN', "symbol" => 'ман'],
            [ "title" => 'Dollars', "code" => 'BSD', "symbol" => '$'],
            [ "title" => 'Dollars', "code" => 'BBD', "symbol" => '$'],
            [ "title" => 'Rubles', "code" => 'BYR', "symbol" => 'p.'],
            [ "title" => 'Euro', "code" => 'EUR', "symbol" => '€'],
            [ "title" => 'Dollars', "code" => 'BZD', "symbol" => 'BZ$'],
            [ "title" => 'Dollars', "code" => 'BMD', "symbol" => '$'],
            [ "title" => 'Bolivianos', "code" => 'BOB', "symbol" => '$b'],
            [ "title" => 'Convertible Marka', "code" => 'BAM', "symbol" => 'KM'],
            [ "title" => 'Pula', "code" => 'BWP', "symbol" => 'P'],
            [ "title" => 'Leva', "code" => 'BGN', "symbol" => 'лв'],
            [ "title" => 'Reais', "code" => 'BRL', "symbol" => 'R$'],
            [ "title" => 'Pounds', "code" => 'GBP', "symbol" => '£'],
            [ "title" => 'Dollars', "code" => 'BND', "symbol" => '$'],
            [ "title" => 'Riels', "code" => 'KHR', "symbol" => '៛'],
            [ "title" => 'Dollars', "code" => 'CAD', "symbol" => '$'],
            [ "title" => 'Dollars', "code" => 'KYD', "symbol" => '$'],
            [ "title" => 'Pesos', "code" => 'CLP', "symbol" => '$'],
            [ "title" => 'Yuan Renminbi', "code" => 'CNY', "symbol" => '¥'],
            [ "title" => 'Pesos', "code" => 'COP', "symbol" => '$'],
            [ "title" => 'Colón', "code" => 'CRC', "symbol" => '₡'],
            [ "title" => 'Kuna', "code" => 'HRK', "symbol" => 'kn'],
            [ "title" => 'Pesos', "code" => 'CUP', "symbol" => '₱'],
            [ "title" => 'Koruny', "code" => 'CZK', "symbol" => 'Kč'],
            [ "title" => 'Kroner', "code" => 'DKK', "symbol" => 'kr'],
            [ "title" => 'Pesos', "code" => 'DOP ', "symbol" => 'RD$'],
            [ "title" => 'Dollars', "code" => 'XCD', "symbol" => '$'],
            [ "title" => 'Pounds', "code" => 'EGP', "symbol" => '£'],
            [ "title" => 'Colones', "code" => 'SVC', "symbol" => '$'],
            [ "title" => 'Pounds', "code" => 'FKP', "symbol" => '£'],
            [ "title" => 'Dollars', "code" => 'FJD', "symbol" => '$'],
            [ "title" => 'Cedis', "code" => 'GHC', "symbol" => '¢'],
            [ "title" => 'Pounds', "code" => 'GIP', "symbol" => '£'],
            [ "title" => 'Quetzales', "code" => 'GTQ', "symbol" => 'Q'],
            [ "title" => 'Pounds', "code" => 'GGP', "symbol" => '£'],
            [ "title" => 'Dollars', "code" => 'GYD', "symbol" => '$'],
            [ "title" => 'Lempiras', "code" => 'HNL', "symbol" => 'L'],
            [ "title" => 'Dollars', "code" => 'HKD', "symbol" => '$'],
            [ "title" => 'Forint', "code" => 'HUF', "symbol" => 'Ft'],
            [ "title" => 'Kronur', "code" => 'ISK', "symbol" => 'kr'],
            [ "title" => 'Rupees', "code" => 'INR', "symbol" => 'Rp'],
            [ "title" => 'Rupiahs', "code" => 'IDR', "symbol" => 'Rp'],
            [ "title" => 'Rials', "code" => 'IRR', "symbol" => '﷼'],
            [ "title" => 'Pounds', "code" => 'IMP', "symbol" => '£'],
            [ "title" => 'New Shekels', "code" => 'ILS', "symbol" => '₪'],
            [ "title" => 'Dollars', "code" => 'JMD', "symbol" => 'J$'],
            [ "title" => 'Yen', "code" => 'JPY', "symbol" => '¥'],
            [ "title" => 'Pounds', "code" => 'JEP', "symbol" => '£'],
            [ "title" => 'Tenge', "code" => 'KZT', "symbol" => 'лв'],
            [ "title" => 'Won', "code" => 'KPW', "symbol" => '₩'],
            [ "title" => 'Won', "code" => 'KRW', "symbol" => '₩'],
            [ "title" => 'Soms', "code" => 'KGS', "symbol" => 'лв'],
            [ "title" => 'Kips', "code" => 'LAK', "symbol" => '₭'],
            [ "title" => 'Lati', "code" => 'LVL', "symbol" => 'Ls'],
            [ "title" => 'Pounds', "code" => 'LBP', "symbol" => '£'],
            [ "title" => 'Dollars', "code" => 'LRD', "symbol" => '$'],
            [ "title" => 'Switzerland Francs', "code" => 'CHF', "symbol" => 'CHF'],
            [ "title" => 'Litai', "code" => 'LTL', "symbol" => 'Lt'],
            [ "title" => 'Denars', "code" => 'MKD', "symbol" => 'ден'],
            [ "title" => 'Ringgits', "code" => 'MYR', "symbol" => 'RM'],
            [ "title" => 'Rupees', "code" => 'MUR', "symbol" => '₨'],
            [ "title" => 'Pesos', "code" => 'MXN', "symbol" => '$'],
            [ "title" => 'Tugriks', "code" => 'MNT', "symbol" => '₮'],
            [ "title" => 'Meticais', "code" => 'MZN', "symbol" => 'MT'],
            [ "title" => 'Dollars', "code" => 'NAD', "symbol" => '$'],
            [ "title" => 'Rupees', "code" => 'NPR', "symbol" => '₨'],
            [ "title" => 'Guilders', "code" => 'ANG', "symbol" => 'ƒ'],
            [ "title" => 'Dollars', "code" => 'NZD', "symbol" => '$'],
            [ "title" => 'Cordobas', "code" => 'NIO', "symbol" => 'C$'],
            [ "title" => 'Nairas', "code" => 'NGN', "symbol" => '₦'],
            [ "title" => 'Krone', "code" => 'NOK', "symbol" => 'kr'],
            [ "title" => 'Rials', "code" => 'OMR', "symbol" => '﷼'],
            [ "title" => 'Rupees', "code" => 'PKR', "symbol" => '₨'],
            [ "title" => 'Balboa', "code" => 'PAB', "symbol" => 'B/.'],
            [ "title" => 'Guarani', "code" => 'PYG', "symbol" => 'Gs'],
            [ "title" => 'Nuevos Soles', "code" => 'PEN', "symbol" => 'S/.'],
            [ "title" => 'Pesos', "code" => 'PHP', "symbol" => 'Php'],
            [ "title" => 'Zlotych', "code" => 'PLN', "symbol" => 'zł'],
            [ "title" => 'Rials', "code" => 'QAR', "symbol" => '﷼'],
            [ "title" => 'New Lei', "code" => 'RON', "symbol" => 'lei'],
            [ "title" => 'Rubles', "code" => 'RUB', "symbol" => 'руб'],
            [ "title" => 'Pounds', "code" => 'SHP', "symbol" => '£'],
            [ "title" => 'Riyals', "code" => 'SAR', "symbol" => '﷼'],
            [ "title" => 'Dinars', "code" => 'RSD', "symbol" => 'Дин.'],
            [ "title" => 'Rupees', "code" => 'SCR', "symbol" => '₨'],
            [ "title" => 'Dollars', "code" => 'SGD', "symbol" => '$'],
            [ "title" => 'Dollars', "code" => 'SBD', "symbol" => '$'],
            [ "title" => 'Shillings', "code" => 'SOS', "symbol" => 'S'],
            [ "title" => 'Rand', "code" => 'ZAR', "symbol" => 'R'],
            [ "title" => 'Rupees', "code" => 'LKR', "symbol" => '₨'],
            [ "title" => 'Kronor', "code" => 'SEK', "symbol" => 'kr'],
            [ "title" => 'Dollars', "code" => 'SRD', "symbol" => '$'],
            [ "title" => 'Pounds', "code" => 'SYP', "symbol" => '£'],
            [ "title" => 'New Dollars', "code" => 'TWD', "symbol" => 'NT$'],
            [ "title" => 'Baht', "code" => 'THB', "symbol" => '฿'],
            [ "title" => 'Dollars', "code" => 'TTD', "symbol" => 'TT$'],
            [ "title" => 'Lira', "code" => 'TRY', "symbol" => 'TL'],
            [ "title" => 'Liras', "code" => 'TRL', "symbol" => '£'],
            [ "title" => 'Dollars', "code" => 'TVD', "symbol" => '$'],
            [ "title" => 'Hryvnia', "code" => 'UAH', "symbol" => '₴'],
            [ "title" => 'Pesos', "code" => 'UYU', "symbol" => '$U'],
            [ "title" => 'Sums', "code" => 'UZS', "symbol" => 'лв'],
            [ "title" => 'Bolivares Fuertes', "code" => 'VEF', "symbol" => 'Bs'],
            [ "title" => 'Dong', "code" => 'VND', "symbol" => '₫'],
            [ "title" => 'Rials', "code" => 'YER', "symbol" => '﷼'],
            [ "title" => 'Zimbabwe Dollars', "code" => 'ZWD', "symbol" => 'Z$']
        ]);
    }
}
