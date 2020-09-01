<div>
    <div class="page-bar">
        <div class="page-title-breadcrumb">
            <div class=" pull-left">
                <div class="page-title active">Liste des thèmes</div>
            </div>
            <ol class="breadcrumb page-breadcrumb pull-right">
                <li>
                    <i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                        href="index-2.html">Home</a>&nbsp;<i class="fa fa-angle-right">
                    </i>
                </li>
                <li><a class="parent-item" href="#">Thèmes</a>&nbsp;<i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Liste des thèmes</li>
            </ol>
        </div>
    </div>
    <!-- start liste themes -->
    <div class="row">
        <!-- Start Thème Dark -->
            <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                <div class="blogThumb">
                    <div class="thumb-center"><img class="img-responsive" alt="user"
                            src="/assets/asset_principal/img/themes/dark.png"></div>
                    <div class="course-box">
                        @if ($nom_theme_user == 'dark')
                            <button type="button" class="btn btn-danger"><i class="fa fa-check"></i> Thème dark activer</button>
                        @else
                            <button type="button" class="btn btn-primary" wire:click='dark_theme'>Dark Theme</button>
                        @endif
                    </div>
                </div>
            </div>
        <!-- End Thème Dark -->
        <!-- Start Thème Light -->
            <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                <div class="blogThumb">
                    <div class="thumb-center"><img class="img-responsive" alt="user"
                            src="/assets/asset_principal/img/themes/light.png"></div>
                    <div class="course-box">
                        @if ($nom_theme_user == 'light')
                            <button type="button" class="btn btn-danger"><i class="fa fa-check"></i> Thème light activer</button>
                        @else
                            <button type="button" class="btn btn-primary" wire:click='light_theme'>Light Theme</button>
                        @endif
                    </div>
                </div>
            </div>
        <!-- End Thème Light -->    
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12 col-sm-6">
            <div class="blogThumb">
                <div class="thumb-center"><img class="img-responsive" alt="user"
                        src="/assets/asset_principal/img/themes/horizontal.png"></div>
                <div class="course-box">
                    <button type="button" class="btn btn-primary">Horizontal Menu</button>  
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-12 col-sm-6">
            <div class="blogThumb">
                <div class="thumb-center"><img class="img-responsive" alt="user"
                        src="/assets/asset_principal/img/themes/right.png"></div>
                <div class="course-box">
                    <button type="button" class="btn btn-primary">Right Sidebar</button>
                </div>
            </div>
        </div>
    </div>      
    <!-- End themes list -->
</div>
