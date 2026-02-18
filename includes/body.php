<?php // Corps de la page d'accueil : sections principales ?>

<!-- Section: infos sécurité -->
<section class="py-4" style="background:#fff9db;">
    <div class="container">
        <style>
            @media(min-width:768px){
                .info-col{border-left:1px solid rgba(0,0,0,0.06);padding-left:1.5rem}
                .info-col:first-child{border-left:0;padding-left:0}
            }
            .info-icon{width:64px;height:64px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:#fff;box-shadow:0 2px 6px rgba(0,0,0,0.05)}
        </style>

        <?php
        // Cherche des icônes locales dans assets/images et retombe sur les icônes Bootstrap si absent
        $imagesPath = __DIR__ . '/../assets/images';
        function find_icon($names){
            global $imagesPath, $base_url;
            foreach($names as $n){
                if(is_file($imagesPath . '/' . $n)){
                    return $base_url . '/assets/images/' . $n;
                }
            }
            return '';
        }
        $icon1 = find_icon(['landlord.png','landlord.svg','owner.png','owner.svg','icon-owner.png','icon-owner.svg','logo-babi-location.png','icon8-landlord-50.png']);
        $icon2 = find_icon(['contract.png','contract.svg','icon-contract.png','icon-contract.svg','file-contract.png','icon8-contract.png']);
        $icon3 = find_icon(['payment.png','payment.svg','icon-payment.png','icon-payment.svg','wa.png','whatsapp.png','icon8-payment.png']);
        ?>

        <div class="row align-items-center text-center text-md-start">

            <div class="col-md-4 info-col d-flex align-items-center">
                <div class="me-3">
                    <div class="info-icon">
                        <i class="bi bi-shield-shaded"></i>
                    </div>
                </div>
                <div>
                    <h6 class="mb-1" style="font-weight:600">Propriétaires Vérifiés</h6>
                    <p class="mb-0 text-muted small">Des biens certifiés et fiables.</p>
                </div>
            </div>

            <div class="col-md-4 info-col d-flex align-items-center">
                <div class="me-3">
                    <div class="info-icon">
                        <?php if($icon2 !== ''): ?>
                            <img src="<?php echo $icon2; ?>" alt="Contrats Sécurisés" style="width:36px;height:36px;object-fit:contain">
                        <?php else: ?>
                            <i class="bi bi-file-earmark-text" style="font-size:28px;color:#198754"></i>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <h6 class="mb-1" style="font-weight:600">Contrats Sécurisés</h6>
                    <p class="mb-0 text-muted small">Bail légal et reçu garanti.</p>
                </div>
            </div>

            <div class="col-md-4 info-col d-flex align-items-center">
                <div class="me-3">
                    <div class="info-icon">
                        <?php if($icon3 !== ''): ?>
                            <img src="<?php echo $icon3; ?>" alt="Paiement Sûr" style="width:36px;height:36px;object-fit:contain">
                        <?php else: ?>
                            <i class="bi bi-wallet2" style="font-size:28px;color:#198754"></i>
                        <?php endif; ?>
                    </div>
                </div>
                <div>
                    <h6 class="mb-1" style="font-weight:600">Paiement Sûr</h6>
                    <p class="mb-0 text-muted small">Payez en toute tranquillité.</p>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Section: Trouvez votre logement idéal -->
<section class="py-5 bg-light">
    <div class="container">
        <h3 class="mb-4">Trouvez votre logement idéal</h3>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="<?php echo $base_url; ?>/assets/images/studio-cocody.jpg" class="card-img-top" alt="Studio à Cocody">
                    <div class="card-body">
                        <h5 class="card-title">Studio à Cocody</h5>
                        <p class="text-muted mb-2">750 000 FCFA / mois</p>
                        <p class="card-text text-secondary">Charmant studio rénové, proche commodités.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="<?php echo $base_url; ?>/assets/images/appartement-yopougon.jpg" class="card-img-top" alt="Appartement 3 pièces">
                    <div class="card-body">
                        <h5 class="card-title">Appartement 3 Pièces à Yopougon</h5>
                        <p class="text-muted mb-2">250 000 FCFA / mois</p>
                        <p class="card-text text-secondary">Spacieux T3, quartier calme et sécurisé.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm h-100">
                    <img src="<?php echo $base_url; ?>/assets/images/villa-riviera.jpg" class="card-img-top" alt="Villa 4 pièces">
                    <div class="card-body">
                        <h5 class="card-title">Villa 4 Pièces à Riviera</h5>
                        <p class="text-muted mb-2">500 000 FCFA / mois</p>
                        <p class="card-text text-secondary">Villa moderne avec jardin, idéal famille.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pas de bouton "Voir toutes les offres" selon la demande -->
    </div>
</section>


<!-- Section: Pourquoi choisir Babi Location -->
<section class="py-5">
    <div class="container">
        <h3 class="mb-4 text-center">Pourquoi choisir Babi Location ?</h3>
        <div class="row text-center gy-4">
            <div class="col-md-3">
                <div class="p-3">
                    <i class="bi bi-shield-check" style="font-size:28px;color:#198754"></i>
                    <h6 class="mt-2">Sécurisé &amp; Réglementé</h6>
                    <p class="text-muted small">Des biens certifiés et fiables.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <i class="bi bi-phone" style="font-size:28px;color:#0d6efd"></i>
                    <h6 class="mt-2">Paiement Mobile &amp; Bancaire</h6>
                    <p class="text-muted small">Options de paiement sécurisées.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <i class="bi bi-file-earmark-text" style="font-size:28px;color:#ffc107"></i>
                    <h6 class="mt-2">Contrat Transparent</h6>
                    <p class="text-muted small">Conditions claires et documentées.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3">
                    <i class="bi bi-headset" style="font-size:28px;color:#6f42c1"></i>
                    <h6 class="mt-2">Support Réactif</h6>
                    <p class="text-muted small">Assistance rapide et efficace.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section: Propriétaire ou Locataire - fond image avec overlay -->
<section class="py-5 position-relative text-white" style="background: url('<?php echo $base_url; ?>/assets/images/playa.jpg') center/cover no-repeat;">
    <div style="position:absolute;inset:0;background:rgba(11,39,64,0.55);"></div>
    <div class="container text-center" style="position:relative;z-index:2">
        <h4 class="text-white">Propriétaire ou Locataire ?</h4>
        <p class="text-light mb-4">Rejoignez Babi Location dès maintenant !</p>
        <div class="d-flex justify-content-center gap-3">
            <a class="btn btn-outline-light" href="#">Déposez votre bien</a>
            <a class="btn btn-success" href="#">Trouver un logement</a>
        </div>
    </div>
</section>
