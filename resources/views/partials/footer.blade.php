<footer>
    <div class="container">

        <div class="footer-nav">
            <!-- first column -->
            <div class="col">

                <ul>
                    <h4>dc comics</h4>
                    <li>
                        <a href="#">characters</a>
                        <a href="#">comics</a>
                        <a href="#">movies</a>
                        <a href="#">TV</a>
                        <a href="#">games</a>
                        <a href="#">video</a>
                        <a href="#">news</a>
                    </li>
                </ul>

                <ul>
                    <h4>shop</h4>
                    <li>
                        <a href="#">shop DC</a>
                        <a href="#">shop DC collectibles</a>
                    </li>
                </ul>

            </div>
            <!-- second column -->
            <div class="col">
                <ul>
                    <h4>dc</h4>
                    <li>
                        <a href="#">terms of use</a>
                        <a href="#">privacy policy</a>
                        <a href="#">ad choices</a>
                        <a href="#">advertising</a>
                        <a href="#">jobs</a>
                        <a href="#">subscriptions</a>
                        <a href="#">talent workship</a>
                        <a href="#">CSPC certificates</a>
                        <a href="#">ratings</a>
                        <a href="#">shop help</a>
                        <a href="#">contact us</a>
                    </li>
                </ul>
            </div>
            <!-- third column -->
            <div class="col">
                <ul>
                    <h4>sites</h4>
                    <li>
                        <a href="#">DC</a>
                        <a href="#">MAD magazine</a>
                        <a href="#">DC kids</a>
                        <a href="#">DC universe</a>
                        <a href="#">DC power visa</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="logo-container">
            <img src="../assets/img/dc-logo-bg.png" alt="">
        </div>

    </div>
</footer>

<div class="social-menu">
    <div class="container">

        <div class="sign-up-container">
            <h4>sign-up now!</h4>
        </div>

        <div class="social-container">
            <h3>follow us</h3>
            <ul>
                <li v-for="(item, index) in menuSocial" :key="index">
                    {{-- <a href="item.href"><img :src="item.src" :alt="item.label"></a> --}}
                    social
                </li>
            </ul>
        </div>
    </div>
</div>

