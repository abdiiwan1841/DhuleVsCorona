
<div class="row justify-content-center">
          <div class="col-12 text-center">
            @include('component.formalert')
            @livewire('bored')
            
          </div>
          <div class="col-lg-12">
            <div class="card card-body" style="border:0px solid"> 
                  <div class="d-flex justify-content-center">
                    <div class="h3 justify-content-center" style="margin:0px;">India Covid-19 Tracker</div><br>
                  </div>
                  <div class='flex-grow-1 d-flex justify-content-center'>
                      <div class="text-sm">Last Updated {{$last_updated}}</div>
                  </div>
                    <div class="row text-center mx-1">
                        <div class="col-6 col-lg-3 ">
    <div class="card"  style="margin-top:20px;">
      <div class="card-body text-danger"  style="margin-bottom:0rem;">
        <h5 class="card-title text-danger" style="margin-bottom:1rem;">Confirmed</h5>
      <p class="card-title" style="margin-bottom:0rem;"> <strong>{{$stats['statewise'][0]['confirmed']}}</strong></p>
      </div>
    </div>
  
 
                        </div>
                        <div class="col-6 col-lg-3 ">
    <div class="card"  style="margin-top:20px;">
      <div class="card-body text-primary"  style="margin-bottom:0rem;">
        <h5 class="card-title text-primary" style="margin-bottom:1rem;">Active</h5>
        <p class="card-title" style="margin-bottom:0rem;"> <strong>{{$stats['statewise'][0]['active']}}</strong></p>
      </div>
    </div>
  
 
                        </div>
                        <div class="col-6 col-lg-3 ">
    <div class="card"  style="margin-top:20px;">
      <div class="card-body text-success"  style="margin-bottom:0rem;">
        <h5 class="card-title text-success" style="margin-bottom:1rem;">Recovered</h5>
        <p class="card-title" style="margin-bottom:0rem;"> <strong>{{$stats['statewise'][0]['recovered']}}</strong></p>
      </div>
    </div>
  
 
                        </div>
                        <div class="col-6 col-lg-3 ">
    <div class="card"  style="margin-top:20px;">
      <div class="card-body text-muted"  style="margin-bottom:0rem;">
        <h5 class="card-title text-muted" style="margin-bottom:1rem;">Death</h5>
        <p class="card-title" style="margin-bottom:0rem;"> <strong>{{$stats['statewise'][0]['deaths']}}</strong></p>
      </div>
    </div>
  
 
                        </div>
                        
                    </div>
                  </div>
                  
</div>
</div>

          
        