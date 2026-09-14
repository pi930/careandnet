@extends('layouts.app')

@section('content')

<!-- BLOC REMIS EN ÉTAT — STYLE IDENTIQUE AU BLOC PRINCIPAL -->
<div style="
    width:100%;
    background:#E8DCC2; /* fond kraft */
    padding:60px 0;
">

    <div style="
        width:900px;
        margin:auto;
        text-align:center;
    ">

        <!-- ZONE D’INTERVENTION -->
        <p style="font-size:18px; color:gray; margin-bottom:20px;">
            Cannes – Grasse – Antibes & Alentours (06)
        </p>

        <!-- TITRE -->
        <h1 style="font-size:42px; font-weight:bold; margin-bottom:30px;">
            Nettoyage après location à Cannes et dans les Alpes‑Maritimes
        </h1>

        <!-- INTRO -->
        <p style="font-size:20px; line-height:1.7; margin-top:10px;">
            CARE and NET, votre entreprise de nettoyage à Cannes,
            restitue chaque surface dans un état irréprochable.
            <br><br>
            Intervention rapide, résultat contrôlé avant départ ou arrivée,
            Cannes et Alpes‑Maritimes.
        </p>

        <!-- AVANTAGES -->
        <p style="font-size:20px; line-height:1.7; margin-top:30px;">
            <strong>★★★★★ Avis 5 étoiles — ⚡ Intervention rapide — ✓ Devis gratuit sous 24 h</strong>
        </p>

    </div>
</div>


<!-- SECTION PRESTATIONS — STYLE CARTES -->
<div style="
    width:100%;
    background:rgba(107, 122, 58, 0.15);
    padding:50px 0;
    margin-top:40px;
">

    <h2 style="text-align:center; font-size:30px; font-weight:bold; margin-bottom:35px; color:#6B7A3A;">
        Nos prestations — Remise en état
    </h2>

    <!-- CONTENEUR DES CARTES -->
    <div style="
        width:100%;
        max-width:1100px;
        margin:auto;
        display:flex;
        justify-content:center;
        gap:25px;
        flex-wrap:wrap;
    ">

        <!-- CARTE 1 : DÉMÉNAGEMENT -->
        <div style="
            background:white;
            border:3px solid #6B7A3A;
            border-radius:16px;
            width:240px;
            padding:25px;
            text-align:center;
            box-shadow:0 4px 10px rgba(0,0,0,0.15);
        ">
            <p style="font-size:22px; font-weight:bold; color:black; margin-bottom:10px;">
                Déménagement
            </p>
            <p style="font-size:15px; color:black;">
                Délestez‑vous du nettoyage,<br>
                on s’en occupe !
            </p>
        </div>

        <!-- CARTE 2 : NETTOYAGE AVANT RELOCATION -->
        <div style="
            background:white;
            border:3px solid #6B7A3A;
            border-radius:16px;
            width:240px;
            padding:25px;
            text-align:center;
            box-shadow:0 4px 10px rgba(0,0,0,0.15);
        ">
            <p style="font-size:22px; font-weight:bold; color:black; margin-bottom:10px;">
                Avant relocation
            </p>
            <p style="font-size:15px; color:black;">
                Logement inhabité ?<br>
                Nouveau locataire ?<br>
                On remet tout au propre.
            </p>
        </div>

        <!-- CARTE 3 : ÉTATS DES LIEUX -->
        <div style="
            background:white;
            border:3px solid #6B7A3A;
            border-radius:16px;
            width:240px;
            padding:25px;
            text-align:center;
            box-shadow:0 4px 10px rgba(0,0,0,0.15);
        ">
            <p style="font-size:22px; font-weight:bold; color:black; margin-bottom:10px;">
                États des lieux
            </p>
            <p style="font-size:15px; color:black;">
                Quittez votre logement<br>
                en récupérant votre caution.
            </p>
        </div>

        <!-- CARTE 4 : VENTE -->
        <div style="
            background:white;
            border:3px solid #6B7A3A;
            border-radius:16px;
            width:240px;
            padding:25px;
            text-align:center;
            box-shadow:0 4px 10px rgba(0,0,0,0.15);
        ">
            <p style="font-size:22px; font-weight:bold; color:black; margin-bottom:10px;">
                Vente
            </p>
            <p style="font-size:15px; color:black;">
                Revalorisez votre bien<br>
                avant une mise en vente.
            </p>
        </div>

    </div>
