<?php

namespace arslanimamutdinov\ISOStandard3166;

class ISO3166Utility
{
    /**
     * @return Country[]
     */
    public function getAll(): array
    {
        return ISO3166::getAll();
    }

    /**
     * @param string[] $alpha2Codes
     * @return Country[]
     */
    public function getAllByAlpha2Codes(array $alpha2Codes): array
    {
        return ISO3166::getAllByAlpha2Codes($alpha2Codes);
    }

    /**
     * @param string[] $alpha3Codes
     * @return Country[]
     */
    public function getAllByAlpha3Codes(array $alpha3Codes): array
    {
        return ISO3166::getAllByAlpha3Codes($alpha3Codes);
    }

    public function getRawStandardsData(): array
    {
        return ISO3166::getRawStandardsData();
    }

    public function getByAlpha2(string $alpha2): ?Country
    {
        return ISO3166::getByAlpha2($alpha2);
    }

    public function getByAlpha3(string $alpha3): ?Country
    {
        return ISO3166::getByAlpha3($alpha3);
    }

    public function getByNumericCode(string $numericCode): ?Country
    {
        return ISO3166::getByNumericCode($numericCode);
    }

    /**
     * Country Afghanistan standard
     * @return Country
     */
    public function AF(): Country
    {
        return ISO3166::AF();
    }

    /**
     * Country Ãland Islands standard
     * @return Country
     */
    public function AX(): Country
    {
        return ISO3166::AX();
    }

    /**
     * Country Albania standard
     * @return Country
     */
    public function AL(): Country
    {
        return ISO3166::AL();
    }

    /**
     * Country Algeria standard
     * @return Country
     */
    public function DZ(): Country
    {
        return ISO3166::DZ();
    }

    /**
     * Country American Samoa standard
     * @return Country
     */
    public function AS(): Country
    {
        return ISO3166::AS();
    }

    /**
     * Country Andorra standard
     * @return Country
     */
    public function AD(): Country
    {
        return ISO3166::AD();
    }

    /**
     * Country Angola standard
     * @return Country
     */
    public function AO(): Country
    {
        return ISO3166::AO();
    }

    /**
     * Country Anguilla standard
     * @return Country
     */
    public function AI(): Country
    {
        return ISO3166::AI();
    }

    /**
     * Country Antarctica standard
     * @return Country
     */
    public function AQ(): Country
    {
        return ISO3166::AQ();
    }

    /**
     * Country Antigua and Barbuda standard
     * @return Country
     */
    public function AG(): Country
    {
        return ISO3166::AG();
    }

    /**
     * Country Argentina standard
     * @return Country
     */
    public function AR(): Country
    {
        return ISO3166::AR();
    }

    /**
     * Country Armenia standard
     * @return Country
     */
    public function AM(): Country
    {
        return ISO3166::AM();
    }

    /**
     * Country Aruba standard
     * @return Country
     */
    public function AW(): Country
    {
        return ISO3166::AW();
    }

    /**
     * Country Australia standard
     * @return Country
     */
    public function AU(): Country
    {
        return ISO3166::AU();
    }

    /**
     * Country Austria standard
     * @return Country
     */
    public function AT(): Country
    {
        return ISO3166::AT();
    }

    /**
     * Country Azerbaijan standard
     * @return Country
     */
    public function AZ(): Country
    {
        return ISO3166::AZ();
    }

    /**
     * Country Bahamas standard
     * @return Country
     */
    public function BS(): Country
    {
        return ISO3166::BS();
    }

    /**
     * Country Bahrain standard
     * @return Country
     */
    public function BH(): Country
    {
        return ISO3166::BH();
    }

    /**
     * Country Bangladesh standard
     * @return Country
     */
    public function BD(): Country
    {
        return ISO3166::BD();
    }

    /**
     * Country Barbados standard
     * @return Country
     */
    public function BB(): Country
    {
        return ISO3166::BB();
    }

    /**
     * Country Belarus standard
     * @return Country
     */
    public function BY(): Country
    {
        return ISO3166::BY();
    }

    /**
     * Country Belgium standard
     * @return Country
     */
    public function BE(): Country
    {
        return ISO3166::BE();
    }

    /**
     * Country Belize standard
     * @return Country
     */
    public function BZ(): Country
    {
        return ISO3166::BZ();
    }

    /**
     * Country Benin standard
     * @return Country
     */
    public function BJ(): Country
    {
        return ISO3166::BJ();
    }

