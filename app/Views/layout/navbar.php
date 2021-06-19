        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="/Auth/dashboard" class="waves-effect">
                                <i class="icon-accelerator"></i><span class="badge badge-success badge-pill float-right">9+</span> <span> Dashboard </span>
                            </a>
                        </li>

                        <?php if(in_groups('Administrator')) :?>            
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-mail-open"></i><span> Administrator <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="/Cat/users">Users</a></li>
                            </ul>
                        </li>
                        <?php endif; ?>            

            <?php if(in_groups('Administrator') || in_groups('Operator')) :?>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-paper-sheet"></i><span> Master <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                <li><a href="/BidangTest/bidangTest">Bidang Test</a></li>
                                <li><a href="/SubBidangTest/subBidangTest">Sub Bidang Test</a></li>
                                <li><a href="/UnitKerja/unitKerja">Unit Kerja</a></li>
                                <li><a href="/JenisTest/jenisTest">Jenis Test</a></li>
                                <li><a href="/Soal/soal">Soal</a></li>
                            </ul>
                        </li>
            <?php endif; ?>

            <?php if(in_groups('Administrator') || in_groups('Operator')) :?>
                        <li class="menu-title">Menu Ujian</li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-pencil-ruler"></i> <span> Ujian <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                            <ul class="submenu">
                                <li><a href="/RegistrasiUjian/registrasiUjian">Registrasi Ujian</a></li>
                                <li><a href="/Auth/indexUjian">Ujian</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-pencil-ruler"></i> <span> Hasil Ujian <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                            <ul class="submenu">
                                <li><a href="/Ujian/hasilUjianCAT">Hasil Ujian CAT</a></li>
                                <li><a href="/Ujian/hasilUjianCATPlus">Hasil Ujian CAT Plus</a></li>
                            </ul>
                        </li>
            <?php endif; ?>

            <?php if(in_groups('Administrator')) :?>
                        <li class="menu-title">Other</li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Authentikasi <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                            <ul class="submenu">
                                <li><a href="/Cat/createUsers">Registrasi User</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="icon-diamond"></i> <span> Settings <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                            <ul class="submenu">
                                <li><a href="/Config/config">Configurasi Ujian</a></li>
                            </ul>
                        </li>
            <?php endif; ?>

                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->