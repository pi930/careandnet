<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARE & NET</title>

<style>

/* GLOBAL */
body { margin:0; padding:0; overflow-x:hidden; }
img { max-width:100%; height:auto; }

/* BARRE FIXE */
.topbar {
    position:fixed;
    top:0;
    left:0;
    width:100%;
    background:#6B7A3A;
    padding:12px 20px;
    box-shadow:0 4px 10px rgba(0,0,0,0.25);
    z-index:9999;
}

/* CONTENU INTERNE */
.topbar-inner {
    max-width:1200px;
    margin:auto;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;
}

/* LIENS */
.topbar-links {
    display:flex;
    gap:40px;
    font-size:20px;
    font-weight:bold;
}

.topbar-links a {
    color:black;
    text-decoration:none;
}

/* NUMÉRO */
.topbar-phone {
    background:white;
    color:black;
    padding:12px 22px;
    border-radius:50px;
    border:2px solid #6B7A3A;
    font-size:18px;
    font-weight:bold;
    box-shadow:0 6px 14px rgba(0,0,0,0.25);
}

/* ESPACE POUR LE CONTENU */
.content-wrapper {
    padding-top:110px;
}

/* RESPONSIVE GLOBAL */
@media(max-width: 900px) {

    /* --- TOPBAR --- */

    .topbar-inner {
        flex-direction: column !important;
        align-items: center !important;
        gap: 15px !important;
        text-align: center !important;
        width: 100% !important;
    }

    .topbar-links {
        flex-direction: column !important;
        gap: 15px !important;
        font-size: 22px !important;
        width: 100% !important;
    }

    .topbar-phone {
        width: 100% !important;
        max-width: 300px !important;
        text-align: center !important;
    }

    .topbar {
        padding-left: 10px !important;
        padding-right: 10px !important;
        box-sizing: border-box !important;
    }

    /* --- BLOCS 900px --- */

    div[style*="width:900px"] {
        width: 100% !important;
        max-width: 100% !important;
        padding-left: 15px !important;
        padding-right: 15px !important;
        box-sizing: border-box !important;
        text-align: center !important;
    }

    /* TITRES */
    h1[style*="font-size:42px"] {
        font-size: 28px !important;
        line-height: 1.3 !important;
        margin-bottom: 20px !important;
    }

    /* TEXTES */
    p[style*="font-size:20px"] {
        font-size: 18px !important;
        line-height: 1.6 !important;
    }

    /* ZONES D’INTERVENTION */
    p[style*="font-size:18px"] {
        font-size: 16px !important;
        margin-bottom: 15px !important;
    }

    /* BULLES */
    div[style*="display:flex"][style*="gap:40px"] {
        flex-direction: column !important;
        gap: 20px !important;
        align-items: center !important;
    }

    div[style*="border-radius:50px"] {
        width: 100% !important;
        max-width: 300px !important;
        text-align: center !important;
    }
}

</style>



</head>

<body>

    <div class="content-wrapper">
        @yield('content')
    </div>

    <div class="topbar">
        <div class="topbar-inner">

            <!-- LOGO -->
            <div>
                <img src="/Documents/IMG-20260828-WA0003.jpg"
                     alt="NET and CARE"
                     style="height:42px; border-radius:8px;">
            </div>

            <!-- LIENS -->
            <div class="topbar-links">
                <a href="/">Accueil</a>
                <a href="/nettoyage-textiles">Textiles</a>
                <a href="/remis-en-etat">Remis en état</a>
                <a href="/fin_de_chantier">Fin de chantier</a>
            </div>

            <!-- NUMÉRO -->
            <div class="topbar-phone">
                07 51 74 03 42
            </div>

        </div>
    </div>

</body>
</html>