    /**
     * Country Bermuda standard
     * @return Country
     */
    public function BM(): Country
    {
        return ISO3166::BM();
    }

    /**
     * Country Bhutan standard
     * @return Country
     */
    public function BT(): Country
    {
        return ISO3166::BT();
    }

    /**
     * Country Bolivia (Plurinational State of) standard
     * @return Country
     */
    public function BO(): Country
    {
        return ISO3166::BO();
    }

    /**
     * Country Bonaire, Sint Eustatius and Saba[a] standard
     * @return Country
     */
    public function BQ(): Country
    {
        return ISO3166::BQ();
    }

    /**
     * Country Bosnia and Herzegovina standard
     * @return Country
     */
    public function BA(): Country
    {
        return ISO3166::BA();
    }

    /**
     * Country Botswana standard
     * @return Country
     */
    public function BW(): Country
    {
        return ISO3166::BW();
    }

    /**
     * Country Bouvet Island standard
     * @return Country
     */
    public function BV(): Country
    {
        return ISO3166::BV();
    }

    /**
     * Country Brazil standard
     * @return Country
     */
    public function BR(): Country
    {
        return ISO3166::BR();
    }

    /**
     * Country British Indian Ocean Territory standard
     * @return Country
     */
    public function IO(): Country
    {
        return ISO3166::IO();
    }

    /**
     * Country Brunei Darussalam standard
     * @return Country
     */
    public function BN(): Country
    {
        return ISO3166::BN();
    }

    /**
     * Country Bulgaria standard
     * @return Country
     */
    public function BG(): Country
    {
        return ISO3166::BG();
    }

    /**
     * Country Burkina Faso standard
     * @return Country
     */
    public function BF(): Country
    {
        return ISO3166::BF();
    }

    /**
     * Country Burundi standard
     * @return Country
     */
    public function BI(): Country
    {
        return ISO3166::BI();
    }

    /**
     * Country Cabo Verde standard
     * @return Country
     */
    public function CV(): Country
    {
        return ISO3166::CV();
    }

    /**
     * Country Cambodia standard
     * @return Country
     */
    public function KH(): Country
    {
        return ISO3166::KH();
    }

    /**
     * Country Cameroon standard
     * @return Country
     */
    public function CM(): Country
    {
        return ISO3166::CM();
    }

    /**
     * Country Canada standard
     * @return Country
     */
    public function CA(): Country
    {
        return ISO3166::CA();
    }

    /**
     * Country Cayman Islands standard
     * @return Country
     */
    public function KY(): Country
    {
        return ISO3166::KY();
    }

    /**
     * Country Central African Republic standard
     * @return Country
     */
    public function CF(): Country
    {
        return ISO3166::CF();
    }

    /**
     * Country Chad standard
     * @return Country
     */
    public function TD(): Country
    {
        return ISO3166::TD();
    }

    /**
     * Country Chile standard
     * @return Country
     */
    public function CL(): Country
    {
        return ISO3166::CL();
    }

    /**
     * Country China standard
     * @return Country
     */
    public function CN(): Country
    {
        return ISO3166::CN();
    }

    /**
     * Country Christmas Island standard
     * @return Country
     */
    public function CX(): Country
    {
        return ISO3166::CX();
    }

    /**
     * Country Cocos (Keeling) Islands standard
     * @return Country
     */
    public function CC(): Country
    {
        return ISO3166::CC();
    }

    /**
     * Country Colombia standard
     * @return Country
     */
    public function CO(): Country
    {
        return ISO3166::CO();
    }

    /**
     * Country Comoros standard
     * @return Country
     */
    public function KM(): Country
    {
        return ISO3166::KM();
    }

    /**
     * Country Congo standard
     * @return Country
     */
    public function CG(): Country
    {
        return ISO3166::CG();
    }

    /**
     * Country Congo, Democratic Republic of the standard
     * @return Country
     */
    public function CD(): Country
    {
        return ISO3166::CD();
    }

    /**
     * Country Cook Islands standard
     * @return Country
     */
    public function CK(): Country
    {
        return ISO3166::CK();
    }

    /**
     * Country Costa Rica standard
     * @return Country
     */
    public function CR(): Country
    {
        return ISO3166::CR();
    }

    /**
     * Country CÃ´te d'Ivoire standard
     * @return Country
     */
    public function CI(): Country
    {
        return ISO3166::CI();
    }

    /**
     * Country Croatia standard
     * @return Country
     */
    public function HR(): Country
    {
        return ISO3166::HR();
    }