</div>
<!-- SECTION PRESTATIONS — CHAQUE SURFACE, CHAQUE DÉTAIL -->
<div style="
    width:100%;
    background:rgba(107, 122, 58, 0.15);
    padding:50px 0;
    margin-top:40px;
">

    <h2 style="text-align:center; font-size:30px; font-weight:bold; margin-bottom:35px; color:#6B7A3A;">
        Chaque surface. Chaque détail.
    </h2>

    <!-- CONTENEUR DES CARTES -->
    <div style="
        width:100%;
        max-width:1100px;
        margin:auto;
        display:flex;
        justify-content:center;
        gap:20px;
        flex-wrap:nowrap; /* IMPORTANT : une seule ligne */
    ">

        <!-- CARTE 1 -->
        <div style="
            background:white;
            border:3px solid #6B7A3A;
            border-radius:14px;
            width:180px; /* plus petit */
            padding:18px; /* plus compact */
            text-align:center;
            box-shadow:0 4px 10px rgba(0,0,0,0.15);
        ">
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:8px;">
                Sols & surfaces dures
            </p>
            <p style="font-size:14px; color:black;">
                Carrelage, parquet<br>
                Aspiration, lavage<br>
                Joints dégraissés
            </p>
        </div>

        <!-- CARTE 2 -->
        <div style="
            background:white;
            border:3px solid #6B7A3A;
            border-radius:14px;
            width:180px;
            padding:18px;
            text-align:center;
            box-shadow:0 4px 10px rgba(0,0,0,0.15);
        ">
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:8px;">
                Cuisine & équipements
            </p>
            <p style="font-size:14px; color:black;">
                Plans de travail<br>
                Hottes, éviers<br>
                Dégraissage complet
            </p>
        </div>

        <!-- CARTE 3 -->
        <div style="
            background:white;
            border:3px solid #6B7A3A;
            border-radius:14px;
            width:180px;
            padding:18px;
            text-align:center;
            box-shadow:0 4px 10px rgba(0,0,0,0.15);
        ">
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:8px;">
                Sanitaires & salle de bain
            </p>
            <p style="font-size:14px; color:black;">
                Baignoire, douche<br>
                Désinfection<br>
                Joints nettoyés
            </p>
        </div>

        <!-- CARTE 4 -->
        <div style="
            background:white;
            border:3px solid #6B7A3A;
            border-radius:14px;
            width:180px;
            padding:18px;
            text-align:center;
            box-shadow:0 4px 10px rgba(0,0,0,0.15);
        ">
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:8px;">
                Vitres & menuiseries
            </p>
            <p style="font-size:14px; color:black;">
                Fenêtres, portes<br>
                Plinthes<br>
                Sans trace
            </p>
        </div>

    </div>
</div>


<!-- SECTION PROCESSUS — FOND BLANC -->
<div style="
    width:100%;
    background:white;
    padding:40px 0;
    margin-top:20px;
