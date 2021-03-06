@extends('base')

@section('content')
    <section class="p-3">
        <div class="container text-center">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-xl-12">
                   @livewire('banner')
                    <h1>Enter Your Details</h1>
                    <div class="text-small text-muted text-center">* fields are mandatory</div>
                    <div class="text-small text-center">We are collecting detail health data of citizens of Dhule. We are analyzing it periodically and notifying it to health authorities of our city.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-3">
        <div class="container">
          <form class="text-center" id='forme' action="/smallform" method="post">
            @csrf
            @method('POST')
              <div class="" style="min-height: 158px;">
                <div class="p-3 bg-primary-alt">
                    <div class="col-xl-12 col-lg-12 text-center">
                      <div id='change1' >
                        <h2 >Information</h2>
                      </div>
                    
                   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <div id='change2'  class="form-group" >
        <label  for="name title">Enter Your Name *</label>
      <input wire:model='name' type="text" class="form-control" id="name" value="{{old('name')}}" name="name" aria-describedby="Name" placeholder="Name" required>
      @error('name') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      <div id='change3' class="form-group" >
        <label for="name">Enter Your Mobile *</label>
        <div class="input-group ">
          <div class="input-group-prepend">
            <span class="input-group-text">+91</span>
          </div>
          <input wire:model='mobile' type="number" class="form-control" aria-label="mobile" value="{{old('mobile')}}" name="mobile" placeholder="8080808080" required>
        </div>
        @error('mobile') <div class="text-danger">{{ $message }}</div> @enderror
      </div>
      
<div class="form-group">
                            <label id='change11'>Select Blood Group</label>
                            <select wire:ignore class="form-control" wire:model='blood_group' name="blood_group" required>
                                <option  selected>Select Blood Group *</option>
                                <option value="A+" >A+</option>
                                <option value="A-">A-</option>
                                <option value="B+" >B+</option>
                                <option value="B-" >B-</option>
                                <option value="AB+" >AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+" >O+</option>
                                <option value="O-" >O-</option>
                                <option value="dk" >Don't Know</option>
                            </select>
                             @error('blood_group') <div class="text-danger" id='change12'>{{ $message }}</div> @enderror
                            </div>
                            <div class="custom-control custom-checkbox mb-3 text-center">
                <input  type="checkbox" class="custom-control-input" id="customCheck4">
                <label class="custom-control-label" for="customCheck4" id='change13'>Are You Ready To Donate Blood?</label>
            </div>
                            <div class="row" id='change14'>
                                <div class="col-sm-6">
                    <div class="form-group">
                        <label id='change15'>Gender *</label>
                       <select wire:ignore class="form-control" wire:model='gender' name="gender" required>
                                <option selected>Select Gender</option>
                                <option value="male" >Male</option>
                                <option value="female">Female</option>
                                <option value="other" >Other</option>
                                
                            </select>
                             @error('gender') <div class="text-danger" id='change16'>{{ $message }}</div> @enderror
                    </div>
                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                            <label for="age" >Age *</label>
                            <input wire:model='age' type="number" class="form-control" id="age" name='age' {{old('age')}} aria-describedby="age" placeholder="0" required >
                                         @error('age') <div class="text-danger" >{{ $message }}</div> @enderror
                                    </div>
                                </div>

                            </div>
                            
                
               

            </div>
            <div class="form-group text-center" x-data>
                <label id='change19'>Are you experiencing any of the symptoms below(mark all those applicable)</label>
                <select class="form-control "name="symptoms[]" id='symptoms' multiple @click="if($('#symptoms').val().includes('noneoftheabove')){$('#symptoms').val(['noneoftheabove'])};" required>
                    <option value='drycough'>Dry cough</option>
                    <option value='sneezing'>Sneezing</option>
                    <option value='sorethroat'>Sore Throat</option>
                    <option value='weakness'>Weakness</option>
                    <option value='fever'>Fever</option>
                    <option value='difficultyinbreathing'>Difficulty in breathing</option>
                    <option value='drowsiness'>Drowsiness</option>
                    <option value='chestpain'>Persistant pain and pressure in chest</option>
                    <option value='weakness'>Severe Weakness</option>
                    <option value='noneoftheabove' >None Of The Above</option>
                </select>
            </div>
            <div class="form-group text-center" id='change20'>
                <label for="sym2">Symptoms which are not listed above(specify if any)</label>
                <input wire:model='symptoms_details' type="text" class="form-control" id="sym2" aria-describedby="sym2" name='symptoms_details' placeholder="Symptoms" >
                 @error('symptoms_details') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="form-group text-center">
                <label for="trav" id='change22'>Please select your travel and exposure details:</label>
                <select wire:ignore class="form-control" name='exposure[]' required>
                    <option value="1" selected>No contact with anyone with Symptoms</option>
                    <option value="2">History of travel or meeting in affected geographical area in last 14
                        days</option>
                    <option value="3">Close Contact with confirmed COVID in last 14 days</option>
                </select>
            </div>

            <div class="row text-center" x-data>
                <div class="col-lg-6">
                    <div class="form-group" >
                        <label id='change23'>Any Travel History (mark all those applicable)</label>
                        <select class="form-control" multiple name='travel[]' id='travel'  @click="if($('#travel').val().includes('noneoftheabove')){$('#travel').val(['noneoftheabove'])};" required>
                            <option value='1'>International</option>
                            <option value='2'>Interstate</option>
                            <option value='3'>Interdistrict</option>
                            <option value='noneoftheabove' >None Of The Above</option>
                        </select>
                    </div>
                </div> 
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label id='change25'>Are you having any medical condition below(mark all those applicable)</label>
                            <select wire:ignore class="form-control" multiple name='medical_condition[]' id='medica'  @click="if($('#medica').val().includes('noneoftheabove')){$('#medica').val(['noneoftheabove'])};" >            
                                <option value='1'>Diabetes</option>
                                <option value='2'>High Blood Pressure</option>
                                <option value='2'>Kidney Disease</option>
                                <option value='3'>Heart Disease</option>
                                <option value='4'>Lung Disease</option>
                                <option value='5'>Strokes</option>
                                <option value='6'>Reduced Immunity</option>
                                <option value='noneoftheabove' >None Of The Above</option>
                            </select>
                        </div>
                    </div>
                </div>
               
            </div>

      
            <button wire:click.prevent='sumbit' class="btn btn-primary text-center">Save</a>

</div>
        
    </div>
              </form>
               
              </div>
  
                </div>
            
    </section>
@endsection

