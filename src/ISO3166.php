<?php

namespace arslanimamutdinov\ISOStandard3166;

use arslanimamutdinov\ISOStandardUtilities\codes\AttributeCodes;
use arslanimamutdinov\ISOStandardUtilities\StandardSearchUtility;

/**
 * Class ISO3166
 * @package arslanimamutdinov\ISOStandard3166
 * @method static Country AF()
 * @method static Country AX()
 * @method static Country AL()
 * @method static Country DZ()
 * @method static Country AS()
 * @method static Country AD()
 * @method static Country AO()
 * @method static Country AI()
 * @method static Country AQ()
 * @method static Country AG()
 * @method static Country AR()
 * @method static Country AM()
 * @method static Country AW()
 * @method static Country AU()
 * @method static Country AT()
 * @method static Country AZ()
 * @method static Country BS()
 * @method static Country BH()
 * @method static Country BD()
 * @method static Country BB()
 * @method static Country BY()
 * @method static Country BE()
 * @method static Country BZ()
 * @method static Country BJ()
 * @method static Country BM()
 * @method static Country BT()
 * @method static Country BO()
 * @method static Country BQ()
 * @method static Country BA()
 * @method static Country BW()
 * @method static Country BV()
 * @method static Country BR()
 * @method static Country IO()
 * @method static Country BN()
 * @method static Country BG()
 * @method static Country BF()
 * @method static Country BI()
 * @method static Country CV()
 * @method static Country KH()
 * @method static Country CM()
 * @method static Country CA()
 * @method static Country KY()
 * @method static Country CF()
 * @method static Country TD()
 * @method static Country CL()
 * @method static Country CN()
 * @method static Country CX()
 * @method static Country CC()
 * @method static Country CO()
 * @method static Country KM()
 * @method static Country CG()
 * @method static Country CD()
 * @method static Country CK()
 * @method static Country CR()
 * @method static Country CI()
 * @method static Country HR()
 * @method static Country CU()
 * @method static Country CW()
 * @method static Country CY()
 * @method static Country CZ()
 * @method static Country DK()
 * @method static Country DJ()
 * @method static Country DM()
 * @method static Country DO()
 * @method static Country EC()
 * @method static Country EG()
 * @method static Country SV()
 * @method static Country GQ()
 * @method static Country ER()
 * @method static Country EE()
 * @method static Country SZ()
 * @method static Country ET()
 * @method static Country FK()
 * @method static Country FO()
 * @method static Country FJ()
 * @method static Country FI()
 * @method static Country FR()
 * @method static Country GF()
 * @method static Country PF()
 * @method static Country TF()
 * @method static Country GA()
 * @method static Country GM()
 * @method static Country GE()
 * @method static Country DE()
 * @method static Country GH()
 * @method static Country GI()
 * @method static Country GR()
 * @method static Country GL()
 * @method static Country GD()
 * @method static Country GP()
 * @method static Country GU()
 * @method static Country GT()
 * @method static Country GG()
 * @method static Country GN()
 * @method static Country GW()
 * @method static Country GY()
 * @method static Country HT()
 * @method static Country HM()
 * @method static Country VA()
 * @method static Country HN()
 * @method static Country HK()
 * @method static Country HU()
 * @method static Country IS()
 * @method static Country IN()
 * @method static Country ID()
 * @method static Country IR()
 * @method static Country IQ()
 * @method static Country IE()
 * @method static Country IM()
 * @method static Country IL()
 * @method static Country IT()
 * @method static Country JM()
 * @method static Country JP()
 * @method static Country JE()
 * @method static Country JO()
 * @method static Country KZ()
 * @method static Country KE()
 * @method static Country KI()
 * @method static Country KP()
 * @method static Country KR()
 * @method static Country KW()
 * @method static Country KG()
 * @method static Country LA()
 * @method static Country LV()
 * @method static Country LB()
 * @method static Country LS()
 * @method static Country LR()
 * @method static Country LY()
 * @method static Country LI()
 * @method static Country LT()
 * @method static Country LU()
 * @method static Country MO()
 * @method static Country MG()
 * @method static Country MW()
 * @method static Country MY()
 * @method static Country MV()
 * @method static Country ML()
 * @method static Country MT()
 * @method static Country MH()
 * @method static Country MQ()
 * @method static Country MR()
 * @method static Country MU()
 * @method static Country YT()
 * @method static Country MX()
 * @method static Country FM()
 * @method static Country MD()
 * @method static Country MC()
 * @method static Country MN()
 * @method static Country ME()
 * @method static Country MS()
 * @method static Country MA()
 * @method static Country MZ()
 * @method static Country MM()
 * @method static Country NA()
 * @method static Country NR()
 * @method static Country NP()
 * @method static Country NL()
 * @method static Country NC()
 * @method static Country NZ()
 * @method static Country NI()
 * @method static Country NE()
 * @method static Country NG()
 * @method static Country NU()
 * @method static Country NF()
 * @method static Country MK()
 * @method static Country MP()
 * @method static Country NO()
 * @method static Country OM()
 * @method static Country PK()
 * @method static Country PW()
 * @method static Country PS()
 * @method static Country PA()
 * @method static Country PG()
 * @method static Country PY()
 * @method static Country PE()
 * @method static Country PH()
 * @method static Country PN()
 * @method static Country PL()
 * @method static Country PT()
 * @method static Country PR()
 * @method static Country QA()
 * @method static Country RE()
 * @method static Country RO()
 * @method static Country RU()
 * @method static Country RW()
 * @method static Country BL()
 * @method static Country SH()
 * @method static Country KN()
 * @method static Country LC()
 * @method static Country MF()
 * @method static Country PM()
 * @method static Country VC()
 * @method static Country WS()
 * @method static Country SM()
 * @method static Country ST()
 * @method static Country SA()
 * @method static Country SN()
 * @method static Country RS()
 * @method static Country SC()
 * @method static Country SL()
 * @method static Country SG()
 * @method static Country SX()
 * @method static Country SK()
 * @method static Country SI()
 * @method static Country SB()
 * @method static Country SO()
 * @method static Country ZA()
 * @method static Country GS()
 * @method static Country SS()
 * @method static Country ES()
 * @method static Country LK()
 * @method static Country SD()
 * @method static Country SR()
 * @method static Country SJ()
 * @method static Country SE()
 * @method static Country CH()
 * @method static Country SY()
 * @method static Country TW()
 * @method static Country TJ()
 * @method static Country TZ()
 * @method static Country TH()
 * @method static Country TL()
 * @method static Country TG()
 * @method static Country TK()
 * @method static Country TO()
 * @method static Country TT()
 * @method static Country TN()
 * @method static Country TR()
 * @method static Country TM()
 * @method static Country TC()
 * @method static Country TV()
 * @method static Country UG()
 * @method static Country UA()
 * @method static Country AE()
 * @method static Country GB()
 * @method static Country US()
 * @method static Country UM()
 * @method static Country UY()
 * @method static Country UZ()
 * @method static Country VU()
 * @method static Country VE()
 * @method static Country VN()
 * @method static Country VG()
 * @method static Country VI()
 * @method static Country WF()
 * @method static Country EH()
 * @method static Country YE()
 * @method static Country ZM()
 * @method static Country ZW()
 */
