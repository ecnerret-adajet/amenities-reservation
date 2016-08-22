                        <div class="form-group{{ $errors->has('no_unit') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('no_unit', 'Unit no:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::number('no_unit', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('no_unit'))
                        <span class="help-block">
                        <strong>{{ $errors->first('no_unit') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                    

                        <div class="form-group{{ $errors->has('floor_num') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('floor_num', 'Floor Number:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::number('floor_num', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('floor_num'))
                        <span class="help-block">
                        <strong>{{ $errors->first('floor_num') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                  

                         <div class="form-group{{ $errors->has('building_num') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('building_num', 'Building Name:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::number('building_num', 'null',  ['class' => 'form-control']) !!}     

                        @if ($errors->has('building_num'))
                        <span class="help-block">
                        <strong>{{ $errors->first('building_num') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                        <hr/>

                        <div class="form-group{{ $errors->has('owner_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('owner_list', 'Assign Owner:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('owner_list[]', $owners, null, ['class' => 'form-control', 'placeholder' => '-- Select an Owner --']) !!}

                        @if ($errors->has('owner_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('owner_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>
                        
                        
                       <div class="col-md-3 col-md-offset-4">

                        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary'])  !!}

                         {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
                       </div>
                        
              