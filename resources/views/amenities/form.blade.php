                        <div class="form-group">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('reservation_list', 'Amenities:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('reservation_list[]',  $reservations, null,  ['class' => 'form-control', 'placeholder' => '---Select amenities---']) !!}     

                        @if ($errors->has('reservation_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('reservation_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('owner_list', 'Owner:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::select('owner_list[]',  $owners, null,  ['class' => 'form-control', 'placeholder' => '--Select Owner--']) !!}     

                        @if ($errors->has('owner_list'))
                        <span class="help-block">
                        <strong>{{ $errors->first('owner_list') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>


                         <div class="form-group">
                         <label class="col-md-4 control-label"> 
                         {!! Form::label('date_apply', 'Date:')  !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::input('date', 'date_apply', $amenity->date_apply, ['class' => 'form-control']) !!}         
                         </div>
                         </div>


                        <div class="form-group{{ $errors->has('building_name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('building_name', 'Building Name:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('building_name', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('building_name'))
                        <span class="help-block">
                        <strong>{{ $errors->first('building_name') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>


                        <div class="form-group{{ $errors->has('unit_no') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label"> 
                        {!! Form::label('unit_no', 'Unit Number:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::number('unit_no', null,  ['class' => 'form-control']) !!}     

                        @if ($errors->has('unit_no'))
                        <span class="help-block">
                        <strong>{{ $errors->first('unit_no') }}</strong>
                        </span>
                        @endif
                        </div>
                        </div>



                        <div class="form-group{{ $errors->has('conforme')}}">
                        <label class="col-md-4 control-label">
                        {!! Form::label('conforme','Conforme')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('conforme',null,['class' => 'form-control'])!!}
                        </div>
                        </div>


                        <div class="form-group">
                         <label class="col-md-4 control-label"> 
                         {!! Form::label('conforme_date', 'Conforme Date:')  !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::input('date', 'conforme_date', $amenity->conforme_date, ['class' => 'form-control']) !!}         
                         </div>
                         </div>


                        <div class="form-group{{ $errors->has('approved_by')}}">
                        <label class="col-md-4 control-label">
                        {!! Form::label('approved_by','Appoved By:')  !!}
                        </label>
                        <div class="col-md-6">
                        {!! Form::text('approved_by',null,['class' => 'form-control'])!!}
                        </div>
                        </div>


                             <div class="form-group">
                         <label class="col-md-4 control-label"> 
                         {!! Form::label('date_approved', 'Approved Date:')  !!}
                        </label>
                        <div class="col-md-6">
                            {!! Form::input('date', 'date_approved', $amenity->date_approved, ['class' => 'form-control']) !!}         
                         </div>
                         </div>


                                <div class="form-group">
                         <label class="col-md-4 control-label"> 
                         {!! Form::label('name_occupants', 'Name of occupants:')  !!}
                        </label>
                        <div class="col-md-6">
                        <div class="input-group">
                        <input type="text" name="name_occupants[]" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-add"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                        </span>
                        </div>
                         </div>
                         </div>


                              <div class="form-group">
                         <label class="col-md-4 control-label"> 
                         {!! Form::label('name_guest', 'Name of guest:')  !!}
                        </label>
                        <div class="col-md-6">
                        <div class="input-group">
                        <input type="text" name="name_guest[]" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-add"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
                        </span>
                        </div>
                         </div>
                         </div>

  





                       
                        
                        
                       <div class="col-md-3 col-md-offset-4">

                        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary'])  !!}

                         {!! Form::reset('Cancel', ['class' => 'btn btn-default']) !!}
                       </div>
                        
              