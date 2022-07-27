<nav>

    <div class="container-nav d-flex justify-content-start mx-5">
        <div class="box-logo py-3"><img src="/img/dc-logo.png" alt="" class="logo"></div>
        <ul class="nav align-items-center text-uppercase fw-bold">
            <li class="nav-item" v-for="(link, i) in navLinks" :key="i">
                <a class="nav-link" :href="link.href">{{ link . name }}</a>
            </li>
        </ul>
    </div>

</nav>
