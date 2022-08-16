@extends('font-end.master')
@section('title')
    Post an Ads
@endsection
@section('main-content')
 
    
     
       <div class="row">

        <div class="col-sm-1">
         </div>
        <div class="col-sm-10 card mb-3" style="background: #e7edee;"> 
            <div class="card-header">
                Fill in the details
            </div>
            <div class="card-body " >
                <form class="row g-3">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="row">
                             
                         <div class="my-div col-12 mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="inputEmail4" class="form-label font-weight-bold">Condition</label>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left:0; margin-top: 6px;" type="radio" name="condition" id="used">
                                        <label class="form-check-label" for="used">
                                        Used
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left:0; margin-top: 6px;" type="radio" name="condition" id="new">
                                        <label class="form-check-label" for="new">
                                        New
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        
                        <div class="my-div col-12 mt-3 mb-3">
                            <div class="row">
                                <div class="col-12">
                                    <label for="" class="form-label font-weight-bold">Authenticity</label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left:0; margin-top: 6px;" type="radio" name="authenticity" id="original">
                                        <label class="form-check-label" for="original">
                                            Original
                                        </label>
                                        </div>
                                </div>
                                    
                                <div class="col-sm-6">
                                    <div class="form-check">
                                        <input class="form-check-input" style="margin-left:0; margin-top: 6px;" type="radio" name="authenticity" id="refurbished">
                                        <label class="form-check-label" for="refurbished">
                                            Refurbished
                                        </label>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="" class="form-label font-weight-bold">Category</label>
                        </div>
                        <div class="col-12 mb-3"> 
                            <select class="form-control select2">
                                <option>Select</option> 
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option> 
                            </select>
                        </div> 
                    
                             
                        <div class="col-12 mt-3">
                            <label for="" class="form-label font-weight-bold">Brand</label>
                        </div>
                        <div class="col-12 mb-3"> 
                            <select class="form-control select2">
                                <option>Select</option> 
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option> 
                            </select>
                        </div>
                        
                         
                             
                        <div class="col-12 mt-3 ">
                            <label for="" class="form-label font-weight-bold">Model</label>
                        </div>
                        <div class="col-12 mb-3"> 
                            <select class="form-control select2">
                                <option>Select</option> 
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option> 
                            </select>
                        </div>
                        
                         
                             
                        <div class="col-12 mt-3 ">
                            <label for="" class="form-label font-weight-bold">Edition (optional)</label>
                        </div>
                        <div class="col-12 mb-3"> 
                             <input type="text" name="" class="form-control" id="">
                        </div>  
                        
                        

                        <div class="col-12 mt-3 ">
                            <label for="" class="form-label font-weight-bold">Features (optional)</label>
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="bluetooth" value="bluetooth" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="bluetooth">Bluetooth</label>
                            </div> 
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="camera" value="camera" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="camera">Camera</label>
                            </div> 
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="dual-camera" value="dual-camera" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="dual-camera">Dual-Lens Camera</label>
                            </div> 
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="dual-sim" value="dual-sim" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="dual-sim">Dual SIM</label>
                            </div> 
                        </div>
                        
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="extra-memory" value="extra-memory" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="extra-memory">Expandable Memory</label>
                            </div> 
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="fingerprint" value="fingerprint" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="fingerprint">Fingerprint</label>
                            </div> 
                        </div> 
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="gps" value="gps" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="gps">GPS</label>
                            </div> 
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="gps" value="physicalKeyboard" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="physicalKeyboard">Physical keyboard</label>
                            </div> 
                        </div>
                         
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="motionSensors" value="motionSensors" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="motionSensors">Motion Sensors</label>
                            </div> 
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="3g" value="3g" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="3g">3G</label>
                            </div> 
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="4g" value="4g" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="4g">4G</label>
                            </div> 
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="5g" value="5g" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="5g">5G</label>
                            </div> 
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="gsm" value="gsm" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="gsm">GSM</label>
                            </div> 
                        </div>
                        <div class="col-sm-6"> 
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="checkbox" id="touchScreen" value="touchScreen" style="margin-left: 0; margin-top: 6px;" >
                                <label class="form-check-label" for="touchScreen">Touch screen</label>
                            </div> 
                        </div>
                         
                         
                        <div class="col-12 mt-3">
                            <label for="" class="form-label font-weight-bold">Description</label>
                        </div>
                        <div class="col-12 mb-3"> 
                            <textarea name="" class="form-control" id="" style="height: 130px"></textarea>
                        </div> 

                        <div class="col-12 mt-3">
                            <label for="" class="form-label font-weight-bold">Price (Tk)</label>
                        </div>
                        <div class="col-12 mb-3"> 
                            <input type="number" name="" class="form-control" max="100000000" id="">
                        </div> 

                        
                        
                        
                    
                             
                            
                             
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>  
                    </div>
                    <div class="col-sm-2"></div>
                    
                   
                 
                   
                    
                     
                   
                  </form>
            </div>
         </div>
        <div class="col-sm-1">
         </div>


       </div>
    
  
@endsection