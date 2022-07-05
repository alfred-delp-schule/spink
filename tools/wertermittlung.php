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


    /*
    Funktion transaktion
    Attribute:
        $aid: einzigartige id der Anteile, welche gehandelt werden soll

    Funktionsweise:
        - Variablen aus der Datenbank abfragen
        - Für jeden händler wird
            käufer:     Der Anteil als Besitz markiert
            verkäufer:  Anteile abgezogen

    */

    function transaktion($aid){
        //Variablen getten
        $con = getDBConnection();
        $stmt = $con->prepare('SELECT Wert from Wert WHERE AId = ? ORDER BY Wert DESC');
        $result = $stmt->execute(array($aid));
        $wert = $stmt->fetch()['Wert'];

        $stmt = $con->prepare('SELECT * from Orderbuch WHERE AId = ?');
        $result = $stmt->execute(array($aid));
        $handler = $stmt->fetchAll();
       

        //Transaktion Durchführen für jeden händler
        foreach($handler as $hand){
            if($hand['Ask'] == 1){
                //SQL Befehle Vorbereiten
                $kaufen = $con->prepare('INSERT INTO AnteilsBesitz (AId, KId, KaufWert, Anzahl)
                                        VALUES (?, ?, ?, ?)');
                //Käufer
                $res = $kaufen->execute(array($aid, $hand['KId'], $wert, $hand['Anzahl']));
            } else {
                //SQL Befehle Vorbereiten        
                $getVerkaufen = $con->prepare('SELECT Anzahl from AnteilsBesitz WHERE AId = ? AND KId = ?');
                $verkaufen = $con->prepare('UPDATE AnteilsBesitz SET Anzahl = ? WHERE AId = ? AND KId = ?');
                //Verkäufer
                $res = $getVerkaufen->execute(array($aid, $hand['KId']));
                $momAnzahl = $getVerkaufen->fetch()['Anzahl'];
                //Falls nicht genügend Anteile vorhanden nicht verkauft
                if($momAnzahl - $hand['Anzahl'] >= 0){
                    $verkaufen->execute(array($momAnzahl - $hand['Anzahl'], $aid, $hand['KId']));
                }
            }
        }

        //Orderbuch löschen und leere besitzer
        $stmt = $con->prepare('DELETE from Orderbuch WHERE AId = ?');
        $res = $stmt->execute(array($aid));
        $stmt = $con->prepare('DELETE from AnteilsBesitz WHERE AId = ? AND Anzahl = 0');
        $res = $stmt->execute(array($aid));

    }

?>
    