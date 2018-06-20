<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('AdminTheme.themeAdmin.head')

    <body id="mimin" class="dashboard">

        @include('AdminTheme.themeAdmin.header')

        <div class="container-fluid mimin-wrapper">

            @include('AdminTheme.themeAdmin.menu')


            <!-- start: content -->
            <div id="content">
                <div class="panel">
                    <div class="panel-body">
                        <div class="col-md-6 col-sm-12">
                            <h3 title="Usuario que esta conectado en la aplicación" class="animated fadeInLeft"> Bienvenida:  {{ Auth::user()->name }} </h3>
                        </div>
                        <div class="col-md-6 col-sm-12">      
                            <div class="col-md-6 col-sm-6">
                            </div>                   
                        </div>
                    </div>                    
                </div>

                <div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-8 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-12">
                                    <!-- Acceso al TPV -->
                                    <div class="panel box-v1">
                                        <div class="panel-heading bg-white border-none">
                                            <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                                <h4 class="text-left"></h4>
                                            </div>
                                            
                                            <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                                <h4>
                                                    <span class="icon-user icons icon text-right"></span>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="panel-body text-center">
                                            <a href="tpv" class="btn" >
                                                <h1 title="Accede a la apliación TPV">TPV</h1>
                                            </a>
                                            <p></p>
                                            <p>Acceso directo al TPV</p>
                                            <hr/>
                                        </div>
                                    </div>
                                </div>
                                <!-- Acceso al TPV -->

                            </div>
                            <div class="col-md-12">
                                <div class="panel box-v4">
                                    <div class="panel-heading bg-white border-none">
                                        <h4><span class="icon-notebook icons"></span> Agenda</h4>
                                    </div>
                                    <div class="panel-body padding-0">
                                        <div class="col-md-12 col-xs-12 col-md-12 padding-0 box-v4-alert">
                                            <h2> </h2>
                                            <p> </p>
                                            <b><span class="icon-clock icons"></span> </b>
                                        </div>
                                        <div class="calendar">
                                            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=danigd71%40gmail.com&amp;color=%231B887A&amp;ctz=Europe%2FMadrid" style="border-width:0" width="750" height="600" frameborder="0" scrolling="no"></iframe>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12 padding-0">
                                <div class="panel box-v2">
                                    <div class="panel-heading padding-0">
                                        <img src="asset/img/bg2.jpg" class="box-v2-cover img-responsive"/>
                                        <div class="box-v2-detail">
                                            <img src="asset/img/avatar.jpg" class="img-responsive"/>
                                            <h4>{{ Auth::user()->name }}</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-md-12 padding-0">
                                <!-- Acceso a la página web -->
                                <div class="panel bg-grey">
                                    <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                        <h4 class="text-left"></h4>
                                    </div>
                                    <div class="panel-body text-center text-white">
                                        <hr/>
                                        <a title="Acceso directo a la página web" href="http://localhost:8888/qarmitaWeb/public/" class="btn" >
                                            <span class="animated fadeInUp quote">Acceso Web</span>
                                        </a>
                                        <hr/>
                                        <p></p>
                                        <span class="animated fadeInUp quote">Acceso directo a nuestra</span>
                                        <span class="animated fadeInUp quote">Página Web</span>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Acceso a la página web -->

                            <div class="col-md-12 padding-0">
                                <div class="panel box-v2">
                                    <div class="panel-heading padding-0">
                                        <img src="asset/img/bg1.jpg" class="box-v2-cover img-responsive"/>
                                        <div class="box-v2-detail">
                                            <a title="Acceso a un menú general de administración de los productos de la empresa" href="gestion" class="btn" >
                                                <span class="animated fadeInUp quote">GESTIÓN</span>
                                            </a>
                                            <hr/>
                                            <p> </p>
                                            <span class="animated fadeInUp quote">Administra tus productos</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Acceso a la página web -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: content -->
        </div>

        @include('AdminTheme.themeAdmin.menuMobile')
        <!-- start: Javascript -->
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/jquery.ui.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>


        <!-- plugins -->
        <script src="asset/js/plugins/moment.min.js"></script>
        <script src="asset/js/plugins/fullcalendar.min.js"></script>
        <script src="asset/js/plugins/jquery.nicescroll.js"></script>
        <script src="asset/js/plugins/jquery.vmap.min.js"></script>
        <script src="asset/js/plugins/maps/jquery.vmap.world.js"></script>
        <script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>
        <script src="asset/js/plugins/chart.min.js"></script>


        @include('AdminTheme.themeAdmin.custom')

    </body>
</html>