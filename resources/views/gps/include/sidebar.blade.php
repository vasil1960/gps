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
            <li class="">
                <a class="" href="{{ URL::to('/') }}">
                    <i class="icon_document_alt"></i>
                    <span>Нещо си ...</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Заявители</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ URL::to('show_names') }}">Списък на заявители</a></li>
                    <li><a class="" href="{{ URL::to('add_names', 1) }}">Ново физ. лице</a></li>
                    <li><a class="" href="{{ URL::to('add_names', 2) }}">Ново юрид. лице</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>МПС-та</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ URL::to('/') }}">Списък на МПС-та</a></li>
                    <li><a class="" href="{{ URL::to('/') }}">Ново МПС (ф.л.)</a></li>
                    <li><a class="" href="{{ URL::to('/') }}">Ново МПС (ю.л.)</a></li>
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
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>112</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ URL::to('/signali') }}">Сигнали</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
