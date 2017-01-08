                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('name', 'Room Name:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('name', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>



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


                        <hr/>



                        <div class="form-group{{ $errors->has('building_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('building_list', 'Building Name:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('building_list', $buildings, null, ['class' => 'form-control', 'placeholder' => '-- Select Builidng name --']) !!}

                        @if ($errors->has('building_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('building_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>


                        <div class="form-group{{ $errors->has('unit_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('unit_list', 'Unit Number:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('unit_list', $units, null, ['class' => 'form-control', 'placeholder' => '-- Select Builidng name --']) !!}

                        @if ($errors->has('unit_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('unit_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>



                        <div class="form-group{{ $errors->has('floor_list') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('floor_list', 'Floor Number:')  !!} 
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('floor_list', $floors, null, ['class' => 'form-control', 'placeholder' => '-- Select Builidng name --']) !!}

                        @if ($errors->has('floor_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('floor_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>



                    

                  


                        <hr/>

                   
                        
                        
                       <div class="col-md-3 col-md-offset-4">

                        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary'])  !!}

                         {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
                       </div>
                        
              