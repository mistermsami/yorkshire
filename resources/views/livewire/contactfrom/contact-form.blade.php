<div>
    <form action="forms/contact.php" method="post" class="php-email-form">
        <div class="row gy-4">

            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <div class="text-center"><button class="btn btn-primary mt-3" type="submit"
                        style="border-radius: 5px">Send message
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </form>
</div>
