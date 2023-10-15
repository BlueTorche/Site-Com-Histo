<style>
    /** ------- NAVBAR --------- **/

    .navbar {
        position: fixed;
        width: 100%;
        z-index: 9;

        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: var(--main-color);
        color: #eee;

        border-bottom: 3px solid var(--derive-main-color);

        padding-left: 1vw;
        padding-right: 5vw;
    }

    .navbar-brand {
        height: 4.5rem;
        margin: .5rem;
        padding: .5rem;
    }
    .navbar-brand:hover {
        background-color : var(--derive-main-color);
        border-radius: 0.5em;
    }

    .navbar-links ul {
        margin-left: 0;
        padding-left: 5vw;
        display: flex;
    }

    .navbar-links li{
        list-style: none;
    }

    .navbar-links li a {
        text-decoration: none;
        color: var(--text-color);
        padding: 1rem;
        display: block;
        font-size: large;
    }

    .navbar-links li:hover{
        background-color: var(--derive-main-color);
        border-radius: 0.5em;
    }

    .navbar-camenbert{
        position:absolute;
        top: 1rem;
        right: 1rem;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 4rem;
        height: 4rem;
        padding: .3rem;
        align-items: center;
    }

    .navbar-camenbert:hover{
        background-color: var(--derive-main-color);
        border-radius: 0.5em;
    }

    .navbar-camenbert .bar {
        height: .5rem;
        width: 90%;
        background-color: var(--text-color);
        border-radius: 10px;
    }

    @media (max-width: 825px) {
        .navbar-camenbert {
            display: flex;
        }

        .navbar-links {
            display: none;
            width: 100%;
        }

        .navbar-links ul {
            flex-direction: column;
            width: 100%;

        }

        .navbar {
            flex-direction: column;
            align-items: flex-start;
        }

        .navbar-links li {
            text-align: center;
        }

        .navbar-brand {
        }

        .navbar-links li a {
            padding: .5rem 1rem;
        }

        .navbar-links.active {
            display: flex;
        }
    }
</style>

<nav class="navbar">
    <div class="navbar-brand ">
        <a href="index.php"><img src="img/Logo Revue reduced.png" style="height:100%;  filter: invert(100%);"></a>
    </div>
    <a href="#" class="navbar-camenbert">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar-links">
        <ul>
            <li><a href ="index.php">Accueil</a></li>
            <!--<li><a href ="apropos.php">À Propos</a></li>-->
            <li><a href ="reservation.php">Réservation</a></li>
            <!--<li><a href ="remerciement.php">Remerciements</a></li>-->
            <li><a href ="contact.php">Contact</a></li>
        </ul>
    </div>
</nav>

<script>
    const toggleButton = document.getElementsByClassName("navbar-camenbert")[0]
    const navbarLinks  = document.getElementsByClassName("navbar-links")[0]

    toggleButton.addEventListener('click', () =>{
        navbarLinks.classList.toggle('active')
    })
</script>