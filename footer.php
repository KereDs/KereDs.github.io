<div class="col-md-3">
      <button id="scrolltotop">
            <i class="material-icons">arrow_upward</i>
      </button>
</div>

<footer class="p-3 mt-4 text-muted border-top" style="text-align:center;">
      © 2022 KereDs
</footer>
<script>
      const scrolltotop = document.querySelector("#scrolltotop");
      scrolltotop.addEventListener("click", function() {

            // $("html,").animate({scrollTop:0},"slow");

            window.scrollTo({
                  top: 0,
                  left: 0,
                  behavior: "smooth"
            });
      });
</script>

<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>