">

    <!-- TITRE -->
    <h2 style="text-align:center; font-size:34px; font-weight:bold; margin-bottom:30px; color:black;">
        Processus en <span style="color:#6B7A3A;">4 étapes</span>
    </h2>

    <!-- CONTENEUR DES 4 CARTES -->
    <div style="
        width:100%;
        max-width:1100px;
        margin:auto;
        display:flex;
        justify-content:center;
        gap:20px;
        flex-wrap:nowrap;
    ">

        <!-- ÉTAPE 1 : DEVIS GRATUIT -->
        <div style="
            background:#E8DCC2;
            border:3px solid #6B7A3A;
            border-radius:18px;
            width:200px;
            padding:20px;
            text-align:center;
            box-shadow:0 6px 14px rgba(0,0,0,0.15);
        ">
            <p style="font-size:20px; font-weight:bold; color:#6B7A3A; margin-bottom:8px;">
                01 — Devis Gratuit
            </p>
            <p style="font-size:15px; color:black; line-height:1.5;">
                Décrivez votre besoin en ligne ou par téléphone.<br>
                Réponse sous 24 heures, sans engagement.
            </p>
        </div>

        <!-- ÉTAPE 2 : PLANIFICATION -->
        <div style="
            background:#E8DCC2;
            border:3px solid #6B7A3A;
            border-radius:18px;
            width:200px;
            padding:20px;
            text-align:center;
            box-shadow:0 6px 14px rgba(0,0,0,0.15);
        ">
            <p style="font-size:20px; font-weight:bold; color:#6B7A3A; margin-bottom:8px;">
                02 — Planification
            </p>
            <p style="font-size:15px; color:black; line-height:1.5;">
                Devis sur zone obligatoire.<br>
                Créneau fixé selon votre agenda.
            </p>
        </div>

        <!-- ÉTAPE 3 : INTERVENTION -->
        <div style="
            background:#E8DCC2;
            border:3px solid #6B7A3A;
            border-radius:18px;
            width:200px;
            padding:20px;
            text-align:center;
            box-shadow:0 6px 14px rgba(0,0,0,0.15);
        ">
            <p style="font-size:20px; font-weight:bold; color:#6B7A3A; margin-bottom:8px;">
                03 — Intervention
            </p>
            <p style="font-size:15px; color:black; line-height:1.5;">
                Exécution méthodique, équipements professionnels.<br>
                Chaque zone traitée dans l’ordre.
            </p>
        </div>

        <!-- ÉTAPE 4 : RÉSULTAT -->
        <div style="
            background:#E8DCC2;
            border:3px solid #6B7A3A;
            border-radius:18px;
            width:200px;
            padding:20px;
            text-align:center;
            box-shadow:0 6px 14px rgba(0,0,0,0.15);
        ">
            <p style="font-size:20px; font-weight:bold; color:#6B7A3A; margin-bottom:8px;">
                04 — Résultat
            </p>
            <p style="font-size:15px; color:black; line-height:1.5;">
                Vérification finale avant départ.<br>
                Vous n’appelez pas une deuxième fois — c’est l’objectif.
            </p>
        </div>

    </div>
</div>


<!-- SECTION L'EXIGENCE EN CHIFFRES — STYLE RUBIK'S CUBE -->
<div style="
    width:100%;
    background:rgba(107, 122, 58, 0.15);
    padding:40px 0;
    margin-top:20px;
