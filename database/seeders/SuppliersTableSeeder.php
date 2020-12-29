<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->firmas as $supplier) {
            Supplier::create([
                'name'  => $supplier,
                'phone' => 'Desconhecido',
            ]);
        }
    }

    private $firmas = [
        'ACE HEALTH CARE, LDA',
        'AFRI FARMÁCIA LDA',
        'AFRICA - LAB, LDA',
        'AFRIEUROPHARMA, LTD',
        'AH PHARMA, LDA',
        'AMATROSS',
        'BAYER SCHERING PHARMA MOÇAMBIQUE',
        'BIO-TERAPÊUTICOS',
        'BRAZILGENÉRICOS SA',
        'CASA NATURA, LDA',
        'CERES PHARMACEUTICALS',
        'DERBY TRADING, LDA',
        'DIREÇÃO NACIONAL DE FARMACIA',
        'DKT MOZAMBIQUE',
        'DNF',
        'EQUIFARMA',
        'EVEREADY PHARMA LDA',
        'FARMA HOLDINGS SA',
        'FARMACÊUTICA AUTRAL',
        'FARMED LDA',
        'FARMEDICA LDA',
        'GENERA',
        'GENERICS & SPECIALITIES, LDA',
        'GLOPHARMA',
        'HEALTHCARE',
        'IBERXAM',
        'INOCULATE LIFE',
        'INTERNATIONAL VENTURE',
        'JEEBS INTERNATIONAL LDA',
        'LIFE PHARMA LDA',
        'LUSOFARMA',
        'MAPUTO HEALTH CARE LDA',
        'MARIA ELISA PHARMACEUTICA',
        'MDS',
        'MEDAFRICA, LDA',
        'MEDICENTER HEALTHCARE, LDA',
        'MEDICURA',
        'MEDI-DAÚDE',
        'MEDIFARMA, LDA',
        'MEDIMOC, SA',
        'MEDIMPORT LDA',
        'MEDIS FARMACÊUTICA, LDA',
        'MEDI-SAUDE',
        'MICJONATH PHARMACEUTICAL LDA',
        'MISSIONPHARMA MOÇAMBIQUE',
        'MOFARMEX',
        'MOZ IN',
        'NATUR PHARMA',
        'NATURALCARE',
        'ORANE PHARMA, LDA',
        'ORBIS PHARMA, LDA',
        'PHARCO MOÇAMBIQUE, LDA',
        'PHARMALIFE',
        'PHARMANOVA',
        'PROFARMA',
        'PROSMED',
        'PYRAMID',
        'SAHAR MEDIRAN, LDA',
        'SHANI, LIMITADA',
        'SILMED',
        'SIMEGE, LDA',
        'SISMED - SITEMAS MÉDICOS',
        'SOCIEDADE AFRICANA DA SAÚDE LDA',
        'SOCIEDADE FARMACÊUTICA JORDANA',
        'SOCIEDADE MAIS SAUDE',
        'SOCIEDADE MOÇAMBICANA DE MEDICAMENTOS',
        'TATA DE MOÇAMBIQUE',
        'TIMI HEALTHCARE',
        'UNITEC',
        'UTOMI, LDA',
        'WELL WORTH LDA',
    ];
}
