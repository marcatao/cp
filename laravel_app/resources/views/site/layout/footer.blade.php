<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Colégio Paraíso</h3>


                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    
                     <!--   <h5>Educação Infantil</h5>
                        
                        <p>Rua Dr. Baeta Neves, 333 - Baeta Neves<br>
                         CEP 09751-030 São Bernardo do Campo/SP<br></p>
                        <p><img src="{{asset('img/icones/icone_tel.png')}}"> (11) 4332-8333   
                           <img src="{{asset('img/icones/icone_whatsapp.png')}}" width="16px" height="16px"> (11) 98532-1717 
                        </p>
                        
                        
                        <h5>Ensino Fundamental e Ensino Médio</h5>
                        
                        <p>Rua Amparo, 322 - Baeta Neves<br>
                        CEP 09751-350 São Bernardo do Campo/SP<br></p>
                        <p><img src="{{asset('img/icones/icone_tel.png')}}">(11) 4332-8333
                            <img src="{{asset('img/icones/icone_whatsapp.png')}}" width="16 px" height="16 px">(11) 98905-1842
                        </p>-->
                        <br>
                        <p><img src="{{asset('img/icones/icone_app.png')}}" width="16px" height="16px"> App Colégio Paraíso SBC - SP </p>

                </div>
                <div class="col-md-6">
                    <h5>Parceiros:</h5>
                    <div class="d-flex align-items-right">
                    <div class="parceiro_rodape" style="background:url({{asset('img/parceiros/evolucional_v2.jpg')}}) center center no-repeat #fff; background-size:60% auto"></div>
                    <div class="parceiro_rodape" style="background:url({{asset('img/parceiros/ensino_ip.jpg')}}) center center no-repeat #fff; background-size:60% auto"></div>
                    <div class="parceiro_rodape"  style="background:url({{asset('img/parceiros/netbit.jpg')}}) center center no-repeat #fff; background-size:60% auto"></div>
                    <div class="parceiro_rodape"  style="background:url({{asset('img/parceiros/uno_sistema.jpg')}}) center center no-repeat #fff; background-size:60% auto"></div>
                    </div>

                </div>
            </div>
        </div>
        
        
            <div class="footer-bottom mt-3">
                <div class="container">
                        <p class="text-center">
                                 &copy;<script>document.write(new Date().getFullYear());</script> 
                                 <b>Colégio Paraíso. </b>
                                 Todos direitos reservados  
                                 | <i class="ti-world" aria-hidden="true"></i> <a href="https://netbit.com.br/" target="_blank"> Netbit</a>
                                 | <i class="ti-email" aria-hidden="true"></i> <a href="https://netbit.com.br/webmail/" target="_blank"> Webmail</a>
                            </p>
                </div>    
           </div>



       
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
 -->


 <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
     
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
        </a>
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>-->
      </div>
    </div>
  </div>
 
@include('site.whatsapp')

<!-- JS here -->
    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/animated.headline.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>

    <!-- Nice-select, sticky -->
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    
    <!-- contact js -->
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    
</body>
</html>