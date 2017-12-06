<div class="jumbotron">
	<div class="container">
		<h1><?=$title?></h1>
	</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <address>
              <h3>POWERCARD GROUP COMPANY LTD</h3>
                Nyerere Road, Kuu Street Behind Tech Building Opposite to NMB Mazengo Dodoma <br>
                PHONE: +255262321011 <br>
                FAX: +255262321011 <br>
                MOBILE: +255739199842/0739199843 <br>
                EMAIL: info@powercard.co.tz
            </address>              
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h3>Our Location</h3>
            <div id="googleMap" style="width:100%;height:400px;"></div>
        </div>
        <div class="col-sm-6">
            <h3>Drop a word</h3>
            <?php echo validation_errors(); ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Full name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone *</label>
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Phone number">
                </div>
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Your message"></textarea>
                </div>  
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Send</button>
                </div>                              
            </form>
        </div>
    </div>
</div>