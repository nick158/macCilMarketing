                <section id="contact" class="contact-maps-section section bg-blue">
                    <div class="container text-center">
                        <div class="contact-maps-row row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="contact-maps-box text-center" data-animation="fadeIn">
                                    <h2 class="section-heading"><?php echo $contactUs;?></h2>
                                    <p><?php echo $contactDesc;?></p>
                                    <div class="row">
                                        <address class="col-sm-6">
                                            <ul class="fa-ul">
                                                <li><i class="fa-li fa fa-home"></i>Markham, Ontario</li>
                                                <li><i class="fa-li fa fa-envelope"></i>info@maccilmarketing.com</li>
                                                <li><i class="fa-li fa fa-phone"></i>Phone: (416) 875-0828</li>
                                                <li><i class="fa-li fa fa-fax"></i>Fax: (905) 258-0046</li>
                                            </ul>
                                        </address>
                                    </div>
                                    <form name="contact" action="modules/send-email.php" method="post" class="form form-ajax-submit">
                                        <p><strong>Or leave us a message here:</strong></p>
                                        <div class="form-validation alert"></div>
                                        <div class="form-group">
                                            <input type="text" name="contact-name" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="contact-email" class="form-control" placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="contact-subject" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="contact-message" class="form-control" placeholder="Message" rows="5"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-lg btn-block">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>