<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MarketplaceCategory;

class MarketplaceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Pflegehilfsmittel',
                'description' => 'Produkte zur Unterstützung der häuslichen und professionellen Pflege (z.B. Betten, Rollstühle, Geh- und Stehhilfen).',
            ],
            [
                'name' => 'Inkontinenzprodukte',
                'description' => 'Spezielle Artikel zur Pflege und Unterstützung bei Inkontinenz (z.B. Windeln, Unterlagen, Schutzbezüge).',
            ],
            [
                'name' => 'Ernährung & Nahrungsergänzung',
                'description' => 'Nahrungsergänzungsmittel, spezielle Diäten und Produkte für die Ernährung von Pflegebedürftigen.',
            ],
            [
                'name' => 'Hygiene & Körperpflege',
                'description' => 'Pflegeprodukte und Hilfsmittel für die tägliche Körperhygiene (z.B. Hautpflege, Duschhilfen, Waschhandschuhe).',
            ],
            [
                'name' => 'Technologie & E-Health',
                'description' => 'Digitale Tools und technische Lösungen zur Unterstützung der Pflege (z.B. Notrufsysteme, Überwachungstools, Apps).',
            ],
            [
                'name' => 'Mobilitätshilfen',
                'description' => 'Rollatoren, elektrische Rollstühle, Treppenlifte und weitere Produkte, die die Mobilität fördern.',
            ],
            [
                'name' => 'Barrierefreies Wohnen',
                'description' => 'Produkte und Dienstleistungen für ein barrierefreies Zuhause (z.B. Badsanierungen, Rampen, Türverbreiterungen).',
            ],
            [
                'name' => 'Rehabilitation & Therapie',
                'description' => 'Produkte zur Förderung der Genesung und Rehabilitation (z.B. Therapiematerialien, Massagegeräte).',
            ],
            [
                'name' => 'Beratung & Dienstleistungen',
                'description' => 'Angebote von Beratungen und Serviceleistungen (z.B. Pflegeberatung, Rechtsberatung, Coaching für pflegende Angehörige).',
            ],
            [
                'name' => 'Pflegebekleidung & Schutzkleidung',
                'description' => 'Spezielle Kleidung für Pflegekräfte und Pflegebedürftige (z.B. Schutzkittel, Patientenbekleidung, Einweghandschuhe).',
            ],
            [
                'name' => 'Freizeit & Wohlbefinden',
                'description' => 'Produkte, die zur Entspannung und zum Wohlbefinden beitragen (z.B. Massagestühle, Wellnessprodukte).',
            ],
            [
                'name' => 'Hauswirtschaft & Alltagshilfen',
                'description' => 'Produkte und Dienstleistungen, die den Alltag erleichtern (z.B. Esshilfen, Haushaltsunterstützung, Einkaufsservices).',
            ],
            [
                'name' => 'Pflegeversicherungen & Finanzdienstleistungen',
                'description' => 'Angebote zu Pflegeversicherungen, Vorsorgeberatung und finanziellen Unterstützungsleistungen.',
            ],
            [
                'name' => 'Medikamente & Gesundheitsprodukte',
                'description' => 'Arzneimittel, Heilmittel und andere Produkte zur Gesundheitsförderung (z.B. rezeptfreie Medikamente, Schmerzmittel).',
            ],
            [
                'name' => 'Barrierefreie Freizeitgestaltung',
                'description' => 'Dienstleistungen und Produkte für Reisen, Freizeit und Hobbys, die barrierefrei und auf die Bedürfnisse von Pflegebedürftigen zugeschnitten sind.',
            ],
            [
                'name' => 'Haushaltshilfen & Reinigung',
                'description' => 'Dienstleistungen rund um die häusliche Unterstützung, wie Reinigungskräfte oder Haushaltshilfen.',
            ],
            [
                'name' => 'Transport & Fahrdienste',
                'description' => 'Angebote von Fahrdiensten für pflegebedürftige Menschen (z.B. Behindertenfahrdienste, Krankentransporte).',
            ],
            [
                'name' => 'Pflegekurse & Schulungen',
                'description' => 'Angebote von Kursen und Schulungen für pflegende Angehörige und Pflegekräfte.',
            ],
            [
                'name' => 'Notfallausrüstung & Sicherheitsprodukte',
                'description' => 'Produkte zur Sicherheit und Notfallvorsorge (z.B. Rauchmelder, Notfallknöpfe, Erste-Hilfe-Sets).',
            ],
            [
                'name' => 'Angebote für pflegende Angehörige',
                'description' => 'Dienstleistungen speziell für die Entlastung und Unterstützung von pflegenden Angehörigen (z.B. Kurzzeitpflege, Betreuungsangebote).',
            ],
            [
                'name' => 'Psychologische Unterstützung & Seelsorge',
                'description' => 'Angebote von psychologischen Beratungen, Therapien und Seelsorge für Pflegebedürftige und deren Familien.',
            ],
            [
                'name' => 'Naturheilkunde & alternative Heilmethoden',
                'description' => 'Produkte und Dienstleistungen im Bereich der Naturheilkunde, Homöopathie und alternativen Heilmethoden.',
            ],
            [
                'name' => 'Sonstiges',
                'description' => 'Produkte und Dienstleistungen, die zu keiner anderen Kategorie zuzuordnen sind.',
            ],
        ];

        foreach ($categories as $category) {
            MarketplaceCategory::create([
                'name' => $category['name'],
                'description' => $category['description'],
            ]);
        }
    }
}