    /**
     * Country Cuba standard
     * @return Country
     */
    public function CU(): Country
    {
        return ISO3166::CU();
    }

    /**
     * Country CuraÃ§ao standard
     * @return Country
     */
    public function CW(): Country
    {
        return ISO3166::CW();
    }

    /**
     * Country Cyprus standard
     * @return Country
     */
    public function CY(): Country
    {
        return ISO3166::CY();
    }

    /**
     * Country Czechia standard
     * @return Country
     */
    public function CZ(): Country
    {
        return ISO3166::CZ();
    }

    /**
     * Country Denmark standard
     * @return Country
     */
    public function DK(): Country
    {
        return ISO3166::DK();
    }

    /**
     * Country Djibouti standard
     * @return Country
     */
    public function DJ(): Country
    {
        return ISO3166::DJ();
    }

    /**
     * Country Dominica standard
     * @return Country
     */
    public function DM(): Country
    {
        return ISO3166::DM();
    }

    /**
     * Country Dominican Republic standard
     * @return Country
     */
    public function DO(): Country
    {
        return ISO3166::DO();
    }

    /**
     * Country Ecuador standard
     * @return Country
     */
    public function EC(): Country
    {
        return ISO3166::EC();
    }

    /**
     * Country Egypt standard
     * @return Country
     */
    public function EG(): Country
    {
        return ISO3166::EG();
    }

    /**
     * Country El Salvador standard
     * @return Country
     */
    public function SV(): Country
    {
        return ISO3166::SV();
    }

    /**
     * Country Equatorial Guinea standard
     * @return Country
     */
    public function GQ(): Country
    {
        return ISO3166::GQ();
    }

    /**
     * Country Eritrea standard
     * @return Country
     */
    public function ER(): Country
    {
        return ISO3166::ER();
    }

    /**
     * Country Estonia standard
     * @return Country
     */
    public function EE(): Country
    {
        return ISO3166::EE();
    }

    /**
     * Country Eswatini standard
     * @return Country
     */
    public function SZ(): Country
    {
        return ISO3166::SZ();
    }

    /**
     * Country Ethiopia standard
     * @return Country
     */
    public function ET(): Country
    {
        return ISO3166::ET();
    }

    /**
     * Country Falkland Islands (Malvinas) standard
     * @return Country
     */
    public function FK(): Country
    {
        return ISO3166::FK();
    }

    /**
     * Country Faroe Islands standard
     * @return Country
     */
    public function FO(): Country
    {
        return ISO3166::FO();
    }

    /**
     * Country Fiji standard
     * @return Country
     */
    public function FJ(): Country
    {
        return ISO3166::FJ();
    }

    /**
     * Country Finland standard
     * @return Country
     */
    public function FI(): Country
    {
        return ISO3166::FI();
    }

    /**
     * Country France standard
     * @return Country
     */
    public function FR(): Country
    {
        return ISO3166::FR();
    }

    /**
     * Country French Guiana standard
     * @return Country
     */
    public function GF(): Country
    {
        return ISO3166::GF();
    }

    /**
     * Country French Polynesia standard
     * @return Country
     */
    public function PF(): Country
    {
        return ISO3166::PF();
    }

    /**
     * Country French Southern Territories standard
     * @return Country
     */
    public function TF(): Country
    {
        return ISO3166::TF();
    }

    /**
     * Country Gabon standard
     * @return Country
     */
    public function GA(): Country
    {
        return ISO3166::GA();
    }

    /**
     * Country Gambia standard
     * @return Country
     */
    public function GM(): Country
    {
        return ISO3166::GM();
    }

    /**
     * Country Georgia standard
     * @return Country
     */
    public function GE(): Country
    {
        return ISO3166::GE();
    }

    /**
     * Country Germany standard
     * @return Country
     */
    public function DE(): Country
    {
        return ISO3166::DE();
    }

    /**
     * Country Ghana standard
     * @return Country
     */
    public function GH(): Country
    {
        return ISO3166::GH();
    }

    /**
     * Country Gibraltar standard
     * @return Country
     */
    public function GI(): Country
    {
        return ISO3166::GI();
    }

    /**
     * Country Greece standard
     * @return Country
     */
    public function GR(): Country
    {
        return ISO3166::GR();
    }

    /**
     * Country Greenland standard
     * @return Country
     */
    public function GL(): Country
    {
        return ISO3166::GL();
    }

    /**
     * Country Grenada standard
     * @return Country
     */
    public function GD(): Country
    {
        return ISO3166::GD();
    }