">

    <div style="
        width:100%;
        max-width:1200px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:30px;
    ">

        <!-- COLONNE GAUCHE -->
        <div style="width:55%;">

            <!-- TITRE -->
            <h2 style="font-size:32px; font-weight:bold; color:#6B7A3A; margin-bottom:15px;">
                L'exigence en chiffres
            </h2>

            <!-- TEXTE INTRO -->
            <p style="
                font-size:16px;
                color:black;
                line-height:1.5;
                margin-bottom:25px;
            ">
                Formé au nettoyage professionnel, j'applique les meilleures techniques pour remettre en état vos logements après location, déménagement ou vente.
            </p>

            <!-- GRILLE RUBIK'S CUBE -->
            <div style="
                display:grid;
                grid-template-columns:repeat(2, 1fr);
                gap:18px;
            ">

                <!-- BLOC 1 -->
                <div style="
                    background:#E8DCC2;
                    border-radius:12px;
                    padding:18px;
                    box-shadow:0 4px 10px rgba(0,0,0,0.15);
                    text-align:center;
                ">
                    <p style="font-size:34px; font-weight:bold; color:#6B7A3A; margin:0;">
                        15+
                    </p>
                    <p style="font-size:14px; color:black; margin-top:6px;">
                        logements réhabilités
                    </p>
                </div>

                <!-- BLOC 2 -->
                <div style="
                    background:#E8DCC2;
                    border-radius:12px;
                    padding:18px;
                    box-shadow:0 4px 10px rgba(0,0,0,0.15);
                    text-align:center;
                ">
                    <p style="font-size:34px; font-weight:bold; color:#6B7A3A; margin:0;">
                        5/5
                    </p>
                    <p style="font-size:14px; color:black; margin-top:6px;">
                        Note Google
                    </p>
                </div>

                <!-- BLOC 3 -->
                <div style="
                    background:#E8DCC2;
                    border-radius:12px;
                    padding:18px;
                    box-shadow:0 4px 10px rgba(0,0,0,0.15);
                    text-align:center;
                ">
                    <p style="font-size:34px; font-weight:bold; color:#6B7A3A; margin:0;">
                        48h
                    </p>
                    <p style="font-size:14px; color:black; margin-top:6px;">
                        Délais d'intervention
                    </p>
                </div>

                <!-- BLOC 4 -->
                <div style="
                    background:#E8DCC2;
                    border-radius:12px;
                    padding:18px;
                    box-shadow:0 4px 10px rgba(0,0,0,0.15);
                    text-align:center;
                ">
                    <p style="font-size:34px; font-weight:bold; color:#6B7A3A; margin:0;">
                        100%
                    </p>
                    <p style="font-size:14px; color:black; margin-top:6px;">
                        clients satisfaits
                    </p>
                </div>

            </div>
        </div>

        <!-- COLONNE DROITE : IMAGE -->
        <div style="width:40%; text-align:right;">
            <img src="/Documents/IMG-20260828-WA0003.jpg"
                 alt="NET AND CARE"
                 style="
                    width:100%;
                    border-radius:18px;
                    box-shadow:0 6px 14px rgba(0,0,0,0.25);
                 ">
        </div>

    </div>
</div>


<!-- SECTION PRÉSENTATION — TEXTE À GAUCHE + PHOTO À DROITE -->
<div style="
    width:100%;
    background:#E8DCC2; /* FOND KRAFT ICI */
    padding:50px 0;
">

    <div style="
        width:100%;
        max-width:1200px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:40px;
    ">

        <!-- COLONNE GAUCHE : TITRE + TEXTE + BULLES -->
        <div style="width:45%; max-width:480px;">

            <h2 style="
                font-size:36px;
                font-weight:bold;
                color:#6B7A3A;
                margin-bottom:25px;
                text-align:left;
            ">
               CARE and NET — Votre entreprise de nettoyage à Cannes
            </h2>

            <p style="
                font-size:16px;
                color:black;
                line-height:1.6;
                text-align:left;
                margin-bottom:30px;
            ">
                Moi, c'est Alicia, fondatrice de CARE & NET.
                <br><br>
                J'ai créé CARE & NET avec une idée simple : vous proposer un service de nettoyage professionnel, soigné et minutieux, avec une vraie attention portée aux détails.
                <br><br><br>
                Derrière chaque intervention, il y a surtout une personne passionnée par le travail bien fait et la satisfaction de voir un vrai avant / après.
                <br><br><br>
                Bienvenue chez CARE & NET, votre intérieur mérite de prendre rendez‑vous.
            </p>

            <div style="
                width:100%;
                display:flex;
                justify-content:flex-start;
                gap:25px;
                margin:20px 0 10px 0;
            ">

                <div style="
                    background:#6B7A3A;
                    color:black;
                    padding:12px 22px;
                    border-radius:50px;
                    border:2px solid black;
                    font-size:18px;
                    font-weight:bold;
                    box-shadow:0 6px 14px rgba(0,0,0,0.25);
                ">
                    Devis gratuit
                </div>

                <div style="
                    background:white;
                    color:black;
                    padding:12px 22px;
                    border-radius:50px;
                    border:2px solid #6B7A3A;
                    font-size:18px;
                    font-weight:bold;
                    box-shadow:0 6px 14px rgba(0,0,0,0.25);
                ">
                    07 51 74 03 43
                </div>

            </div>

        </div>

        <!-- COLONNE DROITE : PHOTO -->
        <div style="width:45%; text-align:right;">
            <img src="/Documents/photo_a_ajouter.jpg"
                 alt="CARE & NET"
                 style="
                    width:100%;
                    border-radius:18px;
                    box-shadow:0 6px 14px rgba(0,0,0,0.25);
                 ">
        </div>

    </div>
