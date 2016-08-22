                           <div class="form-group">
                            <div class="col-md-offset-3 col-md-7">                                
                            <input name="avatar" type="file" class="filestyle" data-size="sm" data-buttonName="btn-primary" data-buttonBefore="true">
                            </div>
                        </div> 


                         <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('first_name', 'First Name:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('first_name', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('first_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>


                        <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('middle_name', 'Middle Name:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('middle_name', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('middle_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('middle_name') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('last_name', 'Last Name:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('last_name', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('last_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                    

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('age', 'Age:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::number('age', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('age'))
                        <span class="help-block">
                        <strong>{{ $errors->first('age') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>


                         <div class="form-group">
                         <label class="col-md-4 control-label"> 
                         {!! Form::label('birthday', 'Birth Date:')  !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::input('date', 'birthday', $owner->birthday, ['class' => 'form-control']) !!}         
                         </div>
                         </div>



                        <div class="form-group{{ $errors->has('phone_num') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('phone_num', 'Phone number:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::number('phone_num', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('phone_num'))
                        <span class="help-block">
                        <strong>{{ $errors->first('phone_num') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>


                           <div class="form-group{{ $errors->has('telephone_num') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('telephone_num', 'Telephone number:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::number('telephone_num', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('telephone_num'))
                        <span class="help-block">
                        <strong>{{ $errors->first('telephone_num') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                       


                        <hr/>


                        <div class="form-group">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('tenant_list', 'Add Tenant:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('tenant_list',  $tenants, null,  ['class' => 'form-control', 'placeholder' => 'Select a Tenant']) !!}     

                        @if ($errors->has('tenant_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('tenant_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>


                        
                        
                       <div class="col-md-3 col-md-offset-4">

                        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary'])  !!}

                         {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
                       </div>
                        
              