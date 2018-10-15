<?php
include ('includes/header_inner.php');
?>

<div class="container gallery-page">
  <div class="row">
    <div class="col-md-12">
      <div id="kalajeeviimage">
       <img data-original="gallery/main/001.jpg" src="gallery/thumb/001.jpg" alt="Dr.G.V.Kulkarni was awarded Rama Vithala Prashati by Sri Pejawar Swamiji on 24th Jan.2016 at 5th historic Paryaya of Swamiji Udupi">
       <img data-original="gallery/main/002.jpg" src="gallery/thumb/002.jpg" alt="G.V.Kulkarni  Bendre  Saahitya Ratna Award Dr K.S.Sharma gave the award in Mumbai Award)">
       <img data-original="gallery/main/003.jpg" src="gallery/thumb/003.jpg" alt="GVK felicitation Horanada Kannadigara_Sammelana Mumbai">
       <img data-original="gallery/main/004.jpg" src="gallery/thumb/004.jpg" alt="GV Kulkarni and Bannanje Felicitated Ambikatanaya datta Prashasti 2016  Bendre Bhavan">
       <img data-original="gallery/main/005.jpg" src="gallery/thumb/005.jpg" alt="Kaladevi and Dr.G.V.Kulkarni">
       <img data-original="gallery/main/006.jpg" src="gallery/thumb/006.jpg" alt="Kannada Deprtmnt (Daraa Bendre Award)">
     </div>
   </div>
 </div>
</div>



<?php include('includes/footer.php');?>
<!-- Scripts -->
<script>
	$(window).on('load', function() {
		var vieweroptions = {
        // inline: true,
        url: 'data-original',
        ready:  function (e) {
        	console.log(e.type);
        },
        show:  function (e) {
        	console.log(e.type);
        },
        shown:  function (e) {
        	console.log(e.type);
        },
        hide:  function (e) {
        	console.log(e.type);
        },
        hidden:  function (e) {
        	console.log(e.type);
        },
        view:  function (e) {
        	console.log(e.type, e.detail.index);
        },
        viewed:  function (e) {
        	console.log(e.type, e.detail.index);
          // this.viewer.zoomTo(1).rotateTo(180);
        }
      };

      var viewer = new Viewer(document.getElementById('kalajeeviimage'),vieweroptions);
    });
  </script>

</body>
</html>
