                              <div class="form-group {{ $errors->first('surname') ? 'has-error' : '' }}">
                                  <label for="surname" class="control-label col-lg-2">Презиме<span class="required">*</span></label>
                                  <div class="col-lg-10">
                                      {!! Form::text('surname',null,['class'=>'form-control']) !!}
                                      {!! $errors->first('surname','<span class=help-block>:message</span>') !!}
                                  </div>
                              </div>
                              <div class="form-group {{ $errors->first('family') ? 'has-error' : '' }}">
                                  <label for="family" class="control-label col-lg-2">Фамилия<span class="required">*</span></label>
                                  <div class="col-lg-10">
                                      {!! Form::text('family',null,['class'=>'form-control']) !!}
                                      {!! $errors->first('family','<span class=help-block>:message</span>') !!}
                                  </div>
                              </div>