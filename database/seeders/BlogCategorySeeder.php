<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data to insert into the blog_categories table
        $categories = [
            ['name' => 'Pflegewissen & Ratgeber', 'description' => 'Praktische Tipps und Hintergrundwissen für den Pflegealltag'],
            ['name' => 'Recht & Pflegeversicherung', 'description' => 'Informationen zu rechtlichen Fragen, Pflegegraden und Leistungen der Pflegeversicherung.'],
            ['name' => 'Pflegende Angehörige', 'description' => 'Unterstützung und Ratgeber für pflegende Angehörige, inklusive Selbstpflege und Entlastung.'],
            ['name' => 'Gesundheit & Prävention', 'description' => 'Themen rund um die Gesundheitsförderung, Prävention und den Umgang mit Pflegebedürftigkeit.'],
            ['name' => 'Demenz & Alterserkrankungen', 'description' => 'Spezielle Beiträge zu Demenz und anderen altersbedingten Krankheiten.'],
            ['name' => 'Seltene Erkrankungen', 'description' => 'Informationen und Tipps zur Pflege von Menschen mit seltenen Erkrankungen.'],
            ['name' => 'Inkontinenzpflege', 'description' => 'Spezifische Themen rund um Inkontinenz und die Pflege von Betroffenen.'],
            ['name' => 'Pflegehilfsmittel & Alltagshilfen', 'description' => 'Vorstellung und Einsatz von Pflegehilfsmitteln im Alltag.'],
            ['name' => 'Erfahrungsberichte & Interviews', 'description' => 'Persönliche Geschichten von Pflegebedürftigen, Angehörigen und Pflegekräften.'],
            ['name' => 'Pflegepolitik & Gesellschaft', 'description' => 'Aktuelle politische Entwicklungen, Gesetze und gesellschaftliche Diskussionen rund um die Pflege.'],
            ['name' => 'Internationale Pflege', 'description' => 'Einblicke in Pflegesysteme und -praktiken aus anderen Ländern, internationale Trends und Vergleiche.'],
            ['name' => 'Technologie & Digitalisierung in der Pflege', 'description' => 'Beiträge zu digitalen Tools, E-Health, und technischen Innovationen in der Pflege.'],
            ['name' => 'Ernährung & Wohlbefinden', 'description' => 'Tipps zur gesunden Ernährung und deren Bedeutung für Pflegebedürftige.'],
            ['name' => 'Beruf & Weiterbildung in der Pflege', 'description' => 'Informationen zu Ausbildungen, Fortbildungen und Karrierechancen in der Pflege.'],
            ['name' => 'Pflege im Notfall & Akutsituationen', 'description' => 'Umgang mit Notfällen, Erste-Hilfe-Maßnahmen und Krisenmanagement in der Pflege.'],
            ['name' => 'Pflege im häuslichen Umfeld', 'description' => 'Unterstützung und Ratgeber für die Pflege zu Hause.'],
            ['name' => 'Pflegeinstitutionen & Einrichtungen', 'description' => 'Informationen zu Pflegeheimen, ambulanten Pflegediensten und anderen Pflegeeinrichtungen.'],
            ['name' => 'Sonstiges', 'description' => 'Informationen, die zu keiner anderen Kategorie zuzuordnen sind.'],
        ];
        \DB::table('blog_categories')->insert($categories);

    }
}
