@extends('layouts.app')

@section('content')

<!-- BLOC PRINCIPAL PLEINE LARGEUR -->
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

        <!-- TITRE MODIFIÉ -->
        <h1 style="font-size:42px; font-weight:bold;">
            Nettoyage de textiles à Cannes
        </h1>

        <!-- INTRO MODIFIÉE -->
        <p style="font-size:20px; line-height:1.7; margin-top:30px;">
            Redonnez vie à vos textiles grâce à notre entreprise de nettoyage professionnel à Cannes.
            <br><br>
            <strong>★★★★★ Avis 5 étoiles — ⚡ Intervention rapide — ✓ Résultats visibles</strong>
        </p>

        <!-- CONTACT — VERSION BULLES -->
        <div style="
            width:100%;
            display:flex;
            justify-content:center;
            gap:40px;
            margin:40px auto 20px auto;
        ">

            <!-- BULLE GAUCHE : DEVIS GRATUIT -->
            <div style="
                background:#4A5A39; /* couleur du logo */
                color:black;
                padding:15px 25px;
                border-radius:50px;
                border:2px solid black;
                font-size:20px;
                font-weight:bold;
                box-shadow:0 6px 14px rgba(0,0,0,0.25);
            ">
                Devis gratuit
            </div>

           <div style="
    background:white;
    color:black;
    padding:15px 25px;
    border-radius:50px;
    border:2px solid #6B7A3A;
    font-size:20px;
    font-weight:bold;
    box-shadow:0 6px 14px rgba(0,0,0,0.25);
">
    07 51 74 03 42
</div>


        </div>

        <!-- ZONE D’INTERVENTION -->
        <p style="font-size:18px; color:gray; text-align:center; margin-top:-10px;">
            Cannes – Grasse – Mougins – Antibes & Alentours (06)
        </p>

    </div>
</div>




<!-- SECTION PRESTATIONS — FOND IDENTIQUE À LA SECTION CHIFFRES -->
<div style="
    width:100%;
    background:rgba(107, 122, 58, 0.15); /* même fond que la section Rubik's Cube */
    padding:50px 0;
    margin-top:40px;
">

    <h2 style="text-align:center; font-size:30px; font-weight:bold; margin-bottom:35px; color:#6B7A3A;">
        Nos prestations
    </h2>

    <!-- CONTENEUR DES 4 CARTES ALIGNÉES -->
    <div style="
        width:100%;
        max-width:1100px;
        margin:auto;
        display:flex;
        justify-content:center;
        gap:25px;
        flex-wrap:nowrap;
    ">

        <!-- CARTE 1 : NETTOYAGE DE CANAPÉ -->
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
                Nettoyage de canapé
            </p>
            <p style="font-size:15px; color:black;">
                de 2 à 8 places, toutes formes,<br>
                toutes tailles, tous matériaux
            </p>
        </div>

        <!-- CARTE 2 : NETTOYAGE DES TAPIS -->
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
                Nettoyage des tapis
            </p>
            <p style="font-size:15px; color:black;">
                poils longs, poils courts,<br>
                ancien, récent, toutes tailles
            </p>
        </div>

        <!-- CARTE 3 : NETTOYAGE DE MATELAS -->
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
                Nettoyage de matelas
            </p>
            <p style="font-size:15px; color:black;">
                du lit de bébé au king size,<br>
                adieu transpiration, urine, tâches
            </p>
        </div>

        <!-- CARTE 4 : NETTOYAGE DE FAUTEUILS -->
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
                Nettoyage de fauteuils
            </p>
            <p style="font-size:15px; color:black;">
                sièges de voitures, poufs,<br>
                banquettes de restaurants
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
        Un nettoyage de textiles en <span style="color:#6B7A3A;">4 étapes</span>
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

        <!-- ÉTAPE 1 : PULVÉRISATION -->
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
                01 — Pulvérisation
            </p>
            <p style="font-size:15px; color:black; line-height:1.5;">
                Application d'un produit de nettoyage textile professionnel – non allergène – sans risque pour la peau ou les animaux.
            </p>
        </div>

        <!-- ÉTAPE 2 : BROSSAGE -->
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
                02 — Brossage
            </p>
            <p style="font-size:15px; color:black; line-height:1.5;">
                Brossage mécanisé ou manuel selon la typologie du tissu pour remonter la saleté.
            </p>
        </div>

        <!-- ÉTAPE 3 : DÉSINFECTION -->
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
                03 — Désinfection
            </p>
            <p style="font-size:15px; color:black; line-height:1.5;">
                Votre tissu abrite des millions d'acariens, bactéries et virus. Avec la vapeur : désinfection complète.
            </p>
        </div>

        <!-- ÉTAPE 4 : EXTRACTION -->
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
                04 — Extraction
            </p>
            <p style="font-size:15px; color:black; line-height:1.5;">
                L'injecteur-extracteur professionnel aspire saletés, acariens, taches.
            </p>
        </div>

    </div>
