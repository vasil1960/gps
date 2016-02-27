@extends('gps.layout.master')

@section('content')

      <!--main content start-->

		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i>Списък на физически и юридически лица</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{ URL::to('/') }}">Начало</a></li>
						<li><i class="icon_document_alt"></i>Заявители</li>
						<li><i class="fa fa-files-o"></i>Списък на заявителите</li>
					</ol>
				</div>
			</div>
      <!-- Form validations -->              
      <div class="row">
          <div class="col-lg-12">
              <section class="panel">
                  <header class="panel-heading">
                   
                  </header>
                  <div class="panel-body">
                      <div class="form">
                          <form class="form-validate form-horizontal" id="name_form" method="post" action="/save">
                              <div class="table-responsive">
                                  <table class="table table-hover table-condensed  " id="tblNames" class="display" cellspacing="0" width="100%">
                                      <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Име</th>
                                            <th>Презиме</th>
                                            <th>Фамилия</th>
                                            <th>ЕГН</th>
                                            <th>Град</th>
                                            <th>Община</th>
                                            <th>Област</th>
                                            <th>Пощенски код</th>
                                            <th>Адрес</th>
                                            <th>Телефон</th>
                                            <th>Имейл</th>
                                            <th>Описание</th>
                                            <th>Забележки</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($names as $name)
                                            <tr>
                                                <td>{{ $name->id }}</td>
                                                <td>{{ $name->name }}</td>
                                                <td>{{ $name->surname }}</td>
                                                <td>{{ $name->family }}</td>
                                                <td>{{ $name->egn_eik }}</td>
                                                <td>{{ $name->cityes->PolpulatedPlace }}</td>
                                                <td>{{ $name->cityes->Municipality }}</td>
                                                <td>{{ $name->cityes->Region }}</td>
                                                <td>{{ $name->pcode }}</td>
                                                <td>{{ $name->address }}</td>
                                                <td>{{ $name->phone }}</td>
                                                <td>{{ $name->email }}</td>
                                                <td>{{ $name->description }}</td>
                                                <td>{{ $name->notes }}</td>
                                            </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </form>
                      </div>
                  </div>
              </section>
          </div>
      </div>
      <!-- page end-->
      <!--main content end-->
@endsection
