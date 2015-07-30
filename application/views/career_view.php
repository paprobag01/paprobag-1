<script type="text/javascript">
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>

<div id="content">
 
       <div class="container">
        <div class="title clearfix">
          <h2>Career @Greenhanle</h2>
        </div>
  <div class="row" style="margin-left: -54px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bounceInLeft animated animation-done bhoechie-tab-container" data-animation="bounceInLeft">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center" style="padding-bottom: 22px;">
                  Why Join?
                </a>
                <a href="#" class="list-group-item text-center" style="padding-bottom: 22px;">
                  Who We Are?
                </a>
                <a href="#" class="list-group-item text-center" style="padding-bottom: 22px;">
                  Hiring Process
                </a>
                <a href="#" class="list-group-item text-center" style="padding-bottom: 22px;">
                  Current Vacancies
                </a>
                <a href="#" class="list-group-item text-center" style="padding-bottom: 22px;">
                  Apply For Job
                </a>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>
                      <h1 class="glyphicon glyphicon-plane" style="font-size:14em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Flight Reservation</h3>
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-road" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Train Reservation</h3>
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-home" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-cutlery" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h1 class="glyphicon glyphicon-credit-card" style="font-size:12em;color:#55518a"></h1>
                      <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                      <h3 style="margin-top: 0;color:#55518a">Credit Card</h3>
                    </center>
                </div>
            </div>
        </div>
  </div>
</div>
      
</div>
                   