</div>


  <!-- SECTION L'EXIGENCE EN CHIFFRES — STYLE RUBIK'S CUBE -->
<div style="
    width:100%;
    background:rgba(107, 122, 58, 0.15);
    padding:40px 0;

   <!-- SECTION PHOTOS — TEXTE À GAUCHE + 2 IMAGES À DROITE -->
<div style="
    width:100%;
    background:white;
    padding:60px 0;
">

    <div style="
        width:100%;
        max-width:1200px;
        margin:auto;
        display:flex;
        justify-content:space-between;
        align-items:center;
        gap:40px;
    ">

        <!-- COLONNE GAUCHE : TEXTE -->
        <div style="width:45%;">

            <h2 style="
                font-size:42px;
                font-weight:bold;
                line-height:1.3;
                text-align:left;
            ">
                <span style="color:white; background:#6B7A3A; padding:6px 12px; border-radius:8px;">
                    Des mots
                </span>
                <span style="color:#6B7A3A;">, c'est bien</span>
                <br><br>
                <span style="color:white; background:#6B7A3A; padding:6px 12px; border-radius:8px;">
                    Des photos
                </span>
                <span style="color:#6B7A3A;">, c'est mieux !</span>
            </h2>

        </div>

        <!-- COLONNE DROITE : 2 PHOTOS -->
        <div style="
            width:45%;
            display:flex;
            flex-direction:column;
            gap:20px;
        ">

            <!-- PHOTO 1 -->
            <img src="/Documents/IMG-20260829-WA0001.jpg"
                 alt="Nettoyage textiles NET AND CARE"
                 style="
                    width:100%;
                    border-radius:18px;
                    box-shadow:0 6px 14px rgba(0,0,0,0.25);
                 ">

            <!-- PHOTO 2 -->
            <img src="/Documents/IMG-20260829-WA0002.jpg"
                 alt="Nettoyage textiles NET AND CARE"
                 style="
                    width:100%;
                    border-radius:18px;
                    box-shadow:0 6px 14px rgba(0,0,0,0.25);
                 ">

        </div>

    </div>
</div>
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

            <!-- TEXTE INTRO MODIFIÉ -->
            <p style="
                font-size:16px;
                color:black;
                line-height:1.5;
                margin-bottom:25px;
            ">
                Formé au nettoyage de textiles, j'applique les meilleures techniques pour remettre en état vos canapés, tapis, matelas, fauteuils, etc.
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
                        25+
                    </p>
                    <p style="font-size:14px; color:black; margin-top:6px;">
                        textiles nettoyés
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


   <!-- SECTION QUESTIONS FRÉQUENTES -->
<div style="
    width:100%;
    background:white;
    padding:50px 0;
    margin-top:40px;
">

    <h2 style="text-align:center; font-size:34px; font-weight:bold; margin-bottom:40px; color:#6B7A3A;">
        Des questions que vous vous posez
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
                – Temps de séchage ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                Environ 6 h à 12 h selon le textile et son épaisseur.
            </p>

            <!-- QUESTION 2 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Zone d’intervention ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                Cannes, Grasse, Mougins, Antibes et tout le département des Alpes‑Maritimes (06).
            </p>

            <!-- QUESTION 3 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Disponibilités ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                Disponible 7 jours sur 7 pour vos besoins de nettoyage de textiles.
            </p>

        </div>

        <!-- COLONNE DROITE -->
        <div style="width:48%;">

            <!-- QUESTION 4 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Machines et produits ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                Machines professionnelles, produits non nocifs pour les tissus, les animaux et les humains.
            </p>

            <!-- QUESTION 5 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Durée d’une intervention ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                Environ 1 h selon le textile et son état.
            </p>

            <!-- QUESTION 6 -->
            <p style="font-size:18px; font-weight:bold; color:black; margin-bottom:10px;">
                – Contact ?
            </p>
            <p style="font-size:15px; color:black; margin-bottom:25px; line-height:1.6;">
                07 51 74 03 43 — netandcare@gmail.com  
                <br>Ou remplissez le formulaire en ligne.
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