    /**
     * Country Guadeloupe standard
     * @return Country
     */
    public function GP(): Country
    {
        return ISO3166::GP();
    }

    /**
     * Country Guam standard
     * @return Country
     */
    public function GU(): Country
    {
        return ISO3166::GU();
    }

    /**
     * Country Guatemala standard
     * @return Country
     */
    public function GT(): Country
    {
        return ISO3166::GT();
    }

    /**
     * Country Guernsey standard
     * @return Country
     */
    public function GG(): Country
    {
        return ISO3166::GG();
    }

    /**
     * Country Guinea standard
     * @return Country
     */
    public function GN(): Country
    {
        return ISO3166::GN();
    }

    /**
     * Country Guinea-Bissau standard
     * @return Country
     */
    public function GW(): Country
    {
        return ISO3166::GW();
    }

    /**
     * Country Guyana standard
     * @return Country
     */
    public function GY(): Country
    {
        return ISO3166::GY();
    }

    /**
     * Country Haiti standard
     * @return Country
     */
    public function HT(): Country
    {
        return ISO3166::HT();
    }

    /**
     * Country Heard Island and McDonald Islands standard
     * @return Country
     */
    public function HM(): Country
    {
        return ISO3166::HM();
    }

    /**
     * Country Holy See standard
     * @return Country
     */
    public function VA(): Country
    {
        return ISO3166::VA();
    }

    /**
     * Country Honduras standard
     * @return Country
     */
    public function HN(): Country
    {
        return ISO3166::HN();
    }

    /**
     * Country Hong Kong standard
     * @return Country
     */
    public function HK(): Country
    {
        return ISO3166::HK();
    }

    /**
     * Country Hungary standard
     * @return Country
     */
    public function HU(): Country
    {
        return ISO3166::HU();
    }

    /**
     * Country Iceland standard
     * @return Country
     */
    public function IS(): Country
    {
        return ISO3166::IS();
    }

    /**
     * Country India standard
     * @return Country
     */
    public function IN(): Country
    {
        return ISO3166::IN();
    }

    /**
     * Country Indonesia standard
     * @return Country
     */
    public function ID(): Country
    {
        return ISO3166::ID();
    }

    /**
     * Country Iran (Islamic Republic of) standard
     * @return Country
     */
    public function IR(): Country
    {
        return ISO3166::IR();
    }

    /**
     * Country Iraq standard
     * @return Country
     */
    public function IQ(): Country
    {
        return ISO3166::IQ();
    }

    /**
     * Country Ireland standard
     * @return Country
     */
    public function IE(): Country
    {
        return ISO3166::IE();
    }

    /**
     * Country Isle of Man standard
     * @return Country
     */
    public function IM(): Country
    {
        return ISO3166::IM();
    }

    /**
     * Country Israel standard
     * @return Country
     */
    public function IL(): Country
    {
        return ISO3166::IL();
    }

    /**
     * Country Italy standard
     * @return Country
     */
    public function IT(): Country
    {
        return ISO3166::IT();
    }

    /**
     * Country Jamaica standard
     * @return Country
     */
    public function JM(): Country
    {
        return ISO3166::JM();
    }

    /**
     * Country Japan standard
     * @return Country
     */
    public function JP(): Country
    {
        return ISO3166::JP();
    }

    /**
     * Country Jersey standard
     * @return Country
     */
    public function JE(): Country
    {
        return ISO3166::JE();
    }

    /**
     * Country Jordan standard
     * @return Country
     */
    public function JO(): Country
    {
        return ISO3166::JO();
    }

    /**
     * Country Kazakhstan standard
     * @return Country
     */
    public function KZ(): Country
    {
        return ISO3166::KZ();
    }

    /**
     * Country Kenya standard
     * @return Country
     */
    public function KE(): Country
    {
        return ISO3166::KE();
    }

    /**
     * Country Kiribati standard
     * @return Country
     */
    public function KI(): Country
    {
        return ISO3166::KI();
    }

    /**
     * Country Korea (Democratic People's Republic of) standard
     * @return Country
     */
    public function KP(): Country
    {
        return ISO3166::KP();
    }

    /**
     * Country Korea, Republic of standard
     * @return Country
     */
    public function KR(): Country
    {
        return ISO3166::KR();
    }

    /**
     * Country Kuwait standard
     * @return Country
     */
    public function KW(): Country
    {
        return ISO3166::KW();
    }

