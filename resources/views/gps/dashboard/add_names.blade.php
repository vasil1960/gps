@extends('gps.layout.master')

@section('content')

      <!--main content start-->

		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i>
                        @if($rtype == 1)
                            Въвеждане на ново физическо лице
                        @elseif ($rtype == 2) 
                            Въвеждане на ново юридическо лице
                        @endif
                    </h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="{{ URL::to('/') }}">Начало</a></li>
						<li><i class="icon_document_alt"></i>Заявители</li>
						<li><i class="fa fa-files-o"></i>
                            @if($rtype == 1)
                                Въвеждане на ново физическо лице
                            @elseif ($rtype == 2) 
                                Въвеждане на ново юридическо лице
                            @endif
                        </li>
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
                          <form class="form-validate form-horizontal" id="name_form" method="post" action="{{ URL::to('save') }}">

                              @if($rtype == 1)
                                  <input class="form-control" id="rtype" name="rtype" value="1" type="hidden" />
                              @elseif ($rtype == 2)
                                  <input class="form-control" id="rtype" name="rtype" value="2" type="hidden"/>
                              @endif
                              <div class="form-group {{ $errors->first('name') ? 'has-error' : '' }}">
                                  <label for="name" class="control-label col-lg-2">Име <span class="required">*</span></label>
                                  <div class="col-lg-10">
                                      {!! Form::text('name',null,['class'=>'form-control']) !!}
                                      {!! $errors->first('name','<span class=help-block>:message</span>') !!}
                                  </div>
                              </div>
                             @if($rtype == 1) 
                                @include('gps.include.rtype1')
                             @endif   
                              <div class="form-group {{ $errors->first('egn_eik') ? 'has-error' : '' }}">
                                  <label for="egn_eik" class="control-label col-lg-2">ЕГН(ЕИК) <span class="required">*</span></label>
                                  <div class="col-lg-10">
                                      {!! Form::text('egn_eik',null,['class'=>'form-control']) !!}
                                      {!! $errors->first('egn_eik','<span class=help-block>:message</span>') !!}
                                  </div>
                              </div>
                              <div class="form-group {{ $errors->first('city') ? 'has-error' : '' }}">
                                  <label for="city" class="control-label col-lg-2">Населено място <span class="required">*</span></label>
                                  <div class="col-lg-10">
                                      <select class="form-control m-bot15" name="city" id="city"  data-width="100%" >
                                          <span class="help-block">{{ $errors->first('city') }}</span>
                                        <option value=""></option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group {{ $errors->first('pcode') ? 'has-error' : '' }}">
                                  <label for="pcode" class="control-label col-lg-2">Пощенски код <span class="required">*</span></label>
                                  <div class="col-lg-10">
                                      <input class="form-control" id="pcode" name="pcode"/>
                                      <span class="help-block">{{ $errors->first('pcode') }}</span>
                                  </div>
                              </div>
                              <div class="form-group {{ $errors->first('address') ? 'has-error' : '' }}">
                                  <label for="address" class="control-label col-lg-2">Адрес <span class="required">*</span></label>
                                  <div class="col-lg-10">
                                      <input class="form-control" id="address" name="address"  />
                                      <span class="help-block">{{ $errors->first('address') }}</span>
                                  </div>
                              </div>
                              <div class="form-group {{ $errors->first('phone') ? 'has-error' : '' }}">
                                  <label for="phone" class="control-label col-lg-2">Телефон <span class="required">*</span></label>
                                  <div class="col-lg-10">
                                      <input class="form-control" id="phone" name="phone" />
                                      <span class="help-block">{{ $errors->first('phone') }}</span>
                                  </div>
                              </div>
                              <div class="form-group {{ $errors->first('email') ? 'has-error' : '' }}">
                                  <label for="email" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                  <div class="col-lg-10">
                                      <input class="form-control " id="email" type="email" name="email" />
                                      <span class="help-block">{{ $errors->first('email') }}</span>
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
                              <div class="form-group">
                                  <div class="col-lg-offset-2 col-lg-10">
                                      <button class="btn btn-primary" type="submit">Запазвам</button>
                                      <button class="btn btn-default" type="button">Отказвам</button>
                                  </div>
                              </div>
                                  <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                          </form>

                      </div>
                  </div>
              </section>
          </div>
      </div>
      <!-- page end-->
      <!--main content end-->
@endsection
