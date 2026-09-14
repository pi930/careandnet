<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NET & CARE</title>
</head>

<body style="margin:0; padding:0;">

    <!-- ESPACE POUR NE PAS QUE LE CONTENU SOIT SOUS LA BARRE -->
    <div style="padding-top:80px;">
        @yield('content')
    </div>

    <!-- BARRE VERTE FIXE EN HAUT -->
    <div style="
        position:fixed;
        top:0;
        left:0;
        width:100%;
        background:#6B7A3A;
        padding:12px 20px;
        display:flex;
        justify-content:space-between;
        align-items:center;
        box-shadow:0 4px 10px rgba(0,0,0,0.25);
        z-index:9999;
    ">

        <!-- LOGO À GAUCHE -->
        <div style="display:flex; align-items:center;">
            <img src="/Documents/IMG-20260828-WA0003.jpg"
                 alt="NET and CARE"
                 style="height:42px; width:auto; border-radius:8px;">
        </div>

        <!-- LIENS AU CENTRE -->
<div style="
    display:flex;
    gap:40px;
    align-items:center;
    font-size:20px;
    font-weight:bold;
">
    <a href="/"
       style="color:black; text-decoration:none;">
       Accueil
    </a>

    <a href="/nettoyage-textiles"
       style="color:black; text-decoration:none;">
       Textiles
    </a>

    <a href="/remis-en-etat"
   style="color:black; text-decoration:none;">
   Remis en état
</a>

    <a href="/fin_de_chantier"
   style="color:black; text-decoration:none;">
   Fin de chantier
</a>

</div>


        <!-- BULLE NUMÉRO À DROITE -->
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
            07 51 74 03 42
        </div>

    </div>

</body>
</html>