    /**
     * Country Kyrgyzstan standard
     * @return Country
     */
    public function KG(): Country
    {
        return ISO3166::KG();
    }

    /**
     * Country Lao People's Democratic Republic standard
     * @return Country
     */
    public function LA(): Country
    {
        return ISO3166::LA();
    }

    /**
     * Country Latvia standard
     * @return Country
     */
    public function LV(): Country
    {
        return ISO3166::LV();
    }

    /**
     * Country Lebanon standard
     * @return Country
     */
    public function LB(): Country
    {
        return ISO3166::LB();
    }

    /**
     * Country Lesotho standard
     * @return Country
     */
    public function LS(): Country
    {
        return ISO3166::LS();
    }

    /**
     * Country Liberia standard
     * @return Country
     */
    public function LR(): Country
    {
        return ISO3166::LR();
    }

    /**
     * Country Libya standard
     * @return Country
     */
    public function LY(): Country
    {
        return ISO3166::LY();
    }

    /**
     * Country Liechtenstein standard
     * @return Country
     */
    public function LI(): Country
    {
        return ISO3166::LI();
    }

    /**
     * Country Lithuania standard
     * @return Country
     */
    public function LT(): Country
    {
        return ISO3166::LT();
    }

    /**
     * Country Luxembourg standard
     * @return Country
     */
    public function LU(): Country
    {
        return ISO3166::LU();
    }

    /**
     * Country Macao standard
     * @return Country
     */
    public function MO(): Country
    {
        return ISO3166::MO();
    }

    /**
     * Country Madagascar standard
     * @return Country
     */
    public function MG(): Country
    {
        return ISO3166::MG();
    }

    /**
     * Country Malawi standard
     * @return Country
     */
    public function MW(): Country
    {
        return ISO3166::MW();
    }

    /**
     * Country Malaysia standard
     * @return Country
     */
    public function MY(): Country
    {
        return ISO3166::MY();
    }

    /**
     * Country Maldives standard
     * @return Country
     */
    public function MV(): Country
    {
        return ISO3166::MV();
    }

    /**
     * Country Mali standard
     * @return Country
     */
    public function ML(): Country
    {
        return ISO3166::ML();
    }

    /**
     * Country Malta standard
     * @return Country
     */
    public function MT(): Country
    {
        return ISO3166::MT();
    }

    /**
     * Country Marshall Islands standard
     * @return Country
     */
    public function MH(): Country
    {
        return ISO3166::MH();
    }

    /**
     * Country Martinique standard
     * @return Country
     */
    public function MQ(): Country
    {
        return ISO3166::MQ();
    }

    /**
     * Country Mauritania standard
     * @return Country
     */
    public function MR(): Country
    {
        return ISO3166::MR();
    }

    /**
     * Country Mauritius standard
     * @return Country
     */
    public function MU(): Country
    {
        return ISO3166::MU();
    }

    /**
     * Country Mayotte standard
     * @return Country
     */
    public function YT(): Country
    {
        return ISO3166::YT();
    }

    /**
     * Country Mexico standard
     * @return Country
     */
    public function MX(): Country
    {
        return ISO3166::MX();
    }

    /**
     * Country Micronesia (Federated States of) standard
     * @return Country
     */
    public function FM(): Country
    {
        return ISO3166::FM();
    }

    /**
     * Country Moldova, Republic of standard
     * @return Country
     */
    public function MD(): Country
    {
        return ISO3166::MD();
    }

    /**
     * Country Monaco standard
     * @return Country
     */
    public function MC(): Country
    {
        return ISO3166::MC();
    }

    /**
     * Country Mongolia standard
     * @return Country
     */
    public function MN(): Country
    {
        return ISO3166::MN();
    }

    /**
     * Country Montenegro standard
     * @return Country
     */
    public function ME(): Country
    {
        return ISO3166::ME();
    }

    /**
     * Country Montserrat standard
     * @return Country
     */
    public function MS(): Country
    {
        return ISO3166::MS();
    }

    /**
     * Country Morocco standard
     * @return Country
     */
    public function MA(): Country
    {
        return ISO3166::MA();
    }

    /**
     * Country Mozambique standard
     * @return Country
     */
    public function MZ(): Country
    {
        return ISO3166::MZ();
    }

    /**
     * Country Myanmar standard
     * @return Country
     */
    public function MM(): Country
    {
        return ISO3166::MM();
    }

    /**
     * Country Namibia standard
     * @return Country
     */
    public function NA(): Country
    {
        return ISO3166::NA();
    }

