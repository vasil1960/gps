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
<<<<<<< HEAD
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

=======
                              Въвеждане на ново физическо или юридическо лице
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Full Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="fullname" minlength="5" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="email" name="email" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Website</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="url" name="url" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Subject <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="subject" name="subject" minlength="5" type="text" required />
                                          </div>
                                      </div>                                      
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Feedback</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="ccomment" name="comment" required></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Град</label>
                                          <div class="col-lg-10">
                                            <select class="form-control input-lg m-bot15">
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                      
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Advanced Form validations
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                                      <div class="form-group ">
                                          <label for="fullname" class="control-label col-lg-2">Full name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="fullname" name="fullname" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="address" class="control-label col-lg-2">Address <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="address" name="address" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="username" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy <span class="required">*</span></label>
                                          <div class="col-lg-10 col-sm-9">
                                              <input  type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                                          </div>
                                      </div>
>>>>>>> d2e5093baf910f66b7bbfc051a597afebaf3557a
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
<<<<<<< HEAD
                                      <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"  />
                                  </form>
                              </div>

=======
                                  </form>
                              </div>
>>>>>>> d2e5093baf910f66b7bbfc051a597afebaf3557a
                          </div>
                      </section>
                  </div>
              </div>
<<<<<<< HEAD

=======
>>>>>>> d2e5093baf910f66b7bbfc051a597afebaf3557a
              <!-- page end-->
      <!--main content end-->
@endsection
