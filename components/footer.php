<footer>
  <div class="container-fluid footer">
  <div class="col-md-6">
  <p>Integra Pymes - Sociedad de Garantia Reciproca</p>
  <p><img class="contact-icons" src="img/telephone.svg" alt="Telephone">+54 11 5272-1960/1961/1962</p>
  <p>Av. Cordoba 838 - Piso 5º "9" - C1054AAU - CABA, Argentina.</p>
  </div>
  <div class="col-md-6">
    <a class="twitter" href="https://twitter.com/integrapymessgr"><img src="img/twitter.svg" alt=""></a>
  </div>
  </div>
</footer>

<!-- BOOTSTRAP JavaScript -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<!-- OWL CAROUSEL -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.1/owl.carousel.js" integrity="sha256-LRKJzVmYw/2IEK03O4hgo5giMSxZ0UEDbl1wbGyNJyQ=" crossorigin="anonymous"></script>
<script>
$('.owl-carousel2').owlCarousel({
autoPlay: true,
loop:true,
margin:0,
nav:false,
responsive:{
0:{
items:1
},
600:{
items:3
},
1000:{
items:10
}
}
})
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZVVz4zzvjHCoLoPiqPFZP1f377-z7aAs&callback=initMap">
</script>
<script>
  // Initialize and add the map
  function initMap() {
    // The location of Uluru
    var uluru = {lat: -34.599073, lng: -58.378897};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 15, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  }
      </script>
      <!--Load the API from the specified URL
      * The async attribute allows the browser to render the page while the API loads
      * The key parameter will contain your own API key (which is not needed for this tutorial)
      * The callback parameter executes the initMap() function
      -->


</body>
</html>
