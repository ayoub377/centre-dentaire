<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Gestion Centre Dentaire</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/Patients">Patients</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/apropos">A Propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="/taches">Tâches</a>
            </li>
            <!-- PROFILE DROPDOWN - scrolling off the page to the right -->

        </ul>
    </div>
</nav>

<script>
    $(document).ready(function() {
        $('.navbar-toggler').click(function() {

             let elem=$(this).attr("aria-expanded");
              if(elem === "false")
              {
                  $('#navbarSupportedContent').show();
                  $(this).attr("aria-expanded","true");
              }
              else{
                  $(this).attr("aria-expanded","false");
                  $('#navbarSupportedContent').hide();

              }
        });

    });


</script>
