<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currencies extends Model
{
    use HasFactory,SoftDeletes;
    public const USD = 1;
    public const AED = 2;
    public const AFN = 3;
    public const ALL = 4;
    public const AMD = 5;
    public const ANG = 6;
    public const AOA = 7;
    public const ARS = 8;
    public const AUD = 9;
    public const AWG = 10;
    public const AZN = 11;
    public const BAM = 12;
    public const BDT = 13;
    public const BGN = 14;
    public const BIF = 15;
    public const BMD = 16;
    public const BND = 17;
    public const BOB = 18;
    public const BRL = 19;
    public const BSD = 20;
    public const BWP = 21;
    public const BYN = 22;
    public const BZD = 23;
    public const CAD = 24;
    public const CDF = 25;
    public const CHF = 26;
    public const CLP = 27;
    public const CNY = 28;
    public const COP = 29;
    public const CRC = 30;
    public const CVE = 31;
    public const CZK = 32;
    public const DJF = 33;
    public const DKK = 34;
    public const DOP = 35;
    public const DZD = 36;
    public const EGP = 37;
    public const ETB = 38;
    public const EUR = 39;
    public const FJD = 40;
    public const FKP = 41;
    public const GBP = 42;
    public const GEL = 43;
    public const GIP = 44;
    public const GMD = 45;
    public const GNF = 46;
    public const GTQ = 47;
    public const GYD = 48;
    public const HKD = 49;
    public const HNL = 50;
    public const HRK = 51;
    public const HTG = 52;
    public const HUF = 53;
    public const IDR = 54;
    public const INR = 55;
    public const ISK = 56;
    public const JMD = 57;
    public const JPY = 58;
    public const KES = 59;
    public const KGS = 60;
    public const KHR = 61;
    public const KMF = 62;
    public const KRW = 63;
    public const KYD = 64;
    public const KZT = 65;
    public const LAK = 66;
    public const LBP = 67;
    public const LKR = 68;
    public const LRD = 69;
    public const LSL = 70;
    public const MAD = 71;
    public const MDL = 72;
    public const MGA = 73;
    public const MKD = 74;
    public const MMK = 75;
    public const MNT = 76;
    public const MOP = 77;
    public const MRO = 78;
    public const MUR = 79;
    public const MVR = 80;
    public const MWK = 81;
    public const MXN = 82;
    public const MYR = 83;
    public const MZN = 84;
    public const NAD = 85;
    public const NGN = 86;
    public const NIO = 87;
    public const NOK = 88;
    public const NPR = 89;
    public const NZD = 90;
    public const PAB = 91;
    public const PEN = 92;
    public const PGK = 93;
    public const PHP = 94;
    public const PKR = 95;
    public const PLN = 96;
    public const PYG = 97;
    public const QAR = 98;
    public const RON = 99;
    public const RSD = 100;
    public const RUB = 101;
    public const RWF = 102;
    public const SAR = 103;
    public const SBD = 104;
    public const SCR = 105;
    public const SEK = 106;
    public const SGD = 107;
    public const SHP = 108;
    public const SLL = 109;
    public const SOS = 110;
    public const SRD = 111;
    public const SZL = 112;
    public const THB = 113;
    public const TJS = 114;
    public const TOP = 115;
    public const TRY = 116;
    public const TTD = 117;
    public const TWD = 118;
    public const TZS = 119;
    public const UAH = 120;
    public const UGX = 121;
    public const UYU = 122;
    public const UZS = 123;
    public const VND = 124;
    public const VUV = 125;
    public const WST = 126;
    public const XAF = 127;
    public const XCD = 128;
    public const XOF = 129;
    public const XPF = 130;
    public const YER = 131;
    public const ZAR = 132;
    public const ZMW = 133;

    protected $table = 'currencies';
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded  = [];

    /**
     * Get all of the user_invoices for the Currencies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user_invoices()
    {
        return $this->hasMany(UserInvoices::class, 'currency_id', 'id');
    }
}
