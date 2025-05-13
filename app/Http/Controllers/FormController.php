<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Display the form
    public function partnerindex(Request $request)
    {
        $partnerid = $request->input('partnerid');
        return view('partner.rechnerpflegegrad', compact('partnerid'));                    
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
    { // Get values from the request
        // Modul 1

        // dd($request->all());
        $modul1_1 = $request->input('modul1_1');
        $modul1_2 = $request->input('modul1_2');
        $modul1_3 = $request->input('modul1_3');
        $modul1_4 = $request->input('modul1_4');
        $modul1_5 = $request->input('modul1_5');
        $modul1_6 = $request->input('modul1_6');

        // Modul 2
        $modul2_1 = $request->input('module2_1');
        $modul2_2 = $request->input('module2_2');
        $modul2_3 = $request->input('module2_3');
        $modul2_4 = $request->input('module2_4');
        $modul2_5 = $request->input('module2_5');
        $modul2_6 = $request->input('module2_6');
        $modul2_7 = $request->input('module2_7');
        $modul2_8 = $request->input('module2_8');
        $modul2_9 = $request->input('module2_9');
        $modul2_10 = $request->input('module2_10');
        $modul2_11 = $request->input('module2_11');



        // Modul 3
        $modul3_1 = $request->input('modul3_1');
        $modul3_2 = $request->input('modul3_2');
        $modul3_3 = $request->input('modul3_3');
        $modul3_4 = $request->input('modul3_4');
        $modul3_5 = $request->input('modul3_5');
        $modul3_6 = $request->input('modul3_6');
        $modul3_7 = $request->input('modul3_7');
        $modul3_8 = $request->input('modul3_8');
        $modul3_9 = $request->input('modul3_9');
        $modul3_10 = $request->input('modul3_10');
        $modul3_11 = $request->input('modul3_11');
        $modul3_12 = $request->input('modul3_12');
        $modul3_13 = $request->input('modul3_13');

        // Modul 4
        $modul4_1 = $request->input('module4_1');
        $modul4_2 = $request->input('module4_2');
        $modul4_3 = $request->input('module4_3');
        $modul4_4 = $request->input('module4_4');
        $modul4_5 = $request->input('module4_5');
        $modul4_6 = $request->input('module4_6');
        $modul4_7 = $request->input('module4_7');
        $modul4_8 = $request->input('module4_8');
        $modul4_9 = $request->input('module4_9');
        $modul4_10 = $request->input('module4_10');
        $modul4_11 = $request->input('module4_11');
        $modul4_12 = $request->input('module4_12');
        $modul4_13 = $request->input('module4_13');
        // Modul 5
        $modul5_1 = $request->input('module5_1');
        $modul5_2 = $request->input('module5_2');
        $modul5_3 = $request->input('module5_3');
        $modul5_4 = $request->input('module5_4');
        $modul5_5 = $request->input('module5_5');
        $modul5_6 = $request->input('module5_6');
        $modul5_7 = $request->input('module5_7');
        $modul5_8 = $request->input('module5_8');
        $modul5_9 = $request->input('module5_9');
        $modul5_10 = $request->input('module5_10');
        $modul5_11 = $request->input('module5_11');
        $modul5_12 = $request->input('module5_12');
        $modul5_13 = $request->input('module5_13');
        $modul5_14 = $request->input('module5_14');
        $modul5_15 = $request->input('module5_15');
        $modul5_16 = $request->input('module5_16');

        // Modul 6
        $modul6_1 = $request->input('module6_1');
        $modul6_2 = $request->input('module6_2');
        $modul6_3 = $request->input('module6_3');
        $modul6_4 = $request->input('module6_4');
        $modul6_5 = $request->input('module6_5');
        $modul6_6 = $request->input('module6_6');

        # Modul 1: Summe der Einzelpunkte und gewichtete Punkte      
        $modul1_punkte = $modul1_1 + $modul1_2 + $modul1_3 + $modul1_4 + $modul1_5;
        $modul1_gewichtet = 0;
        if ($modul1_punkte <= 1) {
            $modul1_gewichtet = 0;
        } elseif ($modul1_punkte <= 3) {
            $modul1_gewichtet = 2.5;
        } elseif ($modul1_punkte <= 5) {
            $modul1_gewichtet = 5;
        } elseif ($modul1_punkte <= 9) {
            $modul1_gewichtet = 7.5;
        } elseif ($modul1_punkte <= 15) {
            $modul1_gewichtet = 10;
        }

        # Modul 2: Summe der Einzelpunkte und gewichtete Punkte        
        $modul2_punkte = $modul2_1 + $modul2_2 + $modul2_3 + $modul2_4 + $modul2_5 + $modul2_6 + $modul2_7 + $modul2_8 + $modul2_9 + $modul2_10 + $modul2_11;
        $modul2_gewichtet = 0;
        if ($modul2_punkte <= 1) {
            $modul2_gewichtet = 0;
        } elseif ($modul2_punkte <= 5) {
            $modul2_gewichtet = 3.75;
        } elseif ($modul2_punkte <= 10) {
            $modul2_gewichtet = 7.5;
        } elseif ($modul2_punkte <= 16) {
            $modul2_gewichtet = 11.25;
        } elseif ($modul2_punkte <= 33) {
            $modul2_gewichtet = 15;
        }

        # Modul 3: Summe der Einzelpunkte und gewichtete Punkte        
        $modul3_punkte = $modul3_1 + $modul3_2 + $modul3_3 + $modul3_4 + $modul3_5 + $modul3_6 + $modul3_7 + $modul3_8 + $modul3_9 + $modul3_10 + $modul3_11 + $modul3_12 + $modul3_13;
        $modul3_gewichtet = 0;
        if ($modul3_punkte <= 1) {
            $modul3_gewichtet = 0;
        } elseif ($modul3_punkte <= 2) {
            $modul3_gewichtet = 3.75;
        } elseif ($modul3_punkte <= 4) {
            $modul3_gewichtet = 7.5;
        } elseif ($modul3_punkte <= 6) {
            $modul3_gewichtet = 11.25;
        } elseif ($modul3_punkte <= 65) {
            $modul3_gewichtet = 15;
        }

        if ($modul2_gewichtet > $modul3_gewichtet) {
            $modul2_3_gewichtet = "";
        } else {
            $modul2_3_gewichtet = "irrelevant";
        }

        # Modul 4: Summe der Einzelpunkte und gewichtete Punkte                  
        $modul4_punkte = $modul4_1 + $modul4_2 + $modul4_3 + $modul4_4 + $modul4_5 + $modul4_6 + $modul4_7 + $modul4_8 + $modul4_9 + $modul4_10 + $modul4_11 + $modul4_12 + $modul4_13;
       
        $modul4_gewichtet = 0;
        if ($modul4_punkte <= 2) {
            $modul4_gewichtet = 0;
        } elseif ($modul4_punkte <= 7) {
            $modul4_gewichtet = 10;
        } elseif ($modul4_punkte <= 18) {
            $modul4_gewichtet = 20;
        } elseif ($modul4_punkte <= 36) {
            $modul4_gewichtet = 30;
        } elseif ($modul4_punkte <= 54) {
            $modul4_gewichtet = 40;
        }

        # Modul 5: Summe der Einzelpunkte und gewichtete Punkte
        # Kriterien 1 - 7:
        # Die ermittelten Häufigkeiten werden zusammengezählt und in einen Durchschnittswert pro Tag umgerechnet. Für die Umrechnung gilt: die Summe der Maßnahmen pro Monat wird durch 30, die Summe der Maßnahmen pro Woche durch sieben geteilt. Als Zwischenergebnis kann der Pflegebedürftige 0 bis 3 Punkte erhalten:
        # seltener als einmal täglich = 0 Punkte
        # ein- bis dreimal täglich = 1 Punkt
        # vier- bis achtmal täglich = 2 Punkte
        # mehr als achtmal täglich = 3 Punkte
        $modul5_zwischen_1_7_start = 0;
        $modul5_zwischen_1_7_start = $modul5_1 + $modul5_2 + $modul5_3 + $modul5_4 + $modul5_5 + $modul5_6 + $modul5_7;
        # Umrechnung der Gesamtsumme in Punkte bei 5.1-5.7 
        # Gesamtsumme 0 – 0,9999 1,0000 -3 ,0000 3,0001 – 7,9999 ab 8,0000 
        # Punkte 0 1 2 3
        if ($modul5_zwischen_1_7_start < 1) {
            $modul5_zwischen_1_7 = 0;
        } elseif ($modul5_zwischen_1_7_start <= 3) {
            $modul5_zwischen_1_7 = 1;
        } elseif ($modul5_zwischen_1_7_start < 8) {
            $modul5_zwischen_1_7 = 2;
        } elseif ($modul5_zwischen_1_7_start >= 8) {
            $modul5_zwischen_1_7 = 3;
        }
        # Kriterien 8 - 11:
        # Hier gelten die gleichen Regeln wie bei Kriterien 5.1 bis 5.7. Als Zwischenergebnis kann der Pflegebedürftige ebenfalls 0 bis 3 Punkte erhalten. Allerdings werden die Punkte anders zugeordnet.
        # seltener als einmal wöchentlich = 0 Punkte
        # ein- bis mehrmals wöchentlich = 1 Punkt
        # ein- bis zweimal täglich = 2 Punkte
        # mindestens dreimal täglich = 3 Punkte
        $modul5_zwischen_8_11_start = 0;
        $modul5_zwischen_8_11_start = $modul5_8 + $modul5_9 + $modul5_10 + $modul5_11;
        # Umrechnung der Gesamtsumme in Punkte bei 5.8-5.11 
        # Gesamtsumme 0,0000 - 0,1428 0,1429 - 0,9999 1,0000 - 2,9999 ab 3,0000 
        # Punkte 0 1 2 3
        if ($modul5_zwischen_8_11_start <= 0.1428) {
            $modul5_zwischen_8_11 = 0;
        } elseif ($modul5_zwischen_8_11_start <= 0.9999) {
            $modul5_zwischen_8_11 = 1;
        } elseif ($modul5_zwischen_8_11_start <= 2.9999) {
            $modul5_zwischen_8_11 = 2;
        } elseif ($modul5_zwischen_8_11_start >= 3.0000) {
            $modul5_zwischen_8_11 = 3;
        }
        # Kriterien 12 - 15:
        # Für die Kriterien 5.13 und 5.14 gilt: Für jede Maßnahme, die monatlich erfolgt, gibt es einen Punkt. Hochgerechnet auf einen Monat mit 30 Tagen ergeben sich für jede regelmäßige wöchentliche Maßnahme 4,3 Punkte: Vier Maßnahmen zu jeweils einem Punkt in vier Wochen [=28 Tage] ergeben vier Punkte, plus 0,3 Punkte für die restlichen zwei Tage.
        # Für die Kriterien 5.12 und 5.15 gilt: Für jede Maßnahme, die monatlich erfolgt, gibt es zwei Punkte. Hochgerechnet auf einen Monat mit 30 Tagen ergeben sich für jede regelmäßige wöchentliche Maßnahme 8,6 Punkte: Vier Maßnahmen zu jeweils einem Punkt in vier Wochen [=28 Tage] ergeben acht Punkte, plus 0,6 Punkte für die restlichen zwei Tage.
        # Wichtig: Nur das Kriterium 5.12 (zeit- und technikintensive Maßnahmen) kann regelmäßig täglich vorkommen, zum Beispiel bei invasiver Beatmung. In diesem Fall kann der Pflegebedürftige 60 Punkte erhalten.
        # Die auf diese Weise ermittelten Werte der Kriterien 5.12 bis 5.15 werden addiert und zu einem Zwischenergebnis zusammengefasst. Das Ergebnis entspricht einem bestimmten Punktwert.
        # 0 bis unter 4,3 = 0 Punkte
        # 4,3 bis unter 8,6 = 1 Punkt
        # 8,6 bis unter 12,9 = 2 Punkte
        # 12,9 bis unter 60 = 3 Punkte
        # 60 und mehr = 6 Punkte
        $modul5_zwischen_12_15_start = 0;
        $modul5_zwischen_12_15_start = $modul5_12 + $modul5_13 + $modul5_14 + $modul5_15;
        $modul5_13_14_start = $modul5_13 + $modul5_14;
        $modul5_12_15_start = $modul5_12 + $modul5_15;
        $modul5_zwischen_12_15 = $modul5_13_14_start + $modul5_12_15_start;
        # Umrechnung der Gesamtsumme in Punkte bei 5.12-5.15 
        # Gesamtsumme 0 - 4,2 4,3 - 8,5 8,5 – 12,8 12,9 – 59,9 ab 60,0 
        # Punkte 0 1 2 3 6 
        if ($modul5_zwischen_12_15_start <= 4.2) {
            $modul5_zwischen_12_15 = 0;
        } elseif ($modul5_zwischen_12_15_start <= 8.5) {
            $modul5_zwischen_12_15 = 1;
        } elseif ($modul5_zwischen_12_15_start <= 12.8) {
            $modul5_zwischen_12_15 = 2;
        } elseif ($modul5_zwischen_12_15_start >= 59.9) {
            $modul5_zwischen_12_15 = 3;
        } elseif ($modul5_zwischen_12_15_start >= 60) {
            $modul5_zwischen_12_15 = 6;
        }
        # Kriterium 16:            
        # Beim Kriterium 5.16 geht es um die Frage, wie selbstständig jemand eine Diät oder andere krankheits- und therapiebedingte Verhaltensvorschriften einhalten kann. Je nachdem, wie sehr die Selbstständigkeit eingeschränkt ist, kann der Pflegebedürftige hier 0 bis 3 Punkte erhalten.
        # Maßnahme entfällt, ist nicht erforderlich oder der Pflegebedürftige ist selbständig = 0 Punkte
        # überwiegend selbständig = 1 Punkt
        # überwiegend unselbständig = 2 Punkte
        # unselbständig = 3 Punkte
        $modul5_zwischen_16 = 0;
        $modul5_zwischen_16 = $modul5_16;
        # Zusammenrechnen der Punkte in Modul 5 
        # Punkte bei 5.1 - 5.7   
        # + Punkte bei 5.8 - 5.11 =  
        # + Punkte bei 5.12 - 5.15 =  
        # + Punkte bei 5.16 =  Summe der Punkte in Modul 5
        $modul5_punkte = $modul5_zwischen_1_7 + $modul5_zwischen_8_11 + $modul5_zwischen_12_15 + $modul5_zwischen_16;

        # Modul 5: Summe der Einzelpunkte und gewichtete Punkte                  
        $modul5_gewichtet = 0;
        if ($modul5_punkte < 1) {
            $modul5_gewichtet = 0;
        } elseif ($modul5_punkte < 2) {
            $modul5_gewichtet = 5;
        } elseif ($modul5_punkte < 4) {
            $modul5_gewichtet = 10;
        } elseif ($modul5_punkte < 6) {
            $modul5_gewichtet = 15;
        } elseif ($modul5_punkte < 16) {
            $modul5_gewichtet = 20;
        }

        # keine Punkte = 0 gewichtete Punkte, 1 Punkt = 5 gewichtete Punkte, 2 bis 3 Punkte = 10 gewichtete Punkte, 4 bis 5 Punkte = 15 gewichtete Punkte, 6 bis 15 Punkte = 20 gewichtete Punkte              
        $modul5_punkte = $modul5_1 + $modul5_2 + $modul5_3 + $modul5_4 + $modul5_5 + $modul5_6 + $modul5_7 + $modul5_8 + $modul5_9 + $modul5_10 + $modul5_11 + $modul5_12 + $modul5_13 + $modul5_14 + $modul5_15 + $modul5_16;
        $modul5_punkte_gesamt = $modul5_punkte;
        $modul5_punkte = $modul5_zwischen_1_7 + $modul5_zwischen_8_11 + $modul5_zwischen_12_15 + $modul5_zwischen_16;
        $modul5_gewichtet = 0;
        if ($modul5_punkte < 1) {
            $modul5_gewichtet = 0;
        } elseif ($modul5_punkte < 2) {
            $modul5_gewichtet = 5;
        } elseif ($modul5_punkte < 4) {
            $modul5_gewichtet = 10;
        } elseif ($modul5_punkte < 6) {
            $modul5_gewichtet = 15;
        } elseif ($modul5_punkte < 16) {
            $modul5_gewichtet = 20;
        }

        # Modul 6: Summe der Einzelpunkte und gewichtete Punkte               
        $modul6_punkte = $modul6_1 + $modul6_2 + $modul6_3 + $modul6_4 + $modul6_5 + $modul6_6;
        $modul6_gewichtet = 0;
        if ($modul6_punkte <= 1) {
            $modul6_gewichtet = 0;
        } elseif ($modul6_punkte <= 3) {
            $modul6_gewichtet = 3.75;
        } elseif ($modul6_punkte <= 6) {
            $modul6_gewichtet = 7.5;
        } elseif ($modul6_punkte <= 11) {
            $modul6_gewichtet = 11.25;
        } elseif ($modul6_punkte <= 18) {
            $modul6_gewichtet = 15;
        }

        # Gesamtwert der gewichteten Punkte aus allen Modulen (Gesamtpunkte)
        if ($modul2_gewichtet > $modul3_gewichtet) {
            $modul2_3_gewichtet = $modul2_gewichtet;
            $modul23_gewichtet1 = "";
            $modul23_gewichtet2 = "(irrelevant)";
        } else {
            $modul2_3_gewichtet = $modul3_gewichtet;
            $modul23_gewichtet1 = "(irrelevant)";
            $modul23_gewichtet2 = "";
        }
        $gesamtwert = $modul1_gewichtet + $modul2_3_gewichtet + $modul4_gewichtet + $modul5_gewichtet + $modul6_gewichtet;

        # Pflegegrad
        if ($gesamtwert < 12.5) {
            $pflegegrad = 0;
        } elseif ($gesamtwert < 27) {
            $pflegegrad = 1;
        } elseif ($gesamtwert < 47.5) {
            $pflegegrad = 2;
        } elseif ($gesamtwert < 70) {
            $pflegegrad = 3;
        } elseif ($gesamtwert < 90) {
            $pflegegrad = 4;
        } elseif ($gesamtwert <= 100) {
            $pflegegrad = 5;
        }
        $Sonderfall = false;
        # Sonderfall:
        # Wenn beide Arme und Beine gebrauchsunfähig sind (also wenn die pflegebedürftige Person weder in der Lage ist Arme noch Beine zu verwenden, ist eine vollständige Beantwortung aller Fragen nicht erforderlich. Es ist Pflegegrad 5 zu bewilligen.)
        if ($modul1_6 == "1") {
            $pflegegrad = 5;
            $Sonderfall = true;
        }

        $datatext1=utf8_encode("Mobilität");
        $datatext2=utf8_encode("Kognitive & kommunikative Fähigkeiten");
        $datatext3=utf8_encode("Bewältigung von & selbstständiger Umgang mit krankheits-/therapiebedingten Anforderungen");        

        $data = [
            $datatext1 => [
                'punkte' => $modul1_punkte,
                'gewichtet' => $modul1_gewichtet,
            ],
            $datatext2 => [
                'punkte' => $modul2_punkte,
                'gewichtet' => $modul2_gewichtet . " " . $modul23_gewichtet1,
            ],
            'Verhaltensweisen & psychische Problemlagen' => [
                'punkte' => $modul3_punkte,
                'gewichtet' => $modul3_gewichtet . " " . $modul23_gewichtet2,
            ],
            'Selbstversorgung' => [
                'punkte' => $modul4_punkte,
                'gewichtet' => $modul4_gewichtet,
            ],
            $datatext3 => [
                'punkte' => $modul5_punkte,
                'gewichtet' => $modul5_gewichtet,
            ],
            'Gestaltung des Alltagslebens und sozialer Kontakte' => [
                'punkte' => $modul6_punkte,
                'gewichtet' => $modul6_gewichtet,
            ],
        ];



        return back()->withInput()->with([
            'modul1_punkte' => $data,
            'pflegegrad' => $pflegegrad,
            'Sonderfall' => $Sonderfall
        ]);

    }
}
}