    /**
     * Country Nauru standard
     * @return Country
     */
    public function NR(): Country
    {
        return ISO3166::NR();
    }

    /**
     * Country Nepal standard
     * @return Country
     */
    public function NP(): Country
    {
        return ISO3166::NP();
    }

    /**
     * Country Netherlands standard
     * @return Country
     */
    public function NL(): Country
    {
        return ISO3166::NL();
    }

    /**
     * Country New Caledonia standard
     * @return Country
     */
    public function NC(): Country
    {
        return ISO3166::NC();
    }

    /**
     * Country New Zealand standard
     * @return Country
     */
    public function NZ(): Country
    {
        return ISO3166::NZ();
    }

    /**
     * Country Nicaragua standard
     * @return Country
     */
    public function NI(): Country
    {
        return ISO3166::NI();
    }

    /**
     * Country Niger standard
     * @return Country
     */
    public function NE(): Country
    {
        return ISO3166::NE();
    }

    /**
     * Country Nigeria standard
     * @return Country
     */
    public function NG(): Country
    {
        return ISO3166::NG();
    }

    /**
     * Country Niue standard
     * @return Country
     */
    public function NU(): Country
    {
        return ISO3166::NU();
    }

    /**
     * Country Norfolk Island standard
     * @return Country
     */
    public function NF(): Country
    {
        return ISO3166::NF();
    }

    /**
     * Country North Macedonia standard
     * @return Country
     */
    public function MK(): Country
    {
        return ISO3166::MK();
    }

    /**
     * Country Northern Mariana Islands standard
     * @return Country
     */
    public function MP(): Country
    {
        return ISO3166::MP();
    }

    /**
     * Country Norway standard
     * @return Country
     */
    public function NO(): Country
    {
        return ISO3166::NO();
    }

    /**
     * Country Oman standard
     * @return Country
     */
    public function OM(): Country
    {
        return ISO3166::OM();
    }

    /**
     * Country Pakistan standard
     * @return Country
     */
    public function PK(): Country
    {
        return ISO3166::PK();
    }

    /**
     * Country Palau standard
     * @return Country
     */
    public function PW(): Country
    {
        return ISO3166::PW();
    }

    /**
     * Country Palestine, State of standard
     * @return Country
     */
    public function PS(): Country
    {
        return ISO3166::PS();
    }

    /**
     * Country Panama standard
     * @return Country
     */
    public function PA(): Country
    {
        return ISO3166::PA();
    }

    /**
     * Country Papua New Guinea standard
     * @return Country
     */
    public function PG(): Country
    {
        return ISO3166::PG();
    }

    /**
     * Country Paraguay standard
     * @return Country
     */
    public function PY(): Country
    {
        return ISO3166::PY();
    }

    /**
     * Country Peru standard
     * @return Country
     */
    public function PE(): Country
    {
        return ISO3166::PE();
    }

    /**
     * Country Philippines standard
     * @return Country
     */
    public function PH(): Country
    {
        return ISO3166::PH();
    }

    /**
     * Country Pitcairn standard
     * @return Country
     */
    public function PN(): Country
    {
        return ISO3166::PN();
    }

    /**
     * Country Poland standard
     * @return Country
     */
    public function PL(): Country
    {
        return ISO3166::PL();
    }

    /**
     * Country Portugal standard
     * @return Country
     */
    public function PT(): Country
    {
        return ISO3166::PT();
    }

    /**
     * Country Puerto Rico standard
     * @return Country
     */
    public function PR(): Country
    {
        return ISO3166::PR();
    }

    /**
     * Country Qatar standard
     * @return Country
     */
    public function QA(): Country
    {
        return ISO3166::QA();
    }

    /**
     * Country RÃ©union standard
     * @return Country
     */
    public function RE(): Country
    {
        return ISO3166::RE();
    }

    /**
     * Country Romania standard
     * @return Country
     */
    public function RO(): Country
    {
        return ISO3166::RO();
    }

    /**
     * Country Russian Federation standard
     * @return Country
     */
    public function RU(): Country
    {
        return ISO3166::RU();
    }

    /**
     * Country Rwanda standard
     * @return Country
     */
    public function RW(): Country
    {
        return ISO3166::RW();
    }

    /**
     * Country Saint BarthÃ©lemy standard
     * @return Country
     */
    public function BL(): Country
    {
        return ISO3166::BL();
    }

