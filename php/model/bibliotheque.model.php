<?php

function find_all_ouvrages():array{
    $ouvrages=[
        ['code'=>1,'code_rayon'=>1,'titre'=>'Analyse et Algebre','date_d_edition'=>'05/10/2012','statut'=>'disponible'],
        ['code'=>2,'code_rayon'=>4,'titre'=>'English for bigenners','date_d_edition'=>'13/04/2000','statut'=>'indisponible',],
        ['code'=>3,'code_rayon'=>6,'titre'=>'intoduction a l econometrie','date_d_edition'=>'18/05/2002','statut'=>'disponible'],
        ['code'=>4,'code_rayon'=>2,'titre'=>'la seconde guerre mondiale','date_d_edition'=>'10/09/2001','statut'=>'indisponible'],
        ['code'=>5,'code_rayon'=>7,'titre'=>'statistique descriptive','date_d_edition'=>'21/09/19','statut'=>'disponible'],
        ['code'=>6,'code_rayon'=>1,'titre'=>'algebre','date_d_edition'=>'29/05/1982','statut'=>'disponible'],
        ['code'=>7,'code_rayon'=>6,'titre'=>'econometrie theorie et application','date_d_edition'=>'07/07/1998','statut'=>'disponible'],
        ['code'=>8,'code_rayon'=>3,'titre'=>'geographie generale','date_d_edition'=>'09/02/2003','statut'=>'indisponible'],
        ['code'=>9,'code_rayon'=>5,'titre'=>'physique de mouvement','date_d_edition'=>'02/01/1999','statut'=>'disponible'],
        ['code'=>10,'code_rayon'=>8,'titre'=>'initiation a la probabilite','date_d_edition'=>'08/02/1995','statut'=>'disponible']
    ];
    return $ouvrages ;
}
function find_all_ouvrage_disponible():array{
    $ouvrages=find_all_ouvrages();
    $ouvragesdispo=[];
    foreach ($ouvrages as $key=> $ouvrage) {
        if($ouvrage['statut']=='disponible'){
            $auteurs=find_all_auteur_by_ouvrage($ouvrage['code']);
            $rayon=find_rayon_by_code($ouvrage['code_rayon']);
            $profession=find_all_profession_by_ouvrage($ouvrage['code']);
            $ouvrages[$key]['auteur']=$auteurs;
            $ouvrages[$key]['rayon']=$rayon;
            $ouvrages[$key]['profession']=$profession; 
            $ouvragesdispo[]=[
                'titre'=>$ouvrage['titre'],
                'rayon'=>$rayon,
                'statut'=>$ouvrage['statut']

            ];

        }
    }
    return $ouvragesdispo;
}
function find_all_auteurs():array{
    $auteurs=[
        ['code'=>1,'code_ouvrages'=>1,'nom'=>'Vincent','prenom'=>'Theodore','profession'=>'enseignant chercheur',],
        ['code'=>2,'code_ouvrages'=>1,'nom'=>'Mariam ','prenom'=>'Ahmat','profession'=>'proffesseur en maths',],
        ['code'=>3,'code_ouvrages'=>2,'nom'=>'Aly','prenom'=>'borki','profession'=>'proffesseur en anglais',],
        ['code'=>4,'code_ouvrages'=>3,'nom'=>'Ahmat','prenom'=>'Alb','profession'=>'econometre',],
        ['code'=>5,'code_ouvrages'=>4,'nom'=>'Saba','prenom'=>'sissoko','profession'=>'proffesseur en hitoire',],
        ['code'=>6,'code_ouvrages'=>5,'nom'=>'Lamine','prenom'=>'Traore','profession'=>'statisticien',],
        ['code'=>7,'code_ouvrages'=>6,'nom'=>'Awat','prenom'=>'Ahmat','profession'=>'proffesseur en algebres',],
        ['code'=>8,'code_ouvrages'=>7,'nom'=>'Hamit','prenom'=>'Ahmat','profession'=>'proffesseur en econometrie',],
        ['code'=>9,'code_ouvrages'=>8,'nom'=>'Ramatoulaye','prenom'=>'Bakire','profession'=>'geographe et statisticienne',],
        ['code'=>10,'code_ouvrages'=>9,'nom'=>'Lamarana','prenom'=>'Bah','profession'=>'proffesseur en physique',],
        ['code'=>10,'code_ouvrages'=>10,'nom'=>'Goni','prenom'=>'Hamid','profession'=>'proffesseur en probabilite',]

    ];
    return $auteurs ;
   
}
function find_all_rayon():array{
    $rayons=[
        ['code'=>1,'nom'=>'Mathematique'],
        ['code'=>2,'nom'=>'Histoire'],
        ['code'=>3,'nom'=>'Geographie'],
        ['code'=>4,'nom'=>'Anglais'],
        ['code'=>5,'nom'=>'Physique'],
        ['code'=>6,'nom'=>'econometrie'],
        ['code'=>7,'nom'=>'statistique'],
        ['code'=>8,'nom'=>'probalilite']

    ];
    return $rayons ;
   
}
function find_all_mot_cle():array{
    $mot_cle=[
        ['code'=>1,'code_ouvrages'=>1,'mot'=>'foction numerique'],
        ['code'=>2,'code_ouvrages'=>2,'mot'=>'modals verbs'],
        ['code'=>3,'code_ouvrages'=>3,'mot'=>'matrice carre'],
        ['code'=>4,'code_ouvrages'=>5,'mot'=>'boite a moustache'],
        ['code'=>5,'code_ouvrages'=>5,'mot'=>'indice statistique'],
        ['code'=>6,'code_ouvrages'=>10,'mot'=>'loi normale'],
        ['code'=>7,'code_ouvrages'=>10,'mot'=>'loi de student'],
        ['code'=>8,'code_ouvrages'=>3,'mot'=>'test de burbin watson'],
        ['code'=>9,'code_ouvrages'=>6,'mot'=>'logique'],
        ['code'=>10,'code_ouvrages'=>5,'mot'=>'variance'],
        ['code'=>11,'code_ouvrages'=>7,'mot'=>'test de fishers'],
        ['code'=>12,'code_ouvrages'=>3,'mot'=>'test de student'],
        ['code'=>13,'code_ouvrages'=>9,'mot'=>'mouvement rectiligne'],
        ['code'=>15,'code_ouvrages'=>9,'mot'=>'acceleration'],
        ['code'=>16,'code_ouvrages'=>4,'mot'=>'conference de teheran'],
        ['code'=>17,'code_ouvrages'=>8,'mot'=>'hydrographie'],
        ['code'=>18,'code_ouvrages'=>8,'mot'=>'relief'],
        ['code'=>19,'code_ouvrages'=>4,'mot'=>'ONU'],
        ['code'=>20,'code_ouvrages'=>4,'mot'=>'la decolonisation ']
    ];
    return  $mot_cle ;
}
function find_all_demande_de_pret():array{
    $demande_de_pret=[
        ['date'=>'5/10/2010','date_prevu'=>'20/10/2010','date_retour_reel'=>'27/10/2010','code_exemplaire'=>5,'code_adherent'=>2,'statut'=>'en cours'],
        ['date'=>'5/10/2010','date_prevu'=>'20/10/2010','date_retour_reel'=>'27/10/2010','code_exemplaire'=>3,'code_adherent'=>5,'statut'=>'accepter'],
        ['date'=>'5/10/2010','date_prevu'=>'20/10/2010','date_retour_reel'=>'27/10/2010','code_exemplaire'=>8,'code_adherent'=>3,'statut'=>'en cours'],
        ['date'=>'5/10/2010','date_prevu'=>'20/10/2010','date_retour_reel'=>'27/10/2010','code_exemplaire'=>20,'code_adherent'=>3,'statut'=>'accepter'],
        ['date'=>'5/10/2010','date_prevu'=>'20/10/2010','date_retour_reel'=>'27/10/2010','code_exemplaire'=>3,'code_adherent'=>5,'statut'=>'en cours']
    ];
    return  $demande_de_pret ;
   
}
function find_ouvrage_by_exemplaire(int $code_exempl):array{
    $exemplaires=find_all_exemplaire();
    foreach($exemplaires as $exemplaire ){
        if ($exemplaire['code']==$code_exempl){
            $ouvrages=find_all_ouvrages();
            foreach ( $ouvrages as $ouvrage){
                if( $ouvrage['code']==$exemplaire['code_ouvrages']){
                    return $ouvrage ;
                }
            }
            
        }
    }
}
function find_adherent_by_code(int $codeadherent):array|null{
    /*
    */
    $adherents=find_all_adherent();
    foreach ($adherents as $adherent) {
        if($adherent['code']==$codeadherent){
            return $adherent;
        }
    }
    return null;
}

