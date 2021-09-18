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

    public function AF(): Country
    {
        return ISO3166::AF();
    }

    public function AX(): Country
    {
        return ISO3166::AX();
    }

    public function AL(): Country
    {
        return ISO3166::AL();
    }

    public function DZ(): Country
    {
        return ISO3166::DZ();
    }

    public function AS(): Country
    {
        return ISO3166::AS();
    }

    public function AD(): Country
    {
        return ISO3166::AD();
    }

    public function AO(): Country
    {
        return ISO3166::AO();
    }

    public function AI(): Country
    {
        return ISO3166::AI();
    }

    public function AQ(): Country
    {
        return ISO3166::AQ();
    }

    public function AG(): Country
    {
        return ISO3166::AG();
    }

    public function AR(): Country
    {
        return ISO3166::AR();
    }

    public function AM(): Country
    {
        return ISO3166::AM();
    }

    public function AW(): Country
    {
        return ISO3166::AW();
    }

    public function AU(): Country
    {
        return ISO3166::AU();
    }

    public function AT(): Country
    {
        return ISO3166::AT();
    }

    public function AZ(): Country
    {
        return ISO3166::AZ();
    }

    public function BS(): Country
    {
        return ISO3166::BS();
    }

    public function BH(): Country
    {
        return ISO3166::BH();
    }

    public function BD(): Country
    {
        return ISO3166::BD();
    }

    public function BB(): Country
    {
        return ISO3166::BB();
    }

    public function BY(): Country
    {
        return ISO3166::BY();
    }

    public function BE(): Country
    {
        return ISO3166::BE();
    }

    public function BZ(): Country
    {
        return ISO3166::BZ();
    }

    public function BJ(): Country
    {
        return ISO3166::BJ();
    }

    public function BM(): Country
    {
        return ISO3166::BM();
    }

    public function BT(): Country
    {
        return ISO3166::BT();
    }

    public function BO(): Country
    {
        return ISO3166::BO();
    }

    public function BQ(): Country
    {
        return ISO3166::BQ();
    }

    public function BA(): Country
    {
        return ISO3166::BA();
    }

    public function BW(): Country
    {
        return ISO3166::BW();
    }

    public function BV(): Country
    {
        return ISO3166::BV();
    }

    public function BR(): Country
    {
        return ISO3166::BR();
    }

    public function IO(): Country
    {
        return ISO3166::IO();
    }

    public function BN(): Country
    {
        return ISO3166::BN();
    }

    public function BG(): Country
    {
        return ISO3166::BG();
    }

    public function BF(): Country
    {
        return ISO3166::BF();
    }

    public function BI(): Country
    {
        return ISO3166::BI();
    }

    public function CV(): Country
    {
        return ISO3166::CV();
    }

    public function KH(): Country
    {
        return ISO3166::KH();
    }

    public function CM(): Country
    {
        return ISO3166::CM();
    }

    public function CA(): Country
    {
        return ISO3166::CA();
    }

    public function KY(): Country
    {
        return ISO3166::KY();
    }

    public function CF(): Country
    {
        return ISO3166::CF();
    }

    public function TD(): Country
    {
        return ISO3166::TD();
    }

    public function CL(): Country
    {
        return ISO3166::CL();
    }

    public function CN(): Country
    {
        return ISO3166::CN();
    }

    public function CX(): Country
    {
        return ISO3166::CX();
    }

    public function CC(): Country
    {
        return ISO3166::CC();
    }

    public function CO(): Country
    {
        return ISO3166::CO();
    }

    public function KM(): Country
    {
        return ISO3166::KM();
    }

    public function CG(): Country
    {
        return ISO3166::CG();
    }

    public function CD(): Country
    {
        return ISO3166::CD();
    }

    public function CK(): Country
    {
        return ISO3166::CK();
    }

    public function CR(): Country
    {
        return ISO3166::CR();
    }

    public function CI(): Country
    {
        return ISO3166::CI();
    }

    public function HR(): Country
    {
        return ISO3166::HR();
    }

    public function CU(): Country
    {
        return ISO3166::CU();
    }

    public function CW(): Country
    {
        return ISO3166::CW();
    }

    public function CY(): Country
    {
        return ISO3166::CY();
    }

    public function CZ(): Country
    {
        return ISO3166::CZ();
    }

    public function DK(): Country
    {
        return ISO3166::DK();
    }

    public function DJ(): Country
    {
        return ISO3166::DJ();
    }

    public function DM(): Country
    {
        return ISO3166::DM();
    }

    public function DO(): Country
    {
        return ISO3166::DO();
    }

    public function EC(): Country
    {
        return ISO3166::EC();
    }

    public function EG(): Country
    {
        return ISO3166::EG();
    }

    public function SV(): Country
    {
        return ISO3166::SV();
    }

    public function GQ(): Country
    {
        return ISO3166::GQ();
    }

    public function ER(): Country
    {
        return ISO3166::ER();
    }

    public function EE(): Country
    {
        return ISO3166::EE();
    }

    public function SZ(): Country
    {
        return ISO3166::SZ();
    }

    public function ET(): Country
    {
        return ISO3166::ET();
    }

    public function FK(): Country
    {
        return ISO3166::FK();
    }

    public function FO(): Country
    {
        return ISO3166::FO();
    }

    public function FJ(): Country
    {
        return ISO3166::FJ();
    }

    public function FI(): Country
    {
        return ISO3166::FI();
    }

    public function FR(): Country
    {
        return ISO3166::FR();
    }

    public function GF(): Country
    {
        return ISO3166::GF();
    }

    public function PF(): Country
    {
        return ISO3166::PF();
    }

    public function TF(): Country
    {
        return ISO3166::TF();
    }

    public function GA(): Country
    {
        return ISO3166::GA();
    }

    public function GM(): Country
    {
        return ISO3166::GM();
    }

    public function GE(): Country
    {
        return ISO3166::GE();
    }

    public function DE(): Country
    {
        return ISO3166::DE();
    }

    public function GH(): Country
    {
        return ISO3166::GH();
    }

    public function GI(): Country
    {
        return ISO3166::GI();
    }

    public function GR(): Country
    {
        return ISO3166::GR();
    }

    public function GL(): Country
    {
        return ISO3166::GL();
    }

    public function GD(): Country
    {
        return ISO3166::GD();
    }

    public function GP(): Country
    {
        return ISO3166::GP();
    }

    public function GU(): Country
    {
        return ISO3166::GU();
    }

    public function GT(): Country
    {
        return ISO3166::GT();
    }

    public function GG(): Country
    {
        return ISO3166::GG();
    }

    public function GN(): Country
    {
        return ISO3166::GN();
    }

    public function GW(): Country
    {
        return ISO3166::GW();
    }

    public function GY(): Country
    {
        return ISO3166::GY();
    }

    public function HT(): Country
    {
        return ISO3166::HT();
    }

    public function HM(): Country
    {
        return ISO3166::HM();
    }

    public function VA(): Country
    {
        return ISO3166::VA();
    }

    public function HN(): Country
    {
        return ISO3166::HN();
    }

    public function HK(): Country
    {
        return ISO3166::HK();
    }

    public function HU(): Country
    {
        return ISO3166::HU();
    }

    public function IS(): Country
    {
        return ISO3166::IS();
    }

    public function IN(): Country
    {
        return ISO3166::IN();
    }

    public function ID(): Country
    {
        return ISO3166::ID();
    }

    public function IR(): Country
    {
        return ISO3166::IR();
    }

    public function IQ(): Country
    {
        return ISO3166::IQ();
    }

    public function IE(): Country
    {
        return ISO3166::IE();
    }

    public function IM(): Country
    {
        return ISO3166::IM();
    }

    public function IL(): Country
    {
        return ISO3166::IL();
    }

    public function IT(): Country
    {
        return ISO3166::IT();
    }

    public function JM(): Country
    {
        return ISO3166::JM();
    }

    public function JP(): Country
    {
        return ISO3166::JP();
    }

    public function JE(): Country
    {
        return ISO3166::JE();
    }

    public function JO(): Country
    {
        return ISO3166::JO();
    }

    public function KZ(): Country
    {
        return ISO3166::KZ();
    }

    public function KE(): Country
    {
        return ISO3166::KE();
    }

    public function KI(): Country
    {
        return ISO3166::KI();
    }

    public function KP(): Country
    {
        return ISO3166::KP();
    }

    public function KR(): Country
    {
        return ISO3166::KR();
    }

    public function KW(): Country
    {
        return ISO3166::KW();
    }

    public function KG(): Country
    {
        return ISO3166::KG();
    }

    public function LA(): Country
    {
        return ISO3166::LA();
    }

    public function LV(): Country
    {
        return ISO3166::LV();
    }

    public function LB(): Country
    {
        return ISO3166::LB();
    }

    public function LS(): Country
    {
        return ISO3166::LS();
    }

    public function LR(): Country
    {
        return ISO3166::LR();
    }

    public function LY(): Country
    {
        return ISO3166::LY();
    }

    public function LI(): Country
    {
        return ISO3166::LI();
    }

    public function LT(): Country
    {
        return ISO3166::LT();
    }

    public function LU(): Country
    {
        return ISO3166::LU();
    }

    public function MO(): Country
    {
        return ISO3166::MO();
    }

    public function MG(): Country
    {
        return ISO3166::MG();
    }

    public function MW(): Country
    {
        return ISO3166::MW();
    }

    public function MY(): Country
    {
        return ISO3166::MY();
    }

    public function MV(): Country
    {
        return ISO3166::MV();
    }

    public function ML(): Country
    {
        return ISO3166::ML();
    }

    public function MT(): Country
    {
        return ISO3166::MT();
    }

    public function MH(): Country
    {
        return ISO3166::MH();
    }

    public function MQ(): Country
    {
        return ISO3166::MQ();
    }

    public function MR(): Country
    {
        return ISO3166::MR();
    }

    public function MU(): Country
    {
        return ISO3166::MU();
    }

    public function YT(): Country
    {
        return ISO3166::YT();
    }

    public function MX(): Country
    {
        return ISO3166::MX();
    }

    public function FM(): Country
    {
        return ISO3166::FM();
    }

    public function MD(): Country
    {
        return ISO3166::MD();
    }

    public function MC(): Country
    {
        return ISO3166::MC();
    }

    public function MN(): Country
    {
        return ISO3166::MN();
    }

    public function ME(): Country
    {
        return ISO3166::ME();
    }

    public function MS(): Country
    {
        return ISO3166::MS();
    }

    public function MA(): Country
    {
        return ISO3166::MA();
    }

    public function MZ(): Country
    {
        return ISO3166::MZ();
    }

    public function MM(): Country
    {
        return ISO3166::MM();
    }

    public function NA(): Country
    {
        return ISO3166::NA();
    }

    public function NR(): Country
    {
        return ISO3166::NR();
    }

    public function NP(): Country
    {
        return ISO3166::NP();
    }

    public function NL(): Country
    {
        return ISO3166::NL();
    }

    public function NC(): Country
    {
        return ISO3166::NC();
    }

    public function NZ(): Country
    {
        return ISO3166::NZ();
    }

    public function NI(): Country
    {
        return ISO3166::NI();
    }

    public function NE(): Country
    {
        return ISO3166::NE();
    }

    public function NG(): Country
    {
        return ISO3166::NG();
    }

    public function NU(): Country
    {
        return ISO3166::NU();
    }

    public function NF(): Country
    {
        return ISO3166::NF();
    }

    public function MK(): Country
    {
        return ISO3166::MK();
    }

    public function MP(): Country
    {
        return ISO3166::MP();
    }

    public function NO(): Country
    {
        return ISO3166::NO();
    }

    public function OM(): Country
    {
        return ISO3166::OM();
    }

    public function PK(): Country
    {
        return ISO3166::PK();
    }

    public function PW(): Country
    {
        return ISO3166::PW();
    }

    public function PS(): Country
    {
        return ISO3166::PS();
    }

    public function PA(): Country
    {
        return ISO3166::PA();
    }

    public function PG(): Country
    {
        return ISO3166::PG();
    }

    public function PY(): Country
    {
        return ISO3166::PY();
    }

    public function PE(): Country
    {
        return ISO3166::PE();
    }

    public function PH(): Country
    {
        return ISO3166::PH();
    }

    public function PN(): Country
    {
        return ISO3166::PN();
    }

    public function PL(): Country
    {
        return ISO3166::PL();
    }

    public function PT(): Country
    {
        return ISO3166::PT();
    }

    public function PR(): Country
    {
        return ISO3166::PR();
    }

    public function QA(): Country
    {
        return ISO3166::QA();
    }

    public function RE(): Country
    {
        return ISO3166::RE();
    }

    public function RO(): Country
    {
        return ISO3166::RO();
    }

    public function RU(): Country
    {
        return ISO3166::RU();
    }

    public function RW(): Country
    {
        return ISO3166::RW();
    }

    public function BL(): Country
    {
        return ISO3166::BL();
    }

    public function SH(): Country
    {
        return ISO3166::SH();
    }

    public function KN(): Country
    {
        return ISO3166::KN();
    }

    public function LC(): Country
    {
        return ISO3166::LC();
    }

    public function MF(): Country
    {
        return ISO3166::MF();
    }

    public function PM(): Country
    {
        return ISO3166::PM();
    }

    public function VC(): Country
    {
        return ISO3166::VC();
    }

    public function WS(): Country
    {
        return ISO3166::WS();
    }

    public function SM(): Country
    {
        return ISO3166::SM();
    }

    public function ST(): Country
    {
        return ISO3166::ST();
    }

    public function SA(): Country
    {
        return ISO3166::SA();
    }

    public function SN(): Country
    {
        return ISO3166::SN();
    }

    public function RS(): Country
    {
        return ISO3166::RS();
    }

    public function SC(): Country
    {
        return ISO3166::SC();
    }

    public function SL(): Country
    {
        return ISO3166::SL();
    }

    public function SG(): Country
    {
        return ISO3166::SG();
    }

    public function SX(): Country
    {
        return ISO3166::SX();
    }

    public function SK(): Country
    {
        return ISO3166::SK();
    }

    public function SI(): Country
    {
        return ISO3166::SI();
    }

    public function SB(): Country
    {
        return ISO3166::SB();
    }

    public function SO(): Country
    {
        return ISO3166::SO();
    }

    public function ZA(): Country
    {
        return ISO3166::ZA();
    }

    public function GS(): Country
    {
        return ISO3166::GS();
    }

    public function SS(): Country
    {
        return ISO3166::SS();
    }

    public function ES(): Country
    {
        return ISO3166::ES();
    }

    public function LK(): Country
    {
        return ISO3166::LK();
    }

    public function SD(): Country
    {
        return ISO3166::SD();
    }

    public function SR(): Country
    {
        return ISO3166::SR();
    }

    public function SJ(): Country
    {
        return ISO3166::SJ();
    }

    public function SE(): Country
    {
        return ISO3166::SE();
    }

    public function CH(): Country
    {
        return ISO3166::CH();
    }

    public function SY(): Country
    {
        return ISO3166::SY();
    }

    public function TW(): Country
    {
        return ISO3166::TW();
    }

    public function TJ(): Country
    {
        return ISO3166::TJ();
    }

    public function TZ(): Country
    {
        return ISO3166::TZ();
    }

    public function TH(): Country
    {
        return ISO3166::TH();
    }

    public function TL(): Country
    {
        return ISO3166::TL();
    }

    public function TG(): Country
    {
        return ISO3166::TG();
    }

    public function TK(): Country
    {
        return ISO3166::TK();
    }

    public function TO(): Country
    {
        return ISO3166::TO();
    }

    public function TT(): Country
    {
        return ISO3166::TT();
    }

    public function TN(): Country
    {
        return ISO3166::TN();
    }

    public function TR(): Country
    {
        return ISO3166::TR();
    }

    public function TM(): Country
    {
        return ISO3166::TM();
    }

    public function TC(): Country
    {
        return ISO3166::TC();
    }

    public function TV(): Country
    {
        return ISO3166::TV();
    }

    public function UG(): Country
    {
        return ISO3166::UG();
    }

    public function UA(): Country
    {
        return ISO3166::UA();
    }

    public function AE(): Country
    {
        return ISO3166::AE();
    }

    public function GB(): Country
    {
        return ISO3166::GB();
    }

    public function US(): Country
    {
        return ISO3166::US();
    }

    public function UM(): Country
    {
        return ISO3166::UM();
    }

    public function UY(): Country
    {
        return ISO3166::UY();
    }

    public function UZ(): Country
    {
        return ISO3166::UZ();
    }

    public function VU(): Country
    {
        return ISO3166::VU();
    }

    public function VE(): Country
    {
        return ISO3166::VE();
    }

    public function VN(): Country
    {
        return ISO3166::VN();
    }

    public function VG(): Country
    {
        return ISO3166::VG();
    }

    public function VI(): Country
    {
        return ISO3166::VI();
    }

    public function WF(): Country
    {
        return ISO3166::WF();
    }

    public function EH(): Country
    {
        return ISO3166::EH();
    }

    public function YE(): Country
    {
        return ISO3166::YE();
    }

    public function ZM(): Country
    {
        return ISO3166::ZM();
    }

    public function ZW(): Country
    {
        return ISO3166::ZW();
    }
}
