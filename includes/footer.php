<!-- Footer -->
<footer class="py-3 bg-dark">
      <div class="container">
        <p class="text-center text-white">
          <a style="color:white" href="https://github.com/harshitbansal373"><i class="fab fa-github fa-2x mr-3"></i></a>
          <a style="color:white" href="https://www.linkedin.com/in/harshit-bansal"><i class="fab fa-linkedin fa-2x mr-3"></i></a>
          <a style="color:white" href="https://www.instagram.com/harshitbansal981"><i class="fab fa-instagram fa-2x mr-3"></i></a>
          <a style="color:white" href="https://www.facebook.com/harshit.bansal.7505"><i class="fab fa-facebook fa-2x mr-3"></i></a>
          <br><br>&copy; <?php echo date("Y");?> |
          Design By <a href="https://github.com/harshitbansal373" style="color:yellow">Harshit Bansal</a>
        </p>
      </div>
      <!-- /.container -->
</footer>    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="js/script.js"></script>

    <!-- footer manage -->
    <script>
      $(document).ready(function(){
          if($('body').height() < $(window).height()*0.8){
            $('footer').css({
              "position": "fixed", "width": "100%", "bottom": "0"
            })
          }
      })
    </script>
    
  </body>
</html>