function find_all_pret():array {
    $prets=find_all_demande_de_pret();
    $demande=[];
    foreach($prets as $pret ) {
        $p=find_adherent_by_code($pret['code_adherent'] );
        $c=find_ouvrage_by_exemplaire($pret['code_exemplaire']);
        $demande[]=[
            'nom_complet'=>$p['nom']." ".$p['prenom'],
            'numero'=>$p['num'],
            'adresse'=>$p['adresse'],
            'titre'=>$c['titre'],
            'statut'=>$pret['statut']
        ];
    }
    return $demande ;
}
function find_all_pret_encours():array {
    $prets=find_all_demande_de_pret();
    $demande=[];
    foreach($prets as $pret ) {
        $p=find_adherent_by_code($pret['code_adherent'] );
        $c=find_ouvrage_by_exemplaire($pret['code_exemplaire']);
        if($pret['statut']=='en cours'){
            $demande[]=[
                'nom_complet'=>$p['nom']." ".$p['prenom'],
                'numero'=>$p['num'],
                'adresse'=>$p['adresse'],
                'titre'=>$c['titre'],
                'statut'=>$pret['statut']
            ];

        }
    }
    return $demande ;
}
function find_all_exemplaire():array{
    $exemplaire=[
        ['code'=>1,'code_ouvrages'=>1,'date_d_enregistrement'=>'10/04/1997','statut'=>'en pret'],
        ['code'=>2,'code_ouvrages'=>2,'date_d_enregistrement'=>'10/04/1997','statut'=>'en pret'],
        ['code'=>3,'code_ouvrages'=>3,'date_d_enregistrement'=>'10/04/1997','statut'=>'en pret'],
        ['code'=>4,'code_ouvrages'=>4,'date_d_enregistrement'=>'10/04/1997','statut'=>'en pret'],
        ['code'=>5,'code_ouvrages'=>5,'date_d_enregistrement'=>'10/04/1997','statut'=>'disponible'],
        ['code'=>6,'code_ouvrages'=>6,'date_d_enregistrement'=>'10/04/1997','statut'=>'en pret'],
        ['code'=>7,'code_ouvrages'=>7,'date_d_enregistrement'=>'10/04/1997','statut'=>'en pret'],
        ['code'=>8,'code_ouvrages'=>8,'date_d_enregistrement'=>'10/04/1997','statut'=>'disponible'],
        ['code'=>9,'code_ouvrages'=>9,'date_d_enregistrement'=>'10/04/1997','statut'=>'disponible'],
        ['code'=>10,'code_ouvrages'=>10,'date_d_enregistrement'=>'10/04/1997','statut'=>'en pret'],
        ['code'=>11,'code_ouvrages'=>2,'date_d_enregistrement'=>'10/04/1997','statut'=>'disponible'],
        ['code'=>12,'code_ouvrages'=>4,'date_d_enregistrement'=>'10/04/1997','statut'=>'disponible'],
        ['code'=>13,'code_ouvrages'=>9,'date_d_enregistrement'=>'10/04/1997','statut'=>'en pret'],
        ['code'=>14,'code_ouvrages'=>6,'date_d_enregistrement'=>'10/04/1997','statut'=>'disponible'],
        ['code'=>15,'code_ouvrages'=>10,'date_d_enregistrement'=>'10/04/1997','statut'=>'disponible'],
        ['code'=>16,'code_ouvrages'=>3,'date_d_enregistrement'=>'10/04/1997','statut'=>'deteriore'],
        ['code'=>17,'code_ouvrages'=>7,'date_d_enregistrement'=>'10/04/1997','statut'=>'en pret'],
        ['code'=>18,'code_ouvrages'=>8,'date_d_enregistrement'=>'10/04/1997','statut'=>'deteriore'],
        ['code'=>19,'code_ouvrages'=>5,'date_d_enregistrement'=>'10/04/1997','statut'=>'deteriore'],
        ['code'=>20,'code_ouvrages'=>1,'date_d_enregistrement'=>'10/04/1997','statut'=>'en pret']
      
    ];
    return  $exemplaire ;
   
}
function find_exemplaireouvrage():array{
    $exemplaires=find_all_exemplaire();
    $liste=[];
    foreach($exemplaires as $exemplaire){
        $ouvrages=find_ouvrage_by_exemplaire($exemplaire['code']);
        $rayon=find_rayon_by_code($ouvrages['code_rayon']);
        $liste[]=[
            'code'=>$exemplaire['code'],
            'titre'=>$ouvrages['titre'],
            'dateenre'=>$exemplaire['date_d_enregistrement'],
            'statut'=>$exemplaire['statut'],
            'rayon'=>$rayon

        ];
    }
    return $liste ;
}
#$b=find_exemplaireouvrage();
#echo($b[0]['titre']);
function nbre_exemplaire_by_ouvrage(int $codeouvrage):int{
    $nbre=0;
    $exemplaires=find_all_exemplaire();
    foreach($exemplaires as $exemplaire){
        if( $exemplaire['code_ouvrages']==$codeouvrage){
            $nbre++;
        }
    }
    return $nbre;

}
#$b=nbre_exemplaire_by_ouvrage(3);
#echo($b);
function find_all_adherent():array{
    $adherents=[
        ['code'=>1,'num'=>78154350,'nom'=>'Moussa','prenom'=>'Ahmat','adresse'=>'Amriguebe'],
        ['code'=>2,'num'=>784154350,'nom'=>'Alhassane','prenom'=>'Tebrit','adresse'=>'Goudji'],
        ['code'=>3,'num'=>787154350,'nom'=>'Alhadj','prenom'=>'Ousmane','adresse'=>'Fass'],
        ['code'=>4,'num'=>780154350,'nom'=>'Issa','prenom'=>'Hamid','adresse'=>'Mermoz'],
        ['code'=>5,'num'=>781584350,'nom'=>'Hamid','prenom'=>'Ahmat','adresse'=>'Ngor']
      
    ];
    return  $adherents ;
}
function find_rayon_by_code(int $coderayon):string|null{
    /* cette fontion prend en parametre le coderayon de l'ouvrage et nous retourne
    le nom du rayon a qui le code de rayon dans l'ouvrage  est egale au code qui est dans rayon
    */
    $rayons=find_all_rayon();
    foreach ($rayons as $rayon) {
        if($rayon['code']==$coderayon){
            return $rayon['nom'];
        }
    }
    return null;
}

function find_all_auteur_by_ouvrage(int $codeouvrage ):array{
    $ouvrageauteur=find_all_auteurs();
    $auteurs=[];
    foreach ($ouvrageauteur as $auteur) {
        if($auteur['code_ouvrages']==$codeouvrage){
            $auteurs[]=$auteur['nom']." ".$auteur['prenom'];
        }
    }
    return $auteurs;
}
function find_all_profession_by_ouvrage(int $codeouvrage ):string|null{
    $ouvrageauteur=find_all_auteurs();
    $profession=[];
    foreach ($ouvrageauteur as $auteur) {
        if($auteur['code_ouvrages']==$codeouvrage){
            return $auteur['profession'];
        }
    }
    return null;
}

function find_all_ouvrage_auteur_rayon():array{
    $ouvrages=find_all_ouvrages();
    foreach ($ouvrages as $key=> $ouvrage) {
        $auteurs=find_all_auteur_by_ouvrage($ouvrage['code']);
        $rayon=find_rayon_by_code($ouvrage['code_rayon']);
        $profession=find_all_profession_by_ouvrage($ouvrage['code']);
        $ouvrages[$key]['auteur']=$auteurs;
        $ouvrages[$key]['rayon']=$rayon;
        $ouvrages[$key]['profession']=$profession; 

    }
    return $ouvrages;
}


?>