</div>


   
<!-- SECTION QUESTIONS / RÉPONSES — FOND BLANC -->
<div style="
    width:100%;
    background:white;
    padding:60px 0;
    margin-top:20px;
">

    <!-- TITRE CENTRÉ -->
    <h2 style="
        text-align:center;
        font-size:34px;
        font-weight:bold;
        color:#6B7A3A;
        margin-bottom:40px;
    ">
        Des réponses à vos questions
    </h2>

    <!-- CONTENEUR 2 COLONNES -->
    <div style="
        width:100%;
        max-width:1200px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        gap:40px;
    ">

        <!-- COLONNE GAUCHE -->
        <div style="width:48%;">

            <!-- QUESTION 1 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Quel est le temps d'intervention ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                En moyenne, 2 jours de travail pour un logement de 100 m² avec un niveau de saleté léger.
            </p>

            <!-- QUESTION 2 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Comment vous contacter ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                cleanissime@gmail.com — 06 29 76 43 33 — disponible 7/7.
            </p>

            <!-- QUESTION 3 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Comment ça se passe, une remise en état ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                Prise de contact → visite du logement → intervention → livraison du chantier.
            </p>

        </div>

        <!-- COLONNE DROITE -->
        <div style="width:48%;">

            <!-- QUESTION 4 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Quelles sont vos zones d’intervention ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                Cannes, Grasse, Antibes, Mougins, Mandelieu, Le Cannet, et tout le département des Alpes‑Maritimes (06).
            </p>

            <!-- QUESTION 5 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Vos machines et produits sont-ils professionnels ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                Oui, machines professionnelles non trouvables en commerce, produits non nocifs pour les surfaces.
            </p>

            <!-- QUESTION 6 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Quels sont vos horaires d'intervention ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                Disponible 7/7 avec larges amplitudes horaires pour vos besoins de nettoyage après location ou fin de chantier.
            </p>

        </div>

    </div>
</div>
<!-- SECTION CONTACT — RECTANGLE VERT + FORMULAIRE -->
<div style="
    width:100%;
    background:#E8DCC2; /* FOND KRAFT APPLIQUÉ ICI */
    padding:60px 0;
