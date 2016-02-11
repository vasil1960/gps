@extends('gps.layout.master')

@section('content')

      <!--main content start-->

		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Въвеждане на ново физическо или юридическо лице</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Начало</a></li>
						<li><i class="icon_document_alt"></i>Клиенти</li>
						<li><i class="fa fa-files-o"></i>Въвеждане на ново физическо или юридическо лице</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Въвеждане на ново физическо или юридическо лице {{ $rtype }}
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="name_form" method="post" action="save">
                                      <div class="form-group ">
                                          <label for="name" class="control-label col-lg-2">Име <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="name" name="name" minlength="3" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="surname" class="control-label col-lg-2">Презиме <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="surname" name="surname" minlength="3" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="family" class="control-label col-lg-2">Фамилия <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="family" name="family" minlength="3" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="egn_eik" class="control-label col-lg-2">ЕГН(ЕИК) <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="egn_eik" name="egn_eik" minlength="9" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="city" class="control-label col-lg-2">Град</label>
                                          <div class="col-lg-10">
                                              <select class="form-control input-sm m-bot15" name="city" id="city">
                                                  @foreach($citys as $city)
                                                      <option value="{{ $city->ID }}">{{ $city->PolpulatedPlace }} ( {{ $city->Region }} )</option>
                                                  @endforeach
                                              </select>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="pcode" class="control-label col-lg-2">Пощенски код <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="pcode" name="pcode" minlength="4" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Адрес <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="address" name="address" minlength="3" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="phone" class="control-label col-lg-2">Телефон <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="phone" name="phone" minlength="3" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" type="email" name="email" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="description" class="control-label col-lg-2">Описание </label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control" id="description" name="description" ></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="notes" class="control-label col-lg-2">Забележка </label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control" id="notes" name="notes"></textarea>
                                          </div>
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
