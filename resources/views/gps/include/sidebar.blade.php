<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="">
                <a class="" href="{{ URL::to('/') }}">
                    <i class="icon_house_alt"></i>
                    <span>Начало</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Заявители</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ URL::to('index',1) }}">Физически лица</a></li>
                    <li><a class="" href="{{ URL::to('index',2) }}">Юридически лица</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_desktop"></i>
                    <span>Справки</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="#">Справка 1</a></li>
                    <li><a class="" href="#">Справка 2</a></li>
                    <li><a class="" href="#">Справка 3</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
