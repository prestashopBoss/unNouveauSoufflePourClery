<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour</title>
</head>
<body>
    Bonjour <?php 
        $firstName = $_GET['firstName'];
        $name = $_GET['name'];
        $secondName = $_Get['secondName'];
          echo $firstName; echo " "; echo $name; echo " "; echo $secondName;
          $patronyme = $firstName . $name . $secondName;

        switch ($patronyme) {
            case 'BubenheimerGregory':
                print ('<img src="../../spec/1/01.GB.jpg"/>');
                break;
            case 'BrodieCorinne':
                print ('<img src="../../spec/1/02.CORINNE BRODIE.jpg"/>');
                break;
            case 'DietAlexandre':
                print ('<img src="../../spec/1/03.ALEXANDRE DIET.jpg"/>');
                break;
            case 'AndrouinDorothee':
                print ('<img src="../../spec/1/04.DOROTHEE ANDROUIN.jpg"/>');
                break;
            case 'BoissayMichel':
                print ('<img src="../../spec/1/05.MICHEL BOISSAY.jpg"/>');
                break;
            case 'BaraleGidoinElodie':
                print ('<img src="../../spec/1/06.ELODIE GIDOIN BARALE.jpg"/>');
                break;
            case 'GuilmentBertrand':
                print ('<img src="../../spec/1/07.BERTRAND GUILMENT.jpg"/>');
                break;
            case 'PortheaultNathalie':
                print ('<img src="../../spec/1/08.NATHALIE PORTHEAULT.jpg"/>');
                break;
            case 'RoncinNicolas':
                print ('<img src="../../spec/1/09.NICOLAS RONCIN.jpg"/>');
                break;
            case 'TetuSabine':
                print ('<img src="../../spec/1/10.SABINE TETU.jpg"/>');
                break;
            case 'BertandHenri':
                print ('<img src="../../spec/1/11.HENRI BERTRAND.jpg"/>');
                break;
            case 'Boissay':
                print ('<img src="../../spec/1/12.ELODIE BOISSAY.jpg"/>');
                break;
            case 'MartinFrederic':
                print ('<img src="../../spec/1/13.FREDERIC MARTIN.jpg"/>');
                break;
            case 'DietAline':
                print ('<img src="../../spec/1/14.ALINE DIET.jpg"/>');
                break;
            case 'BocageJerome':
                print ('<img src="../../spec/1/15.JEROME BOCAGE.jpg"/>');
                break;
            case 'SalmamnDominique':
                print ('<img src="../../spec/1/18.DOMINIQUE SALMANN.jpg"/>');
                break;
            case 'GidoinJeanMarie':
                print ('<img src="../../spec/1/19.JEAN MARIE GIDOIN.jpg"/>');
                break;
            case 'MertonLaurence':
                print ('<img src="../../spec/1/20.LAURENCE MERTON.jpg"/>');
                break;
            case 'BonvillainErwanBertrand':
                print ('<img src="../../spec/1/21.ERWAN BERTRAND BONVILLAIN.jpg"/>');
                break;
            case 'BachelierStephanie':
                print ('<img src="../../spec/1/22.STEPHANIE BACHELIER.jpg"/>');
                break;
            case 'BaralePascal':
                print ('<img src="../../spec/1/23.PASCAL BARALE.jpg"/>');
                break;
            case 'RoncinAgnes':
                print ('<img src="../../spec/1/24.AGNES RONCIN.jpg"/>');
                break;
            default:
                echo 'Probleme affichage photo';
                break;
        }
    ?>

</body>
</html>