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
                                  <table class="table table-hover table-condensed  " id="tblSignali" class="display" cellspacing="0" width="100%">
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
                                          @foreach($signals as $signal)
                                            <tr>
                                                <td>{{ $signal->id }}</td>
                                                <td>{{ $signal->signalfrom }}</td>
                                                <td>{{ $signal->identnumber }}</td>
                                                <td>{{ $signal->pod_id }}</td>
                                                <td>{{ $signal->glav_pod }}</td>
                                                <td>{{ $signal->signaldate }}</td>
                                                <td>{{ $signal->name }}</td>
                                                <td>{{ $signal->phone }}</td>
                                                <td>{{ $signal->adress }}</td>
                                                <td>{{ $signal->opisanie }}</td>
                                                <td>{{ $signal->slujitel_id }}</td>
                                                <td>{{ $signal->deistvie }}</td>
                                                <td>{{ $signal->result }}</td>
                                                <td>{{ $signal->proveren }}</td>
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