">

    <div style="
        width:100%;
        max-width:1200px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:flex-start;
        gap:40px;
    ">


        <!-- COLONNE GAUCHE : RECTANGLE VERT + BLOC D'INFOS -->
        <div style="width:45%; display:flex; flex-direction:column;">

            <!-- RECTANGLE VERT -->
            <div style="
                background:#4A5A39; /* couleur du logo */
                color:white;
                padding:35px;
                border-radius:18px;
                box-shadow:0 6px 14px rgba(0,0,0,0.25);
            ">
                <p style="font-size:14px; font-weight:bold; margin:0 0 25px 0;">/ Devis gratuit</p>

                <p style="font-size:32px; font-weight:bold; margin:0 0 25px 0;">Parlez à Alicia</p>

                <p style="font-size:15px; line-height:1.6; margin:0 0 25px 0;">
                    Le formulaire en une minute. Réponse directe, sans intermédiaire ni plateau d'appel.
                </p>

                <div style="width:100%; height:2px; background:white; margin:20px 0; opacity:0.8;"></div>

                <p style="font-size:15px; line-height:1.6; margin:0 0 25px 0;">
                    Zone couverte : Cannes – Grasse – Mougins – Antibes & Alentours (06)
                </p>

                <p style="font-size:22px; font-weight:bold; margin:0;">07 51 74 03 42</p>
            </div>

            <!-- BLOC D'INFOS SOUS LE RECTANGLE -->
            <div style="
                margin-top:25px;
                padding:20px;
                background:white;
                border-radius:14px;
                box-shadow:0 4px 10px rgba(0,0,0,0.15);
            ">

                <p style="font-size:26px; font-weight:bold; color:#6B7A3A; margin:0 0 10px 0;">
                    CARE & NET
                </p>

                <p style="font-size:22px; font-weight:bold; color:#6B7A3A; margin:0 0 20px 0;">
                    Entreprise de nettoyage à Cannes et les Alpes‑Maritimes (06)
                </p>

                <p style="font-size:15px; color:black; margin:0 0 5px 0;">
                    Zone d’intervention
                </p>

                <p style="font-size:14px; color:black; margin:0 0 20px 0;">
                    Cannes, Grasse, Mougins, Antibes & alentours (06)
                </p>

                <p style="font-size:15px; color:black; margin:0 0 5px 0;">
                    Moi, contact
                </p>

                <div style="
                    display:flex;
                    justify-content:space-between;
                    align-items:center;
                    margin-top:10px;
                ">
                    <p style="font-size:18px; font-weight:bold; color:black; margin:0;">
                        07 51 74 03 42 — 7/7
                    </p>

                    <div style="display:flex; gap:12px; align-items:center;">
                        <img src="/Documents/logo_facebook.png" alt="Facebook" style="width:28px; height:28px;">
                        <img src="/Documents/logo_instagram.png" alt="Instagram" style="width:28px; height:28px;">
                    </div>
                </div>

            </div>

        </div>


        <!-- COLONNE DROITE : FORMULAIRE -->
        <div style="
            width:45%;
            background:white;
            padding:35px;
            border-radius:18px;
            box-shadow:0 6px 14px rgba(0,0,0,0.15);
        ">

            <form>

                <label style="font-size:15px; font-weight:bold; color:black;">Prénom et nom*</label>
                <input type="text" style="
                    width:100%;
                    padding:12px;
                    margin:10px 0 20px 0;
                    border:2px solid #6B7A3A;
                    border-radius:10px;
                    font-size:15px;
                ">

                <label style="font-size:15px; font-weight:bold; color:black;">Adresse email*</label>
                <input type="email" style="
                    width:100%;
                    padding:12px;
                    margin:10px 0 20px 0;
                    border:2px solid #6B7A3A;
                    border-radius:10px;
                    font-size:15px;
                ">

                <label style="font-size:15px; font-weight:bold; color:black;">Téléphone*</label>
                <input type="text" style="
                    width:100%;
                    padding:12px;
                    margin:10px 0 20px 0;
                    border:2px solid #6B7A3A;
                    border-radius:10px;
                    font-size:15px;
                ">

                <label style="font-size:15px; font-weight:bold; color:black;">Votre demande*</label>
                <textarea style="
                    width:100%;
                    padding:12px;
                    margin:10px 0 20px 0;
                    border:2px solid #6B7A3A;
                    border-radius:10px;
                    font-size:15px;
                    height:120px;
                "></textarea>

                <button style="
                    background:#6B7A3A;
                    color:white;
                    padding:12px 25px;
                    border:none;
                    border-radius:50px;
                    font-size:16px;
                    font-weight:bold;
                    cursor:pointer;
                    box-shadow:0 6px 14px rgba(0,0,0,0.25);
                ">
                    Envoyer ma demande
                </button>

            </form>

        </div>

    </div>
</div>




</div>

</body>
</html>

@endsection