abstract class ISO3166
{
    private const COUNTRIES = [
        [
            AttributeCodes::ATTRIBUTE_NAME => "Afghanistan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AF",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AFG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "004",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Ãland Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AX",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ALA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "248",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Albania",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AL",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ALB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "008",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Algeria",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "DZ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "DZA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "012",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "American Samoa",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AS",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ASM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "016",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Andorra",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AD",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AND",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "020",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Angola",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AGO",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "024",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Anguilla",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AI",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AIA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "660",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Antarctica",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AQ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ATA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "010",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Antigua and Barbuda",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ATG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "028",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Argentina",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ARG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "032",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Armenia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ARM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "051",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Aruba",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AW",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ABW",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "533",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Australia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AU",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AUS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "036",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Austria",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AT",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AUT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "040",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Azerbaijan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AZ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "AZE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "031",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bahamas",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BS",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BHS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "044",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bahrain",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BH",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BHR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "048",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bangladesh",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BD",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BGD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "050",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Barbados",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BB",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BRB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "052",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Belarus",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BY",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BLR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "112",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Belgium",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BEL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "056",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Belize",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BZ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BLZ",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "084",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Benin",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BJ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BEN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "204",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bermuda",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BMU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "060",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bhutan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BT",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BTN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "064",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bolivia (Plurinational State of)",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BOL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "068",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bonaire, Sint Eustatius and Saba[a]",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BQ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BES",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "535",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bosnia and Herzegovina",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BIH",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "070",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Botswana",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BW",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BWA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "072",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bouvet Island",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BV",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BVT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "074",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Brazil",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BRA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "076",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "British Indian Ocean Territory",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "IO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "IOT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "086",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Brunei Darussalam",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BRN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "096",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Bulgaria",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BGR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "100",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Burkina Faso",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BF",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BFA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "854",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Burundi",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BI",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BDI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "108",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cabo Verde",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CV",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CPV",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "132",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cambodia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KH",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KHM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "116",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cameroon",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CMR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "120",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Canada",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CAN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "124",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cayman Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KY",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CYM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "136",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Central African Republic",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CF",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CAF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "140",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Chad",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TD",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TCD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "148",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Chile",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CL",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CHL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "152",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "China",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CHN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "156",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Christmas Island",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CX",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CXR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "162",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cocos (Keeling) Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CC",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CCK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "166",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Colombia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "COL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "170",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Comoros",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "COM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "174",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Congo",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "COG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "178",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Congo, Democratic Republic of the",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CD",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "COD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "180",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cook Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CK",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "COK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "184",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Costa Rica",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CRI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "188",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "CÃ´te d'Ivoire",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CI",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CIV",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "384",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Croatia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "HR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HRV",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "191",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cuba",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CU",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CUB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "192",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "CuraÃ§ao",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CW",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CUW",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "531",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Cyprus",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CY",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CYP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "196",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Czechia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CZ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CZE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "203",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Denmark",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "DK",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "DNK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "208",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Djibouti",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "DJ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "DJI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "262",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Dominica",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "DM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "DMA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "212",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Dominican Republic",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "DO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "DOM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "214",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Ecuador",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "EC",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ECU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "218",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Egypt",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "EG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "EGY",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "818",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "El Salvador",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SV",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SLV",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "222",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Equatorial Guinea",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GQ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GNQ",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "226",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Eritrea",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "ER",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ERI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "232",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Estonia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "EE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "EST",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "233",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Eswatini",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SZ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SWZ",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "748",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Ethiopia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "ET",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ETH",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "231",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Falkland Islands (Malvinas)",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "FK",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "FLK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "238",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Faroe Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "FO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "FRO",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "234",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Fiji",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "FJ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "FJI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "242",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Finland",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "FI",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "FIN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "246",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "France",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "FR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "FRA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "250",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "French Guiana",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GF",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GUF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "254",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "French Polynesia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PF",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PYF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "258",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "French Southern Territories",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TF",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ATF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "260",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Gabon",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GAB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "266",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Gambia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GMB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "270",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Georgia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GEO",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "268",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Germany",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "DE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "DEU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "276",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Ghana",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GH",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GHA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "288",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Gibraltar",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GI",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GIB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "292",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Greece",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GRC",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "300",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Greenland",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GL",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GRL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "304",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Grenada",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GD",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GRD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "308",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Guadeloupe",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GP",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GLP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "312",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Guam",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GU",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GUM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "316",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Guatemala",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GT",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GTM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "320",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Guernsey",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GGY",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "831",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Guinea",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GIN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "324",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Guinea-Bissau",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GW",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GNB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "624",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Guyana",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GY",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GUY",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "328",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Haiti",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "HT",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HTI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "332",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Heard Island and McDonald Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "HM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HMD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "334",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Holy See",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "VA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VAT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "336",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Honduras",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "HN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HND",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "340",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Hong Kong",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "HK",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HKG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "344",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Hungary",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "HU",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "HUN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "348",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Iceland",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "IS",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ISL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "352",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "India",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "IN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "IND",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "356",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Indonesia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "ID",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "IDN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "360",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Iran (Islamic Republic of)",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "IR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "IRN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "364",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Iraq",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "IQ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "IRQ",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "368",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Ireland",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "IE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "IRL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "372",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Isle of Man",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "IM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "IMN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "833",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Israel",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "IL",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ISR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "376",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Italy",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "IT",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ITA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "380",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Jamaica",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "JM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "JAM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "388",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Japan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "JP",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "JPN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "392",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Jersey",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "JE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "JEY",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "832",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Jordan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "JO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "JOR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "400",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Kazakhstan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KZ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KAZ",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "398",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Kenya",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KEN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "404",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Kiribati",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KI",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KIR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "296",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Korea (Democratic People's Republic of)",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KP",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PRK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "408",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Korea, Republic of",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KOR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "410",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Kuwait",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KW",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KWT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "414",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Kyrgyzstan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KGZ",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "417",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Lao People's Democratic Republic",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LAO",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "418",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Latvia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LV",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LVA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "428",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Lebanon",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LB",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LBN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "422",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Lesotho",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LS",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LSO",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "426",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Liberia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LBR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "430",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Libya",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LY",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LBY",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "434",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Liechtenstein",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LI",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LIE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "438",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Lithuania",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LT",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LTU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "440",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Luxembourg",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LU",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LUX",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "442",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Macao",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MAC",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "446",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Madagascar",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MDG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "450",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Malawi",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MW",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MWI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "454",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Malaysia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MY",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MYS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "458",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Maldives",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MV",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MDV",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "462",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mali",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "ML",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MLI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "466",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Malta",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MT",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MLT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "470",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Marshall Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MH",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MHL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "584",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Martinique",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MQ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MTQ",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "474",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mauritania",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MRT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "478",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mauritius",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MU",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MUS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "480",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mayotte",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "YT",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MYT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "175",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mexico",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MX",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MEX",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "484",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Micronesia (Federated States of)",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "FM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "FSM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "583",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Moldova, Republic of",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MD",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MDA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "498",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Monaco",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MC",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MCO",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "492",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mongolia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MNG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "496",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Montenegro",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "ME",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MNE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "499",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Montserrat",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MS",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MSR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "500",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Morocco",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MAR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "504",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Mozambique",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MZ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MOZ",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "508",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Myanmar",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MMR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "104",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Namibia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NAM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "516",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Nauru",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NRU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "520",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Nepal",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NP",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NPL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "524",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Netherlands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NL",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NLD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "528",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "New Caledonia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NC",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NCL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "540",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "New Zealand",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NZ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NZL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "554",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Nicaragua",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NI",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NIC",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "558",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Niger",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NER",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "562",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Nigeria",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NGA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "566",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Niue",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NU",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NIU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "570",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Norfolk Island",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NF",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NFK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "574",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "North Macedonia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MK",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MKD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "807",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Northern Mariana Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MP",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MNP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "580",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Norway",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "NO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "NOR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "578",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Oman",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "OM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "OMN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "512",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Pakistan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PK",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PAK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "586",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Palau",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PW",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PLW",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "585",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Palestine, State of",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PS",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PSE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "275",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Panama",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PAN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "591",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Papua New Guinea",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PNG",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "598",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Paraguay",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PY",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PRY",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "600",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Peru",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PER",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "604",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Philippines",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PH",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PHL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "608",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Pitcairn",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PCN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "612",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Poland",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PL",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "POL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "616",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Portugal",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PT",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PRT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "620",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Puerto Rico",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "PRI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "630",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Qatar",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "QA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "QAT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "634",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "RÃ©union",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "RE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "REU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "638",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Romania",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "RO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ROU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "642",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Russian Federation",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "RU",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "RUS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "643",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Rwanda",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "RW",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "RWA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "646",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Saint BarthÃ©lemy",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "BL",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "BLM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "652",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Saint Helena, Ascension and Tristan da Cunha[b]",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SH",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SHN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "654",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Saint Kitts and Nevis",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "KN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "KNA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "659",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Saint Lucia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LC",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LCA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "662",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Saint Martin (French part)",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "MF",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "MAF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "663",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Saint Pierre and Miquelon",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "PM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SPM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "666",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Saint Vincent and the Grenadines",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "VC",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VCT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "670",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Samoa",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "WS",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "WSM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "882",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "San Marino",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SMR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "674",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Sao Tome and Principe",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "ST",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "STP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "678",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Saudi Arabia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SAU",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "682",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Senegal",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SEN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "686",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Serbia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "RS",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SRB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "688",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Seychelles",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SC",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SYC",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "690",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Sierra Leone",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SL",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SLE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "694",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Singapore",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SGP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "702",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Sint Maarten (Dutch part)",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SX",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SXM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "534",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Slovakia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SK",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SVK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "703",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Slovenia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SI",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SVN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "705",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Solomon Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SB",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SLB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "090",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Somalia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SOM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "706",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "South Africa",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "ZA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ZAF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "710",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "South Georgia and the South Sandwich Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GS",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SGS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "239",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "South Sudan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SS",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SSD",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "728",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Spain",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "ES",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ESP",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "724",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Sri Lanka",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "LK",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "LKA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "144",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Sudan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SD",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SDN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "729",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Suriname",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SUR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "740",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Svalbard and Jan Mayen[c]",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SJ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SJM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "744",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Sweden",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SWE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "752",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Switzerland",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "CH",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "CHE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "756",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Syrian Arab Republic",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "SY",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "SYR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "760",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Taiwan, Province of China",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TW",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TWN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "158",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Tajikistan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TJ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TJK",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "762",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Tanzania, United Republic of",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TZ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TZA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "834",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Thailand",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TH",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "THA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "764",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Timor-Leste",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TL",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TLS",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "626",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Togo",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TGO",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "768",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Tokelau",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TK",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TKL",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "772",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Tonga",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TO",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TON",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "776",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Trinidad and Tobago",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TT",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TTO",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "780",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Tunisia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TUN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "788",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Turkey",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TR",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TUR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "792",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Turkmenistan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TKM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "795",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Turks and Caicos Islands",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TC",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TCA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "796",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Tuvalu",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "TV",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "TUV",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "798",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Uganda",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "UG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "UGA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "800",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Ukraine",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "UA",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "UKR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "804",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "United Arab Emirates",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "AE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ARE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "784",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "United Kingdom of Great Britain and Northern Ireland",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "GB",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "GBR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "826",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "United States of America",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "US",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "USA",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "840",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "United States Minor Outlying Islands[e]",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "UM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "UMI",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "581",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Uruguay",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "UY",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "URY",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "858",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Uzbekistan",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "UZ",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "UZB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "860",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Vanuatu",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "VU",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VUT",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "548",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Venezuela (Bolivarian Republic of)",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "VE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VEN",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "862",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Viet Nam",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "VN",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VNM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "704",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Virgin Islands (British)",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "VG",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VGB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "092",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Virgin Islands (U.S.)",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "VI",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "VIR",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "850",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Wallis and Futuna",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "WF",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "WLF",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "876",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => " Western Sahara",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "EH",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ESH",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "732",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Yemen",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "YE",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "YEM",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "887",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Zambia",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "ZM",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ZMB",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "894",
        ],
        [
            AttributeCodes::ATTRIBUTE_NAME => "Zimbabwe",
            AttributeCodes::ATTRIBUTE_ALPHA2 => "ZW",
            AttributeCodes::ATTRIBUTE_ALPHA3 => "ZWE",
            AttributeCodes::ATTRIBUTE_NUMERIC_CODE => "716",
        ],
    ];

    public static function __callStatic($name, $arguments)
    {
        $countryData = StandardSearchUtility::getByAlpha2(self::COUNTRIES, $name) ??
            StandardSearchUtility::getByAlpha3(self::COUNTRIES, $name) ??
            null;

        return !empty($countryData) ? self::createCountry($countryData) : null;
    }

    /**
     * @return Country[]
     */
    public static function getAll(): array
    {
        return array_map(
            function (array $countryData): Country {
                return self::createCountry($countryData);
            },
            array_values(self::COUNTRIES)
        );
    }

    /**
     * @param string[] $alpha2Codes
     * @return array
     */
    public static function getAllByAlpha2Codes(array $alpha2Codes): array
    {
        return self::createCountries(StandardSearchUtility::getAllByAlpha2Values(self::COUNTRIES, $alpha2Codes));
    }

    public static function getRawStandardsData(): array
    {
        return self::COUNTRIES;
    }

    public static function getByAlpha2(string $alpha2): ?Country
    {
        $standardData = StandardSearchUtility::getByAlpha2(self::COUNTRIES, $alpha2);

        return !empty($standardData) ? self::createCountry($standardData) : null;
    }

    public static function getByAlpha3(string $alpha3): ?Country
    {
        $standardData = StandardSearchUtility::getByAlpha3(self::COUNTRIES, $alpha3);

        return !empty($standardData) ? self::createCountry($standardData) : null;
    }

    public static function getByNumericCode(string $numericCode): ?Country
    {
        $standardData = StandardSearchUtility::getByNumericCode(self::COUNTRIES, $numericCode);

        return !empty($standardData) ? self::createCountry($standardData) : null;
    }

    /**
     * @param array $countriesData
     * @return Country[]
     */
    private static function createCountries(array $countriesData): array
    {
        return array_map(
            function (array $countryData): Country {
                return self::createCountry($countryData);
            },
            $countriesData
        );
    }

    private static function createCountry(array $countryData): Country
    {
        return (
            new Country(
                $countryData[AttributeCodes::ATTRIBUTE_NAME],
                $countryData[AttributeCodes::ATTRIBUTE_ALPHA2],
                $countryData[AttributeCodes::ATTRIBUTE_ALPHA3],
                $countryData[AttributeCodes::ATTRIBUTE_NUMERIC_CODE]
            )
        );
    }
}