    /**
     * Country Saint Helena, Ascension and Tristan da Cunha[b] standard
     * @return Country
     */
    public function SH(): Country
    {
        return ISO3166::SH();
    }

    /**
     * Country Saint Kitts and Nevis standard
     * @return Country
     */
    public function KN(): Country
    {
        return ISO3166::KN();
    }

    /**
     * Country Saint Lucia standard
     * @return Country
     */
    public function LC(): Country
    {
        return ISO3166::LC();
    }

    /**
     * Country Saint Martin (French part) standard
     * @return Country
     */
    public function MF(): Country
    {
        return ISO3166::MF();
    }

    /**
     * Country Saint Pierre and Miquelon standard
     * @return Country
     */
    public function PM(): Country
    {
        return ISO3166::PM();
    }

    /**
     * Country Saint Vincent and the Grenadines standard
     * @return Country
     */
    public function VC(): Country
    {
        return ISO3166::VC();
    }

    /**
     * Country Samoa standard
     * @return Country
     */
    public function WS(): Country
    {
        return ISO3166::WS();
    }

    /**
     * Country San Marino standard
     * @return Country
     */
    public function SM(): Country
    {
        return ISO3166::SM();
    }

    /**
     * Country Sao Tome and Principe standard
     * @return Country
     */
    public function ST(): Country
    {
        return ISO3166::ST();
    }

    /**
     * Country Saudi Arabia standard
     * @return Country
     */
    public function SA(): Country
    {
        return ISO3166::SA();
    }

    /**
     * Country Senegal standard
     * @return Country
     */
    public function SN(): Country
    {
        return ISO3166::SN();
    }

    /**
     * Country Serbia standard
     * @return Country
     */
    public function RS(): Country
    {
        return ISO3166::RS();
    }

    /**
     * Country Seychelles standard
     * @return Country
     */
    public function SC(): Country
    {
        return ISO3166::SC();
    }

    /**
     * Country Sierra Leone standard
     * @return Country
     */
    public function SL(): Country
    {
        return ISO3166::SL();
    }

    /**
     * Country Singapore standard
     * @return Country
     */
    public function SG(): Country
    {
        return ISO3166::SG();
    }

    /**
     * Country Sint Maarten (Dutch part) standard
     * @return Country
     */
    public function SX(): Country
    {
        return ISO3166::SX();
    }

    /**
     * Country Slovakia standard
     * @return Country
     */
    public function SK(): Country
    {
        return ISO3166::SK();
    }

    /**
     * Country Slovenia standard
     * @return Country
     */
    public function SI(): Country
    {
        return ISO3166::SI();
    }

    /**
     * Country Solomon Islands standard
     * @return Country
     */
    public function SB(): Country
    {
        return ISO3166::SB();
    }

    /**
     * Country Somalia standard
     * @return Country
     */
    public function SO(): Country
    {
        return ISO3166::SO();
    }

    /**
     * Country South Africa standard
     * @return Country
     */
    public function ZA(): Country
    {
        return ISO3166::ZA();
    }

    /**
     * Country South Georgia and the South Sandwich Islands standard
     * @return Country
     */
    public function GS(): Country
    {
        return ISO3166::GS();
    }

    /**
     * Country South Sudan standard
     * @return Country
     */
    public function SS(): Country
    {
        return ISO3166::SS();
    }

    /**
     * Country Spain standard
     * @return Country
     */
    public function ES(): Country
    {
        return ISO3166::ES();
    }

    /**
     * Country Sri Lanka standard
     * @return Country
     */
    public function LK(): Country
    {
        return ISO3166::LK();
    }

    /**
     * Country Sudan standard
     * @return Country
     */
    public function SD(): Country
    {
        return ISO3166::SD();
    }

    /**
     * Country Suriname standard
     * @return Country
     */
    public function SR(): Country
    {
        return ISO3166::SR();
    }

    /**
     * Country Svalbard and Jan Mayen[c] standard
     * @return Country
     */
    public function SJ(): Country
    {
        return ISO3166::SJ();
    }

    /**
     * Country Sweden standard
     * @return Country
     */
    public function SE(): Country
    {
        return ISO3166::SE();
    }

    /**
     * Country Switzerland standard
     * @return Country
     */
    public function CH(): Country
    {
        return ISO3166::CH();
    }

    /**
     * Country Syrian Arab Republic standard
     * @return Country
     */
    public function SY(): Country
    {
        return ISO3166::SY();
    }

    /**
     * Country Taiwan, Province of China standard
     * @return Country
     */
    public function TW(): Country
    {
        return ISO3166::TW();
    }

