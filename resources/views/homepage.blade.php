@extends('layouts.home')

@section('content')

    <section class="container-fluid  text-white text-center">

    <div class="container-fluid">
        <div class="col">
            <!-- Set up your HTML -->
            <div id="owl-demo" class="owl-carousel owl-theme owl-loaded">
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal1" style="background-image: url(../images/banner1.png);">
                	<div class="hvrbox-layer_top">
                		<div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                	</div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal2" style="background-image: url(../images/banner2.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal3" style="background-image: url(../images/banner3.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal4" style="background-image: url(../images/banner4.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal5" style="background-image: url(../images/banner5.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal6" style="background-image: url(../images/banner6.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal7" style="background-image: url(../images/banner7.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal8" style="background-image: url(../images/banner8.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal9" style="background-image: url(../images/banner9.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal10" style="background-image: url(../images/banner10.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal11" style="background-image: url(../images/banner11.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>
                <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal12" style="background-image: url(../images/banner12.png);">
                    <div class="hvrbox-layer_top">
                        <div class="hvrbox-text"><i class="fa fa-info fa-5x"></i> </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

      <div class="row">
        <div class="col mb-5 mt-1">
          <h1 class="text-uppercase mb-3 text-dark">@lang('Discover yourself now!')</h1>
          <hr class="star-dark">
          <h2 class="font-weight-light mb-3 text-dark">@lang('Join our Digital Media Literacy Survey Free!')</h2>
          <p class="font-weight-light mb-3 text-dark">@lang('No matter what your motivation is, Powerful Voices for Kids has ideas to improve digital& media literacy in your classroom.') </p>
        </div>
      </div>

    </section>

 <!-- The Modal1 -->
 <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title font-weight-bold">@lang('Taste Maker')</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <h5 class="text-secondary font-weight-bold" style="font-family: 'Titillium Web', sans-serif;">@lang('Description')</h5>
            <hr>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  <!-- The Modal2 -->
 <div class="modal fade" id="myModal2">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal3 -->
<div class="modal fade" id="myModal3">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal4 -->
<div class="modal fade" id="myModal4">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal5 -->
<div class="modal fade" id="myModal5">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- The Modal6 -->
<div class="modal fade" id="myModal6">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div><!-- The Modal7 -->
<div class="modal fade" id="myModal7">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">

       <!-- Modal Header -->
       <div class="modal-header">
         <h4 class="modal-title">Modal Heading</h4>
         <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>

       <!-- Modal body -->
       <div class="modal-body">
         Modal body..
       </div>

       <!-- Modal footer -->
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>

     </div>
   </div>
 </div>

 <!-- The Modal8 -->
<div class="modal fade" id="myModal8">
 <div class="modal-dialog modal-lg">
   <div class="modal-content">

     <!-- Modal Header -->
     <div class="modal-header">
       <h4 class="modal-title">Modal Heading</h4>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>

     <!-- Modal body -->
     <div class="modal-body">
       Modal body..
     </div>

     <!-- Modal footer -->
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>

   </div>
 </div>
</div>

<!-- The Modal9 -->
<div class="modal fade" id="myModal9">
 <div class="modal-dialog modal-lg">
   <div class="modal-content">

     <!-- Modal Header -->
     <div class="modal-header">
       <h4 class="modal-title">Modal Heading</h4>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>

     <!-- Modal body -->
     <div class="modal-body">
       Modal body..
     </div>

     <!-- Modal footer -->
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>

   </div>
 </div>
</div>

<!-- The Modal13 -->
<div class="modal fade" id="myModal13">
 <div class="modal-dialog modal-lg">
   <div class="modal-content">

     <!-- Modal Header -->
     <div class="modal-header">
       <h4 class="modal-title">Modal Heading</h4>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>

     <!-- Modal body -->
     <div class="modal-body">
       Modal body..
     </div>

     <!-- Modal footer -->
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>

   </div>
 </div>
</div>

<!-- The Modal11 -->
<div class="modal fade" id="myModal11">
 <div class="modal-dialog modal-lg">
   <div class="modal-content">

     <!-- Modal Header -->
     <div class="modal-header">
       <h4 class="modal-title">Modal Heading</h4>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>

     <!-- Modal body -->
     <div class="modal-body">
       Modal body..
     </div>

     <!-- Modal footer -->
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>

   </div>
 </div>
</div>

<!-- The Modal12 -->
<div class="modal fade" id="myModal12">
 <div class="modal-dialog modal-lg">
   <div class="modal-content">

     <!-- Modal Header -->
     <div class="modal-header">
       <h4 class="modal-title">Modal Heading</h4>
       <button type="button" class="close" data-dismiss="modal">&times;</button>
     </div>

     <!-- Modal body -->
     <div class="modal-body">
       Modal body..
     </div>

     <!-- Modal footer -->
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>

   </div>
 </div>
</div>
<script>
$(document).ready(function() {

 var owl = $("#owl-demo");

 owl.owlCarousel({
    items : 1, //10 items above 1000px browser width
    autoplay:true,
    autoplayTimeout:2400,
    autoplayHoverPause:true,
    dots: true,
});

});


</script>
@endsection
