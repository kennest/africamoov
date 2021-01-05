@extends('layouts.guest')

@section('content')
 <!--start loader-->
    <div id="preloader">
        <div><img src="{{url('innovative/img/Logo_Africamoov.gif')}}" alt="load"/></div>
    </div>
    <!--loader end-->
    <!--Single portfolio item two-->
<section class="single-items center-block parallax" id="menu1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 center-col">
                <div class="area-heading1 mt-6 wow fadeInRight ctk1">
                    <form id="dev-form" method="post" action="send-devis-africaday.php">
                        <h4 class="text-center alt-font text-white mb-2 font-weight-500">~ Réservation ~</h4>
                        <hr/>
                        <div class="form-group">
                        	<input type="text" class="form-control1" name="name" placeholder="Nom de famille" required />
                        	<input type="text" class="form-control1" name="fname" placeholder="Prénom" required />
                        </div>
                        
                        <div class="form-group">
                        	<input type="email" class="form-control1" name="email" placeholder="Adresse Email" required />
                        	<input type="tel" class="form-control1" name="phone" placeholder="N° Mobile" required />
                        </div>
                        
                        <div class="form-group">
                        	<label>Choisissez votre date de départ
                                <input type="datetime-local" class="form-control2" name="depart" required />
                            </label>
                        </div>
                        
                        <div class="form-group">
                            <select name="afdville" class="custom-select" required>
                               <option value="">Choisissez la ville</option>
                               <option value="Grand Bassam">Grand Bassam</option>
                               <option value="Bingerville">Bingerville</option>
                               <option value="Abidjan">Abidjan</option>
                            </select>
                        </div>
						
                        <hr/>
                          <div class="form-group">
                              <button type="submit" name="submit" class="more1 btn-block">Demandez votre devis <i class="fa fa-paper-plane"></i></button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection