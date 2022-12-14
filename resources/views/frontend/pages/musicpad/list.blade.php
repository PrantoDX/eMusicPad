@extends('frontend.master')

@section('contents')


@foreach ($musicpad as $data )
    


<div class="container mt-4">
    <div class="card p-3">
        <div class="row">
            <div class="col-md-4">
                <div class="position-relative snipimage">
                    <img src="{{ url('/uploads/'.$data->image) }}" class="rounded img-fluid w-100 img-responsive">
                    {{-- <span class="position-absolute user-timing">1 min</span> --}}
                </div>
            </div>
            <div class="col-md-8">
                <div class="mt-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-1">{{ $data->name }} </h5>
                    <span><a href="{{route('musicpads.singleview',$data->id) }}"  class="btn btn-danger">View Now</a></span>
                    
                 
                  </div>
                  
                
                  {{-- <div class="d-flex justify-content-md-start justify-content-between views-content mt-2">
                      <div class="d-flex flex-row align-items-center">
                          <i class="fa fa-eye"></i>
                          <span class="ms-1 views">453674</span>
                          
                      </div>
                      
                      <div class="d-flex flex-row align-items-center ms-2">
                          <i class="fa fa-heart"></i>
                          <span class="ms-1 views">4565</span>
                        
                          
                      </div>
                      
                      
                      
                  </div> --}}
                  
                  
                  <div class="d-flex flex-row mt-3">
                      
                      {{-- <img src=" {{ url('/uploads/'.$data->image) }} " width="50" class="rounded-circle"> --}}
                      <div class="ms-2 d-flex flex-column">
                         <div class="d-flex flex-row align-items-center">
                              <h6>{{ $data->location }}</h6>
                          {{-- <span class="dots"></span> --}}
                         </div>
                         <span class="days-ago">{{ $data->phone }}</span>
                    
                        
                      </div>
                      
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-1"></h5>
                    <h3 class="text-danger">BDT {{ $data->price }}</h3>
                    
                 
                  </div>
                
                
                
            </div>
            
        </div>
        
        
    </div>
    
     
</div>
@endforeach
    
@endsection