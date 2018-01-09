 <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>  Achour Yassine , El Azami Yassine , El Khalii Nabil , Haddach Lounis 2017/2018
                &#9400  
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script type="text/javascript" src="public/owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.uikit.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) { 
          $(document).ready(function(){
            $('#myTable').DataTable();
        });
           
           $("#owl-demo").owlCarousel({
          slideSpeed : 300,
          autoPlay : true,
          navigation : false,
          pagination : false,
          singleItem:true
           });
           $("#owl-demo2").owlCarousel({
          slideSpeed : 300,
          autoPlay : true,
          navigation : false,
          pagination : true,
          singleItem:true
           });
         });  
          
      </script> 
   </body>
</html>