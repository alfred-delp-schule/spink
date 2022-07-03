<?php

    include('../tools/functions.php');

    /*
    Funktion wertermittlung
    Attribute:
        $AId: einzigartige id der Anteile, welche der Wert ermittelt werden soll

    Funktionsweise:
        - Bei weniger als 5 kauf und verkaufordern bricht die wertermittlung ab
        - Verlgeicht die minimale kaufer/verkaufer zu den werten und sucht maximalsten
        

    */

    function wertermittlung($AId){

        $con = getDBConnection();

        //Get Order Kaufen
        $stmt = $con->prepare('SELECT Wert, Anzahl from Orderbuch WHERE AId = ? and Ask = 1');
        $result = $stmt->execute(array($AId));
        $kaufen = $stmt->fetchAll();

        //Get Order Verkaufen
        $stmt = $con->prepare('SELECT Wert, Anzahl from Orderbuch WHERE AId = ? and Ask = 0');
        $result = $stmt->execute(array($AId));
        $verkaufen = $stmt->fetchAll();

        //Check genügend orders <kaufen>
        if(count($kaufen) > 5 && count($verkaufen) > 5){
            return false;
        }

        //Variablen erstellen
        $kumKaufen = 0;
        foreach($kaufen as $kauf){
            $kumKaufen += $kauf['Anzahl'];
        }
        $kumVerkaufen = 0;

        $indexKaufen = 0;
        $indexVerkaufen = 0;

        $MaxWert = 0;
        $MaxAnzahl = 0;

        //verkaufen läuft aufwärts
        //kaufen läuft abwärts

        //Beginn Wertermittlung
        while($MaxAnzahl == $kumVerkaufen){#

            //Check welche größer

            //verkaufen kleiner
            if($verkaufen[$indexVerkaufen]['Wert'] < $kaufen[$indexKaufen]['Wert']){
                //Verkaufen addieren
                do{
                    $kumVerkaufen += $verkaufen[$indexVerkaufen]['Anzahl'];
                    $indexVerkaufen++;

                } while($verkaufen[$indexVerkaufen]['Wert'] == $verkaufen[$indexVerkaufen-1]['Wert']);
            }

            //verkaufen größer
            else if($verkaufen[$indexVerkaufen]['Wert'] > $kaufen[$indexKaufen]['Wert']){
                //kaufen subtrahieren
                do{
                    //Immerkäufer nicht abziehen
                    if($kaufen[$indexKaufen]['Wert'] == 0){
                        $indexKaufen++;
                        continue;
                    }

                    $kumKaufen -= $kaufen[$indexKaufen]['Anzahl'];
                    $indexKaufen++;

                } while($kaufen[$indexKaufen]['Wert'] == $kaufen[$indexKaufen-1]['Wert']);
            }

            //verkaufen gleich
            else if($verkaufen[$indexVerkaufen]['Wert'] == $kaufen[$indexKaufen]['Wert']){
                //Verkaufen addieren
                do{
                    $kumVerkaufen += $verkaufen[$indexVerkaufen]['Anzahl'];
                    $indexVerkaufen++;

                } while($verkaufen[$indexVerkaufen]['Wert'] == $verkaufen[$indexVerkaufen-1]['Wert']);

                //kaufen subtrahieren
                do{
                    //Immerkäufer nicht abziehen
                    if($kaufen[$indexKaufen]['Wert'] == 0){
                        $indexKaufen++;
                        continue;
                    }

                    $kumKaufen -= $kaufen[$indexKaufen]['Anzahl'];
                    $indexKaufen++;

                } while($$kaufen[$indexKaufen]['Wert'] == $kaufen[$indexKaufen-1]['Wert']);
            }

            //Prüfen auf neues Max

            //verkaufen geringer
            //alter maxwert ist kleiner
            if($MaxAnzahl <= $kumVerkaufen && $kumVerkaufen <= $kumKaufen){
                $MaxAnzahl = $kumVerkaufen;
                $MaxWert = $verkaufen[$indexVerkaufen-1]['Wert'];
            }

            //kaufen geringer
            //alter maxwert ist kleiner
            else if($kumKaufen > $kumVerkaufen && $MaxAnzahl <= $kumKaufen){
                $MaxAnzahl = $kumVerkaufen;
                $MaxWert = $verkaufen[$indexVerkaufen-1]['Wert'];
            }
        }

        //Wertermittlung abgeschlossen
        return $MaxWert;
    }

?>
    