    /**
     * Country Tajikistan standard
     * @return Country
     */
    public function TJ(): Country
    {
        return ISO3166::TJ();
    }

    /**
     * Country Tanzania, United Republic of standard
     * @return Country
     */
    public function TZ(): Country
    {
        return ISO3166::TZ();
    }

    /**
     * Country Thailand standard
     * @return Country
     */
    public function TH(): Country
    {
        return ISO3166::TH();
    }

    /**
     * Country Timor-Leste standard
     * @return Country
     */
    public function TL(): Country
    {
        return ISO3166::TL();
    }

    /**
     * Country Togo standard
     * @return Country
     */
    public function TG(): Country
    {
        return ISO3166::TG();
    }

    /**
     * Country Tokelau standard
     * @return Country
     */
    public function TK(): Country
    {
        return ISO3166::TK();
    }

    /**
     * Country Tonga standard
     * @return Country
     */
    public function TO(): Country
    {
        return ISO3166::TO();
    }

    /**
     * Country Trinidad and Tobago standard
     * @return Country
     */
    public function TT(): Country
    {
        return ISO3166::TT();
    }

    /**
     * Country Tunisia standard
     * @return Country
     */
    public function TN(): Country
    {
        return ISO3166::TN();
    }

    /**
     * Country Turkey standard
     * @return Country
     */
    public function TR(): Country
    {
        return ISO3166::TR();
    }

    /**
     * Country Turkmenistan standard
     * @return Country
     */
    public function TM(): Country
    {
        return ISO3166::TM();
    }

    /**
     * Country Turks and Caicos Islands standard
     * @return Country
     */
    public function TC(): Country
    {
        return ISO3166::TC();
    }

    /**
     * Country Tuvalu standard
     * @return Country
     */
    public function TV(): Country
    {
        return ISO3166::TV();
    }

    /**
     * Country Uganda standard
     * @return Country
     */
    public function UG(): Country
    {
        return ISO3166::UG();
    }

    /**
     * Country Ukraine standard
     * @return Country
     */
    public function UA(): Country
    {
        return ISO3166::UA();
    }

    /**
     * Country United Arab Emirates standard
     * @return Country
     */
    public function AE(): Country
    {
        return ISO3166::AE();
    }

    /**
     * Country United Kingdom of Great Britain and Northern Ireland standard
     * @return Country
     */
    public function GB(): Country
    {
        return ISO3166::GB();
    }

    /**
     * Country United States of America standard
     * @return Country
     */
    public function US(): Country
    {
        return ISO3166::US();
    }

    /**
     * Country United States Minor Outlying Islands[e] standard
     * @return Country
     */
    public function UM(): Country
    {
        return ISO3166::UM();
    }

    /**
     * Country Uruguay standard
     * @return Country
     */
    public function UY(): Country
    {
        return ISO3166::UY();
    }

    /**
     * Country Uzbekistan standard
     * @return Country
     */
    public function UZ(): Country
    {
        return ISO3166::UZ();
    }

    /**
     * Country Vanuatu standard
     * @return Country
     */
    public function VU(): Country
    {
        return ISO3166::VU();
    }

    /**
     * Country Venezuela (Bolivarian Republic of) standard
     * @return Country
     */
    public function VE(): Country
    {
        return ISO3166::VE();
    }

    /**
     * Country Viet Nam standard
     * @return Country
     */
    public function VN(): Country
    {
        return ISO3166::VN();
    }

    /**
     * Country Virgin Islands (British) standard
     * @return Country
     */
    public function VG(): Country
    {
        return ISO3166::VG();
    }

    /**
     * Country Virgin Islands (U.S.) standard
     * @return Country
     */
    public function VI(): Country
    {
        return ISO3166::VI();
    }

    /**
     * Country Wallis and Futuna standard
     * @return Country
     */
    public function WF(): Country
    {
        return ISO3166::WF();
    }

    /**
     * Country  Western Sahara standard
     * @return Country
     */
    public function EH(): Country
    {
        return ISO3166::EH();
    }

    /**
     * Country Yemen standard
     * @return Country
     */
    public function YE(): Country
    {
        return ISO3166::YE();
    }

    /**
     * Country Zambia standard
     * @return Country
     */
    public function ZM(): Country
    {
        return ISO3166::ZM();
    }

    /**
     * Country Zimbabwe standard
     * @return Country
     */
    public function ZW(): Country
    {
        return ISO3166::ZW();
    }
}
