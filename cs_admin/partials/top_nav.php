<?php
echo'
<nav class="navbar navbar-custom sticky-top navbar-expand-md navbar-light"
                style="background-color: #00000000;">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between d-md-none d-block">
                        <button class="btn px-1 py-0 open-btn me-2"><i class="fal fa-stream"></i></button>
                        <a class="navbar-brand fs-4" href="#"><span
                                class="bg-dark rounded px-2 py-0 text-white">CS</span></a>
                    </div>
                    <button class="navbar-toggler p-0 border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fal fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto text-light mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="admin.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bsc(cs)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bca</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bsc(Ds)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Msc(Cs)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">M.Phil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
';
?>