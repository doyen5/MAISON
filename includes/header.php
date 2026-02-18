<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
            <img src="assets/images/logo.png" height="40" class="me-2">
            <span class="text-success">Babi</span>
            <span class="text-warning">Location</span>
        </a>

        <!-- Toggle mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link active fw-semibold" href="#">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">À Propos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Propriétaires</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Locataires</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>

            </ul>

            <!-- Bouton Connexion -->
            <a href="login.php" class="btn btn-warning px-4 fw-semibold shadow-sm">
                <i class="bi bi-person-circle me-1"></i> Connexion
            </a>

        </div>

    </div>
</nav>

<section class="hero-section text-white d-flex align-items-center"
         style="background: url('assets/images/abidjan.jpg') center/cover no-repeat;
                height: 90vh; margin-top: 75px;">

    <div class="container text-center animate__animated animate__fadeIn">

        <h1 class="display-4 fw-bold mb-3">
            Louez en toute confiance <br>
            à <span class="text-warning">Abidjan</span> et en Côte d’Ivoire
        </h1>

        <p class="lead mb-4">
            Location sécurisée et réglementée pour tous !
        </p>

        <!-- Barre Recherche -->
        <div class="bg-white p-3 rounded-4 shadow-lg">

            <form class="row g-2">

                <!-- Type de bien -->
                <div class="col-md">
                    <select class="form-select">
                        <option selected>Type de bien</option>
                        <option>Studio</option>
                        <option>Chambre salon</option>
                        <option>2 chambres salon</option>
                        <option>3 chambres salon</option>
                    </select>
                </div>

                <!-- Quartier -->
                <div class="col-md">
                    <select class="form-select">
                        <option selected>Zone</option>
                        <option>Abidjan</option>
                    </select>
                </div>

                <!-- Budget -->
                <div class="col-md">
                    <select class="form-select">
                        <option selected>Budget</option>
                        <option>0 - 70 000 FCFA</option>
                        <option>75 000 - 95 000 FCFA</option>
                        <option>100 000 - 200 000 FCFA</option>
                        <option>200 000+ FCFA</option>
                    </select>
                </div>

                <!-- Bouton -->
                <div class="col-md-auto">
                    <button class="btn btn-success px-4 w-100 fw-semibold">
                        <i class="bi bi-search me-1"></i> Rechercher
                    </button>
                </div>

            </form>

        </div>

    </div>

</section>
