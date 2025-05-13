<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineRechner extends Controller
{
    public function index()
    {
        return view('online_rechner.index');
    }
    
    public function partnerindex(Request $request)
    {
        $partnerid = $request->input('partnerid');    
        return view('partner.rechnerpflegegrad');
        return $partnerid;        
    }
    
public function partnerindex2(Request $request)
{
    $partnerid = $request->input('partnerid');    

    $pflegegeldanspruchtext = "Bei Pflegegrad 1 besteht kein Anspruch auf Pflegegeld.";
    $teilstattext = "Bei Pflegegrad 1 besteht kein Anspruch auf teilstationäre Pflege.";
    $vollstattext = "Hinweis: Bei vollstationärer Pflege, also der Unterbringung im Pflegeheim besteht kein Anspruch auf Pflegegeld.<br />Angegeben ist hier nur der Vollständigkeit halber die vom Pflegegrad abhängige Kostenübernahme der Pflegekasse bei Heimunterbringung.<br />Bei Pflegegrad 1 und vollstationärer Pflege besteht kein Anspruch auf Kostenübernahme.";

    // Hier wird die Variable $partnerid mit an die View übergeben
    return view('partner.rechnerpflegegeld', compact('partnerid', 'pflegegeldanspruchtext', 'teilstattext', 'vollstattext'));
}
    

    public function secondPage()
    {
        return view('online_rechner.second');
    }

    public function thirdPage()
    {
        $pflegegeldanspruchtext = "Bei Pflegegrad 1 besteht kein Anspruch auf Pflegegeld.";
        $teilstattext = "Bei Pflegegrad 1 besteht kein Anspruch auf teilstationäre Pflege.";
        $vollstattext = "Hinweis: Bei vollstationärer Pflege, also der Unterbringung im Pflegeheim besteht kein Anspruch auf Pflegegeld.<br />Angegeben ist hier nur der Vollständigkeit halber die vom Pflegegrad abhängige Kostenübernahme der Pflegekasse bei Heimunterbringung.<br />Bei Pflegegrad 1 und vollstationärer Pflege besteht kein Anspruch auf Kostenübernahme.";

        return view('online_rechner.third', compact('pflegegeldanspruchtext', 'teilstattext', 'vollstattext'));
    }

    public function calculationForThirdPage(Request $request)
    {
        $pflegegrad = 1;
        $ambulant = 0;
        $ambulantmax = 131;
        $pflegegeldanspruch = 0;
        $teilstat = 131;
        $vollstat = 131;
        $pflegegeldanspruchtext = "Bei Pflegegrad 1 besteht kein Anspruch auf Pflegegeld.";
        $teilstattext = "Bei Pflegegrad 1 besteht kein Anspruch auf teilstationäre Pflege.";
        $vollstattext = "Hinweis: Bei vollstationärer Pflege, also der Unterbringung im Pflegeheim besteht kein Anspruch auf Pflegegeld.<br />Angegeben ist hier nur der Vollständigkeit halber die vom Pflegegrad abhängige Kostenübernahme der Pflegekasse bei Heimunterbringung.<br />Bei Pflegegrad 1 und vollstationärer Pflege besteht kein Anspruch auf Kostenübernahme.";

        $pflegegrad = intval($request->pflegegrad);
        $ambulant = intval($request->ambulant);
        $pflegegeldanspruch = 0;
        $teilstat = 0;
        $vollstat = 0;
        if ($pflegegrad == 1) {
            $pflegegeldanspruchtext = "Bei Pflegegrad 1 besteht kein Anspruch auf Pflegegeld.";
        } elseif ($pflegegrad == 2) {
            $ambulantmax = 796;
            $teilstat = 721;
            $vollstat = 805;
            $pflegegeldanspruch = 347;
            if ($ambulant == 0) {
                $pflegegeldanspruchtext = "Bei Pflegegrad " . $pflegegrad . " haben Sie Anspruch auf den monatlichen Höchstsatz des Pflegegelds von " . $pflegegeldanspruch . " EUR, da die Pflege komplett in Eigenleistung erbracht wird.";
            } else {
                $ambulantdummy = ($ambulant / $ambulantmax) * 100;
                $ambulantdummy2 = 100 - $ambulantdummy;
                $pflegegeldanspruchneu = $pflegegeldanspruch * ($ambulantdummy2 / 100);
                $pflegegeldanspruchtext = "Bei Pflegegrad " . $pflegegrad . " hätten Sie Anspruch auf ein monatliches Pflegegeld bis zu " . $pflegegeldanspruch . " EUR, sofern die Pflege komplett in Eigenleistung erbracht würde.<br />Sie haben jedoch Leistungen eines ambulanten Pflegedienstes zu einem Anteil von " . number_format($ambulantdummy, 2, ',', '.') . "% der dafür vorgesehenen max. Leistungen von " . $ambulantmax . " EUR ausgeschöpft, wodurch das Pflegegeld um denselben Prozentsatz gekürzt wird. In Ihrem Fall haben Sie also einen Anspruch auf " . number_format($ambulantdummy2, 2, ',', '.') . "% des max. Pflegegelds von " . number_format($pflegegeldanspruch, 2, ',', '.') . " EUR (= " . number_format($pflegegeldanspruchneu, 2, ',', '.') . " EUR)";
                $pflegegeldanspruch = $pflegegeldanspruchneu;
            }
        } elseif ($pflegegrad == 3) {
            $ambulantmax = 1497;
            $teilstat = 1357;
            $vollstat = 1319;
            $pflegegeldanspruch = 599;
            if ($ambulant == 0) {
                $pflegegeldanspruchtext = "Bei Pflegegrad " . $pflegegrad . " haben Sie Anspruch auf den monatlichen Höchstsatz des Pflegegelds von " . $pflegegeldanspruch . " EUR, da die Pflege komplett in Eigenleistung erbracht wird.";
            } else {
                $ambulantdummy = ($ambulant / $ambulantmax) * 100;
                $ambulantdummy2 = 100 - $ambulantdummy;
                $pflegegeldanspruchneu = $pflegegeldanspruch * ($ambulantdummy2 / 100);
                $pflegegeldanspruchtext = "Bei Pflegegrad " . $pflegegrad . " hätten Sie Anspruch auf ein monatliches Pflegegeld bis zu " . $pflegegeldanspruch . " EUR, sofern die Pflege komplett in Eigenleistung erbracht würde.<br />Sie haben jedoch Leistungen eines ambulanten Pflegedienstes zu einem Anteil von " . number_format($ambulantdummy, 2, ',', '.') . "% der dafür vorgesehenen max. Leistungen von " . $ambulantmax . " EUR ausgeschöpft, wodurch das Pflegegeld um denselben Prozentsatz gekürzt wird. In Ihrem Fall haben Sie also einen Anspruch auf " . number_format($ambulantdummy2, 2, ',', '.') . "% des max. Pflegegelds von " . number_format($pflegegeldanspruch, 2, ',', '.') . " EUR (= " . number_format($pflegegeldanspruchneu, 2, ',', '.') . " EUR)";
                $pflegegeldanspruch = $pflegegeldanspruchneu;
            }
        } elseif ($pflegegrad == 4) {
            $ambulantmax = 1859;
            $teilstat = 1685;
            $vollstat = 1855;
            $pflegegeldanspruch = 800;
            if ($ambulant == 0) {
                $pflegegeldanspruchtext = "Bei Pflegegrad " . $pflegegrad . " haben Sie Anspruch auf den monatlichen Höchstsatz des Pflegegelds von " . $pflegegeldanspruch . " EUR, da die Pflege komplett in Eigenleistung erbracht wird.";
            } else {
                $ambulantdummy = ($ambulant / $ambulantmax) * 100;
                $ambulantdummy2 = 100 - $ambulantdummy;
                $pflegegeldanspruchneu = $pflegegeldanspruch * ($ambulantdummy2 / 100);
                $pflegegeldanspruchtext = "Bei Pflegegrad " . $pflegegrad . " hätten Sie Anspruch auf ein monatliches Pflegegeld bis zu " . $pflegegeldanspruch . " EUR, sofern die Pflege komplett in Eigenleistung erbracht würde.<br />Sie haben jedoch Leistungen eines ambulanten Pflegedienstes zu einem Anteil von " . number_format($ambulantdummy, 2, ',', '.') . "% der dafür vorgesehenen max. Leistungen von " . $ambulantmax . " EUR ausgeschöpft, wodurch das Pflegegeld um denselben Prozentsatz gekürzt wird. In Ihrem Fall haben Sie also einen Anspruch auf " . number_format($ambulantdummy2, 2, ',', '.') . "% des max. Pflegegelds von " . number_format($pflegegeldanspruch, 2, ',', '.') . " EUR (= " . number_format($pflegegeldanspruchneu, 2, ',', '.') . " EUR)";
                $pflegegeldanspruch = $pflegegeldanspruchneu;
            }
        } elseif ($pflegegrad == 5) {
            $ambulantmax = 2299;
            $teilstat = 2085;
            $vollstat = 2096;
            $pflegegeldanspruch = 990;
            if ($ambulant == 0) {
                $pflegegeldanspruchtext = "Bei Pflegegrad " . $pflegegrad . " haben Sie Anspruch auf den monatlichen Höchstsatz des Pflegegelds von " . $pflegegeldanspruch . " EUR, da die Pflege komplett in Eigenleistung erbracht wird.";
            } else {
                $ambulantdummy = ($ambulant / $ambulantmax) * 100;
                $ambulantdummy2 = 100 - $ambulantdummy;
                $pflegegeldanspruchneu = $pflegegeldanspruch * ($ambulantdummy2 / 100);
                $pflegegeldanspruchtext = "Bei Pflegegrad " . $pflegegrad . " hätten Sie Anspruch auf ein monatliches Pflegegeld bis zu " . $pflegegeldanspruch . " EUR, sofern die Pflege komplett in Eigenleistung erbracht würde.<br />Sie haben jedoch Leistungen eines ambulanten Pflegedienstes zu einem Anteil von " . number_format($ambulantdummy, 2, ',', '.') . "% der dafür vorgesehenen max. Leistungen von " . $ambulantmax . " EUR ausgeschöpft, wodurch das Pflegegeld um denselben Prozentsatz gekürzt wird. In Ihrem Fall haben Sie also einen Anspruch auf " . number_format($ambulantdummy2, 2, ',', '.') . "% des max. Pflegegelds von " . number_format($pflegegeldanspruch, 2, ',', '.') . " EUR (= " . number_format($pflegegeldanspruchneu, 2, ',', '.') . " EUR)";
                $pflegegeldanspruch = $pflegegeldanspruchneu;
            }
        }
        if ($pflegegrad == 1) {
            $teilstattext = "Bei Pflegegrad 1 besteht kein Anspruch auf teilstationäre Pflege (Entlastungsbetrag in Höhe von 131 EUR).";
            $vollstattext = "Hinweis: Bei vollstationärer Pflege, also der Unterbringung im Pflegeheim besteht kein Anspruch auf Pflegegeld.<br />Angegeben ist hier nur der Vollständigkeit halber die vom Pflegegrad abhängige Kostenübernahme der Pflegekasse bei Heimunterbringung.<br />Bei Pflegegrad 1 und vollstationärer Pflege besteht kein Anspruch auf Kostenübernahme.";
        } else {
            $teilstattext = "Falls Sie berechtigt sind, teilstationäre Pflege (Tages- oder Nachtpflege) in Anspruch zu nehmen, bekommen Sie bei Pflegegrad " . $pflegegrad . " monatlich bis zu " . $teilstat . " EUR der Kosten durch die Pflegekasse ersetzt.<br />Anders als bei den Leistungen für die ambulante Pflege durch einen Pflegedienst, wird die Inanspruchnahme von Leistungen für die teilstationäre Pflege bereits seit dem 1. Januar 2015 nicht mehr negativ auf die Höhe des Pflegegelds angerechnet.";
            $vollstattext = "* Hinweis: Bei vollstationärer Pflege, also der Unterbringung im Pflegeheim besteht kein Anspruch auf Pflegegeld.<br />Angegeben ist hier nur der Vollständigkeit halber die vom Pflegegrad abhängige Kostenübernahme der Pflegekasse bei Heimunterbringung.";
        }
        return back()->withInput()->with([
            'pflegegrad' => $pflegegeldanspruch,
            'teilstat' => $teilstat,
            'vollstat' => $vollstat

        ]);
    }

    public function fourthPage()
    {
        return view('online_rechner.fourth');
    }
    public function fifthPage()
    {
        return view('online_rechner.fifth');
    }

    public function sixthPage()
    {
        return view('online_rechner.sixth');

    }




    public function calculateModule(Request $request)
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

        $data = [
            'Mobilität' => [
                'punkte' => $modul1_punkte,
                'gewichtet' => $modul1_gewichtet,
            ],
            'Kognitive & kommunikative Fähigkeiten' => [
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
            'Bewältigung von & selbstständiger Umgang mit krankheits-/therapiebedingten Anforderungen' => [
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

    public function calculateModule2(Request $request)
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

        $data = [
            'Mobilität' => [
                'punkte' => $modul1_punkte,
                'gewichtet' => $modul1_gewichtet,
            ],
            'Kognitive & kommunikative Fähigkeiten' => [
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
            'Bewältigung von & selbstständiger Umgang mit krankheits-/therapiebedingten Anforderungen' => [
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


    public function calculateFifthResult(Request $request)
    {
        $tagelk1 = 0;
        $tagelk2 = 0;
        $tagelk3 = 0;
        $tagelk4 = 0;
        $tagelk5 = 0;
        $tagelk6 = 0;
        $tagelk7 = 0;
        $tagelk8 = 0;
        $tagelk9 = 0;
        $tagelk10 = 0;
        $tagelk11 = 0;
        $tagelk12 = 0;
        $tagelk13 = 0;
        $tagelk14 = 0;
        $tagelk15 = 0;
        $tagelk16 = 0;
        $tagelk17 = 0;
        $tagelk18 = 0;
        $tagelk19 = 0;
        $tagelk20 = 0;
        $tagelk21 = 0;
        $tagelk22 = 0;
        $tagelk23 = 0;
        $pflegegrad = $request->pflegegrad;
        $erstattungssatz = 0;
        $pgtext = "kein Pflegegrad";
        $monattage = 0;
        $monattagekosten = 0;
        $monatminuten = 0;
        $monatminutenkosten = 0;
        $gesamtsumme = 0;

        $leistung1 = "Erstbesuch (LK 1)";
        $leistung2 = "Folgebesuch (LK 2)";
        $leistung3 = "Kleine Pflege - Grundpflege (LK 3)";
        $leistung4 = "Große Pflege I - Grundpflege (LK 4)";
        $leistung5 = "Große Pflege II - Grundpflege (LK 5)";
        $leistung6 = "Kämmen und Rasieren - Grundpflege (LK 6)";
        # $leistung7=" (LK 7)";
        $leistung8 = "Hilfen bei Aufsuchen und Verlassen des Bettes im Zusammenhang mit der Körperpflege - Grundpflege (LK 8)";
        $leistung9 = "Hilfen beim Aufsuchen und Verlassen des Bettes - Grundpflege (LK 9)";
        $leistung10 = "Spezielle Lagerung bei Immobilität im Zusammenhang mit der Körperpflege - Grundpflege (LK 10)";
        $leistung11 = "Spezielle Lagerung bei Immobilität - Grundpflege (LK 11)";
        $leistung12 = "Einfache Hilfe bei der Nahrungsaufnahme - Grundpflege (LK 12)";
        $leistung13 = "Umfangreiche Hilfe bei der Nahrungsaufnahme - Grundpflege (LK 13)";
        $leistung14 = "Nahrungszufuhr durch Verabreichung von Sondenkost - Grundpflege (LK 14)";
        $leistung15 = "Ergänzende Hilfe bei Ausscheidungen im Zusammenhang mit der Körperpflege - Grundpflege (LK 15)";
        $leistung16 = "Umfangreiche Hilfe bei Ausscheidungen - Grundpflege (LK 16)";
        $leistung17 = "Hilfestellung beim Verlassen oder Wiederaufsuchen der Wohnung - Grundpflege (LK 17)";
        $leistung18 = "Begleitung bei Aktivitäten - Grundpflege (LK 18)";
        $leistung19 = "Hauswirtschaftliche Versorgung (LK 19)";
        $leistung20 = "Beratungsbesuch gem. § 37 Abs. 3 SGB XI (LK 20)";
        $leistung21 = "Wegepauschalen (LK 21)";
        $leistung22 = "Grundpflege - nach Zeit";
        $leistung23 = "Betreuungsleistungen - nach Zeit";

        if ($pflegegrad == 0) {
            $erstattungssatz = 0;
            $pgtext = "kein Pflegegrad";
        } elseif ($pflegegrad == 1) {
            $erstattungssatz = 0;
            $pgtext = "Pflegegrad 1";
        } elseif ($pflegegrad == 2) {
            $erstattungssatz = 796;
            $pgtext = "Pflegegrad 2";
        } elseif ($pflegegrad == 3) {
            $erstattungssatz = 1497;
            $pgtext = "Pflegegrad 3";
        } elseif ($pflegegrad == 4) {
            $erstattungssatz = 1859;
            $pgtext = "Pflegegrad 4";
        } elseif ($pflegegrad == 5) {
            $erstattungssatz = 2299;
            $pgtext = "Pflegegrad 5";
        }
        $tagelk1 = (int) $request->input('tagelk1', 0);
        $tagelk2 = (int) $request->input('tagelk2', 0);
        $tagelk3 = (int) $request->input('tagelk3', 0);
        $tagelk4 = (int) $request->input('tagelk4', 0);
        $tagelk5 = (int) $request->input('tagelk5', 0);
        $tagelk6 = (int) $request->input('tagelk6', 0);
        $tagelk7 = (int) $request->input('tagelk7', 0);
        $tagelk8 = (int) $request->input('tagelk8', 0);
        $tagelk9 = (int) $request->input('tagelk9', 0);
        $tagelk10 = (int) $request->input('tagelk10', 0);
        $tagelk11 = (int) $request->input('tagelk11', 0);
        $tagelk12 = (int) $request->input('tagelk12', 0);
        $tagelk13 = (int) $request->input('tagelk13', 0);
        $tagelk14 = (int) $request->input('tagelk14', 0);
        $tagelk15 = (int) $request->input('tagelk15', 0);
        $tagelk16 = (int) $request->input('tagelk16', 0);
        $tagelk17 = (int) $request->input('tagelk17', 0);
        $tagelk18 = (int) $request->input('tagelk18', 0);
        $tagelk19 = (int) $request->input('tagelk19', 0);
        $tagelk20 = (int) $request->input('tagelk20', 0);
        $tagelk21 = (int) $request->input('tagelk21', 0);
        $tagelk22 = (int) $request->input('tagelk22', 0);
        $tagelk23 = (int) $request->input('tagelk23', 0);
        $monatlk1 = 57.75 * $tagelk1;
        $monatlk2 = 31.50 * $tagelk2;
        $monatlk3 = 11.55 * $tagelk3;
        $monatlk4 = 18.90 * $tagelk4;
        $monatlk5 = 23.65 * $tagelk5;
        $monatlk6 = 3.70 * $tagelk6;
        $monatlk7 = 0 * $tagelk7;
        $monatlk8 = 2.65 * $tagelk8;
        $monatlk9 = 5.25 * $tagelk9;
        $monatlk10 = 5.25 * $tagelk10;
        $monatlk11 = 10.5 * $tagelk11;
        $monatlk12 = 5.25 * $tagelk12;
        $monatlk13 = 15.75 * $tagelk13;
        $monatlk14 = 5.25 * $tagelk14;
        $monatlk15 = 4.20 * $tagelk15;
        $monatlk16 = 10.5 * $tagelk16;
        $monatlk17 = 4.20 * $tagelk17;
        $monatlk18 = 31.5 * $tagelk18;
        $monatlk19 = 0.42 * $tagelk19;
        # Bei LK 19: 4,20 EUR je angefangene 10 Minuten
        $monatlk20 = 55.15 * $tagelk20;
        $monatlk21 = 2.33 * $tagelk21;
        # Ansatz von 6,00 EUR als etwaigen Wert
        # Vergütung 21a: 4,65 EUR
        # Vergütung 21b: 7,90 EUR
        # Vergütung 21c: 2,33 EUR
        # Vergütung 21d: 3,95 EUR
        # Vergütung 21 (Interner Dienst): 1,27 EUR
        # Vergütung 21 (Externer Dienst, mehr als zwei Pflegebedürftige): 1,88 EUR
        # Vergütung 21 (Pflegeleistungen, Minutenwert): 0,75 EUR
        # Vergütung 21 (Betreuungsleistungen, Minutenwert): 0,50 EUR
        $monatlk22 = 0.35 * $tagelk22;
        # Bei Grundpflege nach Zeit: 15 Punkte je Minute, Einsatzmindestdauer: 15 Minuten
        # Ansatz von erfassten Minuten - Vgl.: Punkte 105 = 5,25 EUR; Ansatz hier 0,35 EUR je Minute
        $monatlk23 = 0.23 * $tagelk23;
        # Bei Betreuungsleistungen nach Zeit: 10 Punkte je Minute, Einsatzmindestdauer: 15 Minuten
        # Ansatz 0,23 EUR je Minute
        $monattage = $tagelk1 + $tagelk2 + $tagelk3 + $tagelk4 + $tagelk5 + $tagelk6 + $tagelk7 + $tagelk8 + $tagelk9 + $tagelk10 + $tagelk11 + $tagelk12 + $tagelk13 + $tagelk14 + $tagelk15 + $tagelk16 + $tagelk17 + $tagelk18 + $tagelk20;
        $monattagekosten = $monatlk1 + $monatlk2 + $monatlk3 + $monatlk4 + $monatlk5 + $monatlk6 + $monatlk7 + $monatlk8 + $monatlk9 + $monatlk10 + $monatlk11 + $monatlk12 + $monatlk13 + $monatlk14 + $monatlk15 + $monatlk16 + $monatlk17 + $monatlk18 + $monatlk20;
        # LK 1 - 18, 20
        $monatminuten = $tagelk19 + $tagelk21 + $tagelk22 + $tagelk23;
        $monatminutenkosten = $monatlk19 + $monatlk21 + $monatlk22 + $monatlk23;
        # LK 19, 21, GP und BL
        $gesamtsumme = $monattagekosten + $monatminutenkosten;
        # Gesamtsumme im Monat
        $differenz = $gesamtsumme - $erstattungssatz;

        return back()->withInput()->with([
            'gesamtsumme' => $gesamtsumme,
            'pgtext' => $pgtext,
            'differenz' => $differenz,
            'erstattungssatz' => $erstattungssatz,
            'monatlk1' => $monatlk1,
            'monatlk2' => $monatlk2,
            'monatlk3' => $monatlk3,
            'monatlk4' => $monatlk4,
            'monatlk5' => $monatlk5,
            'monatlk6' => $monatlk6,
            'monatlk7' => $monatlk7,
            'monatlk8' => $monatlk8,
            'monatlk9' => $monatlk9,
            'monatlk10' => $monatlk10,
            'monatlk11' => $monatlk11,
            'monatlk12' => $monatlk12,
            'monatlk13' => $monatlk13,
            'monatlk14' => $monatlk14,
            'monatlk15' => $monatlk15,
            'monatlk16' => $monatlk16,
            'monatlk17' => $monatlk17,
            'monatlk18' => $monatlk18,
            'monatlk19' => $monatlk19,
            'monatlk20' => $monatlk20,
            'monatlk21' => $monatlk21,
            'monatlk22' => $monatlk22,
            'monatlk23' => $monatlk23,
            'leistung1' => $leistung1,
            'leistung2' => $leistung2,
            'leistung3' => $leistung3,
            'leistung4' => $leistung4,
            'leistung5' => $leistung5,
            'leistung6' => $leistung6,
            'leistung8' => $leistung8,
            'leistung9' => $leistung9,
            'leistung10' => $leistung10,
            'leistung11' => $leistung11,
            'leistung12' => $leistung12,
            'leistung13' => $leistung13,
            'leistung14' => $leistung14,
            'leistung15' => $leistung15,
            'leistung16' => $leistung16,
            'leistung17' => $leistung17,
            'leistung18' => $leistung18,
            'leistung19' => $leistung19,
            'leistung20' => $leistung20,
            'leistung21' => $leistung21,
            'leistung22' => $leistung22,
            'leistung23' => $leistung23,

        ]);
    }

    public function calculateSixthResult(Request $request)
    {
        $jahr = 2023;
        $alg = 0;
        $chronisch = 1;
        $verheiratet = 0;
        $kinder = 0;
        $brutto = 0;

        $berechnungsgrundlage0 = 0;
        $berechnungsgrundlage1 = 0;
        $kinderfreibetrag = 0;
        $verheiratetfreibetrag = 0;
        $maxzuzahlung = 0;
        $regelsatz = 0;

        $jahr = intval($request->jahr);
        $alg = intval($request->alg);
        $chronisch = intval($request->chronisch);
        $verheiratet = intval($request->verheiratet);
        $kinder = intval($request->kinder);
        $brutto = intval($request->brutto);
        $berechnungsgrundlage1 = 0;
        # $berechnungsgrundlage1 = vor Belastungsgrenze
        $kinderfreibetrag = 0;
        $verheiratetfreibetrag = 0;
        $maxzuzahlung = 0;
        if ($alg == 1) {
            $regelsatz = 1;
            $verheiratetfreibetrag = "irrelevant";
            $kinderfreibetrag = "irrelevant";
            if ($jahr == 2023) {
                $berechnungsgrundlage1 = 6024;
            } elseif ($jahr == 2022) {
                $berechnungsgrundlage1 = 5388;
            }
        } else {
            if ($verheiratet == 1) {
                if ($jahr == 2023) {
                    $verheiratetfreibetrag = 6111;
                } elseif ($jahr == 2022) {
                    $verheiratetfreibetrag = 5922;
                }
            }
            if ($kinder > 0) {
                if ($jahr == 2023) {
                    $kinderfreibetrag = $kinder * 8952;
                } elseif ($jahr == 2022) {
                    $kinderfreibetrag = $kinder * 8388;
                }
            }
            $berechnungsgrundlage1 = $brutto - $verheiratetfreibetrag - $kinderfreibetrag;
        }
        $maxzuzahlung = ($berechnungsgrundlage1 * $chronisch) / 100;
        if ($maxzuzahlung < 0) {
            $maxzuzahlung = 0;
        }
        $maxzuzahlungtext = "In diesem Jahr müssen Sie demnach maximal " . number_format($maxzuzahlung, 2, ',', '.') . " EUR für Zuzahlungen aufbringen.";
        return back()->withInput()->with([
            'berechnungsgrundlage1' => $berechnungsgrundlage1,
            'brutto' => $brutto,
            'verheiratetfreibetrag' => $verheiratetfreibetrag,
            'kinderfreibetrag' => $kinderfreibetrag,
            'chronisch' => $chronisch,
            'maxzuzahlungtext' => $maxzuzahlungtext,
            'regelsatz' => $regelsatz,

        ]);

    }

}
