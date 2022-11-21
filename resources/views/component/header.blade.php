<header>
    <nav class="navbar">
        <div class="logo-container">
            <img class="navbar-logo-menu" src="https://simad.cm/wp-content/uploads/2020/05/logo150x44.png" alt="simad-logo">
        </div>
        <div class="navbar-menu">
            <div class="header-first">
                <!-- <div class="foo-icon">
                    <a href="">
                        <img src="/img/face.png" alt="">
                    </a>
                </div>
                <div class="foo-icon">
                    <a href="">
                        <img src="/img/twit.png" alt="">
                    </a>
                </div>
                <div class="foo-icon">
                    <a href="">
                        <img src="/img/insta.png" alt="">
                    </a>
                </div>
                <div class="foo-icon">
                    <a href="">
                        <img src="/img/link.png" alt="">
                    </a>
                </div> -->
                <div class="call">
                    <img src="/img/phone-call.png" alt="">
                    <h3>658 658 658</h3>
                    <img class="flag-call" src="https://cdn.britannica.com/42/5042-004-7FF4ACCA/Flag-Cameroon.jpg" alt="">
                </div>
                <div class="call">
                    <img src="/img/phone-call.png" alt="">
                    <h3>07 01 32 26 69</h3>
                    <img class="flag-call" src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Flag_of_C%C3%B4te_d%27Ivoire.svg" alt="">
                </div>
            </div>

            <ul class="navbar-menu-bloc">
                <li class="menu-list-typ {{ $pageTitle == 'Accueil' ? 'menu-focus' : ''}}"> <a class="menu-item-link" href="/"> L'entreprise </a> </li>
                <li class="menu-list-typ {{ $pageTitle == 'Engagement' ? 'menu-focus' : ''}}"> <a class="menu-item-link" href="/engagement"> Nos engagements </a> </li>
                <li class="menu-list-typ {{ $pageTitle == 'Marque' ? 'menu-focus' : ''}}"> <a class="menu-item-link" href="/marque"> Nos Marques </a> </li>
                <li class="menu-list-typ"> <a class="menu-item-link" href="/"> Sim Pharma </a> </li>
                <li class="menu-list-typ"> <a class="menu-item-link" href="/"> Industrie et Pros </a> </li>
                <li class="menu-list-typ"> <a class="menu-item-link" href="/"> R&D </a> </li>
                <li class="menu-list-typ"> <a class="menu-item-link" href="/"> Media </a> </li>
                <li class="menu-list-typ"> <a class="menu-item-link" href="/"> Contact </a> </li>
            </ul>
        </div>
    </nav>
    <div class="fil-ariane">
        <ul class="fil-ariane-items">
            @foreach($locationMenu as $itemMenu)
            <li class="fil-ariane-item"> {{$itemMenu}}</li>
            @endforeach
        </ul>
    </div>
</header>